<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Podcast;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadPodcastsController extends Controller
{
    public function show(Podcast $podcast)
    {
        if(env('STORAGE_DISK') === 'public') {
            $file_path = storage_path('app/public/' . $podcast->podcast);
            $file_exists = file_exists($file_path);
        } else {
            $file_path = Storage::disk(env('STORAGE_DISK'))->url($podcast->podcast);
            $file_exists = Storage::disk(env('STORAGE_DISK'))->exists($file_path);
        }

        if($file_exists) {
            return response()->download($file_path, basename($file_path));
        } else {
            exit('Requested file does not exist on our server!');
        }
    }
}
