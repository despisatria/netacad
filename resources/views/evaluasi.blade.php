@extends('layouts.dashboard')

@section('title')
    NETACAD - Evaluasi
@endsection

@section('breadcrum')
    @section('breadcrum')
    <a href="{{ url('home') }}">Dashboard</a> / Evaluasi
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
        <a href="{{ url('evaluasi') }}" class="list-group-item active">
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
<div class="col-md-10 col-md-offset-1">
        <div class="program-card">
          <div class="col-md-12">
            <div class="body-card-class fadeInUp animated bg-card">
              <div class="row">
                <div class="col-md-10">
                  <div class="top-card-class">
                    <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
                    &nbsp;&nbsp;
                    <span> Nilai : 80</span>
                    <h3>Basic Networking</h3>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="menu-card-catalog">
                    <div class="bar-skill">
                      <i class="fa fa-book active" aria-hidden="true"></i>
                    </div>
                    <span>20 Soal</span>
                    <a href="#" class="btn btn-success" disabled>Mulai</a>
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
                    @if ($nilaiIpaddress != NULL)
                      <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
                      &nbsp;&nbsp;
                      @if ($nilaiIpaddress->nilai > 0)
                        <span> Nilai : {{ $nilaiIpaddress->nilai }}</span>
                      @endif
                    @else
                      <i class="grey fa fa-trophy fa-2x" aria-hidden="true"></i>
                      &nbsp;&nbsp;
                      <span> Nilai : N/A</span>
                    @endif
                    <h3>IP Addressing & Subnetting</h3>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="menu-card-catalog">
                    <div class="bar-skill">
                      <i class="fa fa-book active" aria-hidden="true"></i>
                    </div>
                    <span>20 Soal</span>
                    @if ($nilaiIpaddress != NULL)
                    <a href="#" class="btn btn-success" disabled>Mulai</a>
                    @else
                    <a href="{{ url('/evaluasiIpaddress') }}" class="btn btn-success">Mulai</a>
                    @endif
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
                    <i class="grey fa fa-trophy fa-2x" aria-hidden="true"></i>
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
                    <a href="#" class="btn btn-success">Mulai</a>
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
                    <i class="grey fa fa-trophy fa-2x" aria-hidden="true"></i>
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
                    <a href="#" class="btn btn-success">Mulai</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>  

{{-- {{dd($alert)}} --}}
@if (isset($alert) == true)
    @if ($alert == 'evaluasiSelesai')
      <script type="text/javascript">

        swal('Nilai Anda : '+{{$nilai}}, "", 'success', {
          buttons: {
            ok: "OK"
          },
        })
        .then((value) => {
          switch (value) {

            default :
               window.location.href = "{{ url('evaluasi') }}";
              break;
          }
        });
      </script>
    @endif
@endif   
@endsection