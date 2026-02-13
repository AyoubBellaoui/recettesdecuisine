<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function recettes() {

        return $this->hasMany(recettes::class);
    }
}
