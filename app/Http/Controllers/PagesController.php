<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home()
    {
        $podcasts = Podcast::published()->latest()->take(11)->get();

        return view('podcasts.index', compact('podcasts'));
    }
}
