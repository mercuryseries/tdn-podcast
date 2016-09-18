<?php

namespace App\Http\Controllers;

use Storage;
use App\Http\Requests;
use App\Http\Requests\PodcastRequest;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth.basic')->only(['create', 'store', 'edit', 'update', 'destroy']);
    }

    public function index()
    {
        $podcasts = Podcast::published()->all();

        return view('podcasts.index', compact('podcasts'));
    }

    public function show(Podcast $podcast)
    {
        if(! $podcast->isPublished()) {
            return redirect()->home();
        }

        return view('podcasts.show', compact('podcast'));
    }

    public function create()
    {
        return view('podcasts.create');
    }

    public function store(PodcastRequest $request)
    {
        $podcast = new Podcast;

        $podcast = $this->fillPodcast($podcast, $request);

        return redirect()->route('podcasts.show', $podcast);
    }

    public function edit(Podcast $podcast)
    {
        return view('podcasts.edit', compact('podcast'));
    }

    public function update(PodcastRequest $request, Podcast $podcast)
    {
        $podcast = $this->fillPodcast($podcast, $request);

        return redirect()->route('podcasts.show', $podcast);
    }

    public function destroy(Podcast $podcast)
    {
        $podcast->delete();

        return redirect()->home();
    }

    private function fillPodcast(Podcast $podcast, Request $request) {

        if($podcast_file = $request->file('podcast')) {
            $podcast_file_name =  sprintf("%s.%s", str_random(25), $podcast_file->getClientOriginalExtension());
            $podcast->podcast = $podcast_file->storeAs('podcasts', $podcast_file_name , env('STORAGE_DISK'));
            $podcast->podcast_size = $podcast_file->getClientSize();
        }

        $podcast->title = $request->title;
        $podcast->description = $request->description;
        $podcast->published_at = $request->published_at;

        $podcast->save();

        return $podcast;
    }
}
