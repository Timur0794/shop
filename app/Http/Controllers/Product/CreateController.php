<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Tag;
use Illuminate\Http\Request;
use function GuzzleHttp\Promise\all;

class CreateController extends BaseController
{
    public function __invoke()
    {
        $products = Product::all();
        $categories = Category::all();
        $tags = Tag::all();
        $colors = Color::all();
        return view('product.create', compact('categories','tags','colors', 'products'));
    }
}
