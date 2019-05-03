<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Join Educode and learn to code from the best online free courses programs.">
    <link rel="icon" href="asset/img/favicon.png">

    <title>@yield('title')</title>
    <link href='{{ asset("css/bootstrap.min.css") }}' rel='stylesheet'>
    <link href='{{ asset("css/font-awesome.min.css") }}' rel='stylesheet'>
    <link href='{{ asset("css/style.css") }}' rel='stylesheet'>
    <link href='{{ asset("css/animate.min.css") }}' rel='stylesheet'>
    <link href='{{ asset("css/sweetalert.css") }}' rel='stylesheet'>
    
    <script src='{{ asset("js/jquery.min.js") }}'></script>
    <script src='{{ asset("js/bootstrap.min.js") }}'></script>
    <script src='{{ asset("js/waypoint.min.js") }}'></script>
    <script src='{{ asset("js/sweetalert.min.js") }}'></script>
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
                        <a href="{{ url('home') }}" class="list-group-item active">
                        <i class="fa fa-home fa-2x fa-fw " aria-hidden="true"></i><span> Beranda</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('evaluasi') }}" class="list-group-item">
                        <i class="fa fa-book fa-2x fa-fw" aria-hidden="true"></i><span> Evaluasi</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('tentang') }}" class="list-group-item">
                        <i class="fa fa-info-circle fa-2x fa-fw" aria-hidden="true"></i><span> Tentang</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('logout') }}" class="list-group-item" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="fa fa-sign-out fa-2x fa-fw" aria-hidden="true"></i><span> Keluar</span>
                        
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
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
                    <li class="active">Dashboard</li>                  
                  </ol>
                </span>
              </div>
              <div class="col-md-4 text-right">
                <span>Halo,
                  {{ Auth::user()->name }}
                </span>
              </div>
            </div>
            <div class="content">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>    
  </body>
</html>
