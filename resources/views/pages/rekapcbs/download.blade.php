@extends('dashboard')
@section('title','Download Rentang CBS')
@section('slug','download')

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
              {{-- <h3 class="card-title"></h3>                  --}}
              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>

            <div class="card-body">
                <form action="{{ route('rekapcbs.excel') }}" class="d-inline">                
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Dari :</label>
                      <div class="input-group date" name="date" id="reservationdateFrom" data-target-input="nearest">
                          <input type="text" name="from" class="form-control datetimepicker-input" data-target="#reservationdateFrom"/>
                          <div class="input-group-append" data-target="#reservationdateFrom" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Hingga :</label>
                      <div class="input-group date" name="date" id="reservationdateTo" data-target-input="nearest">
                          <input type="text" name="to" class="form-control datetimepicker-input" data-target="#reservationdateTo"/>
                          <div class="input-group-append" data-target="#reservationdateTo" data-toggle="datetimepicker">
                              <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                          </div>
                      </div>
                  </div>                 
                  <button class="btn btn-primary" type="submit">download data</button>        
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
    
    //Date picker From
    $('#reservationdateFrom').datetimepicker({
      format: 'YYYY-MM-DD',
      setDate: new Date(),
      autoclose: true,
    });

    //Date picker To
    $('#reservationdateTo').datetimepicker({
      format: 'YYYY-MM-DD',
      setDate: new Date(),
      autoclose: true,
    });
  </script>
@endpush