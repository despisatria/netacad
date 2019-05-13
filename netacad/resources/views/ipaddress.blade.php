@extends('layouts.dashboard')

@section('title')
    NETACAD - Ip Address
@endsection

@section('breadcrum')
    Dashboard / IP Address
@endsection

@section('sideMenu')
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
@endsection

@section('content')    

</div>
<div class="col-md-12">
  @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block text-center">
          <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
      @endif
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
                  <a href="#materi6" aria-controls="materi" role="tab" data-toggle="tab">Subnetting</a>
                </li>
                <li role="presentation">
                  <a href="#materi7" aria-controls="materi" role="tab" data-toggle="tab">VLSM</a>
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

                    <div role="tabpanel" class="tab-pane" id="materi4">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>
                    
                    <div role="tabpanel" class="tab-pane" id="materi5">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="materi6">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="materi7">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>

                    <div role="tabpanel" class="tab-pane" id="praktik1">
                      <h2>Download Modul & Studi Kasus</h2>
                        <span>Silahkan Download Modul dan Kerjakan Studi Kasus :</span>
                        <form style="margin-bottom: 5px;" method="get" action="{{url(Storage::url('public/files/STUDI-KASUS.pdf'))}}">
                          <button class="btn btn-default" type="submit">Modul Praktikum</button>
                        </form>
                        <form method="get" action="{{url(Storage::url('public/files/STUDI-KASUS.pdf'))}}">
                          <button class="btn btn-default" type="submit">Studi Kasus</button>
                        </form>

                      <h2>Unggah File Latihan Praktik</h2>
                      <span>
                        Silahkan unggah file Cisco Packet Tracer (.pkt) yang anda buat <br> <b>(Anda hanya bisa mengunggah satu kali)</b>
                      </span>
                      <form action="{{ url('upload') }}" method="post" class="form-signin" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" name='materi' value="ipaddress" id="nama">
                        <div class="form-group">
                          <input type="file" class="form-control" name='file' id="nama">
                        </div>
                        <div class="menu-card-class">
                          <div class="row">
                            @if ($files != NULL)
                              <div class="col-md-6" style="text-align: left;">
                                <a href="{{url(Storage::url($files->lokasi))}}">{{$files->nama}}</a>
                              </div>
                            @endif

                            <div class="col-md-6">
                              <input type="submit" name="submit" class="btn btn-success" value="Unggah">
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
@endsection