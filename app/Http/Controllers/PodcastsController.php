<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PodcastsController extends Controller
{
    public function index()
    {
        return view('podcasts.index');
    }
}
