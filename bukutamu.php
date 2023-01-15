<?php 
require_once 'koneksi.php';
$aktif = 'bukutamu'; 
?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="resources/images/sekolah-sdi-web.png">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Buku Tamu - SDI Wali Songo Trowulan</title>
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
					Buku Tamu SDI Wali Songo Trowulan
				</div>
				<div>
					<form method="POST" action="proses_bukutamu.php">
						<div class="form-group">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" placeholder="Nama" autocomplete="off" required="required" name="nama">
						</div>
						<div class="form-group">
							<label for="email">Email</label>
							<input type="Email" class="form-control" id="email" placeholder="Email" autocomplete="off" required="required" name="email">
						</div>
						<div class="form-group">
							<label for="isi">Isi</label>
							<textarea name="isi" class="form-control" rows="5" maxlength="250" placeholder="Maksimal 250 karakter"></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-sm btn-primary" name="kirim">Kirim</button>
							<button type="reset" class="btn btn-sm btn-danger" onclick="return confirm('apakah anda yakin?')">Batal</button>
						</div>
					</form>
				</div>
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