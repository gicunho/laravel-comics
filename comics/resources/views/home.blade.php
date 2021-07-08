
@extends('layouts.app')

@section('title', 'Homepage DC')

@section('content')
    <div class="jumbo">
        <img src="{{ asset('/img/jumbotron.jpg')}}" alt="">
    </div>
    <div class="comics">
        <div class="my-container d-flex flex-wrap position-relative">
            <h3 class="page_title">current series</h3>
            @foreach ($comics as $comic)
            <div class="comic">
            <img src="{{$comic['thumb']}}" alt="copertina">
            <h5>{{$comic['series']}}</h5>
            </div>       
            @endforeach
        </div>
        <div class="load_more text-center">
            <a href="#">load more</a>
        </div>
    </div>

@endsection