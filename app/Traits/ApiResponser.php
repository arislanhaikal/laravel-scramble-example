<?php

namespace App\Traits;

use Illuminate\Http\Response;
use Illuminate\Http\JsonResponse;

trait ApiResponser
{
    /**
     * Building success response
     *
     * @param  string|array  $data
     * @param  ?string  $message
     * @param  int  $code
     * @return JsonResponse
     */
    public function successResponse($data, $message = null, $code = Response::HTTP_OK)
    {
        return response()->json([
            'success' => true,
            'data' => $data,
            'message' => $message,
        ], $this->validErrorCode($code) ? $code : Response::HTTP_OK);
    }

    /**
     * Building error response
     *
     * @param  ?string  $message
     * @param  int  $code
     * @return JsonResponse
     */
    public function errorResponse($message = null, $code = Response::HTTP_UNPROCESSABLE_ENTITY)
    {
        return response()->json([
            'success' => false,
            'message' => $message,
        ], $this->validErrorCode($code) ? $code : Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function validErrorCode($code)
    {
        return $code != 0 && ! in_array($code, ['40001']);
    }
}
