<?php 
require_once '../../koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Galeri - SDI WALI SONGO TROWULAN</title>
	<link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
</head>
<!-- content -->
		<body>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							</div>

					<div class="box-body">
						
						<form action="" method="POST" enctype="multipart/form-data">
							
							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" name="keterangan" placeholder="Keterangan" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Gambar</label>
								<input type="file" name="gambar" class="input-control" required>
							</div>

							<button type="button" class="btn btn-danger btn-sm" onclick="window.location = 'index.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-success btn-sm">
						</form>

						<?php

							if(isset($_POST['submit'])){

								$ket 	= addslashes(ucwords($_POST['keterangan']));

								$filename 	= $_FILES['gambar']['name'];
								$tmpname 	= $_FILES['gambar']['tmp_name'];
								$filesize 	= $_FILES['gambar']['size'];

								$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
								$rename 	= 'galeri'.time().'.'.$formatfile;

								$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

								if(!in_array($formatfile, $allowedtype)){

									echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';

								}elseif($filesize > 10000000){

									echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';

								}else{

									move_uploaded_file($tmpname, "../../images/galeri/".$rename);

									$simpan = mysqli_query($koneksi, "INSERT INTO tbl_galeri VALUES (
											null,
											'".$rename."',
											'".$ket."',
											null,
											null
									)");

									if($simpan){
										echo '<div class="alert alert-success">Simpan Berhasil</div>';
									}else{
										echo 'gagal simpan '.mysqli_error($koneksi);
									}

								}

							}

						?>

					</div>

				</div>

			</div>

		</div>
		<script src="../../resources/js/jquery.js"></script>
	<script src="../../resources/js/bootstrap.min.js"></script>
	<script src="../../resources/datatables/datatables.min.js"></script>
	<script src="../../resources/datatables/datatable.js"></script>
</body>
</html>
