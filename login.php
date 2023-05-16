<!DOCTYPE html>
<html>
<head>
    <title>Login - Aplikasi SAMDUT</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="container">
        <h1>LOGIN SAMDUT<h1>
        <form action="auth/auth.php" method="post"> 
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Masukkan username">

            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password">

            <input type="submit" value="Login">
            <p style="font-family: Arial, Helvetica, sans-serif  ;font-size: 15px" align="center">belum memiliki akun? <a href="register.php">Daftar akun</a></p>
        </form>

    </div>
</body>
</html>
