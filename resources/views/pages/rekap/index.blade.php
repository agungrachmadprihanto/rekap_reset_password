@extends('dashboard')
@section('title','Rekap Data')
@section('slug','Rekap Data')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Rekap Data Karyawan Reset Password</h3>
            <br>
            <a href="{{ route('rekap.export') }}" class="btn btn-danger">download rekap</a>
            <div class="card-tools">
              <form action="{{ route('rekap.cari') }}" method="GET">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">    
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                    <a href="{{ route('rekap.index') }}" class="btn btn-danger"><i class="fas fa-times"></i></a>
                </div>
              </div>
              </form>
            </div>
          </div>
          <!-- /.card-header -->
            <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Tanggal</th>
                      <th>Nama</th>
                      <th>User ID</th>
                      <th>Cabang</th>
                      <th>Denda</th>
                      <th>Alasan</th>
                      <th>Status Denda ?</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{ $item->date }}</td>
                      <td>{{ $item->name }}</td>
                      <td>{{ $item->user_id }}</td>
                      <td>{{ $item->cabang }}</td>
                      <td>{{ $item->denda }}</td>
                      <td>{{ $item->alasan }}</td>
                      @if ($item->bayar === 'belum')
                      <td><span class="tag tag-success" style="color: red">Belum Lunas</span></td>                        
                      @else
                      <td><span class="tag tag-success" style="color: green">Sudah Lunas</span></td>
                      @endif
                      <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit{{ $item->id }}">Ubah Status Pembayaran</button>
                      </td>
                    </tr>                        
                    @endforeach
                  </tbody>
                </table>
                {{-- {{ $data->links() }} --}}
              </div>
              <div class="card-footer clearfix">
                {{ $data->links('vendor.pagination.bootstrap-4') }}
              </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </div>
  <!-- /.container-fluid -->

{{-- Modaall --}}
@foreach ($data as $item)
  <div class="modal fade" id="edit{{ $item->id }}" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">

          <div class="modal-header">
              <h4 class="modal-title" id="modelHeading">Ubah Status Pembayaran Denda</h4>
          </div>
          <div class="modal-body">
              <form action="{{ route('rekap.update', ['id' => $item->id]) }}" method="POST" class="form-horizontal">
                  @method('post')
                  @csrf
                  <div class="form-group">
                    <label for="name" class="col-sm-12 control-label">Pilih Pembayaran</label>
                    <div class="col-sm-12">
                      <select name="bayar" class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option value="lunas">Sudah Lunas</option>
                        <option value="belum">Belum Lunas</option>
                    </select>
                    </div>
                  </div>
                  <div class="col-sm-offset-2 col-sm-10">
                   <button type="submit" class="btn btn-primary">Save changes
                   </button>
                  </div>
              </form>
          </div>
      </div>
  </div>
</div>
@endforeach

</section>

@endsection
