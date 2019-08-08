@extends('adminlte::layouts.app')
@section('contentheader_title', 'Event')
@section('css')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker3.min.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.css">
<link rel="stylesheet" type="text/css" href="{{ asset('vendor/tagsinput/css/bootstrap-tagsinput.css') }}">
<style type="text/css">
  .bootstrap-tagsinput{
    width: 100% !important;
    height: 100px !important;
    overflow-y: scroll;
  }
</style>
@endsection
@section('main-content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title user-profile">Input New Event</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" 
                    action="/admin/event{{$event != null ? '/' . $event->id : ''}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              @if(isset($event))
                {{ method_field('PUT') }}
              @endif

              <div class="box-body ">

                <div class="form-group">
                  <label for="name" class="col-xs-12 col-sm-3 col-md-3 control-label">Name</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <input type="text" id="name" class="form-control col-md-7 col-xs-12" name="name"  value="{{ $event != null ? $event->name : old('name') }}">
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="price" class="col-xs-12 col-sm-3 col-md-3 control-label">Price</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <input type="text" id="price" class="form-control col-md-7 col-xs-12" name="price" value="{{ $event != null ? (int)$event->price : old('price') }}">

                    @if ($errors->has('price'))
                    <span class="help-block">
                        <strong>{{ $errors->first('price') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="description" class="col-xs-12 col-sm-3 col-md-3 control-label">Description</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <textarea class="col-xs-12 col-sm-12 col-md-12" name="description">{{ $event != null ? $event->description : old('description') }}</textarea>

                    @if ($errors->has('description'))
                    <span class="help-block">
                        <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                      <select id="category" name="category" class="form-control">
                        @foreach($categories as $category)
                          <option value="{{$category->id}}" {{ $event != null ? ($event->category_id == $category->id ? 'selected' : '') : ''}}>{{$category->name}}</option>
                        @endforeach
                      </select>  
                    </div>
                </div>

                <div class="item form-group">
                  <label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image</label>
                        <div class="checkbox col-md-6 col-sm-6 col-xs-12">
                          <input type="file" name="image" accept=".jpg, .png, .gif">
                          @if ($errors->has('image'))
                          <span class="help-block">
                              <strong>{{ $errors->first('image') }}</strong>
                          </span>
                          @endif
                        </div>
                </div>

                <div class="form-group">
                  <label for="about" class="col-xs-12 col-sm-3 col-md-3 control-label">About</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <textarea class="col-xs-12 col-sm-12 col-md-12" name="about">{{ $event != null ? $eventInformation->about : old('about') }}</textarea>

                    @if ($errors->has('about'))
                    <span class="help-block">
                        <strong>{{ $errors->first('about') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="host" class="col-xs-12 col-sm-3 col-md-3 control-label">Host</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <input type="text" id="host" class="form-control col-md-7 col-xs-12" name="host" value="{{ $event != null ? $eventInformation->host : old('host') }}">

                    @if ($errors->has('host'))
                    <span class="help-block">
                        <strong>{{ $errors->first('host') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="itinerary" class="col-xs-12 col-sm-3 col-md-3 control-label">Itinerary</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <textarea class="col-xs-12 col-sm-12 col-md-12" name="itinerary">{{ $event != null ? $eventInformation->itinerary : old('itinerary') }}</textarea>

                    @if ($errors->has('itinerary'))
                    <span class="help-block">
                        <strong>{{ $errors->first('itinerary') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="venue" class="col-xs-12 col-sm-3 col-md-3 control-label">Venue</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <textarea class="col-xs-12 col-sm-12 col-md-12" name="venue">{{ $event != null ? $eventInformation->venue : old('venue') }}</textarea>

                    @if ($errors->has('venue'))
                    <span class="help-block">
                        <strong>{{ $errors->first('venue') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>                                

                <div class="form-group">
                  <label for="address" class="col-xs-12 col-sm-3 col-md-3 control-label">Address</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <textarea class="col-xs-12 col-sm-12 col-md-12" name="address">{{ $event != null ? $eventInformation->address : old('address') }}</textarea>

                    @if ($errors->has('address'))
                    <span class="help-block">
                        <strong>{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>                               

                <div class="form-group">
                  <label for="date" class="col-xs-12 col-sm-3 col-md-3 control-label">Date</label>
                  <div class="col-xs-12 col-sm-6 col-md-2">
                      <div class="input-group input-append date" id="datepicker">
                        <input type='text' name="date" class="form-control" value="{{ $event != null ? $eventInformation->date->format('d-m-Y') : old('date') }}" />
                        <span class="input-group-addon add-on"><i class="fa fa-calendar"></i></span>
                      </div>

                    @if ($errors->has('date'))
                    <span class="help-block">
                        <strong>{{ $errors->first('date') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>  

                <div class="form-group">
                  <label for="time" class="col-xs-12 col-sm-3 col-md-3 control-label">Time</label>
                  <div class="col-xs-12 col-sm-6 col-md-2">
                      <div class="input-group input-append clockpicker" id="clockpicker">
                        <input type='text' name="time" class="form-control" value="{{ $event != null ? date('G:i', strtotime($eventInformation->time)) : old('time') }}"/>
                        <span class="input-group-addon add-on"><i class="fa fa-clock-o"></i></span>
                      </div>

                    @if ($errors->has('date'))
                    <span class="help-block">
                        <strong>{{ $errors->first('date') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>  

                <div class="form-group">
                  <label for="group_size" class="col-xs-12 col-sm-3 col-md-3 control-label">Group size</label>
                  <div class="col-xs-12 col-sm-6 col-md-1">
                    <input type="number" id="group_size" class="form-control col-md-7 col-xs-12" name="group_size" value="{{ $event != null ? $eventInformation->group_size : old('group_size') }}">

                    @if ($errors->has('group_size'))
                    <span class="help-block">
                        <strong>{{ $errors->first('group_size') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>  

                <div class="form-group">
                  <label for="note" class="col-xs-12 col-sm-3 col-md-3 control-label">Note</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">

                  <select multiple name="note[]" data-role="tagsinput">
                    @if($edit)
                    @foreach($notes as $note)
                    <option value="{{$note->note}}">{{$note->note}}</option>
                    @endforeach
                    @endif
                  </select>
                    @if ($errors->has('note'))
                    <span class="help-block">
                        <strong>{{ $errors->first('note') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="facility" class="col-xs-12 col-sm-3 col-md-3 control-label">Facility</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                  
                  <select multiple name="facility[]" data-role="tagsinput">
                    @if($edit)
                    @foreach($bonuses as $bonus)
                    <option value="{{$bonus->facility}}">{{$bonus->facility}}</option>
                    @endforeach
                    @endif
                  </select>

                    @if ($errors->has('facility'))
                    <span class="help-block">
                        <strong>{{ $errors->first('facility') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/admin/event" type="submit" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>
@endsection
@section('scripts')
@parent
<script type="text/javascript">
$(function () {
      $('#datepicker').datepicker({
        format:'dd-mm-yyyy',
        autoclose: true
      });
      $('#clockpicker').clockpicker({
        placement: 'top',
        align: 'left',
        autoclose: true
      });
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/clockpicker/0.0.7/bootstrap-clockpicker.min.js"></script>
<script src="{{ asset('vendor/tagsinput/js/bootstrap-tagsinput.min.js') }}"></script>
@endsection
