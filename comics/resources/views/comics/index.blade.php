
@extends('layouts.app')

@section('title', 'Comics DC')

@section('content')
    <div class="jumbo">
        <img src="{{ asset('/img/jumbotron.jpg')}}" alt="">
    </div>
    <div class="comics">
        <div class="my-container d-flex flex-wrap position-relative justify-content-around">
            <h3 class="page_title">current series</h3>
            @foreach ($comics as $index => $comic)
            <div class="comic">
            <img src="{{$comic['thumb']}}" alt="copertina">
            {{-- <h5>{{$comic['series']}}</h5> --}}
            <a href="{{route('comic', ['id' => $index])}}">{{$comic['series']}}</a>
            </div>       
            @endforeach
        </div>
        <div class="load_more text-center">
            <a href="#">load more</a>
        </div>
    </div>

@endsection