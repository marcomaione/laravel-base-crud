<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comicBook extends Model
{
    protected $table = 'comics';
    protected $fillable = ['thumb','title','type','series','sale_date','description','price'];
}
