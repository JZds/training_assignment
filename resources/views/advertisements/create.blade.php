@extends('layout')

@section('content')

<div class="pageheader text-xs-center text-sm-left">
    <div class="container">
        <h1>Create new advertisement</h1>
        <p class="lead">Publish your new advertisement.</p>
    </div>
</div>
<div class="container">
    <div class="col-lg-12 well">
        <div class="row">
            <form class="form-horizontal" role="form" method="POST" action="{{ route('advertisements.store') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="col-sm-12">
                    <div class="form-group {{ $errors->has('title') ? 'has-danger' : '' }}">
                        <label>Advertisement title</label>
                        <input type="text" placeholder="Title" class="form-control" name="title" value="{{ old('title') }}">
                        @if ($errors->has('title'))
                            <span class="form-control-feedback">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group {{ $errors->has('description') ? 'has-danger' : '' }}">
                        <label>Detailed description</label>
                        <textarea placeholder="Description" class="form-control" name="description">{{ old('description') }}</textarea>
                        @if ($errors->has('description'))
                            <span class="form-control-feedback">{{ $errors->first('description') }}</span>
                        @endif
                    </div>
                    <button type="submit" class="btn btn-md btn-success">Post</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
