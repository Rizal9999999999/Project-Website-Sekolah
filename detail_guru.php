<?php 

require_once 'koneksi.php';
if(!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');

$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_guru WHERE id = $id");

$row = mysqli_fetch_assoc($query);
$aktif = 'siswa';
?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="resources/images/sekolah-sdi-web.png">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail Guru - SDI Wali Songo Trowulan</title>
	<link rel="stylesheet" href="resources/datatables/datatables.min.css">
	<link rel="stylesheet" href="resources/fonts/stylesheet.css">
	<link rel="stylesheet" href="resources/css/bootstrap.min.css">
	<link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
	<div class="container bg-light">
		<!-- top bar -->
		<div class="logo clearfix">
			<div class="carousel-item active mt-3 mb-3">
				<img src="resources/images/20220406_001240_0000.png" alt="gambar" width="1110px" height="150px" class="d-block w-100">
			</div>
		</div>
			
			
		<!-- nav bar -->
		<?php require_once 'navbar.php'; ?>

		<!-- content -->
		<div class="row p-3">
			<div class="col-md-8">
				<div class="title mb-3">
					Detail Siswa - <b><?= $row['nama'] ?></b>
				</div>
				<table class="table table-stripped">
							<tr>
								<td width="225px"><b>Nama</b></td>
								<td>:</td>
								<td><?= $row['nama'] ?></td>
							</tr>
							<tr>
								<td><b>NIP</b></td>
								<td>:</td>
								<td><?= $row['nip'] ?></td>
							</tr>
							<tr>
								<td><b>Jenis Kelamin</b></td>
								<td>:</td>
								<td>
									<?= $row['jenis_kelamin'] == 'L' ? 'Laki Laki' : '' ?>
									<?= $row['jenis_kelamin'] == 'P' ? 'Perempuan' : '' ?>
								</td>
							</tr>
							<tr>
								<td><b>No Handphone</b></td>
								<td>:</td>
								<td><?= $row['no_hp'] ?></td>
							</tr>
							<tr>
								<td><b>Tempat Tanggal Lahir</b></td>
								<td>:</td>
								<td><?= $row['tempat_lahir'] ?>, <?= $row['tanggal_lahir'] ?></td>
							</tr>
							<tr>
								<td><b>Mata Pelajaran</b></td>
								<td>:</td>
								<td><?= $row['mata_pelajaran'] ?></td>
							</tr>
							<tr>
								<td><b>Alamat</b></td>
								<td>:</td>
								<td><?= $row['alamat'] ?></td>
							</tr>
							<tr>
								<td><b>Foto</b></td>
								<td>:</td>
								<td><img src="images/guru/<?= $row['foto'] ?>" alt="<?= $row['nama'] ?>" width="25%" class="img-thumbnail"></td>
							</tr>
							<tr>
								<td><b></td>
								<td></td>
								<td><a href="guru.php" class="btn btn-secondary btn-sm">Kembali</a></td>
							</tr>
						</table>
			</div>
			<?php require 'sidebar.php'; ?>
		</div>
		<div class="text-white footer">
			Copyright &copy; <?php echo date("Y"); ?> Sistem Informasi SDI Wali Songo Trowulan.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
	<script src="resources/datatables/datatables.min.js"></script>
	<script src="resources/datatables/datatable.js"></script>
</body>
</html>