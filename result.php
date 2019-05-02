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

    <title>Admin</title>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="asset/css/font-awesome.min.css" rel="stylesheet">
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/animate.min.css" rel="stylesheet">
    <link href="asset/css/datatable.css" rel="stylesheet">
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
                    <a href="result.php" class="list-group-item active">
                      <i class="fa fa-bar-chart fa-2x fa-fw " aria-hidden="true"></i><span> Hasil Evaluasi</span>
                    </a>
                  </li>
                  </li>
                    <a href="logout.php" class="list-group-item">
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
                    <li class="active">Hasil Evaluasi</li>               
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
                  <div class="col-md-6">
                    <a href="result-ipaddress.php">
                      <div class="body-card fadeInUp animated">
                        <div class="thumb-card program1">
                          <div class="thumb-overlay1"></div>
                        </div>
                        <div class="title-card">
                          <span class="lg-title">Basic Networking</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="result-ipaddress.php">
                      <div class="body-card fadeInUp animated">
                        <div class="thumb-card program2">
                          <div class="thumb-overlay2"></div>
                        </div>
                        <div class="title-card">
                          <span class="lg-title">IP Addressing</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="result-ipaddress.php">
                      <div class="body-card fadeInUp animated">
                        <div class="thumb-card program4">
                          <div class="thumb-overlay4">
                          </div>
                        </div>
                        <div class="title-card">
                          <span class="lg-title">Network Routing</span>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6">
                    <a href="result-ipaddress.php">
                      <div class="body-card fadeInUp animated">
                        <div class="thumb-card program5">
                          <div class="thumb-overlay5">
                          </div>
                        </div>
                        <div class="title-card">
                          <span class="lg-title">Virtual Local Area Network</span>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="asset/js/jquery.min.js"></script>
    <script src="asset/js/jquery-3.3.1.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    <script src="asset/js/waypoint.min.js"></script>
    <script src="asset/js/datatable.js"></script>
    <script src="asset/js/datatable-bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
          $('#example').DataTable();
      } );
    </script>
  </body>
</html>