<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $name = "categories";

    protected $fillable = [
        "name"
    ];
}
