<?php 
include 'KONEKSI.php';

if (isset($_POST['S'])){

$username = $_POST['UN'];
$password = $_POST['PW'];

$key      = strlen($username);

$query = mysqli_query($conn,"SELECT * FROM uts WHERE username='$username'" );

$cek   = mysqli_num_rows($query);

$ambil = mysqli_fetch_array($query);

$epass = $ambil['password'];
$dpass = '';//variabel hasil dekripsi

for($i=0;$i<strlen($epass);$i++)
{
$kode[$i]=ord($epass[$i]); // rubah ASII ke desimal
$b[$i]=($kode[$i] - $key ) % 256; // proses dekripsi Caesar
$c[$i]=chr($b[$i]); //rubah desimal ke ASCII
}

for ($i=0;$i<strlen($epass);$i++)
{
$dpass = $dpass . $c[$i];
}

if ($cek===0){
    echo'
    <script language = "javascript">
    alert("Gagal Log In, User Tidak Ditemukan");
    document.location="HALAMAN-LOGIN.php";
    </script>' ;}
else{
    //username benar dan password benar
    if($password==$dpass){
        echo'
        <script language = "javascript">
        alert("Berhasil Log In");
        document.location="DASHBOARD-LOGIN.php";
        </script>';
        
    }
    //username benar dan password salah
    else{
        echo'
        <script language = "javascript">
        alert("Gagal Log In, Password Salah");
        document.location="HALAMAN-LOGIN.php";
        </script>';
    }
}
}
?>