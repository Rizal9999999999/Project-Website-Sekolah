<?php 

if(!isset($_GET['mulai']) || $_GET['selesai'] == '') header('Location: index.php');

require_once '../../koneksi.php';
$id = $_GET['mulai'];
$query = mysqli_query($koneksi, "DELETE FROM tbl_events WHERE id = {$id}");
if($query){
	$_SESSION['sukses'] = 'Data Berhasil Dihapus!';
	header('Location: index.php');
} else {
	$_SESSION['gagal'] = 'Data Gagal Dihapus!';
	header('Location: index.php');
}