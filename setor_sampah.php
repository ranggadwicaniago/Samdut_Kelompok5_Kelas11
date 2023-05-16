<!DOCTYPE html>
<html lang="en">
<head>
  <title>BERANDA</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }

    .background {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background-image: url("./asset/2.jpg");
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
      z-index: -1;
    }

    .container {
      margin: 30px;
      padding: 30px;
      background-color: rgba(255, 255, 255, 0.8);
      border-radius: 30px;
      position: relative;
      display:grid;
      width: 500px;

    }

    h1 {
      color: #53bb6f;
      font-size: 48px;
      text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
      letter-spacing: 2px;
      text-align: center;
      position: absolute;
      top: 0;
      left: 50%;
      transform: translate(-50%, -50%);
      margin-top: 4cm;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    h1 span {
      color: #fff;
      background-color: #53bb6f;
      padding: 5px 10px;
      border-radius: 10px;
    }

    p {
      font-size: 16px;
    }

    input[type="text"],
    input[type="number"] {
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
      box-sizing: border-box;
      margin-bottom: 16px;
    }

    button {
      background-color: #3e4043;
      color: #fff;
      padding: 12px;
      border-radius: 4px;
      border: none;
      cursor: pointer;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    }

    button:hover {
      background-color: #9ee060;
    }
  </style>
</head>
<body>
  <div class="background"></div>
  <div class="container">
    <p>alamat</p>
    <input type="text" />
    <p>jumlah sampah</p>
    <input type="number" />
    <a href="riwayat_setor_sampah.html"><button>setor sampah sekarang</button></a>
  </div>
  <h1>SETORKAN SAMPAHMU SEGERA!</h1>
</body>
</html>


