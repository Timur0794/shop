<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;

class EditController extends BaseController
{
    public function __invoke(Product $product)
    {
        return view('product.edit', compact('product'));
    }
}
