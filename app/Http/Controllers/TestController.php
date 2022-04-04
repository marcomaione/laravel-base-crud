<?php

namespace App\Http\Controllers;

use App\comicBook;
use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fumetti = comicBook::all();
        return view('fumetto.index', compact('fumetti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('fumetto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $fumetto = new comicBook();
        /*
        $fumetto->thumb = $data['thumb'];
        $fumetto->title = $data['title'];
        $fumetto->type = $data['type'];
        $fumetto->series = $data['series'];
        $fumetto->sale_date = $data['sale_date'];
        $fumetto->description = $data['description'];
        $fumetto->price = $data['price'];
        */
        $fumetto->fill($data);
        
        $fumetto->save();

        return redirect()->route('fumetto.show', ['fumetto' => $fumetto->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(comicBook $fumetto)
    {
        //$fumetto = comicBook::find($title);

        //if ($comic) {
            //$fumetti = comicBook::find($title);
            return view('fumetto.show', compact('fumetto'));

        //}else {
           // abort(404);
        //}
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
