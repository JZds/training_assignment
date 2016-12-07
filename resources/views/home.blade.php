@extends('layout')

@section('content')
    <div class="pageheader text-xs-center text-sm-left">
      <div class="container">
        <h1>Home page</h1>
        <p class="lead">Check out new posted advertisements.</p>
      </div>
    </div>

    <div class="container bd-content">

        <div class="list-group">
            @foreach($advertisements as $ad)
              <a href="#" class="list-group-item list-group-item-action">
                <small class="float-xs-right">At: <b>{{ $ad->created_at }}</b></small>
                <small class="float-xs-right">Created by: <b>{{ $ad->username }}</b>&nbsp;</small>
                <h5 class="list-group-item-heading">{{ $ad->title }}</h5>
                <p class="list-group-item-text">{{ $ad->description }}</p>
              </a>
            @endforeach
        </div>
    </div>
@endsection