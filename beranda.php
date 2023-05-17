<!DOCTYPE html>
<html>
<head>
  <title>SAMDUT - Sampah di Duitin!</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
  <div class="background"></div>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
    }

    header {
      background-color: #00000086;
      color: #fff;
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 10px 20px;
      position: relative;
      height: 80px;
      z-index: 2;
    }

    .logo {
      position: absolute;
      top: 20px;
      right: 20px;
      font-size: 55px;
      font-weight: bold;
      color: rgb(9, 9, 9)11;
      z-index: 2;
      cursor: pointer; /* Add cursor pointer to indicate it's clickable */
    }

    nav {
      display: flex;
      position: relative;
      margin-top: 20px;
      z-index: 2;
    }

    nav ul {
      display: flex;
      list-style: none;
      margin: 0;
      padding: 0;
      position: relative;
      right: 0;
    }

    nav li {
      margin-left: 20px;
      margin-top: 7px;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      transition: all 0.3s ease;
    }

    nav a:hover {
      color: #e3e3e3;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
      position: relative;
      z-index: 1;
    }

    h1 {
      font-size: 36px;
      font-weight: bold;
      font-style: initial;
      margin-top: 50px;
      color: antiquewhite;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 20px;
    }

    .button-container {
      display: flex;
      justify-content: space-between;
      margin-top: 50px;
    }

    button {
      background-color: #212121;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 18px;
      font-weight: bold;
      margin-right: 10px;
      cursor: hand;
      transition: all 0.3s ease;
    }

    button:hover {
      background-color: #110909;
      transform: scale(1.1);
    }

    .btn-shadow {
      transition: all 0.3s ease;
      box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .btn-shadow:active {
      transform: scale(1.1);
      box-shadow: none;
    }

    .navbar-brand-text {
      color: rgb(37, 202, 37);
      font-size: 35px;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      }

      .background {
        background-image: url("../Samdut_Kelompok5_Kelas11/asset/1.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center center;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        z-index: -1;
      }
        </style>
      </head>
      <body>
        <header>
          <nav class="navbar">
            <div class="navbar-brand">
              <span class="navbar-brand-text">SAMDUT</span>
            </div>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="beranda.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="halaman lokasi.html">Lokasi penampungan</a>
              </li>
            </ul>
          </nav>
          <i class="bi bi-person-circle logo" onclick="location.href='profil.php'"></i>
        </header>
        <div class="container">
          <h1>Selamat Datang di Aplikasi Kami</h1>
          <p style="color: #f5f8f7;">Silahkan pilih salah satu dari tiga layanan kami:</p>
          <div class="button-container">
            <button class="btn-shadow" onclick="location.href='setor_sampah.php'">
              <img src="../asset/trash_can.jpg" alt="Setor Sampah" width="50" height="50">
              SETOR SAMPAH
            </button>
            <button class="btn-shadow" onclick="location.href='tukar_koin.php'">
              <img src="tukar_koin.png" alt="Tukar Koin" width="50" height="50">
              TUKAR KOIN
            </button>
            <button class="btn-shadow" onclick="location.href='riwayat_transaksi.php'">
              <img src="riwayat.png" alt="Riwayat" width="50" height="50">
              RIWAYAT
            </button>
            <button class="btn-shadow" onclick="location.href='info_sampah.php'">
              <img src="ri.png" alt="info_sampah" width="50" height="50">
              INFO SAMPAH
            </button>
          </div>
        </div>
      </body>
      </html>
