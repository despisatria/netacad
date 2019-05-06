@extends('layouts.dashboard')

@section('title')
NETACAD - Evaluasi Ip Address
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
                        <div class="embed-responsive embed-responsive-16by9">
                            <h3>{{ $i }}. {!! $soal[$i] !!}</h3>
                            
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endfor
    <div class="row"  style="margin-top: 10px;">
            <div class="col-md-6 ">
                <input type="submit" class="btn btn-success"  value="Selesai">
            </div> 
        </div>
    </div>
</form>
</div>
@endsection