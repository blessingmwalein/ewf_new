<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Paynow\Http\ConnectionException;
use Paynow\Payments\HashMismatchException;
use Paynow\Payments\InvalidIntegrationException;
use Paynow\Payments\NotImplementedException;
use Paynow\Payments\Paynow;
use App\Models\Transaction;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    
    public function jsonError($message = "Unexpected Error", $statusCode = 500)
    {
        return response()->json(
            [
            "success" => false,
            "message" => $message
            ], $statusCode
        );
    }

    public function jsonSuccess($message = "Request Successful", $statusCode = 200)
    {
        return response()->json(
            [
            "success" => true,
            "message" => $message
            ], $statusCode
        );
    }

    public function paynow($type="order")
    {
        return new Paynow(
            env("PAYNOW_ID", 11271),
            env("PAYNOW_KEY", "4f6c4414-5633-4679-b265-840c73ff3294"),
            env("APP_URL")."/paynow/".$type,
            env("APP_URL")."/paynow/".$type
        );
    }

    public function initiateTransaction($amount, $type, $mobile, $phone_number=null , $method = "paynow", $email)
    {

        $payment = $this->paynow($type)->createPayment($type.uniqid(), $email);

        if(env("APP_DEBUG")) {
            $payment = $this->paynow($type)->createPayment($type.uniqid(), env("PAYNOW_TEST_EMAIL"));
        }

        //        $current_rate = Rate::latest()->first();

        $payment->add($type.uniqid(), $amount);

        try{
            if($method == "paynow") {
                $response = $this->paynow($type)->send($payment);

                if($response->success()) {
                    $link = $response->redirectUrl();
                    $pollUrl = $response->pollUrl();

                    $transactionData = [
                     "type" => $type,
                     "pollurl" => $pollUrl,
                     "method" => "paynow",
                     "amount" => $amount,
                     "status" => "sent",
                     "link" => $link
                    ];
                    return Transaction::create($transactionData);
                }
            }
            else if($method == "mobile") {
                $response = $this->paynow($type)->sendMobile($payment, $phone_number, $mobile);
                //                dd($response);
                if($response->success()) {
                    $link = $response->redirectUrl();
                    $pollUrl = $response->pollUrl();

                    $transactionData = [
                        "type" => $type,
                        "pollurl" => $pollUrl,
                        "method" => "paynow"."_".$mobile,
                        "amount" => $amount,
                        "status" => "sent",
                        "link" => $link
                    ];
                    return Transaction::create($transactionData);
                }
            }
        }
        catch (ConnectionException $e){
            return $e;
        } catch (HashMismatchException $e) {
            return $e;
        } catch (InvalidIntegrationException $e) {
            return $e;
        } catch (NotImplementedException $e) {
            return $e;
        }
    }
}
