<?php

header('Content-Type: application/json');
require_once 'connection.php';

$action = $_POST['action'] ?? $_GET['action'] ?? null;

if ($action !== null) {

    switch($action){
        case 'login':
            if(isset($_POST['email']) && isset($_POST['password'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                login($email, $password);
            } else {
                echo json_encode(['status' => 'Failed', 'message' => 'Invalid email or password']);
                exit();
            }
            break;
        case 'logout':
            logout();
            break;
        default:
            echo json_encode(['status' => 'error', 'message' => 'Invalid Action']);
            break;
    }
} else {
    echo json_encode(['status' => 'error', 'message' => 'Action is required']);
}



function login($Uemail, $Upassword){
    session_start();

    global $conn;

    $email = trim($Uemail);
    if ($email === '' || $Upassword === '') {
        echo json_encode(['status' => 'Failed', 'message' => 'Invalid email or password']);
        exit();
    }

    $sql = "SELECT id, email, password, profile_url FROM users WHERE email = ? LIMIT 1";
    $stmt = $conn->prepare($sql); // False

    if (!$stmt) { // True
        echo json_encode(['status' => 'error', 'message' => 'Database error']);
        exit();
    }

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result(); // True

    if ($result && $result->num_rows === 1) {
        $user = $result->fetch_assoc();
        $isValidPassword = password_verify($Upassword, $user['password']) || $Upassword === $user['password'];

        if ($isValidPassword) {
            $_SESSION["user_id"] = (int) $user['id'];
            $_SESSION["email"] = $user['email'];
            $_SESSION["loggedin"] = true;
            $_SESSION["ProfilePicture"] = !empty($user['profile_url']) ? $user['profile_url'] : "./Images/user_avatar.png";

            echo json_encode(['status' => 'Success', 'message' => 'Login successful!']);
            $stmt->close();
            exit();
        }
    }

    $stmt->close();
    echo json_encode(['status' => 'Failed', 'message' => 'Invalid email or password']);
    exit();
}

function logout(){
    session_start();
    session_unset();
    session_destroy();

    echo json_encode(['status' => 'success', 'message' => 'Logout successful!']);
    exit();
}

?>
