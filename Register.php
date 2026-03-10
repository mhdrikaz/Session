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
<title>Register - ShopPortal</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="./Style/Register.css" rel="stylesheet"/>
</head>
<body class="register-page d-flex flex-column min-vh-100">
<header class="topbar border-bottom">
  <div class="container-fluid topbar-inner d-flex align-items-center justify-content-between">
    <div class="d-flex align-items-center gap-3">
      <div class="brand-mark text-primary-custom">
        <svg class="d-block" fill="none" height="32" viewBox="0 0 48 48" width="32" xmlns="http://www.w3.org/2000/svg">
          <path d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z" fill="currentColor"></path>
        </svg>
      </div>
      <h1 class="brand-title mb-0">ShopPortal</h1>
    </div>
    <a class="help-link" href="#">Help Center</a>
  </div>
</header>

<main class="flex-grow-1 d-flex align-items-center justify-content-center p-4">
  <div class="register-card w-100">
    <div class="mb-4 text-center">
      <h2 class="card-title mb-2">Create Account</h2>
      <p class="card-subtitle mb-0">Join ShopPortal today to start shopping</p>
    </div>

    <form class="d-flex flex-column gap-4" id="registerForm" enctype="multipart/form-data">
      <div class="d-flex flex-column align-items-center gap-3 mb-2">
        <div class="avatar-wrap position-relative">
          <div class="avatar-preview d-flex align-items-center justify-content-center overflow-hidden" id="avatarPreview">
            <span class="material-symbols-outlined">person</span>
          </div>
          <input accept="image/*" id="profile_image" name="profile_image" type="file" hidden/>
          <button class="avatar-add-btn" id="avatarUploadBtn" type="button">
            <span class="material-symbols-outlined">add_a_photo</span>
          </button>
        </div>
        <div class="text-center">
          <button class="upload-link" id="uploadPhotoBtn" type="button">Upload Photo</button>
          <p class="upload-hint mb-0">JPG, PNG or GIF. Max 5MB</p>
        </div>
      </div>

      <div>
        <label class="field-label" for="full_name">Full Name</label>
        <div class="input-wrap">
          <span class="material-symbols-outlined input-icon">person</span>
          <input class="form-control modern-input ps-5" id="full_name" name="full_name" placeholder="Enter your full name" type="text"/>
        </div>
      </div>

      <div>
        <label class="field-label" for="email">Email Address</label>
        <div class="input-wrap">
          <span class="material-symbols-outlined input-icon">mail</span>
          <input class="form-control modern-input ps-5" id="email" name="email" placeholder="name@example.com" required type="email"/>
        </div>
      </div>

      <div>
        <label class="field-label" for="password">Password</label>
        <div class="input-wrap">
          <span class="material-symbols-outlined input-icon">lock</span>
          <input class="form-control modern-input ps-5 pe-5" id="password" name="password" placeholder="Create a password" required type="password"/>
          <button class="visibility-btn" id="togglePassword" type="button">
            <span class="material-symbols-outlined">visibility</span>
          </button>
        </div>
      </div>

      <div>
        <label class="field-label" for="confirm_password">Confirm Password</label>
        <div class="input-wrap">
          <span class="material-symbols-outlined input-icon">lock_reset</span>
          <input class="form-control modern-input ps-5 pe-5" id="confirm_password" name="confirm_password" placeholder="Repeat your password" required type="password"/>
        </div>
      </div>

      <div class="d-flex align-items-start gap-3 mt-1">
        <input class="form-check-input mt-1" id="terms" required type="checkbox"/>
        <label class="terms-text" for="terms">
          By creating an account, you agree to our <a href="#">Terms of Service</a> and <a href="#">Privacy Policy</a>.
        </label>
      </div>

      <button class="btn register-btn w-100" type="submit">Create Account</button>
    </form>

    <div class="bottom-link mt-4 pt-4 text-center">
      <p class="mb-0">
        Already have an account?
        <a href="Login.php">Log in</a>
      </p>
    </div>
  </div>
</main>

<footer class="text-center py-4 px-4 page-footer">
  <p class="mb-0">&copy; 2024 ShopPortal Inc. All rights reserved.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
const registerForm = document.getElementById('registerForm');
const passwordInput = document.getElementById('password');
const togglePasswordBtn = document.getElementById('togglePassword');
const profileImageInput = document.getElementById('profile_image');
const avatarUploadBtn = document.getElementById('avatarUploadBtn');
const uploadPhotoBtn = document.getElementById('uploadPhotoBtn');
const avatarPreview = document.getElementById('avatarPreview');

togglePasswordBtn.addEventListener('click', showPassword);
avatarUploadBtn.addEventListener('click', chooseImage);
uploadPhotoBtn.addEventListener('click', chooseImage);
profileImageInput.addEventListener('change', showImagePreview);
registerForm.addEventListener('submit', registerUser);

function showPassword() {
  if (passwordInput.type === 'password') {
    passwordInput.type = 'text';
  } else {
    passwordInput.type = 'password';
  }
}

function chooseImage() {
  profileImageInput.click();
}

function showImagePreview() {
  const file = profileImageInput.files[0];

  if (!file) {
    return;
  }

  const reader = new FileReader();
  reader.onload = function(e) {
    avatarPreview.innerHTML = '<img src="' + e.target.result + '" alt="Profile preview" style="width: 100%; height: 100%; object-fit: cover;">';
  };
  reader.readAsDataURL(file);
}

function registerUser(event) {
  event.preventDefault();

  const formData = new FormData(registerForm);
  formData.append('action', 'create_user');

  if (formData.get('password') !== formData.get('confirm_password')) {
    Swal.fire({
      title: 'Failed',
      icon: 'error',
      text: 'Passwords do not match'
    });
    return;
  }

  fetch('CrudModule.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    if (data.status === 'Success') {
      Swal.fire({
        title: data.status,
        icon: 'success',
        text: data.message
      });

      registerForm.reset();
      avatarPreview.innerHTML = '<span class="material-symbols-outlined">person</span>';
      window.location.href = 'Login.php';
    } else {
      Swal.fire({
        title: data.status,
        icon: 'error',
        text: data.message
      });
    }
  })
  .catch(error => {
    Swal.fire({
      title: 'Error',
      icon: 'error',
      text: 'An error occurred while processing your request.'
    });
  });
}
</script>
</body>
</html>
