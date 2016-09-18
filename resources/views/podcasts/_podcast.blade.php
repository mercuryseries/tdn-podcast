<article class="Podcast {{ $highlight ? 'Podcast--highlight' : '' }}">
    <div class="Podcast__illustration">
        <img src="{{ asset('/images/logo.png') }}" alt="{{ $podcast->title }}">
    </div>
    <div class="Podcast__body">
        <header class="Podcast__header">
            <time>{{ $podcast->published_at->format('d/m/Y') }}</time>
            <h1><a href="{{ route('podcasts.show', $podcast) }}">{{ $podcast->title }}</a></h1>
        </header>
        <audio controls>
          <source src="{{ asset($podcast->podcast) }}" type="audio/mp3">
        </audio>
        <p class="Podcast__description">{{ $podcast->description }}</p>
        <footer class="Podcast__footer">
            <a href="{{ route('podcasts.download', $podcast) }}"><small>Télécharger MP3 ({{ bytes_to_human($podcast->podcast_size) }})</small></a>
            @if(Auth::check())
                &nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('podcasts.edit', $podcast) }}"><small><i class="fa fa-pencil"></i> Modifier</small></a>
                <a data-method="DELETE" data-confirm="Êtes-vous sûr?" href="{{ route('podcasts.destroy', $podcast) }}"><small><i class="fa fa-trash"></i> Supprimer</small></a>
            @endif
        </footer>
    </div>
</article>