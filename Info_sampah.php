<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>SAMDUT - Sampah di Duitin!</title>
  <link rel="stylesheet" href="../Samdut_Kelompok5_Kelas11/css/Info_sampah.css">
  <div class="background">
  </div>
  <style>
    .background {
          background-image: url("../Samdut_Kelompok5_Kelas11/asset/info sampah.jpg");
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
    .container {
          width: 500px;
          height: 600px;
          display: flex;
          border-radius: 20px;
          margin: 0 auto;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          background-color: rgba(255, 255, 255, 0.8);
      }
  </style>
</head>
<body>
  <div class="container">
    <h1>Info Sampah</h1>
    <p>Sampah adalah material yang tidak lagi berguna dan perlu dihilangkan. Ada dua jenis sampah yaitu organik dan anorganik.</p>
    <button id="sampah-organik"><a href="organik.php">Sampah Organik</a></button>
    <button id="sampah-anorganik"><a href="anorganik.php">Sampah Anorganik</a></button>
  </div>
</body>
</html>
