<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $table = 'products';

    public function cagetory() {
        return $this->belongsTo(Category::class);
        return $this->belongsTo(Brand::class);
    }
}
