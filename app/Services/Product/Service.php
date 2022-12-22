<?php

namespace App\Services\Product;

use App\Models\Product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Service
{
    public function store($data)
    {
        try {
            DB::beginTransaction();
            $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            $tags = $data['tags'];
            $colors = $data['colors'];
            unset($data['tags'], $data['colors']);
            $product = Product::firstOrCreate(
                ['title' => $data['title']] ,$data);
            $product->tags()->attach($tags);
            $product->colors()->attach($colors);
            DB::commit();

        }
        catch (\Exception $exception)
        {
            DB::rollBack();
            return abort(500);
        }
    }

    public function update($product, $data)
    {
        try {
            DB::beginTransaction();

            if(isset($data['preview_image']))
            {
                $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);
            }
            $tags = $data['tags'];
            $colors = $data['colors'];
            unset($data['tags'], $data['colors']);
            $product->update($data);
            $product->tags()->sync($tags);
            $product->colors()->sync($colors);
            DB::commit();
        }
        catch (\Exception $exception)
        {
            DB::rollBack();
            return abort('500');
        }
    }
}


