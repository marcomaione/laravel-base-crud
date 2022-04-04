@extends('layouts.base')

@section('pageTitle', 'indice sito')

@section('content')

<div class="container">
    <table class="table">
    <thead>
        <tr>

            <th scope="col">immagine</th>
            <th scope="col">titolo</th>
            <th scope="col">tipo</th>
            <th scope="col">serie</th>
            <th scope="col">data di vendita</th>
            <th scope="col">descrizione</th>
            <th scope="col">prezzo</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($fumetti as $fumetto)
            <tr>
                <th><img src="{{$fumetto->thumb}}" alt=""></th></th>
                <td>{{$fumetto->title}}</td>
                <td>{{$fumetto->type}}</td>
                <td>{{$fumetto->series}}</td>
                <td>{{$fumetto->sale_date}}</td>
                <td>{{$fumetto->description}}</td>
                <td>{{$fumetto->price}}</td>
                <td>
                <a class="btn btn-primary" href="{{route('fumetto.show', $fumetto->id)}}" role="button">view</a>
                <a class="btn btn-warning" href="{{route('fumetto.create', $fumetto->id)}}" role="button">create</a>
                </td>
            </tr>
        @endforeach
    </tbody>
    </table>
</div>

@endsection