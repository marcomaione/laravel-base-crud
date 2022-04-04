@extends('layouts.base')

@section('pageTitle')

    modifica:{{$fumetto->title}}

@endsection

@section('content')

    <div class="container">
        <form method="POST" action="{{route('fumetto.update', ['fumetto' => $fumetto->id])}}">

            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">immagine fumetto</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{$fumetto->thumb}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nome fumetto</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$fumetto->title}}">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <select class="form-select" id="type" name="type">
                        <option {{($fumetto->type == 'Comic book') ? 'selected' : ''}} value="Comic book">Comic book</option>
                        <option {{($fumetto->type == 'Graphic novel') ? 'selected' : ''}} value="Graphic novel">Graphic novel</option>
                    </select>
                    <label for="floatingSelect">tipo</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">serie</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$fumetto->series}}">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">data di vendita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$fumetto->sale_date}}">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="descrizione" id="description" name="description">{{$fumetto->description}}</textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">prezzo</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$fumetto->price}}">
            </div>

            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
    


        

@endsection