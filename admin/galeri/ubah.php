<?php 
require_once '../../koneksi.php';
?>

<?php
	$galeri 	= mysqli_query($koneksi, "SELECT * FROM tbl_galeri WHERE id = '".$_GET['id']."' ");

	if(mysqli_num_rows($galeri) == 0){
		echo "<script>window.location='index.php'</script>";
	}

	   $p = mysqli_fetch_object($galeri);
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ubah Galeri - SDI WALI SONGO TROWULAN</title>
	<link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
</head>
<body>
	<?php require_once '../navbar.php'; ?>
	<div class="container mt-3">
		<div class="row">
			<div class="col">
				<div class="card shadow">
					<div class="card-header">
						<div class="clearfix">
							

					<div class="box-body">
						
						<form action="" method="POST" enctype="multipart/form-data">

							<div class="form-group">
								<label>Keterangan</label>
								<input type="text" name="keterangan" placeholder="Keterangan" value="<?= $p->keterangan ?>" class="input-control" required>
							</div>

							<div class="form-group">
								<label>Gambar</label>
								<img src="../../images/galeri/<?= $p->foto ?>" width="200px" class="image">
								<input type="hidden" name="gambar2" value="<?= $p->foto ?>">
								<input type="file" name="gambar" class="input-control">
							</div>

							<button type="button" class="btn btn-danger btn-sm" onclick="window.location = 'index.php'">Kembali</button>
							<input type="submit" name="submit" value="Simpan" class="btn btn-success btn-sm">
						</form>

						<?php

							if(isset($_POST['submit'])){

								$ket 	= addslashes(ucwords($_POST['keterangan']));
								$currdate = date('Y-m-d H:i:s');

								if($_FILES['gambar']['name'] != ''){

									// echo 'user ganti gambar';

									$filename 	= $_FILES['gambar']['name'];
									$tmpname 	= $_FILES['gambar']['tmp_name'];
									$filesize 	= $_FILES['gambar']['size'];

									$formatfile = pathinfo($filename, PATHINFO_EXTENSION);
									$rename 	= 'galeri'.time().'.'.$formatfile;

									$allowedtype = array('png', 'jpg', 'jpeg', 'gif');

									if(!in_array($formatfile, $allowedtype)){

										echo '<div class="alert alert-error">Format file tidak diizinkan.</div>';

										return false;

									}elseif($filesize > 10000000){

										echo '<div class="alert alert-error">Ukuran file tidak boleh lebih dari 1 MB.</div>';

										return false;

									}else{

										if(file_exists("../../images/galeri/".$_POST['gambar2'])){

											unlink("../../images/galeri/".$_POST['gambar2']);

										}

										move_uploaded_file($tmpname, "../../images/galeri/".$rename);

									}

								}else{

									// echo 'user tidak ganti gambar';

									$rename 	= $_POST['gambar2'];

								}

								$update = mysqli_query($koneksi, "UPDATE tbl_galeri SET
										keterangan = '".$ket."',
										foto = '".$rename."',
										updated_at = '".$currdate."'
										WHERE id = '".$_GET['id']."'
									");


								if($update){
									echo "<script>window.location='index.php?success=Edit Data Berhasil'</script>";
								}else{
									echo 'gagal edit '.mysqli_error($koneksi);
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

