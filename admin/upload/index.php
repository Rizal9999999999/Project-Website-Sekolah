<?php 
require_once '../../koneksi.php';
$sql = "select filename from tbl_files";
$query = mysqli_query($koneksi, "SELECT id, filename, created FROM tbl_files");
$no = 1;
$active = 'upload';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upload - SDI WALI SONGO TROWULAN</title>
    <link rel="stylesheet" href="../../resources/datatables/datatables.min.css">
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

        <form action="upload.php" method="post" enctype="multipart/form-data">
            <legend>Select File to Upload:</legend>
            <div class="form-group">
                <input type="file" name="file1" />
            </div>
            <div class="form-group">
                <input type="submit" name="submit" value="Upload" class="btn btn-info"/>
            </div>
            <?php if(isset($_GET['st'])) { ?>
                <div class="alert alert-danger text-center">
                <?php if ($_GET['st'] == 'success') {
                        echo "File Uploaded Successfully!";
                    }
                    else
                    {
                        echo 'Invalid File Extension!';
                    } ?>
                </div>
            <?php } ?>
        </form>
        </div>
    </div>
    
               
                        <table id="table_id" class="dataTable table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>File Nama</th>
                                    <th>Tanggal Upload</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                <?php
                $no = 1;
                while($row = mysqli_fetch_assoc($query)) : ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $row['filename']; ?></td>
                    <td><?php echo $row['created']; ?></td>
                    <td>
                         <a href="ubah.php?id=<?= $row['id'] ?>" class="btn btn-success btn-sm">Ubah</a>
                        <a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('apakah anda yakin?')">Hapus</a>
                    </td>
                    
                </tr>
                <?php endwhile; ?>
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