@extends('layouts.base')

@section('pageTitle', 'crea formato di pasta')

@section('content')

    <form method="POST" action="{{route('fumetto.store')}}">

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">nome fumetto</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">tipo fumetto</label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">serie</label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">data di vendita</label>
            <input type="text" class="form-control" id=" sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">prezzo</label>
            <input type="text" class="form-control" id="price" name="price">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    

    </form>


        

@endsection