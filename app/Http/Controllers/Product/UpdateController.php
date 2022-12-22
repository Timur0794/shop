<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;


use App\Http\Requests\Product\UpdateRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class UpdateController extends BaseController
{
    public function __invoke(Product $product, UpdateRequest $request)
    {
        $data = $request->validated();
        $this->service->update($product,$data);
        return redirect()->route('product.show', $product->id);
    }
}
