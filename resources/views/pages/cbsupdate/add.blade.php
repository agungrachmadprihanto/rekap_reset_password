@extends('dashboard')
@section('title','Add Update CBS')
@section('slug','add update cbs')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">        
        <div class="col-md-12">
          
          @if($errors->any())        
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div>
          @endif
          @if(session('success'))
              <div class="alert alert-success">
                  {{ session('success') }}
              </div>
          @endif
         
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Update Sistem CBS</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
              <form action="{{ route('updatecbs.post') }}" method="POST">
              @csrf
              @method('POST')              
              <div class="row">
                <div class="form-group col-md-4">
                  <label>Date:</label>
                    <div class="input-group date" name="date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
                <div class="form-group col-md-8">
                    <label for="inputName">Nama File</label>
                    <input type="text" name="name_file" class="form-control" placeholder="teller.pbd">
                  </div>          
              </div> 
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="inputName">Perihal</label>
                  <input type="text" name="perihal" class="form-control" placeholder="menu simulasi perhitungan pelunasan pinjaman ...">
                </div>  
              </div>                     
              <div class="row">
                <div class="form-group col-md-6">
                    <label for="inputName">Alasan Update</label>
                    <textarea name="alasan" id="alasan" cols="5" rows="5" class="form-control"></textarea>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputName">Hasil yang didapat</label>
                    <textarea name="hasil" id="hasil" cols="5" rows="5" class="form-control"></textarea>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Save Data</button>
            </div>
          </form>    
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-12">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">10 Data Terbaru</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-hover">
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
                @php
                  $no = 1;                  
                @endphp
              @forelse ($data as $item)       
                <tbody>
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
                </tbody>
                @empty
                <tbody>
                  <tr>
                    <th colspan="5">Data Tidak Ada</th>
                  </tr>
                </tbody>
                @endforelse 
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

@push('script')
  <script>
    //Date picker
    $('#reservationdate').datetimepicker({
      format: 'YYYY-MM-DD',
      setDate: new Date(),
      autoclose: true,
    });

    //Date picker Modal
    $('#reservationdatee').datetimepicker({
      format: 'YYYY-MM-DD',
      setDate: new Date(),
      autoclose: true,
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
  </script>
@endpush