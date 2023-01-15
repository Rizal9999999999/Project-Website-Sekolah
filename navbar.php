<link rel="shortcut icon" href="resources/images/sekolah-sdi-web.png">
<nav class="navbar navbar-expand-lg nav-orange">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
<!-- box menu mobile -->
	<div class="box-menu-mobile" id="mobileMenu">
		<span onclick="hideMobileMenu()">Close</span>
		<ul class="text-center">
			<li><a href="index.php">Home</a></li>
			<li><a href="tentang_website.php">Tentang Website</a></li>
			<li><a href="https://anbk.kemdikbud.go.id/">ANBK</a></li>
			<li><a href="siswa.php">Data Siswa</a></li>
			<li><a href="guru.php">Data Guru</a></li>
			<li><a href="galeri.php">Galeri</a></li>
			<li><a href="jurusan.php">Daftar Kelas</a></li>
			<li><a href="artikel.php">Artikel</a></li>
			<li><a href="ekskul.php">Ekskul</a></li>
			<li><a href="visi_misi.php">Visi Misi</a></li>
			<li><a href="bukutamu.php">Buku Tamu</a></li>
			<li><a href="file.php">Download</a></li>
		</ul>
	</div>

<div class="container">
	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		<div class="navbar-nav">
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'home' ? 'active' : '' ?>" href="index.php">HOME</a>
			<li class="nav-item dropdown">
				<a class="nav-item nav-link text-white navlink <?= $aktif == 'profil ' ? 'active' : '' ?> dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown"> PROFIL</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="tentang_website.php">Tentang Website</a>
					<a class="dropdown-item" href="https://anbk.kemdikbud.go.id/">ANBK</a>
					<a class="dropdown-item" href="siswa.php">Data Siswa</a>
					<a class="dropdown-item" href="guru.php">Data Guru</a>
					<a class="dropdown-item" href="galeri.php">Galeri</a>
					<a class="dropdown-item" href="jurusan.php">Daftar Kelas</a>
				</div>
			</li>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'artikel' ? 'active' : '' ?>" href="artikel.php">ARTIKEL</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'ekskul' ? 'active' : '' ?>" href="ekskul.php">EKSKUL</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'visi_misi' ? 'active' : '' ?>" href="visi_misi.php">VISI MISI</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'bukutamu' ? 'active' : '' ?>" href="bukutamu.php">BUKUTAMU</a>
			<a class="nav-item nav-link text-white navlink <?= $aktif == 'download' ? 'active' : '' ?>" href="file.php">DOWNLOAD</a>
		</div>
	</div>
	<div class="mobile-menu-btn text-center">
				<a href="#" onclick="showMobileMenu()">Menu</a>
			</div>
</div>
<script type="text/javascript">
		
		var mobileMenu = document.getElementById("mobileMenu")

		function showMobileMenu(){
			mobileMenu.style.display = "block"
		}

		function hideMobileMenu(){
			mobileMenu.style.display = "none"
		}

	</script>
</nav>