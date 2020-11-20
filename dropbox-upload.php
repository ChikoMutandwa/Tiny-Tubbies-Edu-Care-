<?php

require("database/classes.php");
include("include/functions.php");
session_start();

?>


<!doctype html>
<html>

<head>
  <title>Dropbox Upload</title>
  <link rel="stylesheet" type="text/css" href="css/dropbox.css">
  <script src="jscripts/upload.js"></script>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <!--<script src="/__build__/Dropbox-sdk.min.js"></script>
  -->

</head>

<body>
  <!-- Example layout boilerplate -->
  <header class="page-header">
    <br>
    <h1>
      DROPBOX FILE UPLOAD <i class="fab fa-dropbox"></i>
    </h1>

  </header>

  <!-- Example description and UI -->
  <section class="container">
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <div class="form-group">
      <form action="dbox-upload.php" method="POST" enctype="multipart/form-data">
        <div class="file-upload">
          <div class="image-upload-wrap">
            <input class="file-upload-input" type='file' name="fileToUpload" id="fileToUpload" onchange="readURL(this);" />
            <div class="drag-text">
              <h3>Drag and drop a file or select add Image</h3>
            </div>
          </div>
          <div class="file-upload-content">
            <img class="file-upload-image" src="#" alt="Thumbnail" />
            <div class="image-title-wrap">
              <button type="button" onclick="removeUpload()" class="remove-image">Remove <span class="image-title">Uploaded Image</span></button>
            </div>
          </div>
          <p>Insert a name for the file you are uploading. Example:(JohnGraham-FieldTripForm)</p>
          <input type="text" id="file-name" name="file-name" />
          <br>
          <br>
          <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Add File/Image</button>
          <br>
          <br>
          <button class="file-upload-btn" type="submit" name="submit">Submit</button>



        </div>
      </form>
    </div>

    <!-- A place to show the status of the upload -->
    <h2 id="results"></h2>
  </section>
  <script>
    //XMLHTTPREQUEST SCRIPT BELOW
    /*
        File file = new File() document.getElementById("file-upload-input");
        var xhr = new XMLHttpRequest();
        xhr.upload.onprogress = function (evt) {
          var percentComplete = parseInt(100.0 * evt.loaded / evt.total);
          // Upload in progress. Do something here with the percent complete.
        };
        xhr.onload = function () {
          if (xhr.status === 200) {
            var fileInfo = JSON.parse(xhr.response);
            // Upload succeeded. Do something here with the file info.
            console.log("Successful Upload");
          }
          else {
            var errorMessage = xhr.response || 'Unable to upload file';
            // Upload failed. Do something here with the error;.
            console.log("Unsuccessful Upload");
          }
        };
        xhr.open('POST', 'https://content.dropboxapi.com/2/files/upload');
        xhr.setRequestHeader('Authorization', 'Bearer ' + "S07kFRNwndkAAAAAAAAAAfcJIzWpX7N0ovOu7Uruduu0VsoshEIm5kMhlLR-7KyO");
        xhr.setRequestHeader('Content-Type', 'application/octet-stream');
        xhr.setRequestHeader('Dropbox-API-Arg', JSON.stringify({
          path: '/TinyTubbies' + "" + document.getElementById("file-name"),
          mode: 'add',
          autorename: true,
          mute: false
        }));
        xhr.send(file);
    */
  </script>
</body>

</html>