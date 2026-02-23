<?php
session_start();
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("Location: Home.php");
    exit();
}
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Login - Modern Shop Portal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="./Style/Login.css" rel="stylesheet"/>
</head>
<body class="login-page d-flex flex-column min-vh-100">
<header class="header-bar border-bottom">
<div class="container-fluid header-container d-flex align-items-center justify-content-between">
<div class="d-flex align-items-center gap-2 brand-wrap">
<div class="brand-icon d-flex align-items-center justify-content-center">
<span class="material-symbols-outlined">shopping_bag</span>
</div>
<h1 class="brand-title mb-0">ShopPortal</h1>
</div>
<div class="d-flex align-items-center gap-3">
<a class="help-link" href="#">Help Center</a>
<button class="btn support-btn" type="button">Support</button>
</div>
</div>
</header>

<main class="flex-grow-1 d-flex align-items-center justify-content-center p-4">
<div class="login-shell w-100">
<div class="card login-card border-0 overflow-hidden">
<div class="login-hero position-relative overflow-hidden">
<div class="dot-pattern position-absolute top-0 start-0 w-100 h-100" data-alt="Abstract white dot pattern on deep indigo background"></div>
<div class="hero-copy position-absolute bottom-0 start-0 w-100">
<h2 class="text-white fw-bold mb-1">Welcome Back</h2>
<p class="hero-subtitle mb-0">Access your shopping dashboard</p>
</div>
</div>

<div class="card-body login-body p-4 p-md-5">
<form id="loginForm">
<div class="mb-4">
<label class="form-label input-label" for="email">Email Address</label>
<div class="input-icon-wrap">
<span class="material-symbols-outlined input-icon">mail</span>
<input class="form-control modern-input ps-5" id="email" name="email" placeholder="name@example.com" required="" type="email"/>
</div>
</div>

<div class="mb-4">
<div class="d-flex align-items-center justify-content-between mb-2">
<label class="form-label input-label mb-0" for="password">Password</label>
<a class="forgot-link" href="#">Forgot Password?</a>
</div>
<div class="input-icon-wrap password-wrap">
<span class="material-symbols-outlined input-icon">lock</span>
<input class="form-control modern-input ps-5 pe-5" id="password" name="password" placeholder="••••••••" required="" type="password"/>
<button class="visibility-btn" type="button">
<span class="material-symbols-outlined">visibility</span>
</button>
</div>
</div>

<div class="form-check mb-4">
<input class="form-check-input" id="remember" type="checkbox"/>
<label class="form-check-label remember-label" for="remember">Remember me for 30 days</label>
</div>

<button class="btn login-btn w-100" type="submit">Login to Account</button>
</form>
</div>
</div>

<footer class="text-center mt-4 footer-block">
<div class="d-flex justify-content-center flex-wrap gap-3 gap-md-4 mb-3 policy-links">
<a href="#">Privacy Policy</a>
<a href="#">Terms of Service</a>
<a href="#">Cookie Policy</a>
</div>
<p class="copyright mb-0">© 2024 ShopPortal Inc. All rights reserved.</p>
</footer>
</div>
</main>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
const loginForm = document.getElementById('loginForm');
loginForm.addEventListener('submit', loginUser);

function loginUser(event){
    event.preventDefault();

    const formData = new FormData(loginForm);
    formData.append('action', 'login'); 

    fetch('authentication_process.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.status === 'Success') {
            Swal.fire({
                        title: data.status,
                        icon: "success",
                        draggable: true,
                        text: data.message
                        });
            
            window.location.href = "Home.php";
        } else {
            Swal.fire({
                        title: data.status,
                        icon: "error",
                        text: data.message
                        });
        }
    })
    .catch(error => {
        Swal.fire({
                        title: "Error",
                        icon: "error",
                        draggable: true,
                        text: "An error occurred while processing your request."
                        });
    });

}


</script>

</body>
</html>
