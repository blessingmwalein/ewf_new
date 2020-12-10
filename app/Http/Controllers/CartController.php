<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Models\Cart;
use App\Models\CartItem;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Cart $cart)
    {
        return new CartResource($cart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }

    public function addCartItems(Request $request, Cart $cart){        

        
        $product_id = $request->product_id;
        $quantity = $request->quantity;
            //check if the the same product is already in the Cart, if true update the quantity, if not create a new one.
            $cartItem = CartItem::where(['cart_id' => $cart->id, 'product_id' => $product_id])->first();

            
            if ($cartItem) {
               
                $properties = json_decode($cartItem->properties);


                foreach ($properties as $key => $property ) {
                    if($request->property['unique_string_id'] === $property->unique_string_id){
                        $properties[$key]->quantity = $properties[$key]->quantity + $request->property['quantity'];

                        $cartItem->properties = json_encode($properties);
                        $cartItem->qauntity = $cartItem->quantity + $quantity;
                        $cartItem->save();

                        return new CartResource($cart);
                    }
                }

                foreach ($properties as $key => $property ) {
                    if($request->property['unique_string_id'] !== $property->unique_string_id) {
                        array_push($properties, $request->property);

                        $cartItem->properties = json_encode($properties);
                        $cartItem->qauntity = $cartItem->quantity + $quantity;
                        $cartItem->save();

                        return new CartResource($cart);
                    }
                }
                

            } else {
                $properties = array();
                array_push($properties, $request->property);

                CartItem::create([
                    'cart_id' => $cart->id, 
                    'product_id' => $product_id, 
                    'qauntity' => $quantity,
                    "properties" => json_encode($properties)
                    ]);

                return new CartResource($cart);
            }
            
    }
}
