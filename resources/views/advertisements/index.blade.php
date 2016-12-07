@extends('layout')

@section('content')
    <div class="pageheader text-xs-center text-sm-left">
      <div class="container">
        <h1>My advertisements</h1>
        <p class="lead">A list of my created advertisements.</p>
      </div>
    </div>

    <div class="container bd-content">

        <div class="list-group">
            @foreach($advertisements as $ad)
              <a href="#" class="list-group-item list-group-item-action">
                <small class="float-xs-right">Created At: <b>{{ $ad->created_at }}</b></small>
                <h5 class="list-group-item-heading">{{ $ad->title }}</h5>
                <p class="list-group-item-text">{{ $ad->description }}</p>
              </a>
            @endforeach
        </div>
    </div>
@endsection