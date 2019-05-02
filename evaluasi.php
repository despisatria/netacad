<?php  
  session_start();
  if ($_SESSION['user_id'] != NULL){
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join Educode and learn to code from the best online free courses programs.">
    <link rel="icon" href="asset/img/favicon.png">

    <title>NETACAD | Evaluasi</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/animate.min.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="row">
            <div class="menu-dash">
              <div class="header-dash">
                <img src="asset/img/netacad-white1.png" width="178px;">
              </div>
              <div class="nav">
                <ul class="list-group">
                  <li>
                    <a href="dashboard.php" class="list-group-item">
                      <i class="fa fa-home fa-2x fa-fw " aria-hidden="true"></i><span> Beranda</span>
                    </a>
                  </li>
                  <li>
                    <a href="evaluasi.php" class="list-group-item active">
                      <i class="fa fa-book fa-2x fa-fw" aria-hidden="true"></i><span> Evaluasi</span>
                    </a>
                  </li>
                  <li>
                    <a href="about.php" class="list-group-item">
                      <i class="fa fa-info-circle fa-2x fa-fw" aria-hidden="true"></i><span> Tentang</span>
                    </a>
                  </li>
                  <li>
                    <a href="config/logout.php" class="list-group-item">
                      <i class="fa fa-sign-out fa-2x fa-fw" aria-hidden="true"></i><span> Keluar</span>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-10">
          <div class="row">
            <div class="title-page">
              <div class="col-md-6">
                <span>
                  <ol class="breadcrumb">
                    <li class="active">Evaluasi</li>                  
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
              <div class="col-md-10 col-md-offset-1">
                <div class="program-card">
                  <div class="col-md-12">
                    <div class="body-card-class fadeInUp animated bg-card">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="top-card-class">
                            <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
                            &nbsp;&nbsp;
                            <span> Nilai : 100</span>
                            <h3>Basic Networking</h3>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="menu-card-catalog">
                            <div class="bar-skill">
                              <i class="fa fa-book active" aria-hidden="true"></i>
                            </div>
                            <span>10 Soal</span>
                            <a href="eval-ipaddress.php" class="btn btn-success">Mulai</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="body-card-class fadeInUp animated bg-card">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="top-card-class">
                            <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
                            &nbsp;&nbsp;
                            <span> Nilai : 80</span>
                            <h3>IP Addressing & Subnetting</h3>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="menu-card-catalog">
                            <div class="bar-skill">
                              <i class="fa fa-book active" aria-hidden="true"></i>
                            </div>
                            <span>20 Soal</span>
                            <a href="eval-ipaddress.php" class="btn btn-success">Mulai</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="body-card-class fadeInUp animated bg-card">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="top-card-class">
                            <i class="silver fa fa-trophy fa-2x" aria-hidden="true"></i>
                            &nbsp;&nbsp;
                            <span> Nilai : N/A</span>
                            <h3>Network Routing</h3>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="menu-card-catalog">
                            <div class="bar-skill">
                              <i class="fa fa-book active" aria-hidden="true"></i>
                            </div>
                            <span>20 Soal</span>
                            <a href="eval-ipaddress.php" class="btn btn-success">Mulai</a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="body-card-class fadeInUp animated bg-card">
                      <div class="row">
                        <div class="col-md-10">
                          <div class="top-card-class">
                            <i class="silver fa fa-trophy fa-2x" aria-hidden="true"></i>
                            &nbsp;&nbsp;
                            <span> Nilai : N/A</span>
                            <h3>Virtual Local Area Network</h3>
                          </div>
                        </div>
                        <div class="col-md-2">
                          <div class="menu-card-catalog">
                            <div class="bar-skill">
                              <i class="fa fa-book active" aria-hidden="true"></i>
                            </div>
                            <span>20 Soal</span>
                            <a href="eval-ipaddress.php" class="btn btn-success">Mulai</a>
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
    <script src="asset/js/waypoint.min.js"></script>
    
  </body>
</html>
<?php
} else {
  header('location: index.php');
}
?>