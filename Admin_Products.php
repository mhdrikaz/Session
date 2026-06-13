<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ShopPortal - Product Management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100..700,0,0" rel="stylesheet"/>
<link href="./Style/Admin_Products.css" rel="stylesheet"/>
</head>
<body>
<div class="admin-shell d-flex">
  <aside class="sidebar d-none d-lg-flex flex-column">
    <div class="p-4">
      <div class="d-flex align-items-center gap-3">
        <div class="brand-icon d-flex align-items-center justify-content-center">
          <span class="material-symbols-outlined text-white">shopping_bag</span>
        </div>
        <div>
          <h1 class="brand-title mb-0">ShopPortal</h1>
          <p class="brand-copy mb-0">Admin Console</p>
        </div>
      </div>
    </div>
    <nav class="flex-grow-1 px-3 d-flex flex-column gap-1">
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">dashboard</span><span class="label">Dashboard</span></a>
      <a class="nav-link-admin active" href="#"><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;">inventory_2</span><span class="label">Products</span></a>
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">group</span><span class="label">Users</span></a>
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">settings</span><span class="label">Settings</span></a>
    </nav>
    <div class="sidebar-profile p-3">
      <div class="profile-item d-flex align-items-center gap-3 cursor-pointer">
        <div class="profile-avatar"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBjhQTGMVUaC5fYjjAxy-cosbdgUkzx26I-CdT3yN8w5BmgW8eEOnkvBo0jheem4JrBsBmRJ9QvIvwF5iojcK3fQeOdy2qi4E3ZANie2nnaGfnpinCvYnRmvtvs-_LPv6wLIrhyT5t5FT0kdOM_yXaUFoGexJKmFpARmHha_1v0d4NLDmIiEjHkYaDCmRYiAGBovUSVs873I74e2HrcgnWQIRD8bj7wNAS3HWsIY3W5XgMSnwrGBs-R3G4Ue0JsYPWhBiM3fj44vaY" alt="Admin Profile"/></div>
        <div class="flex-grow-1 min-w-0">
          <p class="mb-0" style="font-size:12px;font-weight:600;" >Alex Rivera</p>
          <p class="mb-0 text-secondary" style="font-size:10px;">Senior Admin</p>
        </div>
        <span class="material-symbols-outlined" style="font-size:18px;color:#94a3b8;">logout</span>
      </div>
    </div>
  </aside>

  <main class="main-panel flex-grow-1 d-flex flex-column min-w-0">
    <header class="topbar d-flex align-items-center justify-content-between gap-3">
      <div class="d-flex align-items-center gap-4 flex-grow-1">
        <div class="search-wrap">
          <span class="material-symbols-outlined">search</span>
          <input class="search-input" placeholder="Search products, orders, or stock..." type="text"/>
        </div>
      </div>
      <div class="d-flex align-items-center gap-3">
        <button class="icon-btn" type="button"><span class="material-symbols-outlined">notifications</span></button>
        <button class="btn-primary-custom d-inline-flex align-items-center gap-2" type="button"><span class="material-symbols-outlined" style="font-size:20px;">add</span>Add Product</button>
      </div>
    </header>

    <div class="page-wrap flex-grow-1 overflow-auto">
      <div class="d-flex flex-column gap-4 gap-lg-5">
        <div>
          <h2 class="page-title mb-1">Products</h2>
          <p class="page-copy mb-0">Manage your inventory and product listings.</p>
        </div>

        <div class="d-flex align-items-center gap-2 overflow-auto pb-2">
          <button class="tab-btn active" type="button">All Products</button>
          <button class="tab-btn" type="button">In Stock</button>
          <button class="tab-btn" type="button">Low Stock</button>
          <button class="tab-btn" type="button">Out of Stock</button>
          <div class="divider-small mx-2"></div>
          <button class="tab-btn d-inline-flex align-items-center gap-1" type="button"><span class="material-symbols-outlined" style="font-size:20px;">filter_list</span>Filter</button>
        </div>

        <div class="table-card">
          <div class="table-responsive">
            <table class="table table-admin mb-0 align-middle">
              <thead>
                <tr>
                  <th>Product Name</th>
                  <th>Category</th>
                  <th>Price</th>
                  <th>Stock</th>
                  <th>Status</th>
                  <th class="text-end">Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><div class="d-flex align-items-center gap-3"><div class="product-thumb"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBDjvsZ8oUyooXoXLDwTcCioBCVFKOvt6RWDqr0UhjzQ17t1XjlW62_69kXf6XSYLOKQU4LO2ccBGIsSL_z7rnWhBdt-ouAxoc7V8zYMfogi9fOhC35PecEiPz7SC_SPZeQun4Qlds9_jyu9OtbZ4UgLW6LGnv9N5nhlKUjW2nYzLct-mYaactuj7WttmKiCI0X6MAaezf5JkuhAoRFUBz9bTj-9TiiJH_7j2f4Mt5ePHvmHna9mDqFdew-6G8sbCEZC6mcLtDrBys" alt="High quality wireless headphones on a solid background"/></div><span class="small fw-semibold">Wireless Noise-Canceling Headphones</span></div></td>
                  <td class="small text-secondary">Electronics</td>
                  <td class="small fw-medium">$299.00</td>
                  <td class="small text-secondary">124</td>
                  <td><span class="stock-pill" style="background:#dcfce7;color:#166534;">In Stock</span></td>
                  <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-3"><div class="product-thumb"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBxhLbbvgSN2R8o3XGIS0DKskPChI5KCIvTRMIWAaYpKom82KSBnGRvV8LSYNSYV9xxCLSket5Gv5VQmnZYQV83l8GAV5oZdGrUdRTnBCYvyj4gP4CGAw4I_OSU_cClqxR6jt99ReUtwSdFxzBkt7GXCks5s6OAHLLfDlN4K2zMTDP27B368lVcV5KALmhd5zXNSQAsNv0s6Z5wnkrqJDm1ptHUVnBiBES9kbQZLh8ol4cFS7l_SjS1E-vbvPVQFYzYL11gCBRxWAE" alt="Brown leather wallet isolated on light background"/></div><span class="small fw-semibold">Minimalist Leather Wallet</span></div></td>
                  <td class="small text-secondary">Accessories</td>
                  <td class="small fw-medium">$45.00</td>
                  <td class="small text-secondary">12</td>
                  <td><span class="stock-pill" style="background:#fef3c7;color:#92400e;">Low Stock</span></td>
                  <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-3"><div class="product-thumb"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBNxHzhD2WFUuXoQeP0Lfb88OJcFUYsonX0HFF55rv7pt_97VNrRcJA7qEyiCas0vIusW58ijMj3Pu13M-9Yxmi7f-hIHFGfd8H-bxspyln1cQ4vQ_dz4TdluabiDG4B33S3d8w0X8Nm9-ckpROpuw7zCcfsJkkAmTTJHn5r9yJWSppwSph-w6wl4UJwp56FJ7hV6yhh_3K5oasHdaiR6JqO1Iug8gZwKo8Ir2cnFr3rV5PYYT_nlYyOa1QlJ-sRDajzdZ7wdRWZ_o" alt="RGB mechanical gaming keyboard glowing with colors"/></div><span class="small fw-semibold">Mechanical RGB Keyboard</span></div></td>
                  <td class="small text-secondary">Electronics</td>
                  <td class="small fw-medium">$129.99</td>
                  <td class="small text-secondary">0</td>
                  <td><span class="stock-pill" style="background:#ffe4e6;color:#9f1239;">Out of Stock</span></td>
                  <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-3"><div class="product-thumb"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDyQCIe_JiDBrvTcwcWtlVvwXFI4dZH_C8BJ9fXqfDBGENUDiCXQhMix9AeFurK7RM4fIOLxrrrcbRLuVVhZvJ2Q344dxb8T3yDBxIhwUbZy8Xy1y9JfDDbAzu5o527RSqv2w082yZp-eTiBO48kXqv4F9kQZUCwtFLN4NzMh0dPzqhFyWcljjYmnsP18JAK_vKrOi5OU09t6naiojekIrWIcMdi_KbN1umAbXiqxVg2LMf5Mdu-aZdWISctkZ78pbX4jyTvLpO7oA" alt="Modern minimalist smartwatch with white band"/></div><span class="small fw-semibold">Series 7 Smartwatch</span></div></td>
                  <td class="small text-secondary">Electronics</td>
                  <td class="small fw-medium">$399.00</td>
                  <td class="small text-secondary">56</td>
                  <td><span class="stock-pill" style="background:#dcfce7;color:#166534;">In Stock</span></td>
                  <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
                </tr>
                <tr>
                  <td><div class="d-flex align-items-center gap-3"><div class="product-thumb"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBW1MgoJBZ_vsN-it2nG2okMW6VxOwCCA-QmnsNEIPPPHNVLcAwsMSTk7YCnu4FMjbIaLoOj0DAZNUVu8fgUOwFW4MAY1QrqbfwmxAuT-uQfnjmtkwGOU8WDL2bksQ5EW5xJnn2ekrmY-xGsBfL4c4kU9LIb4UZRCx_1uzDK-Flk6xZ4_Ii3m5sAILr1rn7dsh9OC7lXhnCFrN4OZ-OF_RNOTGJVLCjmf-U75Yr3xJ5uc17zkAmS_CT_Shtkbm8qB0x5H8h7HoizbA" alt="White ceramic coffee mug on a table"/></div><span class="small fw-semibold">Ceramic Coffee Mug</span></div></td>
                  <td class="small text-secondary">Home &amp; Kitchen</td>
                  <td class="small fw-medium">$18.00</td>
                  <td class="small text-secondary">210</td>
                  <td><span class="stock-pill" style="background:#dcfce7;color:#166534;">In Stock</span></td>
                  <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="pagination-bar px-4 py-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
            <span class="small text-secondary fw-medium">Showing 1 to 5 of 48 products</span>
            <div class="d-flex gap-2">
              <button class="pager-btn" type="button" disabled>Previous</button>
              <button class="pager-btn" type="button">Next</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</body>
</html>
