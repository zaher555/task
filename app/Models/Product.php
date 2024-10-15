<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table='products';
    use HasFactory;
    protected $fillable=['name','description','price','category_id'];
    public function category()
    {
        $this->belongsTo(Category::class,'category_id');
    }
}
