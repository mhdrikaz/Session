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
<title>ShopPortal - Premium E-commerce Experience</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="./Style/Home.css" rel="stylesheet"/>
</head>
<body class="home-page">
<header class="top-nav sticky-top">
<div class="container-fluid nav-shell d-flex justify-content-between align-items-center">
<div class="d-flex align-items-center gap-2">
<div class="logo-icon">
<svg class="brand-svg" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z" fill="currentColor"></path>
</svg>
</div>
<span class="brand-text">ShopPortal</span>
</div>

<div class="search-wrap d-none d-md-flex flex-grow-1">
<div class="position-relative w-100">
<span class="material-symbols-outlined nav-search-icon">search</span>
<input class="form-control nav-search" placeholder="Search products, brands and categories" type="text"/>
</div>
</div>

<div class="d-flex align-items-center gap-3 gap-lg-4">
<div class="d-none d-lg-flex align-items-center gap-3 top-meta">
<span class="d-flex align-items-center gap-1"><span class="material-symbols-outlined small-icon">person</span><?php echo $_SESSION["email"]; ?></span>
<a href="#">Help Center</a>
</div>
<button class="btn btn-support" type="button">Support</button>
<button class="btn btn-support" type="button" onclick="logout()">Logout</button>
<div class="avatar-wrap">
<img alt="User Avatar" data-alt="User profile avatar photo" src="<?php echo $_SESSION["ProfilePicture"]; ?>"/>
</div>
</div>
</div>
</header>

<main class="container-fluid content-shell py-4 py-lg-5">
<section class="hero-section mb-5">
<img alt="Hero Background" class="hero-image" data-alt="Interior of a modern high-end retail boutique store" src="./Images/hero_background.png"/>
<div class="hero-overlay d-flex align-items-center">
<div class="hero-copy">
<h1>Upgrade Your Lifestyle with ShopPortal</h1>
<p>Discover the latest trends in electronics, fashion, and home decor curated just for you.</p>
<div class="d-flex gap-3 flex-wrap">
<button class="btn btn-shop" type="button">Shop Now</button>
<button class="btn btn-deals" type="button">View Deals</button>
</div>
</div>
</div>
</section>

<section class="mb-5">
<div class="d-flex justify-content-between align-items-center mb-4">
<h2 class="section-title mb-0">Featured Categories</h2>
<a class="browse-link d-flex align-items-center gap-1" href="#">Browse all <span class="material-symbols-outlined arrow-icon">arrow_forward_ios</span></a>
</div>
<div class="row g-4">
<div class="col-12 col-md-4">
<div class="category-card">
<img alt="Electronics" data-alt="Modern electronic gadgets and minimalist workspace" src="./Images/Electronics_category.png"/>
<div class="category-overlay">
<h3>Electronics</h3>
<p>Cutting-edge technology and gadgets</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="category-card">
<img alt="Fashion" data-alt="High quality seasonal fashion clothing display" src="./Images/Fashion_category.png"/>
<div class="category-overlay">
<h3>Fashion</h3>
<p>Latest trends for every season</p>
</div>
</div>
</div>
<div class="col-12 col-md-4">
<div class="category-card">
<img alt="Home Decor" data-alt="Modern minimalist home decor and living room" src="./Images/Home_decor_category.png"/>
<div class="category-overlay">
<h3>Home Decor</h3>
<p>Style your space with elegance</p>
</div>
</div>
</div>
</div>
</section>

<section class="mb-5">
<div class="d-flex justify-content-between align-items-center mb-4">
<h2 class="section-title mb-0">Trending Products</h2>
<div class="d-flex gap-2">
<button class="btn nav-round" type="button"><span class="material-symbols-outlined">chevron_left</span></button>
<button class="btn nav-round" type="button"><span class="material-symbols-outlined">chevron_right</span></button>
</div>
</div>

