@extends('dashboard')
@section('title','Dashboard')
@section('slug','Dashboard')

@section('content')
<section class="content">
    <div class="container-fluid">
      <div class="row">        
        <div class="col-md-12">
          <div class="card card-danger">
            <div class="card-header">
              <h3 class="card-title">10 Data Karywan Terbaru Yang Terkena Denda</h3>                 
              {{-- <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button> --}}
              </div>
            </div>
            <div class="card-body">
 
                <table id="rekap" class="table table-striped">
                    <thead>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">User ID</th>
                        <th scope="col">Denda</th>
                        <th scope="col">Alasan</th>
                    </thead>
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
@push('scripts')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
    $(function () {
          var table = $('#rekap').DataTable({
              processing: true,
              serverSide: true,
              ajax: "{{ route('rekap.index') }}",
              columns: [
                  {data: 'name', name: 'name'},
                  {data: 'user_id', name: 'user_id'},
                  {data: 'denda', name: 'denda'},
                  {data: 'alasan', name: 'alasan'},
              ]
          });
        });
</script>

@endpush