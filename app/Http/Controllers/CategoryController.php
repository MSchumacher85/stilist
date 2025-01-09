<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function index()
    {
        return view('category.index');
    }

    public function about()
    {
        return view('categories.about');
    }

    public function blog()
    {
        return view('categories.blog');
    }

    public function blogSingle()
    {
        return view('categories.blog-single');
    }

    public function contact()
    {
        return view('categories.contact');
    }

    public function services()
    {
        return view('categories.services');
    }

    public function work()
    {
        return view('categories.work');
    }
}
