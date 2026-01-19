<x-layout>
    <h1 class="text-center">inserimento libri</h1>
    <main class="container">
        <section class="row">
            <div class="col-col col-md-6">
                <form method="POST", action="{{route("post_book")}}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="text" class="form-label fw-bold">nome del libro</label>
                        <input type="text" class="form-control" id="book" name="bookName">
                        <label for="text" class="form-label fw-bold">autore</label>
                        <input type="text" class="form-control" id="book" name="bookAutor">
                        <label for="number" class="form-label fw-bold">anno di pubblicazione</label>
                        <input type="number" class="form-control" id="book" name="bookYear">
                        <label for="text" class="form-label fw-bold">descrizione del libro</label>
                        <textarea name="bookDescription" id="book" cols="30" rows="10" class="form-control "></textarea>     
                        <label for="img" class="form-label fw-bold">immagine del libro</label>
                        <input type="file" class="form-control" id="book" name="img">
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>