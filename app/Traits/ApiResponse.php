<?php

namespace App\Traits;

trait ApiResponse
{
    protected function apiSuccess($data, $code = 200, $massage = null)
    {
        return response()->json([
            'data' => $data,
            'massage' =>$massage
        ], $code);
    }

    protected function apiError($errors, $code, $massage = null)
    {
        return response()->json([
            'errors' => $errors,
            'massage' =>$massage
        ], $code);
    }
}