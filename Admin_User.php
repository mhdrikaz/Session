<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ShopPortal - User Management</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100..700,0,0" rel="stylesheet"/>
<link href="./Style/Admin_User.css" rel="stylesheet"/>
</head>
<body>
<div class="admin-shell d-flex">
  <aside class="sidebar d-none d-lg-flex flex-column sticky-top" style="height:100vh;">
    <div class="p-4">
      <div class="d-flex align-items-center gap-3">
        <div class="brand-box d-flex align-items-center justify-content-center">
          <span class="material-symbols-outlined text-white">shopping_bag</span>
        </div>
        <div>
          <h1 class="brand-title mb-0">ShopPortal</h1>
          <p class="brand-subtitle mb-0">Admin Panel</p>
        </div>
      </div>
    </div>
    <nav class="flex-grow-1 px-3 d-flex flex-column gap-1">
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">dashboard</span><span class="label">Dashboard</span></a>
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">inventory_2</span><span class="label">Products</span></a>
      <a class="nav-link-admin active" href="#"><span class="material-symbols-outlined" style="font-variation-settings:'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;">group</span><span class="label">Users</span></a>
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">settings</span><span class="label">Settings</span></a>
    </nav>
    <div class="p-3 border-top">
      <button class="logout-btn d-flex align-items-center justify-content-center gap-2 mb-3" type="button"><span class="material-symbols-outlined" style="font-size:20px;">logout</span>Logout</button>
      <div class="profile-card d-flex align-items-center gap-3">
        <div class="profile-avatar"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHyjeUZBm3HI6xoGb0RwbH97NDCehqLlcYlYhKJDIZUSQDjhE_lJ6B_o9Nq0xOfnZ_l0Ih6brHA0xnmeCKcuDgsUBJO_0vPaUteiIRRUMnblmRIaZlzsGlZSxhXLTKRxE6m-L1UTfM_BcGfBn54fzrKlazKLgJLUFSnDDslRFlZ1DKSEV0OtUAynrhQw44qyPeZLdMc7uz6D5ZAd5UR50pLqrIG_-AiuHKsbWMVI3_LhfagLOGZbEyjBNyBmtQ1cLkZjimvv92YYE" alt="Senior Admin Alex Rivera professional portrait"/></div>
        <div class="min-w-0">
          <p class="mb-0 small fw-semibold text-truncate">Alex Rivera</p>
          <p class="mb-0" style="font-size:12px;color:#64748b;">Senior Admin</p>
        </div>
      </div>
    </div>
  </aside>

  <main class="main-panel flex-grow-1">
    <div class="page-wrap">
      <div class="d-flex flex-wrap justify-content-between align-items-start gap-3 mb-4 mb-lg-5">
        <div>
          <h2 class="page-title mb-1">Users</h2>
          <p class="page-copy mb-0">Manage your customer and admin accounts.</p>
        </div>
        <button class="btn-primary-custom d-inline-flex align-items-center gap-2" type="button"><span class="material-symbols-outlined" style="font-size:20px;">person_add</span>Add User</button>
      </div>

      <div class="d-flex flex-wrap gap-3 mb-4">
        <div class="search-wrap flex-grow-1">
          <span class="material-symbols-outlined">search</span>
          <input class="search-input" placeholder="Search users by name or email..." type="text"/>
        </div>
        <button class="filter-btn d-inline-flex align-items-center gap-2" type="button"><span class="material-symbols-outlined" style="font-size:20px;">filter_list</span>Filters<span class="material-symbols-outlined" style="font-size:20px;">keyboard_arrow_down</span></button>
      </div>

      <div class="table-card">
        <div class="table-responsive">
          <table class="table table-admin mb-0 align-middle">
            <thead>
              <tr>
                <th>User Name</th>
                <th>Email</th>
                <th>Role</th>
                <th>Status</th>
                <th class="text-end">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="d-flex align-items-center gap-3">
                    <div class="user-avatar"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuCxcXuMqF6j-SSwID--QgxcFafRL17079S08018KUZM_uTIDqv4-yTRqRxSdUUlF1iQ6XviJg2zUaY8oykrCZk_zcBIOn-_UFRSKKE6j9LGQU7UrvKtYHLwP1r4IbqsFxlnUxljZYCgYzt7BXRTboOicjVzR7vKUg8MHF47t9sPtF4lURoTvKL3npal1c90ZYPgthGFUQrsY4uZ5021Mi83XTIjBTUhDSyG5Zc-vzm5YzItuT4Be6F7KmNRrF3_aTSEqGqVlvmWE5E" alt="Customer Jane Cooper avatar"/></div>
                    <span class="fw-semibold small">Jane Cooper</span>
                  </div>
                </td>
                <td class="small text-secondary">jane.c@example.com</td>
                <td><span class="role-pill" style="background:rgba(26,34,127,0.1);color:#1a227f;">Admin</span></td>
                <td><div class="d-flex align-items-center gap-2"><span class="status-dot" style="background:#10b981;"></span><span class="small fw-medium text-success">Active</span></div></td>
                <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
              </tr>
              <tr>
                <td><div class="d-flex align-items-center gap-3"><div class="user-avatar"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuAYBEYPhblDIDO6DqAj0wfmATLkOdfznL8nHhfro0PJ-83z-YKpBqLfcGan2_oZiwVIoBnsqCpS9AHbEE-UsvKsojdNvXrZmb911M3qe3b0rTNMOHlCKCleDe9JjopK0l8gXdIipPKDMZKYroIuwJw5kJhqCPcI2eXVflfPapXpis1j7ICrPTuLp7hDBJJPeS6qcACLHxnz1dBcH1fMcul7C-wxSigmh3imqba2t3A_77XmzIgXjaw0T1qsDISAH8V7k7dR-2HYtLk" alt="Customer Cody Fisher avatar"/></div><span class="fw-semibold small">Cody Fisher</span></div></td>
                <td class="small text-secondary">cody.f@example.com</td>
                <td><span class="role-pill" style="background:#f1f5f9;color:#475569;">Customer</span></td>
                <td><div class="d-flex align-items-center gap-2"><span class="status-dot" style="background:#cbd5e1;"></span><span class="small fw-medium text-secondary">Inactive</span></div></td>
                <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
              </tr>
              <tr>
                <td><div class="d-flex align-items-center gap-3"><div class="user-avatar"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXSr9syX8wgZ51u5Wg8mh8znSgbLkcf0yA1JWJx6bBAjOva9Y7h3WFgMnLMlU1dft2BEhhtV4zwtzqY0gOGxep7mJxoc2b5RtgR_aBPOwv_e3IqDtx1DwHt5YGbBgEH6N9XqvCzLVGBxLzWRPxOfuyqLC2Qienb6QCkMtEX-7g0EpVplcB0-CvGKRM-8kUa4Y7pbf901JNqIGb6ikb_BvuU7c6zXBRLNEcLxpPejoXMgp72F9UkwG34VPyw-FlpKMJGccy2UcRhP0" alt="Customer Esther Howard avatar"/></div><span class="fw-semibold small">Esther Howard</span></div></td>
                <td class="small text-secondary">esther.h@example.com</td>
                <td><span class="role-pill" style="background:#f1f5f9;color:#475569;">Customer</span></td>
                <td><div class="d-flex align-items-center gap-2"><span class="status-dot" style="background:#10b981;"></span><span class="small fw-medium text-success">Active</span></div></td>
                <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
              </tr>
              <tr>
                <td><div class="d-flex align-items-center gap-3"><div class="user-avatar"><img src="https://lh3.googleusercontent.com/aida-public/AB6AXuBHOVosoMbgObUQvw1S1IN755XhqiYckOW-My6_crhVIzFY7_xLaAFuCpstOgpfbMeHgwG13ejnepvgFX7qrxZ8yZqkHrlgUsq7vML9yfFs1acIE7AHYabTaCZqZpUpYuX7MtXlNsYAWTZxAA5c_ACz9OnIh3MxMD_EdDFxJEdCq-8KFUImiOnwhourU6U7KQRZXRcvOtsK2Ry_Py6YBulMGd8wsId3O2yTkaNjlT3WVHHDMDYmBhS4D4pU966x5o8N0xUE2s0W5pM" alt="Customer Jenny Wilson avatar"/></div><span class="fw-semibold small">Jenny Wilson</span></div></td>
                <td class="small text-secondary">jenny.w@example.com</td>
                <td><span class="role-pill" style="background:rgba(26,34,127,0.1);color:#1a227f;">Admin</span></td>
                <td><div class="d-flex align-items-center gap-2"><span class="status-dot" style="background:#10b981;"></span><span class="small fw-medium text-success">Active</span></div></td>
                <td class="text-end"><button class="edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:20px;">edit</span></button></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="pagination-bar px-4 px-lg-4 py-3 d-flex flex-wrap align-items-center justify-content-between gap-3">
          <p class="mb-0 small text-secondary">Showing 1-4 of 120 users</p>
          <div class="d-flex gap-2">
            <button class="pager-btn btn btn-sm border bg-white" type="button" disabled><span class="material-symbols-outlined" style="font-size:18px;">chevron_left</span></button>
            <button class="pager-btn btn btn-sm border bg-white" type="button"><span class="material-symbols-outlined" style="font-size:18px;">chevron_right</span></button>
          </div>
        </div>
      </div>
    </div>
  </main>
</div>
</body>
</html>
