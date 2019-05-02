<?php
  session_start();
  include 'config/koneksi.php';

  $currentDir = getcwd();
  $uploadDirectory = "/uploads/";

  $errors = []; // Store all foreseen and unforseen errors here

  $fileExtensions = ['pkt','doc','docx','pdf']; // Get all the file extensions

  $fileName = $_FILES['upload']['name'];
  $fileSize = $_FILES['upload']['size'];
  $fileTmpName  = $_FILES['upload']['tmp_name'];
  $fileType = $_FILES['upload']['type'];
  $fileExtension = explode('.',$fileName);
  $fileExtension = strtolower(end($fileExtension));

  $uploadPath = $currentDir . $uploadDirectory . basename($fileName); 
  $string = $_SERVER['SERVER_NAME']."/netacad".$uploadDirectory . basename($fileName); 

  if (isset($_POST['submit'])) {

    if (! in_array($fileExtension,$fileExtensions)) {
      $errors[] = "This file extension is not allowed. Please upload a JPEG or PNG file";
    }

    if ($fileSize > 2000000) {
      $errors[] = "This file is more than 2MB. Sorry, it has to be less than or equal to 2MB";
    }

    if (empty($errors)) {
      $didUpload = move_uploaded_file($fileTmpName, $uploadPath);

      if ($didUpload) {
        $userid = $_SESSION['user_id'];
        mysqli_query($koneksi, "INSERT INTO file VALUES (NULL, '$userid', '" . basename($fileName) . "', '$string')");
        echo "The file " . basename($fileName) . " has been uploaded";
        header("location:ipaddress.php");
      } else {
        echo "An error occurred somewhere. Try again or contact the admin";
      }
    } else {
      foreach ($errors as $error) {
        echo $error . "These are the errors" . "\n";
      }
    }
  }


  ?>