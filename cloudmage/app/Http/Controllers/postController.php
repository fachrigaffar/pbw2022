<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class postController extends Controller
{
    public function index()
    {
        $post = DB::table('posts')->get();
        return view('/post', [
            'post' => $post,
            'title' => 'Post'
        ]);
    }
}
