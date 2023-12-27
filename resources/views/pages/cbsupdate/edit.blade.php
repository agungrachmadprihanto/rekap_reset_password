@extends('dashboard')
@section('title','Edit CBS')
@section('slug','Edit')

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
              <h3 class="card-title">{{ $data->perihal }} - {{ $data->date }}</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
                <form action="#" method="POST" class="d-inline">
                @csrf
                @method('PUT')              
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>Date:</label>
                      <div class="input-group date" name="date" id="reservationdate" data-target-input="nearest">
                          <input type="text" name="date" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{ $data->date }}"/>
                          <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="form-group col-md-8">
                      <label for="inputName">Nama File</label>
                      <input type="text" name="name_file" class="form-control" value="{{ $data->name_file }}">
                    </div>          
                </div> 
                <div class="row">
                  <div class="form-group col-md-12">
                    <label for="inputName">Perihal</label>
                    <input type="text" name="perihal" class="form-control" value="{{ $data->perihal }}">
                  </div>  
                </div>                     
                <div class="row">
                  <div class="form-group col-md-6">
                      <label for="inputName">Alasan Update</label>
                      <textarea name="alasan" id="alasan" cols="5" rows="5" class="form-control">{{ $data->alasan }}</textarea>
                  </div>
                  <div class="form-group col-md-6">
                      <label for="inputName">Hasil yang didapat</label>
                      <textarea name="hasil" id="hasil" cols="5" rows="5" class="form-control">{{ $data->hasil }}</textarea>
                  </div>
                </div>
                <button class="btn btn-primary" type="submit">Save Data</button>                
                </form>
                <form action="{{ route('updatecbs.delete', ['id' => $data->id ]) }}" method="post" class="d-inline">
                  @csrf
                  @method('delete')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
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