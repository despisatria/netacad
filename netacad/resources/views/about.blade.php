<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join Educode and learn to code from the best online free courses programs.">
    <link rel="icon" href="asset/img/favicon.png">

    <title>Tentang</title>
    <link href='{{ asset("css/bootstrap.min.css") }}' rel='stylesheet'>
    <link href='{{ asset("css/font-awesome.min.css") }}' rel='stylesheet'>
    <link href='{{ asset("css/animate.min.css") }}' rel='stylesheet'>
    <link href='{{ asset("css/sweetalert.css") }}' rel='stylesheet'>
    <link href='{{ asset("css/style.css") }}' rel='stylesheet'>
    
    <script src='{{ asset("js/jquery.min.js") }}'></script>
    <script src='{{ asset("js/bootstrap.min.js") }}'></script>
    <script src='{{ asset("js/waypoint.min.js") }}'></script>
    <script src='{{ asset("js/sweetalert.min.js") }}'></script>
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
                <img src="{{ asset('/img/netacad-white1.png') }}" width="178px;">
              </div>
              <div class="nav">
                <ul class="list-group">
                  <li>
                    <a href="dashboard.php" class="list-group-item active">
                      <i class="fa fa-home fa-2x fa-fw " aria-hidden="true"></i><span> Beranda</span>
                    </a>
                  </li>
                  <li>
                    <a href="evaluasi.php" class="list-group-item">
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
                    <li class="active">Tentang</li>                  
                  </ol>
                </span>
              </div>
              <div class="col-md-4 text-right">
                <span>Halo, Desphi Satria</span>
              </div>
            </div>
            <div class="content">
              <div class="apps-msg">
                <h1>Tentang NETACAD.</h1>
                <div class="col-md-10 col-md-offset-1">
                  <div class="row card-apps card-1st">
                    <div class="col-md-6 text-left animated fadeIn" style="opacity: 0;">
                      <i class="fa fa-graduation-cap fa-5x" aria-hidden="true"></i>
                      <p>NETACAD (Network Academy) merupakan Media Pembelajaran berbasis WEB untuk menunjang Perkuliahan Praktikum Jaringan Komputer di Departemen Pendidikan Ilmu Komputer UPI.</p>
                    </div>
                    <div class="col-md-6 animated fadeInRight" style="opacity: 0;"><img class="img-responsive" src="{{ asset('/img/post1.jpg') }}"></div>
                  </div>
                  <div class="row card-apps">
                    <div class="col-md-6 col-md-push-6 text-right fadeIn animated" style="opacity: 0;">
                      <i class="fa fa-thumbs-up fa-5x" aria-hidden="true"></i>
                      <p>Dalam NETACAD kalian akan belajar Jaringan Komputer lebih mudah dengan Integrated Real-Life Video Animation, penjelasan materi dengan integrasi video dan animasi akan membantumu untuk lebih mudah memahami materi.</p>
                    </div>
                    <div class="col-md-6 col-md-pull-6 fadeInUp animated" style="opacity: 0;"><img class="img-responsive" src="{{ asset('/img/post2.jpg') }}"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>