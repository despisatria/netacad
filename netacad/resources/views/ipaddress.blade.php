@extends('layouts.dashboard')

@section('title')
    NETACAD - Ip Address
@endsection

@section('content')    

</div>
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
                      <form action="{{ url('upload') }}" method="post" class="form-signin" enctype="multipart/form-data">
                        <div class="form-group">
                          <input type="file" class="form-control" name='file' id="nama">
                        </div>
                        <div class="menu-card-class">
                          <div class="row">
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
@endsection