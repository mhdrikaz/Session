<?php
header('Content-Type: application/json');
require_once 'connection.php';

$action = $_POST['action'] ?? $_GET['action'] ?? '';

if ($action === '') {
    echo json_encode(['status' => 'error', 'message' => 'Action is required']);
    exit();
}

switch ($action) {
    case 'create_user':
        createUser();
        break;
    case 'get_user':
        getUser();
        break;
    case 'list_users':
        listUsers();
        break;
    case 'update_user':
        updateUser();
        break;
    case 'delete_user':
        deleteUser();
        break;
    default:
        echo json_encode(['status' => 'error', 'message' => 'Invalid action']);
        break;
}

function createUser()
{
    global $conn;

    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $confirmPassword = isset($_POST['confirm_password']) ? $_POST['confirm_password'] : '';
    $profileUrl = null;

    if ($email === '' || $password === '' || $confirmPassword === '') {
        echo json_encode(['status' => 'Failed', 'message' => 'Email and password are required']);
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'Failed', 'message' => 'Invalid email format']);
        exit();
    }

    if ($password !== $confirmPassword) {
        echo json_encode(['status' => 'Failed', 'message' => 'Passwords do not match']);
        exit();
    }

    if (strlen($password) < 6) {
        echo json_encode(['status' => 'Failed', 'message' => 'Password must be at least 6 characters']);
        exit();
    }

    if (isset($_FILES['profile_image']) && $_FILES['profile_image']['error'] !== 4) {
        $fileName = $_FILES['profile_image']['name'];
        $tmpName = $_FILES['profile_image']['tmp_name'];
        $fileSize = $_FILES['profile_image']['size'];
        $fileError = $_FILES['profile_image']['error'];
        $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

        if ($fileError !== 0) {
            echo json_encode(['status' => 'Failed', 'message' => 'Profile image upload failed']);
            exit();
        }

        if ($fileSize > 5 * 1024 * 1024) {
            echo json_encode(['status' => 'Failed', 'message' => 'Profile image must be 5MB or less']);
            exit();
        }

        if ($fileExt !== 'jpg' && $fileExt !== 'jpeg' && $fileExt !== 'png' && $fileExt !== 'gif') {
            echo json_encode(['status' => 'Failed', 'message' => 'Only JPG, PNG or GIF images are allowed']);
            exit();
        }

        if (!is_dir('Uploads/profile')) {
            mkdir('Uploads/profile', 0777, true);
        }

        $newFileName = time() . '_' . rand(1000, 9999) . '.' . $fileExt;
        $targetPath = 'Uploads/profile/' . $newFileName;

        if (move_uploaded_file($tmpName, $targetPath)) {
            $profileUrl = './' . $targetPath;
        } else {
            echo json_encode(['status' => 'Failed', 'message' => 'Unable to save profile image']);
            exit();
        }
    }

    $checkStmt = $conn->prepare('SELECT id FROM users WHERE email = ? LIMIT 1');
    if (!$checkStmt) {
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
        exit();
    }

    $checkStmt->bind_param('s', $email);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult && $checkResult->num_rows > 0) {
        $checkStmt->close();
        echo json_encode(['status' => 'Failed', 'message' => 'Email already exists']);
        exit();
    }
    $checkStmt->close();

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $dbProfileUrl = $profileUrl !== '' ? $profileUrl : null;

    $insertStmt = $conn->prepare('INSERT INTO users (email, password, profile_url) VALUES (?, ?, ?)');
    if (!$insertStmt) {
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
        exit();
    }

    $insertStmt->bind_param('sss', $email, $hashedPassword, $dbProfileUrl);

    if ($insertStmt->execute()) {
        echo json_encode([
            'status' => 'Success',
            'message' => 'Registration successful',
            'user_id' => $insertStmt->insert_id
        ]);
        $insertStmt->close();
        exit();
    }

    $insertStmt->close();
    echo json_encode(['status' => 'error', 'message' => 'Failed to create user']);
    exit();
}

