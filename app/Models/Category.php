<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\gallery;

class Category extends Model
{
    use HasFactory;

    public function getGallerys()
    {
        return $this->hasMany(gallery::class,'cat_id','id');
    }
}
