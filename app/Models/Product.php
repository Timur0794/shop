<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = false;
    protected $table = 'products';
    use HasFactory;

    public function category()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'product_tags','product_id','tag_id');
    }
    public function colors()
    {
        return $this->belongsToMany(Color::class,'color_products','product_id','color_id');
    }
}
