@extends('adminlte::layouts.app')
@section('contentheader_title', 'Categories')

@section('main-content')
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="box box-solid box-primary">
      <div class="box-header">
        <h3 class="box-title">
          Data Category
        </h3>
      </div>
      <div class="clearfix"></div>
      <div class="box-body">      
        {!! $dataTable->table(['class' =>'table table-striped', 'style' => 'width:100%'])  !!}     
      </div>
    </div>
  </div>
</div>
@endsection
@section('scripts')
@parent

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<!-- jQuery -->
<!-- <script src="//code.jquery.com/jquery.js"></script> -->
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap.min.css">
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
{!! $dataTable->scripts()  !!}  
<script>
  function checkDelete(id, row) {
    $.ajax({
      url: 'admin/category/' + id,
      type: 'DELETE',
      data: {
        "_method": "delete",
        "_token": "{{ csrf_token() }}",
      },
      success: function(data) {
        row.closest('tr').remove(); 
      },
      fail: function(data, textStatus, xhr) {
        console.log("error", data.status);
        console.log("STATUS: "+xhr);
      }
    });
  }
</script>
@endsection