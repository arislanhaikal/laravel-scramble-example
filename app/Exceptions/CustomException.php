<?php

namespace App\Exceptions;

use Exception;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class CustomException extends Exception
{
    use ApiResponser;

    public function render($request)
    {
        return $this->errorResponse($this->getMessage(), $this->getCode() != 0 ? $this->getCode() : Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    /**
     * Report or log an exception.
     *
     * @return void
     */
    public function report()
    {
        Log::debug('[EXCEPTION] ' . $this->message);
    }
}
