@extends('layouts.dashboard')

@section('title')
    NETACAD - Tentang
@endsection

@section('breadcrum')
    @section('breadcrum')
    <a href="{{ url('home') }}">Dashboard</a> / Tentang 
@endsection

@section('sideMenu')
<div class="nav">
    <ul class="list-group">
    <li>
        <a href="{{ url('home') }}" class="list-group-item">
        <i class="fa fa-home fa-2x fa-fw " aria-hidden="true"></i><span> Beranda</span>
        </a>
    </li>
    <li>
        <a href="{{ url('evaluasi') }}" class="list-group-item ">
        <i class="fa fa-book fa-2x fa-fw" aria-hidden="true"></i><span> Evaluasi</span>
        </a>
    </li>
    <li>
        <a href="{{ url('tentang') }}" class="list-group-item active">
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
@endsection

@section('content') 
            </div>
            <div class="">
              <div class="apps-msg">
                <ul class="nav nav-tabs tujuan">
                  <li class="active"><a data-toggle="tab" href="#1">Tentang NETACAD</a></li>
                  <li><a data-toggle="tab" href="#2">Tentang PENGEMBANG</a></li>
                </ul>
                <div class="tab-content">
                  <div id="1" class="tab-pane fade in active">
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
                  <div id="2" class="tab-pane fade">
                    <div class="row">
                      <div class="col-md-6">
                        
                      </div>
                      <div class="col-md-6">
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

@endsection