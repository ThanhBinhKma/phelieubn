<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('dashboard.index')->with(['posts' => $posts]);
    }
}
