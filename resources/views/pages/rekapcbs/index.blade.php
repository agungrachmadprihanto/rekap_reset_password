@extends('dashboard')
@section('title','Rekap All CBS')
@section('slug','Rekap cbs')
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            {{-- <h3 class="card-title">Rekap Data Karyawan Reset Password</h3> --}}
            <br>
            <a href="{{ route('rekapcbs.export') }}" class="btn btn-danger">download rekap</a>
            <div class="card-tools">
              <form action="{{ route('rekapcbs.cari') }}" method="GET">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">    
                <div class="input-group-append">
                  <button type="submit" class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                    <a href="{{ route('rekapcbs.index') }}" class="btn btn-danger"><i class="fas fa-times"></i></a>
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
                        <th scope="col">#</th>
                        <th scope="col">Tgl Update</th>
                        <th scope="col">Perihal</th>                   
                        <th scope="col">Name File Update</th>                   
                        <th scope="col">Alasan Update</th>                   
                        <th scope="col">Hasil Update</th>
                        <th scope="col">User Update</th>                   
                        <th scope="col">Action</th>                   
                      </tr>
                  </thead>
                  <tbody>
                    @php
                      $no = 1;
                    @endphp
                    @foreach ($data as $item)
                    <tr>
                        <th scope="row">{{ $no++ }}</th>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->perihal }}</td>
                        <td>{{ $item->name_file }}</td>                  
                        <td>{{ $item->alasan }}</td>
                        <td>{{ $item->hasil }}</td>
                        <td>{{ $item->user }}</td>
                        <td>
                            <a href="{{ route('updatecbs.cetak', ['id' => $item->id]) }}" class="btn btn-outline-primary mb-2"><i class="fas fa-print"></i></a>
                            <a href="{{ route('updatecbs.edit', ['id' => $item->id]) }}" class="btn btn-outline-danger mb-2"><i class="fas fa-pen"></i></a>
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
