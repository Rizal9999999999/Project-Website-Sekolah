<?php
require_once '../../koneksi.php';
//check if form is submitted
if (isset($_POST['submit']))
{
    $filename = $_FILES['file1']['name'];

    //upload file
    if($filename != '')
    {
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        $allowed = ['pdf', 'txt', 'doc', 'docx', 'png', 'jpg', 'jpeg',  'gif'];
    
        //check if file type is valid
        if (in_array($ext, $allowed))
        {
            // get last record id
            $sql = 'select max(id) as id from tbl_files';
            $result = mysqli_query($koneksi, $sql);
            if (count($result) > 0)
            {
                $row = mysqli_fetch_array($result);
                $filename = ($row['id']) . $filename;
            }
            else
                $filename = '1' . '-' . $filename;

            //set target directory
            $path = '../../images/file/';
                
            $created = @date('Y-m-d H:i:s');
            move_uploaded_file($_FILES['file1']['tmp_name'],($path . $filename));
            
            // insert file details into database
            $sql = "INSERT INTO tbl_files(filename, created) VALUES('$filename', '$created')";
                                mysqli_query($koneksi, $sql);
            header("Location: index.php?st=success");
        }
        else
        {
            header("Location: index.php?st=error");
        }
    }
    else
        header("Location: index.php");
}
?>