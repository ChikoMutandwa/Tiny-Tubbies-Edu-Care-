<?php
require("database/classes.php");
include("include/functions.php");
session_start();


    if (isset($_POST['submit'])) {
        if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] === UPLOAD_ERR_OK) {

            $fileTmpPath = $_FILES['fileToUpload']['tmp_name'];
            $fileName = $_FILES['fileToUpload']['name'];
            $fileSize = $_FILES['fileToUpload']['size'];
            $fileType = $_FILES['fileToUpload']['type'];
            $fileNameCmps = explode(".", $fileName);
            $fileExtension = strtolower(end($fileNameCmps));

            $newFileName = md5(time() . $_POST{'file-name'}) . '.' . $fileExtension;

            $allowedfileExtensions = array('jpg', 'gif', 'png', 'zip', 'txt', 'xls', 'doc', 'pdf', 'docx');
            if (in_array($fileExtension, $allowedfileExtensions)) {
                $uploadFileDir = 'private/';
                $dest_path = $uploadFileDir . $newFileName; 
                        
                if (move_uploaded_file($fileTmpPath, $dest_path)) {
                    $upload_new_files = (new Files)->upload($fileName, $fileType, $fileSize, $dest_path);
                    echo "<script>alert('File is successfully uploaded.')</script>";
                    header("Location: dropbox-upload.php?UploadSuccessful");
                } else {
                    echo "<script>alert('There was some error moving the file to private directory. Please make sure the upload directory is writable by web server.')</script>";
                    header("Location: dropbox-upload.php");
                }
            }
        }
    }
