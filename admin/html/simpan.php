<?php
 include "kneksi.php";

 $id = $_POST['id_kategori'];
 $kategori = $_POST['nama_kategori'];

$simpan = mysqli_query($koneksi, "insert into tbl_kategori values ('$id', '$kategori')");
if ($simpan) {
}
 ?>