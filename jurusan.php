<?php 

require_once 'koneksi.php';
$query = mysqli_query($koneksi, "SELECT tbl_jurusan.id AS id, tbl_jurusan.nama_jurusan, tbl_jurusan.ka_prodi, tbl_guru.nama, tbl_guru.id AS id_guru FROM tbl_jurusan LEFT JOIN tbl_guru on tbl_jurusan.ka_prodi = tbl_guru.id");
$aktif = 'jurusan';
$no = 1;
?>
<!DOCTYPE html>
<html>
<link rel="shortcut icon" href="resources/images/sekolah-sdi-web.png">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Daftar Kelas - SDI Wali Songo Trowulan</title>
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
					Daftar Kelas
				</div>
				<table id="table_id" class="dataTable table table-bordered">
				    <thead>
				        <tr>
				            <th>No</th>
				            <th>Kelas</th>
				            <th>Wali Kelas</th>
				        </tr>
				    </thead>
				    <tbody>
				        <?php while($row = mysqli_fetch_assoc($query)) : ?>
				        	<tr>
				        		<td><?= $no++ ?></td>
				        		<td><?= $row['nama_jurusan'] ?></td>
				        		<td><a href="detail_guru.php?id=<?= $row['id_guru'] ?>" target="_blank"><?= isset($row['nama']) ? $row['nama'] : '-' ?></a></td>
				        	</tr>
						<?php endwhile; ?>
				    </tbody>
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