@extends('layouts.dashboard')

@section('title')
    NETACAD - IP Addressing & Subnetting
@endsection

@section('breadcrum')
    <a href="{{ url('home') }}">Dashboard</a> / IP Addressing & Subnetting
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
        <div class="alert alert-info alert-block text-center">
          <button type="button" class="close" data-dismiss="alert">×</button> 
            <strong>{{ $message }}</strong>
        </div>
      @endif
        <div class="col-md-12">
          <div class="row">
            <div class="col-md-2 program-list">
              <div class="row">
                <span>Pematerian</span>
                <ul class="nav nav-tabs nav-program" role="tablist">
                  <li role="presentation" class="active">
                    <a href="#materi" aria-controls="materi" role="tab" data-toggle="tab">Apa itu IP Address ?</a>
                  </li>
                  <li role="presentation">
                    <a href="#kuis" aria-controls="kuis" role="tab" data-toggle="tab"><ul style="padding-left: 15px;" type="none"><li>Kuis 1</li></ul></a>
                  </li>
                  <li role="presentation">
                    <a href="#materi2" aria-controls="materi" role="tab" data-toggle="tab">Jenis IP Address</a>
                  </li>
                  <li role="presentation">
                    <a href="#kuis2" aria-controls="kuis" role="tab" data-toggle="tab"><ul style="padding-left: 15px;" type="none"><li>Kuis 2</li></ul></a>
                  </li>
                  <li role="presentation">
                    <a href="#materi3" aria-controls="materi" role="tab" data-toggle="tab">NetID dan HostID</a>
                  </li>
                  <li role="presentation">
                    <a href="#kuis3" aria-controls="kuis" role="tab" data-toggle="tab"><ul style="padding-left: 15px;" type="none"><li>Kuis 3</li></ul></a>
                  </li>
                  <li role="presentation">
                    <a href="#materi4" aria-controls="materi" role="tab" data-toggle="tab">Prefix dan Netmask</a>
                  </li>
                  <li role="presentation">
                    <a href="#kuis4" aria-controls="kuis" role="tab" data-toggle="tab"><ul style="padding-left: 15px;" type="none"><li>Kuis 4</li></ul></a>
                  </li>
                  <li role="presentation">
                    <a href="#materi5" aria-controls="materi" role="tab" data-toggle="tab">Kelas IP Address</a>
                  </li>
                  <li role="presentation">
                    <a href="#kuis5" aria-controls="kuis" role="tab" data-toggle="tab"><ul style="padding-left: 15px;" type="none"><li>Kuis 5</li></ul></a>
                  </li>
                  <li role="presentation">
                    <a href="#materi6" aria-controls="materi" role="tab" data-toggle="tab">Subnetting</a>
                  </li>
                  <li role="presentation">
                    <a href="#kuis6" aria-controls="kuis" role="tab" data-toggle="tab"><ul style="padding-left: 15px;" type="none"><li>Kuis 6</li></ul></a>
                  </li>
                  <li role="presentation">
                    <a href="#materi7" aria-controls="materi" role="tab" data-toggle="tab">VLSM</a>
                  </li>
                  <li role="presentation">
                    <a href="#kuis7" aria-controls="kuis" role="tab" data-toggle="tab"><ul style="padding-left: 15px;" type="none"><li>Kuis 7</li></ul></a>
                  </li>
                  <span>Latihan Praktik</span>
                  <li role="presentation">
                    <a href="#praktik1" aria-controls="praktik" role="tab" data-toggle="tab">Latihan1</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-10">
              <div class="body-card-setting">
                <div class="setting-page">
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="materi">
                      <div class="embed-responsive embed-responsive-16by9">
                        <video width="100%" height="100%" controls>
                          <source src="{{url(Storage::url('public/files/1.mp4'))}}" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kuis">
                      <div class="embed-responsive embed-responsive-16by9">
                        <object width="100%" height="100%" data="{{url(Storage::url('public/files/kuis-1.swf'))}}"></object>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materi2">
                      <div class="embed-responsive embed-responsive-16by9">
                        <video controls>
                          <source src="{{url(Storage::url('public/files/2.mp4'))}}" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kuis2">
                      <div class="embed-responsive embed-responsive-16by9">
                        <object width="100%" height="100%" data="{{url(Storage::url('public/files/kuis-2.swf'))}}"></object>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materi3">
                      <div class="embed-responsive embed-responsive-16by9">
                        <video controls>
                          <source src="{{url(Storage::url('public/files/3.mp4'))}}" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kuis3">
                      <div class="embed-responsive embed-responsive-16by9">
                        <object width="100%" height="100%" data="{{url(Storage::url('public/files/kuis-3.swf'))}}"></object>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materi4">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kuis4">
                      <div class="embed-responsive embed-responsive-16by9">
                        <object width="100%" height="100%" data="{{url(Storage::url('public/files/kuis-4.swf'))}}"></object>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materi5">
                      <div class="embed-responsive embed-responsive-16by9">
                        
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kuis5">
                      <div class="embed-responsive embed-responsive-16by9">
                        <object width="100%" height="100%" data="{{url(Storage::url('public/files/kuis-5.swf'))}}"></object>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materi6">
                      <div class="embed-responsive embed-responsive-16by9">
                        <video controls>
                          <source src="{{url(Storage::url('public/files/6.mp4'))}}" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kuis6">
                      <div class="embed-responsive embed-responsive-16by9">
                        <object width="100%" height="100%" data="{{url(Storage::url('public/files/kuis-6.swf'))}}"></object>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="materi7">
                      <div class="embed-responsive embed-responsive-16by9">
                        <video controls>
                          <source src="{{url(Storage::url('public/files/7.mp4'))}}" type="video/mp4">
                        </video>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="kuis7">
                      <div class="embed-responsive embed-responsive-16by9">
                        <object width="100%" height="100%" data="{{url(Storage::url('public/files/kuis-7.swf'))}}"></object>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="praktik1">
                      <h2>Download Modul & Studi Kasus</h2>
                        <span>Silahkan Download Modul dan Kerjakan Studi Kasus :</span><br>
                          <a href="{{url(Storage::url('public/files/MODUL-PRAKTIKUM.pdf'))}}" class="btn btn-default" type="submit">Modul Praktikum</a>
                          <a href="{{url(Storage::url('public/files/STUDI-KASUS.pdf'))}}" class="btn btn-default" type="submit">Studi Kasus</a>
                        

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

