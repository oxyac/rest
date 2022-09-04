<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Services\Post\PostService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class PostController extends ApiController
{
    public function __construct(PostService $service)
    {
        $this->service = $service;
    }
}
