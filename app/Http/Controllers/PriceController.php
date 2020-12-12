<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePriceRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreatePriceRequest $request)
    {
        $product = Product::whereApiId($request->product_id)->firstOrFail();

        $price = $product->prices()->create($request->validated());

        return response()->json($price);
    }

}
