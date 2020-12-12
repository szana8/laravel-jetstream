<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaymentRequest;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the payments.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(auth()->user()->payments);
    }

    /**
     * Store a newly created payment in storage.
     *
     * @param \App\Http\Requests\CreateProductRequest $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(CreatePaymentRequest $request)
    {
        $payment = auth()->user()->payments()->create($request->validated());

        return response()->json($payment);
    }

    /**
     * Display the specified payment.
     *
     * @param \App\Models\Product $product
     *
     * @return \Illuminate\Http\Response
     */
    public function show($payment)
    {
        $response = auth()->user()->payments()->where('api_id', $payment);

        return response()->json($response);
    }
}
