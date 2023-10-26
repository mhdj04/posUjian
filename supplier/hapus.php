<?php
if(isset($_GET['id'])){
 include_once('koneksi.php');
 $nama = $_POST['nama'];
 $kapasitas = $_POST['alamat'];
 $kontak = $_POST['kontak'];
$id = $_GET['id'];
 $sql="DELETE FROM supplier WHERE id= '$id'";
 $query=mysqli_query($koneksi, $sql);
 if($query) {
 header('location:index.php?m=supplier');
 // Var_dump($sql);
 // Cek error
 } else {
 include "index.php?m=supplier";
 echo 'script language="JavaScipt">';
 echo 'alert("Data Gagal ditambahkan")';
 echo '</script>';
 }
} else {
 echo "Pastikan sudah mengisi data dengan benar<a href='index.php'>Kembali</a>";
 echo '<script>window.history.back()</script>';
}
?>