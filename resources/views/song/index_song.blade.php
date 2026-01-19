<x-layout>
    <h1 class="text-center">le nostre canzoni</h1>
    <main class="container">
        <section class="row">
            <article class="col-12 col-md-8">
                 @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @foreach ($songs as $song)
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($song->img)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$song["title"]}}</h5>
                            <a href="{{route("show_song",compact("song"))}}" class="btn btn-primary">pagina di dettaglio</a>
                        </div>
                        </div>
                @endforeach
            </article>
        </section>
    </main>
</x-layout>