<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // create function to show all data (with type & technologies)
    public function index()
    {
        $posts = Post::with("type", "technologies")->get();
        
        return response()->json([
            "success" => true, //check
            "response" => $posts
        ]);
    }
}
