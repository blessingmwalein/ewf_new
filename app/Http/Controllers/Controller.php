<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

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
}
