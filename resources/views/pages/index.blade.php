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
              <h3 class="card-title">Tambah Data Denda Reset Password</h3>                 
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
              <form action="{{ route('denda.add') }}" method="POST">
              @csrf
              @method('POST')              
              <div class="row">
                <div class="form-group col-md-2">
                  <label>Date:</label>
                    <div class="input-group date" name="date" id="reservationdate" data-target-input="nearest">
                        <input type="text" name="date" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>          
              </div> 
              <div class="row">
                <div class="form-group col-md-4">
                  <label for="inputName">Nama</label>
                  <input type="text" name="name" class="form-control" placeholder="UDIN" style="text-transform: uppercase">
                </div>
                <div class="form-group col-md-4">
                    <label for="">User ID</label>
                    <input type="text" name="user_id" class="form-control" placeholder="MAA007LG01" style="text-transform: uppercase">
                </div>
                <div class="form-group col-md-2">
                    <label for="cabang">Cabang</label>
                    <select id="cabang" name="cabang" class="form-control custom-select">
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
                <div class="form-group col-md-2">
                  <label for="">Denda</label>
                  <select id="denda" name="denda" class="form-control custom-select">
                      <option selected disabled>Select one</option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                  </select>
              </div>  
              </div>                     
              <div class="row">
                <div class="form-group col-md-4">
                    <label for="inputName">Alasan Terblokir</label>
                    <select id="alasan" name="alasan" class="form-control custom-select">
                        <option selected disabled>Select one</option>
                        <option value="Lupa Password">Lupa Password</option>
                        <option value="Password Kadaluarsa">Password Kadaluarsa</option>
                        <option value="Salah Input Password 3x">Salah Input Password 3x</option>
                        <option value="Lainnya">Lainnya</option>
                      </select>
                </div>
                <div class="form-group col-md-8">
                    <label for="inputName">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" cols="5" rows="5" class="form-control"></textarea>
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
              <h3 class="card-title">10 Data Karywan Terbaru Yang Terkena Denda</h3>                 
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
                    <th scope="col">Nama</th>
                    <th scope="col">User ID</th>                   
                    <th scope="col">Cabang</th>                   
                    <th scope="col">Denda</th>                   
                    <th scope="col">Date</th>                   
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
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->user_id }}</td>
                    <td>{{ $item->cabang }}</td>                  
                    <td>{{ $item->denda }}</td>
                    <td>{{ $item->date }}</td>
                    <td>
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#edit">
                        Edit
                      </button>
                      <a href="" class="btn btn-danger">Delete</a>
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



  <!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="">
          <div class="row">
            <div class="form-group col-md-6">
              <label>Date:</label>
                <div class="input-group date" name="date" id="reservationdatee" data-target-input="nearest">
                    <input type="text" name="date" class="form-control datetimepicker-input" data-target="#reservationdatee"/>
                    <div class="input-group-append" data-target="#reservationdatee" data-toggle="datetimepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
            </div>
            <div class="form-group col-md-6">
              <label for="cabang">Cabang</label>
              <select id="cabang" name="cabang" class="form-control custom-select">
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
          </div> 
          <div class="row">
            <div class="form-group col-md-6">
              <label for="inputName">Nama</label>
              <input type="text" name="name" class="form-control" placeholder="UDIN" style="text-transform: uppercase">
            </div>
            <div class="form-group col-md-6">
                <label for="">User ID</label>
                <input type="text" name="user_id" class="form-control" placeholder="MAA007LG01" style="text-transform: uppercase">
            </div>

 
          </div>                     
          <div class="row">
            <div class="form-group col-md-6">
                <label for="inputName">Alasan Terblokir</label>
                <select id="alasan" name="alasan" class="form-control custom-select">
                    <option selected disabled>Select one</option>
                    <option value="Lupa Password">Lupa Password</option>
                    <option value="Password Kadaluarsa">Password Kadaluarsa</option>
                    <option value="Salah Input Password 3x">Salah Input Password 3x</option>
                    <option value="Lainnya">Lainnya</option>
                  </select>
            </div>
            <div class="form-group col-md-6">
              <label for="">Denda</label>
              <select id="denda" name="denda" class="form-control custom-select">
                  <option selected disabled>Select one</option>
                  <option value="Ya">Ya</option>
                  <option value="Tidak">Tidak</option>
              </select>
          </div>      
          </div>
          <div class="form-group">
            <label for="inputName">Keterangan</label>
            <textarea name="keterangan" id="keterangan" cols="5" rows="5" class="form-control"></textarea>
        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


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