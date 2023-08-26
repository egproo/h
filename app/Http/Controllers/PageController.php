<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show($slug)
{
    $page = Page::where('slug', $slug)->firstOrFail();
    return view('page.show', compact('page'));
}
}
