<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::paginate(6);
        $i=0;
        return view('blog')->with(
            [
                'blogs' => $blogs,
                'i'=>$i,
            ]
        );
    }

}
