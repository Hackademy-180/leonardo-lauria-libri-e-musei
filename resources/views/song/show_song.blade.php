<x-layout>
    <h1 class="text-center">
        pagina di dettaglio
    </h1>
    <main class="container">
        <section class="row">
            <article class="col-12 text-start">
            <h5 class="card-title">titolo della canzone: {{$song["title"]}}</h5>
            <p class="card-text">anno di rilascio: {{$song["yearRelese"]}}</p>
            <p class="card-text">nome: {{$song["autor"]}}</p>
            <a class="btn btn-warning" type="submit" href="{{route("edit_song",compact("song"))}}">modifica informazioni</a>
                <form action="{{route("destroy_song",compact("song"))}}" method="POST" >
                    @csrf
                    @method("delete")
                     <button type="submit" class="btn btn-danger">elimina canzone</button>
                </form>
            </article>
        </section>
    </main>
</x-layout>