@extends('layouts.dashboard')

@section('title')
NETACAD - Evaluasi Ip Address
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
<div class="col-md-12">
<form action="{{ url('evaluasiIpaddress') }}" method="post">
    @csrf
    @for ($i = 1; $i <= 20; $i++)
    <div class="col-md-12">
        <div class="body-card-setting">
            <div class="setting-page">
                <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="soal1" >
                        <div class="embed-responsive embed-responsive-16by9-edit">
                            <table>
                                <tr>
                                    <td width="30px" valign="top"><h4>{{ $i }}. </h4></td>
                                    <td><h4>{!! $soal[$i] !!}</h4></td>
                                </tr>
                                <tr>
                                    <td width="30px"></td>
                                    <td>
                                        <div class="funkyradio">
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal{{$i}}" id="radio{{$i}}1" value="{{ $kunciJawabanA[$i] }}" />
                                                <label for="radio{{$i}}1">{!! $pilihanA[$i] !!} </label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal{{$i}}" id="radio{{$i}}2" value="{{ $kunciJawabanB[$i] }}" />
                                                <label for="radio{{$i}}2">{!! $pilihanB[$i] !!}</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal{{$i}}" id="radio{{$i}}3" value="{{ $kunciJawabanC[$i] }}"  />
                                                <label for="radio{{$i}}3">{!! $pilihanC[$i] !!}</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal{{$i}}" id="radio{{$i}}4" value="{{ $kunciJawabanD[$i] }}"  />
                                                <label for="radio{{$i}}4">{!! $pilihanD[$i] !!}</label>
                                            </div>
                                            <div class="funkyradio-success">
                                                <input type="radio" name="soal{{$i}}" id="radio{{$i}}5" value="{{ $kunciJawabanE[$i] }}"  />
                                                <label for="radio{{$i}}5">{!! $pilihanE[$i] !!}</label>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor
    <div class="row">
            <div class="col-md-12 text-center" style="margin-bottom: 50px; margin-top:20px">
                <input type="submit" class="btn btn-lg btn-success"  value="Selesai Evaluasi">
            </div> 
        </div>
    </div>
</form>
</div>
@endsection