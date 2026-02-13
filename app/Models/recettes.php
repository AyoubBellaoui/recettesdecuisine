<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class recettes extends Model
{

    protected $fillable = [
        'titre',
        'description',
        'temps_preparation',
        'image',
        'category_id',
    ];

    public function category() {

        return $this->belongsTo(Category::class);
    }
}
