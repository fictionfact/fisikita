@extends('adminlte::layouts.app')
@section('contentheader_title', 'Booking List')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.css">
@endsection
@section('main-content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h2 class="box-title">{{$book->no}}</h2>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" 
                    action="{{ route('booking.update', ['id' => $book->id]) }}" >
              {{ csrf_field() }}
              {{ method_field('PUT') }}
              <div class="box-body ">
                @if($status == 'Processing')
                <a href="#" class="btn btn-default edit">Edit</a>
                @endif
                <div class="form-group">
                  <label for="name" class="col-xs-12 col-sm-3 col-md-3 control-label">Name</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <label for="eventName" class="control-label"><strong>{{$event->name}}</strong></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="price" class="col-xs-12 col-sm-3 col-md-3 control-label">Price</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <label for="price" class="control-label"><strong>{{number_format($event->price)}} IDR</strong></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="status" class="col-xs-12 col-sm-3 col-md-3 control-label">Status</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <select name="status" class="form-control" {{$status == 'Finish' ? 'disabled' : '' }}>
                      @if($status == 'Processing' )
                      <option value="1" {{$book->status == 1 ? 'selected' : ''}}>Processing</option>
                      <option value="2" {{$book->status == 2 ? 'selected' : ''}}>Completed</option>
                      @elseif($status == 'Finish')
                      <option value="2" {{$book->status == 2 ? 'selected' : ''}}>Completed</option>
                      @else
                      <option value="0" {{$book->status == 0 ? 'selected' : ''}}>Pending</option>
                      <option value="1" {{$book->status == 1 ? 'selected' : ''}}>Processing</option>
                      <option value="2" {{$book->status == 2 ? 'selected' : ''}}>Completed</option>
                      @endif
                    </select>
                  </div>
                </div>

                <div class="form-group">
                  <label for="qty" class="col-xs-12 col-sm-3 col-md-3 control-label">Qty</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <label for="qty" class="control-label"><strong>{{$book->bookDetail->qty}}</strong></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="participant" class="col-xs-12 col-sm-3 col-md-3 control-label">Participant</label>
                  <div class="col-xs-12 col-sm-6 col-md-6 participant-form">
                    @foreach($book->bookParticipants as $key => $participant)
                    <input type="text" id="participant" class="form-control col-md-7 col-xs-12 participant" name="participant_name" disabled value="{{$participant->participant_name}}">
                    @endforeach
                    <!-- <a href="#" class="btn btn-primary add-partipant" onclick="addParticipant()"><i class="fa fa-plus"> Add Participant</i></a> -->
                  </div>
                </div>

                <div class="form-group">
                  <label for="subtotal" class="col-xs-12 col-sm-3 col-md-3 control-label">SubTotal</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <label for="subtotal" class="control-label"><strong>{{number_format($book->bookDetail->subtotal)}} IDR</strong></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="unique" class="col-xs-12 col-sm-3 col-md-3 control-label">Unique Number</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <label for="unique" class="control-label"><strong>{{($book->unique_number)}}</strong></label>
                  </div>
                </div>

                <div class="form-group">
                  <label for="total" class="col-xs-12 col-sm-3 col-md-3 control-label">Total</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <label for="total" class="control-label"><strong>{{number_format($book->total)}} IDR</strong></label>
                  </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                  @if($book->member_id != null)
                  <a href="{{ route('member.booking.list') }}" type="submit" class="btn btn-default">Cancel</a>
                  @else
                  <a href="{{ route('guest.booking.list') }}" type="submit" class="btn btn-default">Cancel</a>
                  @endif
                  <button type="submit" class="btn btn-info pull-right">Submit</button>
                </div>
                <!-- /.box-footer -->
              </div>
            </form>

          </div>
        </div>
      </div>
    </section>
@endsection
@section('scripts')
@parent
<script type="text/javascript">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.js"></script>
<script type="text/javascript">
  $('.add-partipant').hide();

  $('.edit').click(function(){
    $('.participant').attr('disabled', false);
    $('.add-partipant').show();
    $(this).hide();
    return false;
  });

  // function addParticipant(){
  //   $('.add-partipant').hide();
  //   $('.participant-form').append('<input type="text" id="participant" class="form-control col-md-7 col-xs-12" name="participant_name"><a href="#" class="btn btn-primary add-partipant" onclick="addParticipant()"><i class="fa fa-plus"> Add Participant</i></a>');
  // }

</script>
@endsection
