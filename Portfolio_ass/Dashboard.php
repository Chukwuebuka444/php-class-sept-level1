<?php
session_start();
// $_SESSION["loggedinusers"];s

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title><?php ?></title>
  <style>
    :root{
      --bg:#f4f6fb;
      --card:#ffffff;
      --muted:#6b7280;
      --accent:#2563eb;
      --glass: rgba(255,255,255,0.6);
      --radius:12px;
      font-family: Inter, system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial;
    }

    *{box-sizing:border-box}
    body{margin:0;background:var(--bg);color:#0f172a}

    .app{
      display:grid;
      grid-template-columns:260px 1fr;
      min-height:100vh;
      gap:24px;
      padding:24px;
      align-items:start;
    }

    /* Sidebar */
    .sidebar{
      background:linear-gradient(180deg, rgba(255,255,255,0.8), var(--glass));
      border-radius:var(--radius);
      padding:20px;
      box-shadow:0 6px 20px rgba(15,23,42,0.06);
    }
    .brand{display:flex;gap:12px;align-items:center;margin-bottom:18px}
    .logo{width:44px;height:44px;border-radius:10px;background:var(--accent);display:grid;place-items:center;color:white;font-weight:700}
    .brand h1{font-size:16px;margin:0}
    .nav{margin-top:8px}
    .nav a{display:flex;align-items:center;gap:10px;padding:10px;border-radius:10px;color:var(--muted);text-decoration:none;margin-bottom:6px}
    .nav a.active, .nav a:hover{background:#eef2ff;color:var(--accent)}

    /* Main */
    .main{
      width:100%;
    }
    .topbar{display:flex;justify-content:space-between;align-items:center;margin-bottom:18px}
    .search{display:flex;gap:12px;align-items:center}
    .search input{padding:10px 14px;border-radius:10px;border:1px solid #e6e9ef;background:white}
    .user{display:flex;align-items:center;gap:12px}
    .avatar{width:40px;height:40px;border-radius:10px;background:#eef2ff;color:var(--accent);display:grid;place-items:center;font-weight:700}

    /* Cards */
    .grid{display:grid;grid-template-columns:repeat(3,1fr);gap:16px;margin-bottom:18px}
    .card{background:var(--card);padding:18px;border-radius:12px;box-shadow:0 6px 20px rgba(15,23,42,0.04)}
    .card h3{margin:0 0 10px 0;font-size:13px;color:var(--muted)}
    .stat{font-size:20px;font-weight:700}

    /* table */
    .panel{background:var(--card);padding:16px;border-radius:12px;box-shadow:0 6px 20px rgba(15,23,42,0.04)}
    table{width:100%;border-collapse:collapse}
    th,td{padding:12px 8px;text-align:left;border-bottom:1px solid #f1f3f6}
    th{font-size:13px;color:var(--muted)}
    td small{display:block;color:var(--muted);font-size:12px}

    /* responsive */
    @media (max-width:900px){
      .app{grid-template-columns:1fr;padding:16px}
      .grid{grid-template-columns:repeat(2,1fr)}
      .sidebar{order:2}
    }

    @media (max-width:540px){
      .grid{grid-template-columns:1fr}
      .search input{display:none}
      .brand h1{font-size:14px}
    }

  </style>
</head>
<body>
  <div class="app">

    <aside class="sidebar">
      <div class="brand">
        <div class="logo">DB</div>
        <div>
          <h1>Acme Dashboard</h1>
          <small style="color:var(--muted)">Overview &amp; analytics</small>
        </div>
      </div>

      <nav class="nav">
        <a href="#" class="active">🏠 Dashboard</a>
        <a href="#">📦 Products</a>
        <a href="#">🧾 Orders</a>
        <a href="#">👥 Customers</a>
        <a href="#">⚙️ Settings</a>
      </nav>

      <div style="margin-top:18px;font-size:13px;color:var(--muted)">
        <strong>Storage</strong>
        <div style="height:8px;background:#eef2ff;border-radius:6px;margin-top:8px;overflow:hidden">
          <div style="width:62%;height:8px;background:var(--accent)"></div>
        </div>
        <small>62% used</small>
      </div>

    </aside>

    <main class="main">
      <div class="topbar">
        <div class="search">
         <H1> HELLO!</H1>
        </div>
        <div class="user">
          <div style="text-align:right">
            <H1 style="font-size:13px">Good morning</H1>
            <div style="font-weight:700"><?php if(isset($_SESSION["loggedinusers"])) {
echo " MR"."  ".$_SESSION["loggedinusers"]["username"];
} ?></div>
          </div>
          <div class="avatar">C</div>
        </div>
      </div>

      <section class="grid">
        <div class="card">
          <h3>Total Revenue</h3>
          <div class="stat">$24,830</div>
          <small style="color:var(--muted)">+12% vs last month</small>
        </div>

        <div class="card">
          <h3>Active Users</h3>
          <div class="stat">4,210</div>
          <small style="color:var(--muted)">+3% this week</small>
        </div>

        <div class="card">
          <h3>New Orders</h3>
          <div class="stat">138</div>
          <small style="color:var(--muted)">+22% this week</small>
        </div>
      </section>

      <section class="panel">
        <h3 style="margin-top:0">Recent Orders</h3>
        <table>
          <thead>
            <tr><th>Order</th><th>Customer</th><th>Status</th><th>Amount</th></tr>
          </thead>
          <tbody>
            <tr>
              <td>#1023 <small>3 items</small></td>
              <td>Emma Clarke</td>
              <td>Shipped</td>
              <td>$72.00</td>
            </tr>
            <tr>
              <td>#1022 <small>1 item</small></td>
              <td>Liam Park</td>
              <td>Processing</td>
              <td>$19.50</td>
            </tr>
            <tr>
              <td>#1021 <small>2 items</small></td>
              <td>Sophia Lee</td>
              <td>Cancelled</td>
              <td>$0.00</td>
            </tr>
          </tbody>
        </table>
      </section>

    </main>

  </div>
</body>
</html>