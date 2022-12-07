<?php
$username= $_POST ['username'];
$password= $_POST ['password'];
$password1= $_POST ['password1'];

$level='user';

if ($password == $password1)
{
    include "koneksi.php";
    $pengacak = "p3ng4c4k";
    $passmd = md5($pengacak.md5($password));
    $query = "INSERT INTO tbl_user VALUES ('','$username', '$passmd','','','','', '$level')";
    $hasil = mysqli_query($koneksi, $query);

    if ($hasil) {
        echo "<script>alert('User berhasil terdaftar');window.location='masuk.php';</script>";
        }
    else echo "<script>alert('Proses daftar gagal');window.location='daftar.php';</script>";
}
else echo "Password yang dimasukkan tidak sama";
?>

















































































?>