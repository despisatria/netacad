@extends('layouts.admin')

@section('title')
NETACAD - Guru 
@endsection

@section('breadcrum')
    Dashboard / Nilai
@endsection

@section('content')    
    <div class="col-md-10">
      <div class="row">
        <div class="title-page">
          <div class="col-md-6">
            <span>
              <ol class="breadcrumb">
                <li><a href="{{ url('home') }}">Hasil Evaluasi</a></li>
                <li class="active">IP Addressing & Subnetting</li>                     
              </ol>
            </span>
          </div>
          <div class="col-md-4 text-right">
            <span>Halo,
              {{ Auth::user()->name }}
            </span>
          </div>
        </div>
        <div class="content">
          <div class="col-md-10 col-md-offset-1">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
              <thead>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                  <th>File Praktik</th>
                </tr>
              </thead>
              <tbody>
                @if ($jumlahEvaluasi != 0)
                  @foreach ($evaluasi as $item)
                  <tr>
                    {{-- {{print_r($item->user)}} --}}
                    <td>{{ $item->user->nim }}</td>
                    <td>{{ $item->user->name }}</td>
                    <td>{{ $item['nilai'] }}</td>
                    <td>Disini file yg diupload</td>
                  </tr>
                  @endforeach
                @else
                    <td class="text-center" colspan="4">Data Empty</td>
                @endif
              </tbody>
              <!-- <tfoot>
                <tr>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Nilai</th>
                </tr>
              </tfoot> -->
            </table>
          </div>    
        </div>
      </div>
    </div>
  </div>
  @endsection