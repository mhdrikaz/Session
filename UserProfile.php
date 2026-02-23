<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("Location: Login.php");
    exit();
}

?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ShopPortal - User Profile</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="Style/UserProfile.css" rel="stylesheet"/>
</head>
<body class="profile-page">
<header class="topbar sticky-top">
<div class="container-fluid page-shell d-flex justify-content-between align-items-center">
<div class="d-flex align-items-center gap-2">
<div class="brand-icon"><span class="material-symbols-outlined">shopping_basket</span></div>
<span class="brand-title">ShopPortal</span>
</div>
<div class="d-flex align-items-center gap-3 gap-sm-4">
<div class="d-none d-sm-flex flex-column align-items-end">
<span class="profile-name">John Doe</span>
<span class="profile-email">user@example.com</span>
</div>
<div class="avatar-sm">
<img alt="User avatar" data-alt="Close up of a professional man smiling" src="<?php echo $_SESSION["ProfilePicture"] ?? "./Images/user_avatar.png"; ?>"/>


?>
</div>
</div>
</div>
</header>

<div class="container-fluid page-shell py-4 py-lg-5">
<div class="row g-4 g-lg-5">
<aside class="col-12 col-lg-3 col-xl-2">
<nav class="side-nav">
<a class="nav-link-item active" href="#"><span class="material-symbols-outlined">person</span><span>Personal Info</span></a>
<a class="nav-link-item" href="#"><span class="material-symbols-outlined">package_2</span><span>My Orders</span></a>
<a class="nav-link-item" href="#"><span class="material-symbols-outlined">location_on</span><span>Addresses</span></a>
<a class="nav-link-item" href="#"><span class="material-symbols-outlined">credit_card</span><span>Payment Methods</span></a>
<a class="nav-link-item" href="#"><span class="material-symbols-outlined">settings</span><span>Settings</span></a>
<div class="nav-sep"></div>
<button class="logout-btn" type="button" onclick="logout()"><span class="material-symbols-outlined">logout</span><span>Logout</span></button>
</nav>
</aside>

<main class="col-12 col-lg-9 col-xl-10 d-grid gap-4 gap-lg-5">
<section class="card panel-card border-0">
<div class="card-header panel-header d-flex justify-content-between align-items-center">
<h2 class="mb-0">Personal Info</h2>
<button class="btn edit-btn" type="button"><span class="material-symbols-outlined">edit</span><span>Edit Profile</span></button>
</div>
<div class="card-body p-4 p-md-5">
<div class="row g-4 g-md-5 align-items-start">
<div class="col-12 col-md-auto">
<div class="avatar-lg-wrap">
<div class="avatar-lg">
<img alt="Profile photo" data-alt="Professional profile picture of John Doe" src="<?php echo $_SESSION["ProfilePicture"] ?? "./Images/user_avatar.png"; ?>"/>
</div>
<button class="btn camera-btn" type="button"><span class="material-symbols-outlined">photo_camera</span></button>
</div>
</div>
<div class="col">
<div class="row g-4 g-md-5">
<div class="col-12 col-sm-6">
<label>Full Name</label>
<p>John Doe</p>
</div>
<div class="col-12 col-sm-6">
<label>Email Address</label>
<p><?php echo $_SESSION["email"] ?? "user@example.com"; ?></p>
</div>
<div class="col-12 col-sm-6">
<label>Phone Number</label>
<p>+1 234 567 890</p>
</div>
<div class="col-12 col-sm-6">
<label>Member Since</label>
<p>October 2023</p>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="card panel-card border-0">
<div class="card-header panel-header d-flex justify-content-between align-items-center">
<h2 class="mb-0">Recent Orders</h2>
<a class="view-all" href="#">View All</a>
</div>
<div class="table-responsive">
<table class="table order-table align-middle mb-0">
<thead>
<tr>
<th>Order ID</th>
<th>Date</th>
<th>Status</th>
<th>Total</th>
<th class="text-end">Action</th>
</tr>
</thead>
<tbody>
<tr>
<td><span class="order-id">#SP-1002</span></td>
<td>Oct 24, 2023</td>
<td><span class="status-pill delivered">Delivered</span></td>
<td class="price-cell">$129.99</td>
<td class="text-end"><button class="btn detail-btn" type="button">View Details</button></td>
</tr>
<tr>
<td><span class="order-id">#SP-1001</span></td>
<td>Oct 15, 2023</td>
<td><span class="status-pill shipped">Shipped</span></td>
<td class="price-cell">$54.20</td>
<td class="text-end"><button class="btn detail-btn" type="button">View Details</button></td>
</tr>
<tr>
<td><span class="order-id">#SP-0998</span></td>
<td>Sep 28, 2023</td>
<td><span class="status-pill cancelled">Cancelled</span></td>
<td class="price-cell">$210.00</td>
<td class="text-end"><button class="btn detail-btn" type="button">View Details</button></td>
</tr>
</tbody>
</table>
</div>
</section>

<section class="help-card d-flex flex-column flex-md-row align-items-start align-items-md-center justify-content-between gap-3">
<div class="d-flex align-items-center gap-3 gap-md-4">
<div class="help-icon"><span class="material-symbols-outlined">support_agent</span></div>
<div>
<h3>Need help with your account?</h3>
<p>Our customer support team is available 24/7.</p>
</div>
</div>
<button class="btn contact-btn" type="button">Contact Us</button>
</section>
</main>
</div>
</div>

<footer class="footer-bar mt-5">
<div class="container-fluid page-shell text-center">
<p>© 2023 ShopPortal Inc. All rights reserved.</p>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    function logout() {
    fetch('authentication_process.php?action=logout')
    .then(response => response.json()) 
    .then(data => {
        if (data.status === 'success') {
            Swal.fire({
                        title: data.status,
                        icon: "success",
                        draggable: true,
                        text: data.message
                        });
            window.location.href = "Login.php";
        }
    })
    .catch(error => {
        Swal.fire({
                        title: "Error",
                        icon: "error",
                        text: "An error occurred while processing your request."
                        });
    });
}


</script>

</body>
</html>