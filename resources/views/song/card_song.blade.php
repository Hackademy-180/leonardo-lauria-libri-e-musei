<x-layout>
    <h1 class="text-center">
        inserimento canzoni
    </h1>
    <main class="container">
        <section class="row">
          <article class="col-12 col-md-8">
            <form method="POST", action="{{route("store_song")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="text" class="form-label fw-bold">nome della canzone</label>
                        <input type="text" class="form-control" id="song" name="title">
                        <label for="number" class="form-label fw-bold">anno di relese</label>
                        <input type="number" class="form-control" id="song" name="yearRelese">
                        <label for="text" class="form-label fw-bold">autore</label>
                        <input type="text" class="form-control" id="song" name="autor">
                        <label for="img" class="form-label fw-bold">immagine dell'album</label>
                        <input type="file" class="form-control" id="song" name="img">
                        @foreach ($genres as $genre)
                        <div class="col-12 col-md-3">
                            <input name="genres[]" type="checkbox" class="form-check-input" value="{{$genre->id}}" id="{{$genre->id}}">
                            <label  class="form-check-label" for="{{$genre->id}}">{{$genre->name}}</label>
                        </div>
                        @endforeach
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </div>    
                </form>
          </article>
        </section>
    </main>
</x-layout>