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
        
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
    </tbody>
    </table>
</div>

@endsection