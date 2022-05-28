<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class gallery extends Model
{
    protected  $table='gallery';
    public function getCat()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }
}
