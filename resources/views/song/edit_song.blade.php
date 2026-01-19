<x-layout>
    <h1 class="text-center">
        inserimento canzoni
    </h1>
    <main class="container">
        <section class="row">
          <article class="col-12 col-md-8">
            <form method="POST", action="{{route("update_song",compact("song"))}}" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <div class="mb-3">
                        <label for="text" class="form-label fw-bold">nuovo nome della canzone</label>
                        <input type="text" class="form-control" id="song" name="title" value="{{$song["title"]}}">
                        <label for="number" class="form-label fw-bold">nuovo anno di relese</label>
                        <input type="number" class="form-control" id="song" name="yearRelese" value="{{$song["yearRelese"]}}">
                        <label for="text" class="form-label fw-bold">nuovo autore</label>
                        <input type="text" class="form-control" id="song" name="autor" value="{{$song["autor"]}}" >
                        <label for="img" class="form-label fw-bold">nuova immagine dell'album</label>
                        <input type="file" class="form-control" id="song" name="img">
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </div>    
                </form>
          </article>
        </section>
    </main>
</x-layout>