{{-- {{dd($alert)}} --}}
<script type="text/javascript">
  const fill = document.querySelector('.fill');
const empties = document.querySelectorAll('.empty');

// Fill listeners
fill.addEventListener('dragstart', dragStart);
fill.addEventListener('dragend', dragEnd);

// Loop through empty boxes and add listeners
for (const empty of empties) {
  empty.addEventListener('dragover', dragOver);
  empty.addEventListener('dragenter', dragEnter);
  empty.addEventListener('dragleave', dragLeave);
  empty.addEventListener('drop', dragDrop);
}

// Drag Functions

function dragStart() {
  this.className += ' hold';
  setTimeout(() => (this.className = 'invisible'), 0);
}

function dragEnd() {
  this.className = 'fill';
}

function dragOver(e) {
  e.preventDefault();
}

function dragEnter(e) {
  e.preventDefault();
  this.className += ' hovered';
}

function dragLeave() {
  this.className = 'empty';
}

function dragDrop() {
  this.className = 'empty';
  this.append(fill);
}

</script>
@if (isset($alert) == true)
    @if ($alert == 'berhasilDiUpload')
    <script type="text/javascript">
        // file sudah di upload

        swal("File berhasil diunggah!", "", "success", {
          buttons: {
            cancel: "Lihat materi lain",
            evaluasi: "Kerjakan Evaluasi"
          },
        })
        .then((value) => {
          switch (value) {
            case "evaluasi":
              window.location.href = "{{ url('evaluasi') }}";
              break;

            default :
              window.location.href = "{{ url('home') }}";
              break;
          }
        });

    </script>
    @else
        <script type="text/javascript">
                swal('Berhasil!', 'Nilai Anda : '+{{$nilai}}, 'success');
        </script>
    @endif
@endif      
@endsection