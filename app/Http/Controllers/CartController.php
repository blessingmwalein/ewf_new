<?php

namespace App\Http\Controllers;

use App\Http\Resources\CartResource;
use App\Http\Resources\OrderResource;
use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Order;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\Transaction;
use Paynow\Http\ConnectionException;


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
    public function checkout(Request $request, Cart $cart){

        $data = $request->validate([
		    "amount" => "required",
            "order_notes" => "required|string",
		    "method" => "required|string",
            "mobile" => "nullable|string",
            "transport_cost"=>"required | numeric",
            "email" => "required",  
            "phone_number" => "required | numeric",
            "id_passport"=> "required | string",                                                                
            "address" => "required | string",
            "user_id" => "required | numeric",
            "city_town"=> "required | string"
	    ]);

	    $transaction = $this->initiateTransaction($data["amount"], "order", $data["mobile"], $data["phone_number"], $data["method"], $data['email']);

        // dd($transaction);

	    if($transaction === null){
		    return $this->jsonError("Problem connecting to the PSP",500);
	    }
	    else if($transaction instanceof Transaction){

	    	$orderData = [
			    "transaction_id"=>$transaction->id,
				"user_id"=>$data["user_id"],
                "address"=> $data["address"],
                "mobile" => $data["phone_number"],
                "items"=> json_encode($cart->items),
                "ref_number" =>"",
                "order_notes"=> $data["order_notes"],
                "transport_cost"=>$data["transport_cost"],
                "order_status"=>"pending",
                "city_town"=> $data['city_town'],
                "email" => $data["email"],
                "id_passport"=> $data["id_passport"],
            ];

            $order = Order::create($orderData);
            // $order->ref_number ="EWF" + $order->id + rand(0, 9999);
            // $order->save();

	    	return new OrderResource($order);
	    }
	    else if($transaction instanceof ConnectionException){
		    return $this->jsonError($transaction->getMessage(),500);
	    }
    }
}
