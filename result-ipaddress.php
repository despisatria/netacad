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

    <title>Result - IP Address</title>
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
                  <li>
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
                    <li><a href="result.php">Hasil Evaluasi</a></li>
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
              <div class="col-md-10 col-md-offset-1">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                      <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Nilai</th>
                      </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>1501702</td>
                      <td>Desphi Satria Nurjaya</td>
                      <td>100</td>
                    </tr>
                    <tr>
                      <td>1504919</td>
                      <td>Ziady Mubaraq</td>
                      <td>90</td>
                    </tr>
                    <tr>
                      <td>1500655</td>
                      <td>Taufik Dzikri Pangestu</td>
                      <td>95</td>
                    </tr>
                  </tbody>
                  <!-- <tfoot>
                    <tr>
                      <th>NIM</th>
                      <th>Nama</th>
                      <th>Nilai</th>
                    </tr>
                  </tfoot> -->
                  </table>
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