<?php

namespace App\Traits;

trait Response
{
    protected function successResponse($data, $message = '', $code = 200)
    {
        return response()->json(
            [
                'status'  => 'Success',
                'message' => $message,
                'code'    => $code,
                'data'    => $data,
            ],
            $code
        );
    }
}
