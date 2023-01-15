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
							<div class="float-left">
								Daftar 
							</div>
							<div class="float-right">
								<a href="tambah-galeri.php">Tambah</a>
							</div>
							</div>
					</div>
					<div class="card-body">
						<?php if(isset($_SESSION['sukses'])) : ?>
						<div class="alert alert-success alert-dismissible fade show" role="alert">
							<strong>Berhasil!</strong> <?= $_SESSION['sukses'] ?>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<?php unset($_SESSION['sukses']) ?>
						<?php elseif(isset($_SESSION['gagal'])) : ?>
							<div class="alert alert-danger alert-dismissible fade show" role="alert">
								<strong>Gagal!</strong> <?= $_SESSION['gagal'] ?>
								<button type="button" class="close" data-dismiss="alert" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
						<?php unset($_SESSION['gagal']) ?>
						<?php endif; ?>
						<table id="table_id" class="dataTable table table-bordered">
						    <thead>
						        <tr>
						            <th>No</th>
						            <th width="50px">Foto</th>
						            <th>Keterangan</th>
						            <th>Aksi</th>
						        </tr>
						    </thead>
							<tbody>
								<?php
								$no = 1;
									$where = " WHERE 1=1 ";
									if(isset($_GET['key'])){
										$where .= " AND keterangan LIKE '%".addslashes($_GET['key'])."%' ";
									}

									$galeri = mysqli_query($koneksi, "SELECT * FROM tbl_galeri $where ORDER BY id DESC");
									if(mysqli_num_rows($galeri) > 0){
										while($p = mysqli_fetch_array($galeri)){
								?>
								<tr>
									<td><?= $no++ ?></td>
									<td><img src="../../images/galeri/<?= $p['foto'] ?>" width="100px"></td>
									<td><?= $p['keterangan'] ?></td>
										<td>
						        			<a href="ubah.php?id=<?= $p['id'] ?>" class="btn btn-success btn-sm">Ubah</a>
											<a href="hapus.php?idgaleri=<?= $p['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a>
						        		</td>
								</tr>

							<?php }}else{ ?>
								<tr>
									<td colspan="4">Data tidak ada</td>
								</tr>
							<?php } ?>
							</tbody>
						</table>
						</div>
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

					