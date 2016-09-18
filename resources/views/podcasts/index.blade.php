@extends('layouts.application')

@section('content')
    <div class="wrapper">
        <ul class="Podcasts">
            @foreach($podcasts as $podcast)
            <li>
                @include('podcasts/_podcast', ['highlight' => ($loop->first && is_homepage())])
            </li>
            @endforeach
        </ul>

        <div class="text_center mt5">
        @if($podcasts->count() > 0)
            @if(is_homepage())
                <a href="{{ route('podcasts.index') }}" class="Button">Voir les anciens épisodes</a>
            @else
                <a href="{{ route('home') }}" class="Button">Retourner à l'accueil</a>
            @endif
        @else
            <a href="{{ route('podcasts.index') }}" class="Button">Aucun épisode pour l'instant</a>
        @endif
        </div>
    </div>
@stop