<?php 

require_once 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="resources/images/sekolah-sdi-web.png">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Detail Artikel - SDI Wali Songo Trowulan</title>
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
					Galeri
				</div>
			
			<?php
				$galeri = mysqli_query($koneksi, "SELECT * FROM tbl_galeri ORDER BY id DESC");
					if(mysqli_num_rows($galeri) > 0){
						while($p = mysqli_fetch_array($galeri)){
			?>

				<div class="col-4">
					<a href="images/galeri/<?= $p['foto'] ?>"target="_blank" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbail-img" style="background-image: url('images/galeri/<?= $p['foto'] ?>')" alt="<?= $p['keterangan'] ?>">
						</div>

						
						<div class="thumbnail-text">
							<?= $p['keterangan'] ?> 
					    </div>

					</div>
					</a>
				</div>

			<?php }}else{ ?>

				Tidak ada data

			<?php } ?>
			
		</div>
		<?php require 'sidebar.php'; ?>
	</div>
	
			
	
		
		<div class="text-white footer">
			Copyright &copy; <?php echo date("Y"); ?> Sistem Informasi SDI Wali Songo Trowulan.
		</div>
	</div>

	<script src="resources/js/jquery.js"></script>
	<script src="resources/js/bootstrap.min.js"></script>
</body>
</html>