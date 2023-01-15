<?php

    //mengambil data dari form input
    $kegiatan   = $_POST['kegiatan'];
    $mulai      = $_POST['mulai'];
    $selesai    = $_POST['selesai'];

    //membuat koneksi ke database
    $koneksi = mysqli_connect('localhost', 'root', '', 'sekolahku');

    //insert data ke dalam database
    mysqli_query($koneksi, "insert into tbl_events set kegiatan='$kegiatan', mulai='$mulai', selesai='$selesai' ");
    

    //kembali ke halaman index.php
    header("location: index.php");

?>