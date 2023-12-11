@extends('dashboard')
@section('title','Rekap Data')
@section('slug','Rekap Data')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3>{{ $pending }} Orang</h3>
              <p>Pending Denda</p>
            </div>
            <div class="icon">
              <i class="ion ion-alert"></i>
            </div>
            <a href="{{ route('pending') }}" class="small-box-footer">Download <i class="fas fa-arrow-circle-down"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3>{{ $done }} Orang</h3>

              <p>Lunas Denda</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-checkmark-circle"></i>
            </div>
            <a href="{{ route('lunas') }}" class="small-box-footer">Download <i class="fas fa-arrow-circle-down"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3>{{ $all }} Orang</h3>
              <p>Rekap Denda</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="{{ route('rekap.export') }}" class="small-box-footer">Download <i class="fas fa-arrow-circle-down"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->


</section>

@endsection
