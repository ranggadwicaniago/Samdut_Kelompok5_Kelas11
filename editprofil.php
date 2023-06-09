<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Saya</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/editprofile.css" />
    <style>
      .col-md-4 {
        text-align: center;
      }
    </style>
  </head>

  <body class="body">
    <div class="container mt-3">
      <div class="card">
        <div class="card-header nave" style="background-color: #0a4d68">
          <h3 class="text-center" style="color: aliceblue">Edit Profile</h3>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-4 text-center">
              <img src="https://via.placeholder.com/150" class="img-thumbnail rounded-circle" alt="Foto Profil" />
            </div>
            <div class="col-md-8">
              <form>
                <div class="mb-3">
                  <label for="name" class="form-label">Nama Lengkap</label>
                  <input type="text" class="form-control" id="name" placeholder="Masukkan Nama" />
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Nomor Telepon</label>
                  <input type="text" class="form-control" id="phone" placeholder="Masukkan Nomor Telepon" />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password Lama</label>
                  <input type="text" class="form-control" id="name" placeholder="Masukkan Password Lama" />
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label">Password Baru</label>
                  <input type="text" class="form-control" id="name" placeholder="Masukkan Password Baru" />
                </div>
              </form>
              <div class="text-center tombol">
                <button type="submit" class="btn tombol pb-3">simpan</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.min.js"></script>
  </body>
</html>