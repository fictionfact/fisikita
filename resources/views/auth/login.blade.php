@extends('backpack::layout_guest')

@section('content')

    <div class="row m-t-40">
        <div class="col-md-4 col-md-offset-4">
            <h3 class="text-center m-b-20">Login</h3>
            <div class="box">
                <div class="box-body">
                    <form class="col-md-12 p-t-10" role="form" method="POST" action="{{ route('login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group">
                            <label class="control-label">Username</label>

                            <div>
                                <input type="text" class="form-control" name="username"">

                                 @if ($errors->has('username'))
                                    <span class="help-block" style='color:red;'>
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label">Password</label>

                            <div>
                                <input type="password" class="form-control" name="password">
                                @if ($errors->has('password'))
                                    <span class="help-block" style='color:red;'>
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        @if (session('message'))
                            <span class="help-block" style='color:red;'>
                                <p>{{ session('message') }}</p>
                            </span>
                        @endif

                        <div class="form-group">
                            <div>
                                <button type="submit" class="btn btn-block btn-primary">
                                    Login
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
