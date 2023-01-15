<?php 
$query_artikel_terbaru = mysqli_query($koneksi, "SELECT * FROM tbl_artikel ORDER BY tanggal ASC LIMIT 6");
$query_kategori_artikel= mysqli_query($koneksi, "SELECT * FROM tbl_kategori_artikel LIMIT 6");

?>
<link rel="stylesheet" href="resources/css/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- fullcalendar css  -->
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
<div class="col-sm-4">

	<div class="list-group">
		<span class="list-group-item text-white" style="background-color: #1615f2">Artikel Terbaru</span>
		<?php while($artikel_terbaru = mysqli_fetch_assoc($query_artikel_terbaru)) : ?>
			<a href="detail_artikel.php?id=<?= $artikel_terbaru['id'] ?>" class="list-group-item list-group-item-action"><?= $artikel_terbaru['judul'] ?></a>
		<?php endwhile; ?>
	</div>

	<div class="list-group">
		<span class="list-group-item text-white mt-3" style="background-color: #1615f2">Kategori</span>
		<?php while($kategori_artikel = mysqli_fetch_assoc($query_kategori_artikel)) : ?>
			<a href="kategori.php?id=<?= $kategori_artikel['id'] ?>" class="list-group-item list-group-item-action"><?= $kategori_artikel['nama_kategori'] ?></a>
		<?php endwhile; ?>

	<br></div>

	<div class="list-group">
        <span class="list-group-item text-white" style="background-color: #1615f2">Kalender & Agenda</span>
        		<div class="container mt-4">
                    <div class="row">
                        <div class="col-lg-12">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
                <script src='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.js'></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
                    integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
                    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var calendarEl = document.getElementById('calendar');
                        var calendar = new FullCalendar.Calendar(calendarEl, {
                            initialView: 'dayGridMonth',
                            events: [ 
                            <?php 

                                //melakukan koneksi ke database
                                $koneksi    = mysqli_connect('localhost', 'root', '', 'sekolahku');
                                //mengambil data dari tabel jadwal
                                $data       = mysqli_query($koneksi,'select * from tbl_events');
                                //melakukan looping
                                while($d = mysqli_fetch_array($data)){     
                            ?>
                            {
                                title: '<?php echo $d['kegiatan']; ?>', //menampilkan title dari tabel
                                start: '<?php echo $d['mulai']; ?>', //menampilkan tgl mulai dari tabel
                                end: '<?php echo $d['selesai']; ?>' //menampilkan tgl selesai dari tabel
                            },
                            <?php } ?>
                            ],
                            selectOverlap: function (event) {
                                return event.rendering === 'background';
                            }
                        });
            
                        calendar.render();
                    });
                </script>
          
	</div>

    <div class="list-group">
        <span class="list-group-item text-white mt-3" style="background-color: #1615f2">Banner</span>
        <div class="list-group-item"> 
                <div class="bd-example">
                  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                         <a href='https://www.kemdikbud.go.id/main/'><img src="resources/images/Kemendikbud-Logo-1200-450.jpg" class="d-block w-100" alt="gambar"></br></a>
                      </div>
                      <div class="carousel-item">
                         <a href='https://belajar.kemdikbud.go.id/'><img src="resources/images/8935202_portal-2-logo-png-rumah-belajar-transparent-png.png" class="d-block w-100" alt="gambar"></br></a>
                      </div>
                      <div class="carousel-item">
                        <a href='https://bsnp-indonesia.org/'><img src="resources/images/BSNP-LOGO.jpg" class="d-block w-100" alt="gambar"></br></a>
                      </div>
                      <div class="carousel-item">
                        <a href='https://buku.kemdikbud.go.id/'><img src="resources/images/download.png" class="d-block w-100" alt="gambar"></br></a>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
                </div>
        </div>
    </div>

	<div class="list-group">
         <span class="list-group-item text-white mt-3" style="background-color: #1615f2">Kontak Kami</span>
		
		
           <div class="list-group-item"> 
                 <center>
                    <p><b>Alamat :</b> </p>
                		 <div class="d-none d-sm-block mb-5 pb-4">                   
                                <div class="row">
                                    <div class="col-md-12">    
                                    	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15819.87186010457!2d112.3933835!3d-7.578466!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e786de93d5d67b7%3A0x4b1473985e3cfe3c!2sSDI%20WALISONGO%20TEMON%20TROWULAN!5e0!3m2!1sen!2sid!4v1647045312805!5m2!1sen!2sid" style="width: 100%;height: 150%;position: relative;" src="" frameborder="0" allowfullscreen>></iframe> 
                                    </div>
                                 </div>
                    	</div> 
         
                    <p><br>Dusun Kepiting, Dinuk, Temon, Kec. Trowulan, Kabupaten Mojokerto, Jawa Timur 61362</br></p>
                    <p><b>Telepon : </b></p>
                    <p>08975724422</p>
                    <p><b>Email : </b></p>
                    <p>sdiwali09@gmail.com</p>
                </center>
                
            </div> 
        <div class="list-group">
            <span class="list-group-item text-white mt-3" style="background-color: #1615f2">Media Sosial</span>
            <div class="list-group-item">
                <center>
                    <p class="sosmed_inline">
                         <a href=" https://www.facebook.com/SDI-WALI-SONGO-103484108929790"><img src="images/facebook.png" onclick="_fb();" alt="facebook"> </a>
                         <a href="https://wa.me/08975724422"><img src="images/whatapps.png" onclick="_whatapps();" alt="whatapps"> </a>
                        <a href="mailto:sdiwali09@gmail.com"><img src="images/gmail.png" onclick="_gmail();" alt="gmail"> </a>
                         <a href="https://instagram.com/sdiwalisongo_"><img src="images/instagram.png" onclick="_instagram();" alt="instagram"> </a>
                     </p>
                </center>
            </div>
        </div>


     <div class="list-group">
        <span class="list-group-item text-white mt-3" style="background-color: #1615f2">Cuplikan</span>
         <div class="bd-example">
          <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <iframe width="350px" height="250px" src="https://www.youtube.com/embed/HFT7ATLQQx8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
              <div class="carousel-item">
                 <iframe width="350px" height="250px" src="https://www.youtube.com/embed/LlOQFUUwIhk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
              </div>
              <div class="carousel-item">
                <iframe width="350px" height="250px" src="https://www.youtube.com/embed/HFT7ATLQQx8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
       </div>
	</div>

</div>












