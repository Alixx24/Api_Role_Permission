<?php

namespace App\Http\Helper;

use Illuminate\Http\Exceptions\HttpResponseException;

class Helper{
    public static function sendError($message, $errors= [], $code = 401)
    {
        $response = ['success'=>false, 'message'=>$message];
        if(!empty($errors)){
            $response['data'] = $errors;

            throw new HttpResponseException(response()->json($response, $code));
        }
    }
}