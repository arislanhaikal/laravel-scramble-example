<?php

namespace App\Http\Controllers;

use App\Exceptions\CustomException;
use App\Http\Resources\BlogResource;

class HomeController extends Controller
{
    /**
     * Example 1
     *
     * Success response with trait
     */
    public function index()
    {
        $blogs = [
            [
                'title' => 'Blog 1',
                'content' => 'This is blog 1',
            ],
            [
                'title' => 'Blog 2',
                'content' => 'This is blog 2',
            ],
            [
                'title' => 'Blog 3',
                'content' => 'This is blog 3',
            ],
        ];

        return $this->successResponse(BlogResource::collection($blogs), 'Blogs retrieved successfully');
    }

    /**
     * Example 2
     *
     * Error response with trait
     */
    public function errors()
    {
        if (true) {
            throw new CustomException('This is a custom exception');
        }

        $blogs = [
            [
                'title' => 'Blog 1',
                'content' => 'This is blog 1',
            ],
            [
                'title' => 'Blog 2',
                'content' => 'This is blog 2',
            ],
            [
                'title' => 'Blog 3',
                'content' => 'This is blog 3',
            ],
        ];

        return $this->successResponse(BlogResource::collection($blogs), 'Blogs retrieved successfully');
    }
}
