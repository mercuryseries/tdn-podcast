@extends('layouts.application')

@section('content')
    <div class="wrapper">
        <ul class="Podcasts">
            <li>
                <article class="Podcast Podcast--highlight">
                    <div class="Podcast__illustration">
                        <img src="{{ asset('/images/logo.png') }}" alt="Podcast Illustration">
                    </div>
                    <div class="Podcast__body">
                        <header class="Podcast__header">
                            <time>16 Septembre 2016</time>
                            <h1><a href="#">Il nous faut à tous une source de motivation</a></h1>
                        </header>
                        <audio controls>
                          <source src="https://cdn.selz.com/plyr/1.5/Kishi_Bashi_-_It_All_Began_With_a_Burst.mp3" type="audio/mp3">
                          <source src="https://cdn.selz.com/plyr/1.5/Kishi_Bashi_-_It_All_Began_With_a_Burst.ogg" type="audio/ogg">
                        </audio>
                        <p class="Podcast__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus temporibus veritatis nobis voluptatem optio. Soluta unde molestiae, minus sint assumenda suscipit cupiditate, dolor, quisquam perferendis iure illo nihil, deleniti distinctio?</p>
                        <footer class="Podcast__footer">
                            <a href="#"><small>Télécharger MP3 (5.34 MB)</small></a>
                        </footer>
                    </div>
                </article>
            </li>
            <li>
                <article class="Podcast">
                    <div class="Podcast__illustration">
                        <img src="{{ asset('/images/logo.png') }}" alt="Podcast Illustration">
                    </div>
                    <div class="Podcast__body">
                        <header class="Podcast__header">
                            <time>16 Septembre 2016</time>
                            <h1><a href="#">Il nous faut à tous une source de motivation</a></h1>
                        </header>
                        <p class="Podcast__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus temporibus veritatis nobis voluptatem optio. Soluta unde molestiae, minus sint assumenda suscipit cupiditate, dolor, quisquam perferendis iure illo nihil, deleniti distinctio?</p>
                    </div>
                </article>
            </li>
            <li>
                <article class="Podcast">
                    <div class="Podcast__illustration">
                        <img src="{{ asset('/images/logo.png') }}" alt="Podcast Illustration">
                    </div>
                    <div class="Podcast__body">
                        <header class="Podcast__header">
                            <time>16 Septembre 2016</time>
                            <h1><a href="#">Il nous faut à tous une source de motivation</a></h1>
                        </header>
                        <p class="Podcast__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus temporibus veritatis nobis voluptatem optio. Soluta unde molestiae, minus sint assumenda suscipit cupiditate, dolor, quisquam perferendis iure illo nihil, deleniti distinctio?</p>
                    </div>
                </article>
            </li>
            <li>
                <article class="Podcast">
                    <div class="Podcast__illustration">
                        <img src="{{ asset('/images/logo.png') }}" alt="Podcast Illustration">
                    </div>
                    <div class="Podcast__body">
                        <header class="Podcast__header">
                            <time>16 Septembre 2016</time>
                            <h1><a href="#">Il nous faut à tous une source de motivation</a></h1>
                        </header>
                        <p class="Podcast__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus temporibus veritatis nobis voluptatem optio. Soluta unde molestiae, minus sint assumenda suscipit cupiditate, dolor, quisquam perferendis iure illo nihil, deleniti distinctio?</p>
                    </div>
                </article>
            </li>
            <li>
                <article class="Podcast">
                    <div class="Podcast__illustration">
                        <img src="{{ asset('/images/logo.png') }}" alt="Podcast Illustration">
                    </div>
                    <div class="Podcast__body">
                        <header class="Podcast__header">
                            <time>16 Septembre 2016</time>
                            <h1><a href="#">Il nous faut à tous une source de motivation</a></h1>
                        </header>
                        <p class="Podcast__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus temporibus veritatis nobis voluptatem optio. Soluta unde molestiae, minus sint assumenda suscipit cupiditate, dolor, quisquam perferendis iure illo nihil, deleniti distinctio?</p>
                    </div>
                </article>
            </li>
            <li>
                <article class="Podcast">
                    <div class="Podcast__illustration">
                        <img src="{{ asset('/images/logo.png') }}" alt="Podcast Illustration">
                    </div>
                    <div class="Podcast__body">
                        <header class="Podcast__header">
                            <time>16 Septembre 2016</time>
                            <h1><a href="#">Il nous faut à tous une source de motivation</a></h1>
                        </header>
                        <p class="Podcast__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus temporibus veritatis nobis voluptatem optio. Soluta unde molestiae, minus sint assumenda suscipit cupiditate, dolor, quisquam perferendis iure illo nihil, deleniti distinctio?</p>
                    </div>
                </article>
            </li>
        </ul>

        <div class="text-center">
            <button class="Button">Voir les anciens épisodes</button>
        </div>
    </div>
@stop