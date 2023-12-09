@extends('dashboard')
@section('title','Dashboard')
@section('slug','Dashboard')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">        
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Data Denda Reset Password</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="inputName">Nama</label>
                  <input type="text" id="name" name="name" class="form-control" placeholder="UDIN" style="text-transform: uppercase">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputName">User ID</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="MAA007LG01" style="text-transform: uppercase">
                </div>
                <div class="form-group col-md-4">
                    <label for="cabang">Cabang</label>
                    <select id="cabang" class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option value="001">001</option>
                        <option value="002">002</option>
                        <option value="003">003</option>
                        <option value="004">004</option>
                        <option value="005">005</option>
                        <option value="006">006</option>
                        <option value="007">007</option>
                        <option value="008">008</option>
                      </select>
                </div>
                {{-- <div class="form-group col-md-4">
                  <label for="">Waktu Mengerjakan Ujian</label>
                  <div class="input-group date" id="reservationdatetime" data-target-input="nearest">
                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatetime"/>
                    <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                </div> --}}
              </div>                      
              <div class="row">
                <div class="form-group col-md-4">
                    <label for="inputName">Alasan Terblokir</label>
                    <select id="cabang" class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option value="Lupa Password">Lupa Password</option>
                        <option value="Password Kadaluarsa">Password Kadaluarsa</option>
                        <option value="Salah Input Password 3x">Salah Input Password 3x</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                </div>
                <div class="form-group col-md-8">
                    <label for="inputName">Keterangan </label>
                    <textarea name="keterangan" id="keterangan" cols="5" rows="5" class="form-control"></textarea>
                </div>
              </div>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Posisi</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Udin</td>
                    <td>udinsedunia@gmail.com</td>
                    <td>Marketing</td>
                  </tr>
                </tbody>
              </table>
              <button class="btn btn-primary">Save & Kirim Email</button>    
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-12">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">List Jadwal Ujian</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Ujian</th>
                    <th scope="col">Tanggal Ujian</th>                   
                    <th scope="col">Status</th>                   
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Ujian Marketing di Hari Senja</td>
                    <td>12/07/2023 4:05 PM</td>
                    <td>Pending</td>                  
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
                        Views
                      </button>
                      <a href="" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
                </tbody>
              </table>             
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
@endsection