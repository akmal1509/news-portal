<?php

namespace App\Traits;

trait ApiCollectionResource
{
    public static function apiCollection($resource)
    {
        $result = self::collection($resource['data']);
        if (is_null($resource['message'])) {
            return response()->json([
                'success' => $resource['success'],
                'code' => $resource['code'],
                "data" =>  $result
            ], $resource['code']);
        } else {
            return response()->json([
                'success' => $resource['success'],
                'code' => $resource['code'],
                'message' => $resource['message'],
                "data" =>  $result
            ], $resource['code']);
        }
    }

    public static function storeCollection($resource)
    {
        $result = $resource['data'];
        return response()->json([
            'success' => $resource['success'],
            'code' => $resource['code'],
            'message' => $resource['message'],
            "data" =>  $result
        ], $resource['code']);
    }
}
