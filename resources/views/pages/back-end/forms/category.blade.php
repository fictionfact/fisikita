@extends('adminlte::layouts.app')
@section('contentheader_title', 'Category')

@section('main-content')
<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
            @if($category != null)
              <h3 class="box-title user-profile">Edit Category</h3>
            @else
              <h3 class="box-title user-profile">Input New Category</h3>
            @endif
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="POST" 
                    action="/admin/category{{$category != null ? '/' . $category->id : ''}}">
              {{ csrf_field() }}
              @if(isset($category))
                {{ method_field('PUT') }}
              @endif
              <div class="box-body ">

                <div class="form-group">
                  <label for="name" class="col-xs-12 col-sm-3 col-md-3 control-label">Name</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <input type="text" id="name" class="form-control col-md-7 col-xs-12" name="name" value="{{$category != null ? $category->name : old('name')}}">
                    @if ($errors->has('name'))
                    <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

                <div class="form-group">
                  <label for="email" class="col-xs-12 col-sm-3 col-md-3 control-label">Icon</label>
                  <div class="col-xs-12 col-sm-6 col-md-6">
                    <input type="text" id="icon" class="form-control col-md-7 col-xs-12" name="icon" value="{{$category != null ? $category->icon : old('icon')}}">

                    @if ($errors->has('icon'))
                    <span class="help-block">
                        <strong>{{ $errors->first('icon') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <a href="/category" type="submit" class="btn btn-default">Cancel</a>
                <button type="submit" class="btn btn-info pull-right">Submit</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
      </div>
    </section>
@stop
