
<!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Events - SDI WALI SONGO TROWULAN</title>
        <link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
        <link rel="stylesheet" href="../../resources/css/bootstrap.min.css">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap cdn  -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <!-- fullcalendar css  -->
        <link href='https://cdn.jsdelivr.net/npm/fullcalendar@5.8.0/main.css' rel='stylesheet' />
    </head>
    
    <body>
        <?php require_once '../navbar.php'; ?>
        <div class="container mt-4">
            <div class="row">
                <div class="col-lg-4">
                    <div class="alert alert-warning" role="alert">
                        <h4>Form Kegiatan</h4>
                    </div>
                    <div class="card">
                        <form action="proses.php" method="POST">
                            <div class="card-body">
                                <div class="form-group">
                                    <div class="form-label">Keterangan Kegiatan</div>
                                    <textarea name="kegiatan" class="form-control" id="kegiatan" cols="30"
                                        rows="2"></textarea>
                                </div>
                                <div class="form-group mt-4">
                                    <div class="form-label">Tgl Mulai</div>
                                    <input type="datetime-local" class="form-control" name="mulai" id="mulai">
                                </div>
                                <div class="form-group mt-4">
                                    <div class="form-label">Tgl Selesai</div>
                                    <input type="datetime-local" class="form-control" name="selesai" id="selesai">
                                </div>
                                <td>
                                <div class="form-group mt-4">
                                    <button type="submit" class="btn btn-success">Simpan</button>
                                </div>
                                <div class="form-group mt-4">
                                    <button href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</button>
                                </div>
                                
                                 </td>
                                
                                
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
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
    </body>
    
    </html>