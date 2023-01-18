<?php

namespace App\Traits;

trait Response
{
    protected function storeResponse($data)
    {
        return response()->json(
            [
                'success'  => $data['success'],
                'message' => $data['message'],
                'code'    => $data['code'],
                'data'    => $data['data'],
            ],
            $data['code']
        );
    }
}
