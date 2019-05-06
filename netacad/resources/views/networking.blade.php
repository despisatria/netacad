@extends('layouts.dashboard')

@section('title')
    NETACAD - Networking
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
                <a href="#materi" aria-controls="materi" role="tab" data-toggle="tab">Apa itu Jaringan Komputer?</a>
            </li>
            <li role="presentation">
                <a href="#materi2" aria-controls="materi2" role="tab" data-toggle="tab">Topologi Jaringan Komputer</a>
            </li>
            <li role="presentation">
                <a href="#materi3" aria-controls="materi3" role="tab" data-toggle="tab">Jenis Jaringan Komputer</a>
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
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/aHJElrgj6UA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="materi2">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/zbqrNg4C98U" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="materi3">
                    <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/4_zSIXb7tLQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane" id="praktik1">
                    <h1>Unggah File Latihan Praktik</h1>
                    <span class="setting-informasi">Silahkan unggah file Cisco Packet Tracer (.pkt) yang anda buat</span><br>
                    <form action="{{ url('upload') }}" method="post" class="form-signin" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="form-control" name='materi' value="basic-networking" id="nama">
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