<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Gemini UI</title>
  <style>
    * {
      box-sizing: border-box;
      font-family: 'Segoe UI', sans-serif;
      margin: 0;
      padding: 0;
    }

    body {
      background: linear-gradient(135deg, #1e1e2f, #061d2f);
      color: #fff;
      padding: 30px;
    }

    .container {
      display: flex;
      background: rgba(255, 255, 255, 0.05);
      border-radius: 20px;
      padding: 20px;
      backdrop-filter: blur(20px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
    }

    .sidebar {
      width: 120px;
      display: flex;
      flex-direction: column;
      gap: 25px;
      margin-right: 30px;
    }

    .sidebar-item {
      display: flex;
      align-items: center;
      gap: 10px;
      opacity: 0.7;
      cursor: pointer;
      transition: 0.3s;
    }

    .sidebar-item:hover {
      opacity: 1;
    }

    .menu-btn {
      background: linear-gradient(90deg, #ff9966, #ff5e62);
      padding: 10px 20px;
      border-radius: 20px;
      text-align: center;
      font-weight: bold;
      color: white;
      cursor: pointer;
      margin-top: auto;
    }

    .main-content {
      flex: 1;
    }

    .header {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .cards {
      display: flex;
      gap: 15px;
      margin-bottom: 30px;
    }

    .card {
      background: linear-gradient(135deg, #38f9d7, #ff5e62);
      width: 120px;
      height: 180px;
      border-radius: 15px;
      padding: 10px;
      position: relative;
      box-shadow: 0 5px 15px rgba(0,0,0,0.4);
    }

    .card span {
      position: absolute;
      bottom: 10px;
      left: 10px;
      font-weight: bold;
    }

    .badge {
      position: absolute;
      top: 8px;
      right: 8px;
      background: orange;
      color: white;
      padding: 3px 7px;
      font-size: 12px;
      border-radius: 50%;
    }

    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .label {
      opacity: 0.6;
      font-size: 14px;
    }

    .toggle-buttons {
      display: flex;
      gap: 10px;
    }

    .toggle {
      padding: 8px 20px;
      border-radius: 20px;
      border: none;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s;
    }

    .toggle.sands {
      background: linear-gradient(90deg, #00c9ff, #92fe9d);
      color: black;
    }

    .toggle.sedans {
      background: linear-gradient(90deg, #f77062, #fe5196);
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="sidebar">
      <div class="sidebar-item">🟪 Manu</div>
      <div class="sidebar-item">⚙️ Oparñg</div>
      <div class="sidebar-item">🧿 Mooit</div>
      <div class="sidebar-item">📤 Send</div>
      <div class="menu-btn">Menu</div>
    </div>

    <div class="main-content">
      <div class="header">Gemini</div>

      <div class="cards">
        <div class="card"><div class="badge">+</div><span>Card</span></div>
        <div class="card"><div class="badge">⚙️</div><span>Card</span></div>
        <div class="card"><div class="badge">×</div><span>Card</span></div>
        <div class="card"><span style="font-size: 40px; position: absolute; top: 60px; left: 40px;">🟊</span></div>
      </div>

      <div class="footer">
        <div class="label">Foodes</div>
        <div class="toggle-buttons">
          <button class="toggle sands">Sands</button>
          <button class="toggle sedans">Sedans</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>