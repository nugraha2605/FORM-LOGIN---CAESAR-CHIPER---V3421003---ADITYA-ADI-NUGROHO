<!DOCTYPE html>
<html>
<head>
    <title>HALAMAN REGISTRASI</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>    
<body>
    <div class="kotak_login">
    <p class="tulisan_form">SILAHKAN DAFTAR DISINI</p>
        <form action="REGIST.php" method="POST" role="form">
                <label>Fullname</label>
                <input class="form_login" type="text" name="FN" id="fullname" Placeholder="Fullname" Autocomplete="off">

                <label>Username</label>
                <input class="form_login" type="text" name="UN" id="username" Placeholder="Username" Autocomplete="off">

                <label>Password</label>
                <input class="form_login" type="password" name="PW" id="password" Placeholder="Password" Autocomplete="off">

                <input class="tombol_submit" type="submit" name="S" id="submit-button"Value="Regist">
        </form>
    <p>Sudah Punya Akun? <a href="HALAMAN-LOGIN.php">LogIn here</a></p>
    </div>
</body>
</html>