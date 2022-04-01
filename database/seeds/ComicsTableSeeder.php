<?php

use Illuminate\Database\Seeder;
use App\comicBook;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comics) {

            $fumetto = new comicBook();

            $fumetto->thumb = $comics['thumb'];
            $fumetto->title = $comics['title'] ;
            $fumetto->type = $comics['type'];
            $fumetto->series = $comics['series'];
            $fumetto->price = $comics['price'];
            $fumetto->sale_date = $comics['sale_date'];
            $fumetto->description = $comics['description'];

            $fumetto->save();
        }
    }
}
