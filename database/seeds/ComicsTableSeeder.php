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

        foreach($comics as $comicBook) {

            $fumetto = new comicBook();

            $fumetto->thumb = $comicBook['thumb'];
            $fumetto->title = $comicBook['title'] ;
            $fumetto->type = $comicBook['type'];
            $fumetto->series = $comicBook['series'];
            $fumetto->price = $comicBook['price'];
            $fumetto->sale_date = $comicBook['sale_date'];
            $fumetto->description = $comicBook['description'];
        }
    }
}
