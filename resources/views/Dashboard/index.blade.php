@extends('template.layout')

@section('title')
    Dashboard
@endsection

@section('content')
<div class="section-header">
    <h1>Dashboard</h1>
</div>
<div class="section-body">
<div class="row">
            <div class="col-lg-5 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-x-ray"></i>
                </div>

                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Jurusan</h4>
                  </div>
                  <div class="card-body">
                    {{ $jurusan->count() }} 
                  </div>
                  <a href="{{ route ('jurusan.index') }}" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-5 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                <i class="fas fa-user"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Siswa</h4>
                  </div>
                  <div class="card-body">
                  {{$siswa->count()}}
                  </div>
                  <a href="{{ route ('siswa.index') }}" class="small-box-footer">Selengkapnya<i class="fas fa-arrow-circle-right"></i></a>
                </div>
              </div>
            </div>                 
          </div>
    </div>
@endsection
