@extends('layouts.dashboard')

@section('title')
    NETACAD - Beranda
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
            <a href="{{ url('routing') }}">
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
@endsection