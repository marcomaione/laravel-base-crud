@extends('layouts.base')

@section('pageTitle', {{$comic->title}})

@section('content')
    <div class="container">
            <img src="{{$comic->thumb}}" alt="">
            <h1>{{$comic->title}}</h1>
            <h2>{{$comic->type}}</h2>
            <h3>{{$comic->series}}</h3>
            <h4>{{$comic->sale_date}}</h4>
            <h5>{{$comic->description}}</h5>
            <h6>{{$comic->price}}</h6>
    </div>

@endsection