function getUser()
{
    global $conn;

    $id = isset($_GET['id']) ? (int)$_GET['id'] : (int)($_POST['id'] ?? 0);

    if ($id <= 0) {
        echo json_encode(['status' => 'Failed', 'message' => 'Valid user id is required']);
        exit();
    }

    $stmt = $conn->prepare('SELECT id, email, profile_url FROM users WHERE id = ? LIMIT 1');
    if (!$stmt) {
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
        exit();
    }

    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows === 1) {
        echo json_encode(['status' => 'Success', 'data' => $result->fetch_assoc()]);
        $stmt->close();
        exit();
    }

    $stmt->close();
    echo json_encode(['status' => 'Failed', 'message' => 'User not found']);
    exit();
}

function listUsers()
{
    global $conn;

    $sql = 'SELECT id, email, profile_url FROM users ORDER BY id DESC';
    $result = $conn->query($sql);

    if ($result === false) {
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
        exit();
    }

    $users = [];
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    echo json_encode(['status' => 'Success', 'data' => $users]);
    exit();
}

function updateUser()
{
    global $conn;

    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $email = isset($_POST['email']) ? trim($_POST['email']) : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $profileUrl = isset($_POST['profile_url']) ? trim($_POST['profile_url']) : '';

    if ($id <= 0 || $email === '') {
        echo json_encode(['status' => 'Failed', 'message' => 'User id and email are required']);
        exit();
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(['status' => 'Failed', 'message' => 'Invalid email format']);
        exit();
    }

    $duplicateStmt = $conn->prepare('SELECT id FROM users WHERE email = ? AND id <> ? LIMIT 1');
    if (!$duplicateStmt) {
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
        exit();
    }

    $duplicateStmt->bind_param('si', $email, $id);
    $duplicateStmt->execute();
    $duplicateResult = $duplicateStmt->get_result();

    if ($duplicateResult && $duplicateResult->num_rows > 0) {
        $duplicateStmt->close();
        echo json_encode(['status' => 'Failed', 'message' => 'Email already exists']);
        exit();
    }
    $duplicateStmt->close();

    if ($password !== '') {
        if (strlen($password) < 6) {
            echo json_encode(['status' => 'Failed', 'message' => 'Password must be at least 6 characters']);
            exit();
        }

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare('UPDATE users SET email = ?, password = ?, profile_url = ? WHERE id = ?');
        if (!$stmt) {
            echo json_encode(['status' => 'error', 'message' => 'Database error']);
            exit();
        }

        $dbProfileUrl = $profileUrl !== '' ? $profileUrl : null;
        $stmt->bind_param('sssi', $email, $hashedPassword, $dbProfileUrl, $id);
    } else {
        $stmt = $conn->prepare('UPDATE users SET email = ?, profile_url = ? WHERE id = ?');
        if (!$stmt) {
            echo json_encode(['status' => 'error', 'message' => 'Database error']);
            exit();
        }

        $dbProfileUrl = $profileUrl !== '' ? $profileUrl : null;
        $stmt->bind_param('ssi', $email, $dbProfileUrl, $id);
    }

    if ($stmt->execute() && $stmt->affected_rows >= 0) {
        $stmt->close();
        echo json_encode(['status' => 'Success', 'message' => 'User updated successfully']);
        exit();
    }

    $stmt->close();
    echo json_encode(['status' => 'error', 'message' => 'Failed to update user']);
    exit();
}

function deleteUser()
{
    global $conn;

    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

    if ($id <= 0) {
        echo json_encode(['status' => 'Failed', 'message' => 'Valid user id is required']);
        exit();
    }

    $stmt = $conn->prepare('DELETE FROM users WHERE id = ?');
    if (!$stmt) {
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
        exit();
    }

    $stmt->bind_param('i', $id);

    if ($stmt->execute() && $stmt->affected_rows > 0) {
        $stmt->close();
        echo json_encode(['status' => 'Success', 'message' => 'User deleted successfully']);
        exit();
    }

    $stmt->close();
    echo json_encode(['status' => 'Failed', 'message' => 'User not found']);
    exit();
}
?>