<div class="row g-4 g-lg-5">
<div class="col-12 col-sm-6 col-lg-3">
<div class="product-card h-100">
<div class="product-image-wrap">
<img alt="Smart Watch" data-alt="Professional minimalist white smart watch" src="./Images/Smart_Watch.png"/>
<button class="wish-btn" type="button"><span class="material-symbols-outlined">favorite</span></button>
</div>
<div class="p-3 p-lg-4">
<div class="product-tag">Electronics</div>
<h3 class="product-name">Smart Watch Series 5</h3>
<div class="d-flex justify-content-between align-items-center mt-3">
<span class="product-price">$299.00</span>
<button class="btn cart-btn" type="button"><span class="material-symbols-outlined">shopping_cart</span></button>
</div>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="product-card h-100">
<div class="product-image-wrap">
<img alt="Red Sneakers" data-alt="Classic red athletic running sneakers" src="./Images/Red_Sneakers.png"/>
<button class="wish-btn" type="button"><span class="material-symbols-outlined">favorite</span></button>
</div>
<div class="p-3 p-lg-4">
<div class="product-tag">Fashion</div>
<h3 class="product-name">Pro Athletics V3</h3>
<div class="d-flex justify-content-between align-items-center mt-3">
<span class="product-price">$145.00</span>
<button class="btn cart-btn" type="button"><span class="material-symbols-outlined">shopping_cart</span></button>
</div>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="product-card h-100">
<div class="product-image-wrap">
<img alt="Leather Bag" data-alt="Handcrafted leather designer messenger bag" src="./Images/Leather_Bag.png"/>
<button class="wish-btn" type="button"><span class="material-symbols-outlined">favorite</span></button>
</div>
<div class="p-3 p-lg-4">
<div class="product-tag">Fashion</div>
<h3 class="product-name">Classic Leather Bag</h3>
<div class="d-flex justify-content-between align-items-center mt-3">
<span class="product-price">$180.00</span>
<button class="btn cart-btn" type="button"><span class="material-symbols-outlined">shopping_cart</span></button>
</div>
</div>
</div>
</div>

<div class="col-12 col-sm-6 col-lg-3">
<div class="product-card h-100">
<div class="product-image-wrap">
<img alt="Headphones" data-alt="Modern studio headphones with sleek design" src="./Images/Headphones.png"/>
<button class="wish-btn" type="button"><span class="material-symbols-outlined">favorite</span></button>
</div>
<div class="p-3 p-lg-4">
<div class="product-tag">Electronics</div>
<h3 class="product-name">Studio Wireless Pro</h3>
<div class="d-flex justify-content-between align-items-center mt-3">
<span class="product-price">$329.00</span>
<button class="btn cart-btn" type="button"><span class="material-symbols-outlined">shopping_cart</span></button>
</div>
</div>
</div>
</div>
</div>
</section>

<section class="newsletter-section mb-5 position-relative overflow-hidden">
<div class="row g-4 align-items-center position-relative z-1">
<div class="col-12 col-md-6">
<h2>Join the Club</h2>
<p>Subscribe for early access to sales and exclusive content.</p>
</div>
<div class="col-12 col-md-6">
<div class="d-flex gap-2 newsletter-form">
<input class="form-control" placeholder="Enter your email" type="email"/>
<button class="btn btn-subscribe" type="button">Subscribe</button>
</div>
</div>
</div>
<div class="newsletter-glow"></div>
</section>
</main>

<footer class="footer-main">
<div class="container-fluid footer-shell">
<div class="row g-4 g-md-5 mb-5">
<div class="col-6 col-md-3">
<h4>Shop</h4>
<ul>
<li><a href="#">New Arrivals</a></li>
<li><a href="#">Best Sellers</a></li>
<li><a href="#">Sale</a></li>
</ul>
</div>
<div class="col-6 col-md-3">
<h4>Support</h4>
<ul>
<li><a href="#">Contact Us</a></li>
<li><a href="#">Shipping Info</a></li>
<li><a href="#">Returns</a></li>
</ul>
</div>
<div class="col-6 col-md-3">
<h4>Company</h4>
<ul>
<li><a href="#">About Us</a></li>
<li><a href="#">Careers</a></li>
<li><a href="#">Sustainability</a></li>
</ul>
</div>
<div class="col-6 col-md-3">
<div class="d-flex align-items-center gap-2 mb-3">
<div class="logo-icon">
<svg class="footer-brand-svg" fill="none" viewbox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
<path d="M44 4H30.6666V17.3334H17.3334V30.6666H4V44H44V4Z" fill="currentColor"></path>
</svg>
</div>
<span class="footer-brand">ShopPortal</span>
</div>
<p class="footer-text">Premium curated essentials for your modern lifestyle.</p>
<div class="d-flex gap-3 social-links">
<a href="#"><span class="material-symbols-outlined">public</span></a>
<a href="#"><span class="material-symbols-outlined">alternate_email</span></a>
<a href="#"><span class="material-symbols-outlined">share</span></a>
</div>
</div>
</div>

<div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-3">
<p class="mb-0">© 2024 ShopPortal Inc. All rights reserved.</p>
<div class="d-flex gap-4 footer-bottom-links">
<a href="#">Privacy Policy</a>
<a href="#">Terms of Service</a>
<a href="#">Accessibility</a>
</div>
</div>
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
