<?php  
  session_start();
  include 'koneksi.php';

  $nim      = $_POST['nim'];
  $password = $_POST['password'];

  $login = mysqli_query($koneksi, "SELECT * FROM user WHERE nim = '$nim' AND password = '$password'");

  $data = mysqli_fetch_assoc($login);
  // var_dump($data['level']);
  // die();

  $cek = mysqli_num_rows($login);
 
  if($cek > 0){
    $_SESSION['user_id'] = $data['idUser'];
    $_SESSION['user'] = $nim;
    $_SESSION['nama'] = $data['nama'];
    $_SESSION['level'] = $data['level'];
    if ($_SESSION['level']==0) {
      header("location:../result.php");
    }else{
      header("location:../dashboard.php");
    }     
  }else{
    header("location:../index.php");
  }
?>