@extends('layouts.base')

@section('pageTitle'), 
    {{$fumetto->series}})
@endsection

@section('content')
    <div class="container">
            <img src="{{$fumetto->thumb}}" alt="">
            <h1>{{$fumetto->title}}</h1>
            <h2>{{$fumetto->type}}</h2>
            <h3>{{$fumetto->series}}</h3>
            <h4>{{$fumetto->sale_date}}</h4>
            <h5>{{$fumetto->description}}</h5>
            <h6>{{$fumetto->price}}</h6>

            <a class="btn btn-primary" href="{{route('fumetto.index')}}" role="button">back to list</a>
    </div>

@endsection