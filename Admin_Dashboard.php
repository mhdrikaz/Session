<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ShopPortal - Admin Dashboard</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100..700,0,0" rel="stylesheet"/>
<link href="Style/Admin_Dashboard.css" rel="stylesheet"/>
</head>
<body>
<div class="dashboard-shell d-flex">
  <aside class="sidebar d-none d-md-flex flex-column">
    <div class="p-4 p-lg-4 d-flex align-items-center gap-3">
      <div class="brand-badge d-flex align-items-center justify-content-center">
        <span class="material-symbols-outlined">shopping_bag</span>
      </div>
      <div>
        <h1 class="brand-name mb-0">ShopPortal</h1>
        <p class="brand-meta mb-0">Admin Console</p>
      </div>
    </div>

    <nav class="flex-grow-1 px-3 py-3 d-flex flex-column gap-1">
      <a class="nav-link-custom active" href="#">
        <span class="material-symbols-outlined">dashboard</span>
        <span>Dashboard</span>
      </a>
      <a class="nav-link-custom" href="#">
        <span class="material-symbols-outlined">inventory_2</span>
        <span>Products</span>
      </a>
      <a class="nav-link-custom" href="#">
        <span class="material-symbols-outlined">group</span>
        <span>Users</span>
      </a>
      <a class="nav-link-custom" href="#">
        <span class="material-symbols-outlined">settings</span>
        <span>Settings</span>
      </a>
    </nav>

    <div class="p-3 border-top" style="border-color: var(--border-soft) !important;">
      <div class="plan-card">
        <p class="plan-tag">PRO PLAN</p>
        <p class="plan-copy">Your trial ends in 4 days.</p>
        <button class="btn-upgrade" type="button">Upgrade Now</button>
      </div>
    </div>
  </aside>

  <main class="main-panel flex-grow-1 d-flex flex-column">
    <header class="topbar d-flex align-items-center justify-content-between gap-3">
      <div class="d-flex align-items-center flex-grow-1" style="max-width: 28rem;">
        <div class="search-wrap">
          <span class="material-symbols-outlined search-icon">search</span>
          <input class="search-input" placeholder="Search orders, customers, or products..." type="text"/>
        </div>
      </div>

      <div class="d-flex align-items-center gap-3 gap-md-4">
        <button class="icon-btn" type="button">
          <span class="material-symbols-outlined">notifications</span>
          <span class="notification-dot"></span>
        </button>
        <div class="divider-vert d-none d-sm-block"></div>
        <div class="d-flex align-items-center gap-3 cursor-pointer">
          <div class="text-end d-none d-sm-block">
            <p class="profile-name mb-0">Alex Rivera</p>
            <p class="profile-role mb-0">Super Admin</p>
          </div>
          <div class="avatar d-flex align-items-center justify-content-center">
            <img alt="Admin Avatar" class="w-100 h-100 object-fit-cover" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAsqpQe4Rt0zHQs3U3sEb_zKh4OLHrIHfd9gYdHtywvhxJ_bytk4rlbd2y1ZWyyxZDxzS_fWq4l1kLzqwIW1ySq5oIkgRp7nsl2Z3BjnE0_uDlqeFsthTAOm9ijPDWhp7ZcNI85d1cTPMQzTqv8o8001Ki2mTibqjyMQkbPVe54krJGKM3cj--gtaE6ddCdQbL2dmMLirT90GLR0j0SVpqXmdz_1WIsKzKKEF-52bCsboTl0Ly23R4MV0qiOJpYY58JKRzCTKAdFGI"/>
          </div>
        </div>
      </div>
    </header>

    <div class="content-wrap">
      <div class="mb-4 mb-lg-5">
        <h2 class="page-title">Dashboard Overview</h2>
        <p class="page-copy mb-0">Real-time insights and analytics for ShopPortal.</p>
      </div>

      <div class="row g-4 mb-4 mb-lg-5">
        <div class="col-12 col-md-4">
          <div class="metric-card h-100">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div class="metric-icon bg-success bg-opacity-10 text-success">
                <span class="material-symbols-outlined">payments</span>
              </div>
              <span class="badge-soft text-success" style="background: #f0fdf4;">+12.5%</span>
            </div>
            <p class="metric-label mb-1">Total Revenue</p>
            <h3 class="metric-value mb-0">$128,430.00</h3>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="metric-card h-100">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div class="metric-icon text-primary" style="background: rgba(26, 34, 127, 0.1);">
                <span class="material-symbols-outlined">person_add</span>
              </div>
              <span class="badge-soft text-primary" style="background: rgba(26, 34, 127, 0.05);">+5.2%</span>
            </div>
            <p class="metric-label mb-1">Active Users</p>
            <h3 class="metric-value mb-0">12,543</h3>
          </div>
        </div>

        <div class="col-12 col-md-4">
          <div class="metric-card h-100">
            <div class="d-flex align-items-center justify-content-between mb-4">
              <div class="metric-icon text-warning" style="background: rgba(249, 115, 22, 0.1);">
                <span class="material-symbols-outlined">shopping_cart</span>
              </div>
              <span class="badge-soft text-danger" style="background: #fef2f2;">-2.1%</span>
            </div>
            <p class="metric-label mb-1">Pending Orders</p>
            <h3 class="metric-value mb-0">45</h3>
          </div>
        </div>
      </div>

      <div class="row g-4 g-xl-5">
        <div class="col-12 col-xl-8">
          <div class="panel-card overflow-hidden h-100">
            <div class="panel-head d-flex align-items-center justify-content-between">
              <h4 class="h5 fw-bold mb-0">Recent Orders</h4>
              <button class="link-action" type="button">View All</button>
            </div>
            <div class="table-responsive">
              <table class="table table-soft mb-0 align-middle">
                <thead>
                  <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Product</th>
                    <th>Amount</th>
                    <th>Status</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="fw-bold">#ORD-7742</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="customer-avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCijuOikp6HSCV4z9RReeskzen0gW47Dcsz7hjzugJ4cSFwQrM61T3c9UbBdl7V1W1tHYeoGb9-8iPYQgU1FZQkqAk5HHkppfGmdm2LZNW2qPOfmJCy1eUQA5MH2uCAt3iej05_WAZkzvQxOFSyz6MPxhMRnCPUZK-VZ9T9rDLppD2QA-RE_Um5cqowgkV1McVC5Vb-Bfdd_I59qrV6vvxw43UkAukh3IFVNxsF9EDUBTAh9qRaXt24MCKTJ84JIQu6-yJ7EumG05c');"></div>
                        <span class="fw-medium">Sarah Jenkins</span>
                      </div>
                    </td>
                    <td class="text-secondary">iPhone 15 Pro</td>
                    <td class="fw-bold">$999.00</td>
                    <td><span class="status-pill" style="background: #dcfce7; color: #15803d;">Delivered</span></td>
                  </tr>
                  <tr>
                    <td class="fw-bold">#ORD-7741</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="customer-avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuC3uenyD6thHyhdNq0YtUOG9n3pC5Whxg6-xDRgrhG05IM9vxBJdPyHNIbTWQMChrsYCb1r1cYA6ypGd81Uq2YLduNG72uK_LGGe4PgC5BNkxgNPGGKHzOpKmWvTbL54JizHwURioK8cYB4OecVEbrNa6R1HF0MzTqR74K7PmRhgF5wpyqzQJ-ABFCr0f80X3mLK-zW6ZJ9BcrnSTwAR6i5q0BkXRWtgBrIO4MRcFfs9MDw3hRQaV3NJYnmYoEPQ6hWstOwgbORa2M');"></div>
                        <span class="fw-medium">Michael Chen</span>
                      </div>
                    </td>
                    <td class="text-secondary">Sony WH-1000XM5</td>
                    <td class="fw-bold">$348.00</td>
                    <td><span class="status-pill" style="background: #ffedd5; color: #c2410c;">Processing</span></td>
                  </tr>
                  <tr>
                    <td class="fw-bold">#ORD-7740</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="customer-avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCBBDZN2ak2g50lQITcYKl0cObLLvsUt2TMPu55rI66exzJwE4jmkbIF1zxt4tJViHyxV7a5f21Ym3jnfvS3hSr56yaTgAmHxSyIOnAaClsKTn35iDxspWJenXVnZW3l3Y1T1kodxsdqc4FPejeTou7icrGYi9CyQPVubMk2Y9Qy-8pdLaUWGE4h1PP4cENZfkCirjJWgIsq0zTwJ58Yf97gONYo2RYc42ULtsO8G1pchCpMvtk7ZsID_dymVM2w6EMuaEDnwvBUmw');"></div>
                        <span class="fw-medium">Elena Rodriguez</span>
                      </div>
                    </td>
                    <td class="text-secondary">MacBook Air M2</td>
                    <td class="fw-bold">$1,199.00</td>
                    <td><span class="status-pill" style="background: #dbeafe; color: #1d4ed8;">Shipped</span></td>
                  </tr>
                  <tr>
                    <td class="fw-bold">#ORD-7739</td>
                    <td>
                      <div class="d-flex align-items-center gap-2">
                        <div class="customer-avatar" style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuAfcDSdUAdFCP8GLDDv7UK55QyBjqNjsNnbShXJfhD3PTfCf9ruHrjhLcGiOfXy7965MaqpXs9Bb4t24k01FndjJmz7uh8NfewzZU0mo4WvppElcDVYt4DQhe_aZoBTeI9kUtCYnVRwZ54_iM8BiZpzZBSX_YgEPIS0cjmJIYWkayk-Qo_v57abgPa3c3tZ1ehYhkHjSG78_Q6KeodseveT6xDse0i_7P48KLFjaSJYlXu4T1dB56g9pN2LpsodcPKBxtZnNFsoVkM');"></div>
                        <span class="fw-medium">David Smith</span>
                      </div>
                    </td>
                    <td class="text-secondary">Logitech MX Master 3</td>
                    <td class="fw-bold">$99.00</td>
                    <td><span class="status-pill" style="background: #fee2e2; color: #b91c1c;">Cancelled</span></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        <div class="col-12 col-xl-4">
          <div class="panel-card panel-body h-100">
            <h4 class="h5 fw-bold mb-4">Top Selling</h4>

            <div class="selling-item d-flex align-items-center gap-3 gap-lg-4">
              <div class="selling-icon d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">smartphone</span>
              </div>
              <div class="flex-grow-1">
                <p class="small fw-bold mb-0">iPhone 15 Pro</p>
                <div class="progress-soft"><div class="progress-soft-bar" style="width: 85%;"></div></div>
              </div>
              <span class="text-secondary small fw-bold">85%</span>
            </div>

            <div class="selling-item d-flex align-items-center gap-3 gap-lg-4">
              <div class="selling-icon d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">laptop_mac</span>
              </div>
              <div class="flex-grow-1">
                <p class="small fw-bold mb-0">MacBook Pro</p>
                <div class="progress-soft"><div class="progress-soft-bar" style="width: 72%;"></div></div>
              </div>
              <span class="text-secondary small fw-bold">72%</span>
            </div>

            <div class="selling-item d-flex align-items-center gap-3 gap-lg-4">
              <div class="selling-icon d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">watch</span>
              </div>
              <div class="flex-grow-1">
                <p class="small fw-bold mb-0">Apple Watch Ultra</p>
                <div class="progress-soft"><div class="progress-soft-bar" style="width: 64%;"></div></div>
              </div>
              <span class="text-secondary small fw-bold">64%</span>
            </div>

            <div class="selling-item d-flex align-items-center gap-3 gap-lg-4">
              <div class="selling-icon d-flex align-items-center justify-content-center">
                <span class="material-symbols-outlined">headphones</span>
              </div>
              <div class="flex-grow-1">
                <p class="small fw-bold mb-0">AirPods Max</p>
                <div class="progress-soft"><div class="progress-soft-bar" style="width: 45%;"></div></div>
              </div>
              <span class="text-secondary small fw-bold">45%</span>
            </div>

            <div class="mt-4 pt-4 border-top" style="border-color: var(--border-soft) !important;">
              <div class="d-flex align-items-center justify-content-between small mb-2">
                <span class="text-secondary">Inventory Health</span>
                <span class="text-success fw-bold">Good</span>
              </div>
              <div class="inventory-box d-flex align-items-center gap-3">
                <span class="material-symbols-outlined text-success">check_circle</span>
                <p class="inventory-copy mb-0">98% of your items are in stock and ready to ship.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</body>
</html>

