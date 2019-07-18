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

<script type="text/javascript">
    $(window).on('load',function(){
        $('#myModal').modal('show');
    });
    $('#myModal').on('hide.bs.modal', function(e) {    
      var $if = $(e.delegateTarget).find('iframe');
      var src = $if.attr("src");
      $if.attr("src", '/empty.html');
      $if.attr("src", src);
    });
</script>

<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Nonton dulu Video ini yuk!</h4>
            </div>
            <div class="modal-body">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/iyRriud0pD8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>


<div class="col-md-10 col-md-offset-1">
    <div class="program-card">
        <div class="col-md-6">
            <a href="{{ url('ipaddress') }}">
                <div class="body-card fadeInUp animated">
                    <div class="thumb-card program2">
                        <div class="thumb-overlay2"></div>
                    </div>
                    <div class="title-card">
                        <span class="lg-title">Pengalamatan IP Address</span>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-6">
            <a href="{{ url('#') }}">
                <div class="body-card fadeInUp animated">
                    <div class="thumb-card program1">
                        <div class="thumb-overlay1"></div>
                    </div>
                    <div class="title-card">
                        <span class="lg-title">Comingsoon</span>
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
            <span class="lg-title">Comingsoon</span>
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
            <span class="lg-title">Comingsoon</span>
        </div>
    </div>
</a>
    </div>
</div>  
</div>

@endsection