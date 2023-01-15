<?php 
 function input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
require_once 'koneksi.php';
 $id=input($_GET['id']);
if (!isset($_GET['id']) || $_GET['id'] == '') header('Location: index.php');
$id = $_GET['id'];
$query = mysqli_query($koneksi, "SELECT * FROM tbl_artikel WHERE id = $id");
$data = mysqli_fetch_assoc($query);
$aktif = 'artikel';
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
					<?= $data['judul'] ?> (<?= date('d M y', strtotime($data['tanggal'])) ?>)
				</div>
				<div class="artikel">
					<img src="images/artikel/<?= $data['foto'] ?>" alt="" width="100%" class="float-left mb-3 img-thumbnail">
					<?= $data['isi'] ?>
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