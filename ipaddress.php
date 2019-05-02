<?php  
  include "config/koneksi.php";
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join Educode and learn to code from the best online free courses programs.">
    <link rel="icon" href="asset/img/favicon.png">

    <title>NETACAD | IP Addressing</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <?php  
          include 'sidebar.php';
        ?>
        <div class="col-md-10">
          <div class="row">
            <div class="title-page">
              <div class="col-md-6">
                <span>
                  <ol class="breadcrumb">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li class="active">IP Addressing</li>                  
                  </ol>
                </span>
              </div>
              <div class="col-md-4 text-right">
                <span>Halo,
                  <?php  
                    echo $_SESSION['nama']; 
                  ?>!
                </span>
              </div>
            </div>
            <div class="content">
              <div class="col-md-12">
                <div class="col-md-12">
                  <div class="row">
                    <div class="col-md-2 program-list">
                      <span>Pematerian</span>
                      <ul class="nav nav-tabs nav-program" role="tablist">
                        <li role="presentation" class="active">
                          <a href="#materi" aria-controls="materi" role="tab" data-toggle="tab">Apa itu IP Address ?</a>
                        </li>
                        <li role="presentation">
                          <a href="#materi2" aria-controls="materi" role="tab" data-toggle="tab">Jenis IP Address</a>
                        </li>
                        <li role="presentation">
                          <a href="#materi3" aria-controls="materi" role="tab" data-toggle="tab">Network ID dan Host ID</a>
                        </li>
                        <li role="presentation">
                          <a href="#materi4" aria-controls="materi" role="tab" data-toggle="tab">Prefix dan Subnetmask</a>
                        </li>
                        <li role="presentation">
                          <a href="#materi5" aria-controls="materi" role="tab" data-toggle="tab">Kelas IP Address</a>
                        </li>
                        <li role="presentation">
                          <a href="#materi5" aria-controls="materi" role="tab" data-toggle="tab">Subnetting</a>
                        </li>
                        <li role="presentation">
                          <a href="#materi5" aria-controls="materi" role="tab" data-toggle="tab">VLSM</a>
                        </li>
                        <span>Latihan Praktik</span>
                        <li role="presentation">
                          <a href="#praktik1" aria-controls="praktik" role="tab" data-toggle="tab">Latihan1</a>
                        </li>
                      </ul>
                    </div>
                    <div class="col-md-10">
                      <div class="body-card-setting">
                        <div class="setting-page">
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="materi">
                              <div class="embed-responsive embed-responsive-16by9">
                                <!-- <iframe src="asset/video/program1.mp4" frameborder="0" allowfullscreen autoplay></iframe> -->
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="materi2">
                              <div class="embed-responsive embed-responsive-16by9">
                                
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="materi3">
                              <div class="embed-responsive embed-responsive-16by9">
                                
                              </div>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="praktik1">
                              <h1>Unggah File Latihan Praktik</h1>
                              <span class="setting-informasi">Silahkan unggah file Cisco Packet Tracer (.pkt) yang anda buat</span><br>
                              <form action="upload.php" method="post" class="form-signin" enctype="multipart/form-data">
                                <div class="form-group">
                                  <input type="file" class="form-control" name='upload' id="nama">
                                </div>
                                <div class="menu-card-class">
                                  <div class="row">
                                    <div class="col-md-6" style="text-align: left;">
                                      <?php 
                                        $file = mysqli_query($koneksi,"SELECT * FROM file WHERE idUser = '$_SESSION[user_id]'");
                                        if (mysqli_num_rows($file) > 0) {
                                          while($row = mysqli_fetch_assoc($file)) {
                                            $lokasi = $row['lokasiFile'];
                                            $nama = $row['namaFile'];
                                          }
                                          echo "<a href='" . "http://" .$lokasi."' target='_blank'>$nama</a><br>";
                                        }
                                        
                                      ?>
                                      <a href="C:xampphtdocsnetacad/uploads/ROUNDDOWN RW 07 BERSHOLAWAT.docx"></a>
                                    </div>
                                    <div class="col-md-6">
                                      <input type="submit" name="submit" class="btn btn-success" value="Unggah"></input>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
  </body>
</html>