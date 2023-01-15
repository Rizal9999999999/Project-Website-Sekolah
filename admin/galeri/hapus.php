<?php 

if(!isset($_GET['idgaleri']) || $_GET['idgaleri'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['idgaleri'];
$query = mysqli_query($koneksi, "SELECT foto FROM tbl_galeri WHERE id = {$id}");
$row = mysqli_fetch_assoc($query);

if(file_exists("../../images/galeri/" . $row['foto'])) unlink("../../images/galeri/" . $row['foto']) or die('foto tidak bisa dihapus');

$query = mysqli_query($koneksi, "DELETE FROM tbl_galeri WHERE id = {$id}");
if($query){
    $_SESSION['sukses'] = 'Data Berhasil Dihapus!';
    header('Location: index.php');
} else {
    $_SESSION['gagal'] = 'Data Gagal Dihapus!';
    header('Location: index.php');
}