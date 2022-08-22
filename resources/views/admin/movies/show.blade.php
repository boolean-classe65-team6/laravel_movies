@extends('layouts.admin')

@section('page_title', 'Dettagli Film #' . $movie->id)

@section('page_content')
  <div class="container">
    <div class="row">
      <div class="col-4">
        <img src="{{ $movie->poster_img }}" alt="" class="img-fluid">
      </div>
      <div class="col">
        <h1>{{ $movie->title }}</h1>
        <p>{!! $movie->overview !!}</p>

      </div>
    </div>
  </div>
@endsection