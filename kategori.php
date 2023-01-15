<?php 

require_once 'koneksi.php';
if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id_kategori = $id");
$query_kategori_artikel = mysqli_query($koneksi, "SELECT nama_kategori FROM tbl_kategori_artikel WHERE id = $id");
$kategori_artikel = mysqli_fetch_assoc($query_kategori_artikel);
$aktif = 'artikel';
?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="resources/images/sekolah-sdi-web.png">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daftar Kategori - SDI Wali Songo Trowulan</title>
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
					Kategori <?= $kategori_artikel['nama_kategori'] ?>
				</div>
				<?php while($artikel = mysqli_fetch_assoc($query)) : ?>
				<div class="artikel">
					<div class="info">
						<div class="post mb-2">
							<span class="tgl"><?= date('d M y', strtotime($artikel['tanggal'])) ?></span>
							<span class="judul"><a href="detail_artikel.php?id=<?= $artikel['id'] ?>"><?= $artikel['judul'] ?></a></span>
						</div>
					</div>
					<div class="detail">
						<div class="clearfix" style="text-align: justify;">
							<img src="images/artikel/<?= $artikel['foto'] ?>" alt="" width="200px" class="float-left mr-2">
							<?= substr($artikel['isi'], 0, 150) . '...' ?>
						</div>
					</div>
					<hr>
				</div>
				<?php endwhile; ?>
			</div>
			<?php require_once 'sidebar.php'; ?>
		</div>
		<div class="text-white footer">
			Copyright &copy; <?php echo date("Y"); ?> Sistem Informasi SDI Wali Songo Trowulan.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>