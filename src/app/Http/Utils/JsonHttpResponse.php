<?php

namespace App\Http\Utils;

class JsonHttpResponse
{
    public static function successResponse($data, string $status, int $code = 200)
    {
        return response()->json(
            [
                'data'   => $data,
                'status' => $status
            ],
            $code
        );
    }

    public static function errorResponse(string $message, string $status, int $code = 500){
        return response()->json(
            [
                'message' => $message,
                'status'  => $status
            ],
            $code
        );
    }
}

