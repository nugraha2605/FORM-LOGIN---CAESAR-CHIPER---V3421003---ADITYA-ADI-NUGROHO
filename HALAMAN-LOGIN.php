<!DOCTYPE html>
<html>
<head>
    <title>HALAMAN LOGIN</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>    
<body>
    <div class="kotak_login">
    <p class="tulisan_form">SILAHKAN LOGIN DISINI</p>
        <form action="VERIF.php" method="POST" role="form">
                <label>Username</label>
                <input class="form_login" type="text" name="UN" id="username" Placeholder="Username" Autocomplete="off">

                <label>Password</label>
                <input class="form_login" type="password" name="PW" id="password" Placeholder="Password" Autocomplete="off">

                <input class="tombol_submit" type="submit" name="S" id="submit-button"Value="Log In">       
        </form>
    <p>Belum Punya Akun? <a href="HALAMAN-REGISTRASI.php">Register here</a></p>
    </div>
</body>
</html>