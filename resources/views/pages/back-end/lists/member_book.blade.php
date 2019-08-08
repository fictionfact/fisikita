@extends('adminlte::layouts.app')
@section('contentheader_title', 'Member Booking')

@section('main-content')
<div class="container-fluid spark-screen">
  <div class="row">
    <div class="box box-solid box-primary">
      <div class="box-header">
        <h3 class="box-title">
          Booking List
        </h3>
      </div>
      <div class="clearfix"></div>
      <ul class="nav nav-tabs" role="tablist"> 
        @foreach($statusID as $key => $status)
        <li role="presentation" id="{{$key}}" class="tabBook {{$key == 0 ? 'active' : ''}}"> 
          <a href="#status-{{$key}}" data-toggle="tab" >{{ Lang::choice('messages.bookingstatus', $key) }}</a> 
        </li>
        @endforeach 
      </ul>
      <div class="tab-content">
      @foreach($statusID as $key => $status)
        <div class="tab-category tab-pane fade {{$key == 0 ? 'in active' : ''}}" id="status-{{$key}}">
          <table class="table table-striped" id="data-book{{$key}}">
            <thead>
              <tr>
                <th>ID</th>
                <th>No Invoice</th>
                <th>Date</th>
                <th>Status</th>
                <th>SubTotal</th>
                <th>Unique Number</th>
                <th>Total</th>
                <th>Action</th>
              </tr>
            </thead>
          </table>
        </div>
      @endforeach
      </div>
    </div>
  </div>
</div>  
@endsection
@section('scripts')
@parent
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<!-- Bootstrap JavaScript -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap.min.css">
<script src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.flash.min.js"></script>
<script src="/vendor/datatables/buttons.server-side.js"></script>
<script type="text/javascript">
  $('.tabBook').each(function(){
    var status = $(this).attr('id');
    var oTable = $("#data-book" + status).DataTable({
      processing: true,
      serverSide: true,
      dom: 'Bfrtip',
      order: [[0, 'asc']],
      buttons: ['export',
                'print',
                'reset',
                'reload',
                'colvis',
               ],
      ajax:{
        url: "{{ route('member.booking.list') }}",
        data: function(d) {
          d.status = status
        }
      },
      columns: [
          { data: 'id', name: 'id'},
          { data: 'no', name: 'no'},
          { data: 'date', name: 'date', searchable: false},
          { data: 'status', name: 'status', searchable: false, orderable: false},
          { data: 'book_detail.subtotal', name: 'book_detail.subtotal', searchable: false, orderable: false},
          { data: 'unique_number', name: 'unique_number' },
          { data: 'total', name: 'total' },
          { data: 'action', name: 'action', searchable: false, orderable: false}
      ]
    });

    $('#'+status).on('click', function(e){
      oTable.draw();
      e.preventDefault();
    });

  }); 
  
</script>
<script>
  function checkDelete(id, row) {
    $.ajax({
      url: "<?php echo url('admin/booking'); ?>" + '/' + id,
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