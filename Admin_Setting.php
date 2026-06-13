<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>ShopPortal Admin - Settings</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;900&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,100..700,0,0" rel="stylesheet"/>
<link href="./Style/Admin_Setting.css" rel="stylesheet"/>
</head>
<body>
<div class="admin-shell d-flex">
  <aside class="sidebar d-none d-lg-flex flex-column shrink-0">
    <div class="p-4 d-flex align-items-center gap-3">
      <div class="brand-badge d-flex align-items-center justify-content-center">
        <span class="material-symbols-outlined">shopping_bag</span>
      </div>
      <div>
        <h1 class="brand-title mb-0">ShopPortal</h1>
        <p class="brand-copy mb-0">Admin Console</p>
      </div>
    </div>

    <nav class="flex-grow-1 px-3 py-3 d-flex flex-column gap-1">
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">dashboard</span><span class="label">Dashboard</span></a>
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">inventory_2</span><span class="label">Products</span></a>
      <a class="nav-link-admin" href="#"><span class="material-symbols-outlined">group</span><span class="label">Users</span></a>
      <a class="nav-link-admin active" href="#"><span class="material-symbols-outlined">settings</span><span class="label">Settings</span></a>
    </nav>

    <div class="p-3 mt-auto">
      <div class="admin-card">
        <div class="d-flex align-items-center gap-3">
          <div class="admin-avatar-small">
            <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuD-Iv-r7RbmDechOOd6x3fiR_UrUijCGxZ4A48-OuPN-dTg7i45KKXuvSLgFqoYcl7DH9T01fU0AIN2lbFpezEKTATFtuROlVt-ajhG2QrSyFyqs9P0oxmekjub4GniYNUkwuIlyQ8sLHAIqsaN4d_Lzcq0Vpu0RlRlsEQcJ8-xT5ZCNdH4fqoj7VAJhigqcA5s_RjECuvjOlEjMBBWbqVmxLTitPVsTKHKWNClWKZ0WxrFob711IvkayY4dopXM1GZTDLuh7K8GGU" alt="Admin Avatar"/>
          </div>
          <div class="min-w-0">
            <p class="mb-0 small fw-semibold text-truncate">Alex Rivera</p>
            <p class="mb-0 text-secondary" style="font-size:12px;">Super Admin</p>
          </div>
        </div>
      </div>
    </div>
  </aside>

  <main class="main-panel flex-grow-1 overflow-auto">
    <div class="content-wrap">
      <header class="mb-5">
        <h2 class="page-title mb-0">Settings</h2>
        <p class="page-copy">Manage your portal preferences and configurations.</p>
      </header>

      <div class="d-flex flex-column gap-4 gap-lg-5">
        <section class="section-card">
          <div class="section-head">
            <h3 class="section-title d-flex align-items-center gap-2 mb-0"><span class="material-symbols-outlined text-primary">store</span>General Settings</h3>
          </div>
          <div class="section-body">
            <div class="row g-4">
              <div class="col-12 col-md-6">
                <label class="field-label">Store Name</label>
                <input class="form-control-custom" type="text" value="ShopPortal Global Store"/>
              </div>
              <div class="col-12 col-md-6">
                <label class="field-label">Currency</label>
                <select class="form-select-custom">
                  <option>USD ($) - United States Dollar</option>
                  <option>EUR (EUR) - Euro</option>
                  <option>GBP (GBP) - British Pound</option>
                </select>
              </div>
              <div class="col-12">
                <label class="field-label">Timezone</label>
                <select class="form-select-custom">
                  <option>(GMT-08:00) Pacific Time (US &amp; Canada)</option>
                  <option>(GMT+00:00) London, Lisbon, Casablanca</option>
                  <option>(GMT+01:00) Paris, Berlin, Rome</option>
                </select>
              </div>
            </div>
          </div>
        </section>

        <section class="section-card">
          <div class="section-head">
            <h3 class="section-title d-flex align-items-center gap-2 mb-0"><span class="material-symbols-outlined text-primary">person</span>Account Settings</h3>
          </div>
          <div class="section-body d-flex flex-column gap-4">
            <div class="d-flex align-items-center gap-4 pb-4" style="border-bottom:1px solid rgba(26,34,127,0.05);">
              <div class="position-relative">
                <div class="profile-avatar-large">
                  <img src="https://lh3.googleusercontent.com/aida-public/AB6AXuB4oJLwu_FentSVk1x4pXHnUF97GXFJgqIf5JGs1LxgXkyGGTrrXCVbWLqIVdwsJNgRT5_Tito5yPvFFYNNwuBjDoUvfZcST37WMvdE_iDee5mX9Q9HAermkcdEuTd9evHdhcRW39kYMyAlLC3iogLFpn6mlDofnHeqYtYCQYJFmaOcC8II_XLD8ukXiRvdFXFxsPJApJphuUF8x7Q_jYRknJiPsd1Aem-BiykS2jLPD9vW-ROq2tQkd49ZilqUm7WlntRNCspSvRw" alt="Admin"/>
                </div>
                <button class="avatar-edit-btn" type="button"><span class="material-symbols-outlined" style="font-size:16px;">edit</span></button>
              </div>
              <div>
                <h4 class="mb-1 fw-bold">Admin Profile</h4>
                <p class="mb-0 text-secondary small">Update your photo and personal details.</p>
              </div>
            </div>
            <div class="row g-4">
              <div class="col-12 col-md-6">
                <label class="field-label">Full Name</label>
                <input class="form-control-custom" type="text" value="Alex Rivera"/>
              </div>
              <div class="col-12 col-md-6">
                <label class="field-label">Email Address</label>
                <input class="form-control-custom" type="email" value="alex.rivera@shopportal.com"/>
              </div>
              <div class="col-12">
                <label class="field-label">New Password</label>
                <div class="password-wrap">
                  <input class="form-control-custom pe-5" placeholder="********" type="password"/>
                  <span class="material-symbols-outlined toggle-icon">visibility</span>
                </div>
                <p class="helper-text mb-0">Must be at least 12 characters long.</p>
              </div>
            </div>
          </div>
        </section>

        <section class="section-card">
          <div class="section-head">
            <h3 class="section-title d-flex align-items-center gap-2 mb-0"><span class="material-symbols-outlined text-primary">notifications</span>Notification Settings</h3>
          </div>
          <div class="section-body d-flex flex-column gap-3">
            <div class="notify-row">
              <div class="d-flex gap-3">
                <span class="material-symbols-outlined notify-icon">mail</span>
                <div>
                  <p class="notify-title mb-0">Email Alerts</p>
                  <p class="notify-copy mb-0">Receive weekly summaries and important security updates.</p>
                </div>
              </div>
              <label class="switch"><input checked type="checkbox"/><span class="slider"></span></label>
            </div>
            <div class="notify-row">
              <div class="d-flex gap-3">
                <span class="material-symbols-outlined notify-icon">info</span>
                <div>
                  <p class="notify-title mb-0">System Notifications</p>
                  <p class="notify-copy mb-0">In-app notifications for order status changes and user activity.</p>
                </div>
              </div>
              <label class="switch"><input checked type="checkbox"/><span class="slider"></span></label>
            </div>
            <div class="notify-row">
              <div class="d-flex gap-3">
                <span class="material-symbols-outlined notify-icon">campaign</span>
                <div>
                  <p class="notify-title mb-0">Marketing &amp; Promotions</p>
                  <p class="notify-copy mb-0">Announcements about new features and holiday sale templates.</p>
                </div>
              </div>
              <label class="switch"><input type="checkbox"/><span class="slider"></span></label>
            </div>
          </div>
        </section>

        <div class="action-bar d-flex justify-content-end gap-3 flex-wrap">
          <button class="btn-secondary-custom" type="button">Discard Changes</button>
          <button class="btn-primary-custom" type="button">Save Configuration</button>
        </div>
      </div>
    </div>
  </main>
</div>
</body>
</html>
