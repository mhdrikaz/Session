<?php

header('Content-Type: application/json');

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
    $email = "Rikazm525@gmail.com";
    $password = "123";

    if($Uemail == $email && $Upassword == $password){
        $_SESSION["email"] = $email;
        $_SESSION["loggedin"] = true;
        $_SESSION["ProfilePicture"] = "./Images/user_avatar.png";
        echo json_encode(['status' => 'Success', 'message' => 'Login successful!']);
        exit();
    } else {
        echo json_encode(['status' => 'Failed', 'message' => 'Invalid email or password']);
        exit();
    } 
}

function logout(){
    session_start();
    session_unset();
    session_destroy();

    echo json_encode(['status' => 'success', 'message' => 'Logout successful!']);
    exit();
}


?>
