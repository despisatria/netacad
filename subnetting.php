<?php  
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

    <title>IP Address Subnetting</title>
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
                    <li><a href="dashboard.php">Materi</a></li>
                    <li class="active">IP Address Subnetting</li>                  
                  </ol>
                </span>
              </div>
              <div class="col-md-4 text-right">
                <span>Halo, Desphi Satria</span>
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
                          <a href="#materi" aria-controls="materi" role="tab" data-toggle="tab">Apa itu Subnetting ?</a>
                        </li>
                        <li role="presentation">
                          <a href="#materi2" aria-controls="materi" role="tab" data-toggle="tab">Cara Subnetting</a>
                        </li>
                        <li role="presentation">
                          <a href="#materi3" aria-controls="materi" role="tab" data-toggle="tab">VLSM</a>
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
                              <form action="upload.php" class="form-signin">
                                <div class="form-group">
                                  <input type="file" class="form-control" id="nama" placeholder="Masukan kata sandi">
                                </div>
                                <div class="menu-card-class">
                                  <button type="submit" class="btn btn-default">Unggah</button>
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