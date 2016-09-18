@extends('layouts.application')

@section('content')
    <div class="wrapper">
        @include('podcasts/_podcast', ['highlight' => true])

        <div class="text_center mt5">
            <a href="{{ route('home') }}" class="Button">Voir tous les épisodes</a>
        </div>
    </div>
@stop