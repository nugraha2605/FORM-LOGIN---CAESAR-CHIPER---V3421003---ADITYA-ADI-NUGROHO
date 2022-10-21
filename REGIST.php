<?php 
include 'KONEKSI.php';

if (isset($_POST['S'])){

//tampung data dari halaman registrasi

$fullname = $_POST['FN'];
$username = $_POST['UN'];
$password = $_POST['PW'];

$key      = strlen($username);
//enkripsi password dengan caesar chiper
for ($a = 0; $a < strlen($password); $a++) {
    $kode[$a] = ord($password[$a]); //rubah ASCII ke desimal
    $b[$a] = ($kode[$a] + $key) % 256; //proses enkripsi
    $c[$a] = chr($b[$a]); //rubah desimal ke ASCII
}
//hasil enkripsi
$epassword = '';
for ($a = 0; $a < strlen($password); $a++) {
    $epassword = $epassword . $c[$a];
}

$query = mysqli_query($conn, "INSERT INTO uts (`id`, `fullname`, `username`, `password`) VALUES ('NULL', '$fullname', '$username', '$epassword')");
if ($query===0){
    echo '<script language = "javascript">
    alert("gagal registrasi"); document.location="HALAMAN-REGISTRASI.php";</script>';
}else{
    echo '<script language = "javascript">
    alert("berhasil registrasi"); document.location="DASHBOARD-REGISTRATION.php";
    </script>';
}
}

?>