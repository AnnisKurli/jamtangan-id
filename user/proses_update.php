<?php
include "../koneksi.php";
$id_user=$_POST['id_user'];
@$username=$_POST['username'];
@$email=$_POST['email'];
@$tlpn=$_POST['tlpn'];
@$jenis_kelamin=$_POST['jenis_kelamin'];
@$tgl_lahir=$_POST['tgl_lahir'];

$query="UPDATE tbl_user SET username='$username', email='$email', tlpn='$tlpn',
jenis_kelamin='$jenis_kelamin' ,tgl_lahir= '$tgl_lahir' WHERE id_user='$id_user';";
$hasil=mysqli_query($koneksi,$query);
if ($hasil){
    header('location:akun.php');
}else{
    echo"Gagal update data";
    echo mysqli_error();
}
?>