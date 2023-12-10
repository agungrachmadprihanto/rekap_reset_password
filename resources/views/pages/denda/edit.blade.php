@extends('dashboard')
@section('title','Dashboard')
@section('slug','Dashboard')

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
              <h3 class="card-title">Edit Data Denda Reset Password - <strong>{{ $data->name }}</strong></h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
              <form action="{{ route('denda.update', ['id' => $data->id ]) }}" method="POST">
              @csrf
              @method('PUT')              
              <div class="row">
                <div class="form-group col-md-2">
                  <label>Date:</label>
                    <div class="input-group date" name="date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="date" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{ $data->date }}"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>          
              </div> 
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="inputName">Nama</label>
                  <input type="text" name="name" class="form-control" style="text-transform: uppercase" value="{{ $data->name }}">
                </div>
                <div class="form-group col-md-4">
                    <label for="">User ID</label>
                    <input type="text" name="user_id" class="form-control" style="text-transform: uppercase" value="{{ $data->user_id }}">
                </div>
                <div class="form-group col-md-2">
                    <label for="cabang">Cabang</label>
                    <select id="cabang" name="cabang" class="form-control custom-select">
                        <option selected>{{ $data->cabang }}</option>
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
                <div class="form-group col-md-2">
                  <label for="">Denda</label>
                  <select id="denda" name="denda" class="form-control custom-select">
                      <option selected>{{ $data->denda }}</option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                  </select>
              </div>  
              </div>                     
              <div class="row">
                <div class="form-group col-md-4">
                    <label for="inputName">Alasan Terblokir</label>
                    <select id="alasan" name="alasan" class="form-control custom-select">
                        <option selected>{{ $data->alasan }}</option>
                        <option value="Lupa Password">Lupa Password</option>
                        <option value="Password Kadaluarsa">Password Kadaluarsa</option>
                        <option value="Salah Input Password 3x">Salah Input Password 3x</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                </div>
                <div class="form-group col-md-8">
                    <label for="inputName">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" cols="5" rows="5" class="form-control">{{ $data->keterangan ?? null }}</textarea>
                </div>
              </div>
              <button class="btn btn-primary" type="submit">Save Data</button>
            </div>
          </form>    
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