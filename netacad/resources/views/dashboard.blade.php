@extends('layouts.dashboard')

@section('title')
    NETACAD - Beranda
@endsection

@section('breadcrum')
    Dashboard
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
<div class="col-md-10 col-md-offset-1">
    <div class="program-card">
        <div class="col-md-6">
            <a href="{{ url('networking') }}">
                <div class="body-card fadeInUp animated">
                    <div class="thumb-card program1">
                        <div class="thumb-overlay1"></div>
                    </div>
                    <div class="title-card">
                        <span class="lg-title">Basic Networking</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('ipaddress') }}">
                <div class="body-card fadeInUp animated">
                    <div class="thumb-card program2">
                        <div class="thumb-overlay2"></div>
                    </div>
                    <div class="title-card">
                        <span class="lg-title">IP Addressing & Subnetting</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('#') }}">
                <div class="body-card fadeInUp animated">
                    <div class="thumb-card program4">
                        <div class="thumb-overlay4">
            </div>
        </div>
        <div class="title-card">
            <span class="lg-title">Network Routing</span>
        </div>
    </div>
</a>
</div>
    <div class="col-md-6">
        <a href="#">
            <div class="body-card fadeInUp animated">
                <div class="thumb-card program5">
                    <div class="thumb-overlay5">
                    </div>
                </div>
        <div class="title-card">
            <span class="lg-title">Virtual Local Area Network</span>
        </div>
    </div>
</a>
    </div>
</div>  
</div>

{{-- {{dd($alert)}} --}}
@if (isset($alert) == true)
    @if ($alert == 'berhasilDiUpload')
    <script type="text/javascript">
        // file sudah di upload

        swal("A wild Pikachu appeared! What do you want to do?", {
            buttons: {
                cancel: "Run away!",
                catch: {
                text: "Throw Pokéball!",
                value: "catch",
                },
                defeat: true,
            },
            })
            .then((value) => {
            switch (value) {
            
                case "defeat":
                swal("Pikachu fainted! You gained 500 XP!");
                break;
            
                case "catch":
                swal("Gotcha!", "Pikachu was caught!", "success");
                break;
            
                default:
                swal("Got away safely!");
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