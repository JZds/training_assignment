@extends('layout')

@section('content')

<div class="pageheader text-xs-center text-sm-left">
    <div class="container">
        <h1>Login</h1>
        <p class="lead">Join to create your advertisements.</p>
    </div>
</div>
<div class="container">
    <div class="col-lg-12 well">
        <div class="row">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('auth.login') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-6 form-group {{ $errors->has('email') ? 'has-danger' : '' }}">
                        <label>Email Address</label>
                        <input type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="form-control-feedback">{{ $errors->first('email') }}</span>
                        @endif
                    </div>

                    <div class="col-sm-6 form-group {{ $errors->has('password') ? 'has-danger' : '' }}">
                        <label>Password</label>
                        <input type="password" placeholder="Password" name="password" class="form-control">
                        @if ($errors->has('password'))
                            <span class="form-control-feedback">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                </div>
                <button type="submit" class="btn btn-md btn-primary">Login</button>
            </div>
        </form>
    </div>
    </div>
</div>

@endsection
