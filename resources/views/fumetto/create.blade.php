@extends('layouts.base')

@section('pageTitle', 'crea fumetto')

@section('content')

    <div class="container">
        <form method="POST" action="{{route('fumetto.store')}}">

            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">immagine fumetto</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nome fumetto</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <select class="form-select" id="type">
                        <option value="Comic book">Comic book</option>
                        <option value="Graphic novel">Graphic novel</option>
                    </select>
                    <label for="floatingSelect">tipo</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">serie</label>
                <input type="text" class="form-control" id="series" name="series">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">data di vendita</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date">
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="descrizione" id="description" name="description"></textarea>
                </div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">prezzo</label>
                <input type="text" class="form-control" id="price" name="price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    


        

@endsection