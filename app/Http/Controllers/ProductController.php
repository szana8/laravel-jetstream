<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return auth()->user()->products()->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\CreateProductRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreateProductRequest $request)
    {
        $product = auth()->user()->products()->create($request->validated());

        return response()->json($product);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function show($product)
    {
        $response = auth()->user()->products()->where('api_id', $product)->first();

        return response()->json($response);
    }
}
