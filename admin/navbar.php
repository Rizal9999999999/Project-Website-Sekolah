<?php
require_once 'cek_session.php';
$base_url = "http://localhost/web_sekolah/" 
?>
<link rel="shortcut icon" href="sekolah-sdi-web.png">
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
	<div class="container">
		<ul class="navbar-nav">
			
				<img src="sekolah-sdi-web.png" alt="Logo Sekolah" width="50px" class="float-left mr-3">
		
			<li class="nav-item">
				<a class="nav-link <?= $active == 'dashboard' ? 'active' : '' ?>" href="<?= $base_url ?>admin">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= $base_url ?>" target="_blank">Lihat Website</a>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'artikel' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Artikel</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/kategori_artikel/index.php">Data Kategori Artikel</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/artikel/index.php">Data Artikel</a>
				</div>
			</li>
			<li class="nav-item dropdown">
				<a class="nav-link <?= $active == 'master' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data Master</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="<?= $base_url ?>admin/guru/index.php">Data Guru</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/jurusan/index.php">Data Kelas</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/siswa/index.php">Data Siswa</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/ekskul/index.php">Data Ekskul</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/pengguna/index.php">Data Pengguna</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/upload/index.php">Upload</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/galeri/index.php">Galeri</a>
					<a class="dropdown-item" href="<?= $base_url ?>admin/calender/index.php">Events</a>
				</div>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'visi_misi' ? 'active' : '' ?> " href="<?= $base_url ?>admin/visi_misi.php">Visi Misi</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'bukutamu' ? 'active' : '' ?> " href="<?= $base_url ?>admin/bukutamu.php">Bukutamu</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?= $active == 'tentang_website' ? 'active' : '' ?> " href="<?= $base_url ?>admin/tentang_website.php">Tentang Website</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?= $base_url ?>admin/logout.php" onclick="return confirm('apakah anda yakin?')">Logout</a>
			</li>
		</ul>
	</div>
</nav>