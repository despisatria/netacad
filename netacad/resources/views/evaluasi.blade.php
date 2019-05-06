@extends('layouts.dashboard')

@section('title')
    NETACAD - Evaluasi
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
                    <span> Nilai : 100</span>
                    <h3>Basic Networking</h3>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="menu-card-catalog">
                    <div class="bar-skill">
                      <i class="fa fa-book active" aria-hidden="true"></i>
                    </div>
                    <span>10 Soal</span>
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
                    <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
                    &nbsp;&nbsp;
                    <span> Nilai : 80</span>
                    <h3>IP Addressing & Subnetting</h3>
                  </div>
                </div>
                <div class="col-md-2">
                  <div class="menu-card-catalog">
                    <div class="bar-skill">
                      <i class="fa fa-book active" aria-hidden="true"></i>
                    </div>
                    <span>20 Soal</span>
                    <a href="{{ url("/evaluasiIpaddress") }}" class="btn btn-success">Mulai</a>
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
                    <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
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
                    <a href="eval-ipaddress.php" class="btn btn-success">Mulai</a>
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
                    <i class="gold fa fa-trophy fa-2x" aria-hidden="true"></i>
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
                    <a href="eval-ipaddress.php" class="btn btn-success">Mulai</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
@endsection