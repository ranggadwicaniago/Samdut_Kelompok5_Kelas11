<!DOCTYPE html>
<html lang="en">
<head>
  <title>TUKARKAN KOIN MU</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      font-family: Arial, sans-serif;
      background-image: url("coin.jpg");
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    .content {
      text-align: center;
      background-color: rgba(255, 255, 255, 0.7);
      padding: 20px;
      border-radius: 10px;
    }
    
    h1 {
      font-size: 50px;
      font-weight: bold;
      margin-top: 25px;
    }
    
    p {
      font-size: 18px;
      line-height: 1.5;
      margin-bottom: 20px;
    }
    
    input[type="number"] {
      padding: 10px;
      font-size: 16px;
    }
    
    a {
      text-decoration: none;
    }
    
    button {
      background-color: #212121;
      color: #fff;
      border: none;
      border-radius: 5px;
      padding: 10px 20px;
      font-size: 30px;
      font-weight: bold;
      cursor: pointer;
      transition: all 0.3s ease;
    }
    
    button:hover {
      background-color: #110909;
    }
  </style>
</head>
<body>
  <div class="content">
    <h1>Tukar Koin</h1>
    <p>50 koin = 25.000</p>
    <p>Jumlah koin yang akan ditukar:</p>
    <input type="number">
    <br><br>
    <a href="riwayat_tukar_koin.html"><button>Tukar Koin Sekarang</button></a>
  </div>
</body>
</html>
