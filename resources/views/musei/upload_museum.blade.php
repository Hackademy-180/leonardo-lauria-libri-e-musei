<x-layout>
    <h1 class="text-center">inserimento musei</h1>
    <main class="container">
        <section class="row">
            <div class="col-col col-md-6">
                <form method="POST", action="{{route("post_museum")}}">
                    @csrf
                    <div class="mb-3">
                        <label for="text" class="form-label fw-bold">nome del museo</label>
                        <input type="text" class="form-control" id="book" name="museumName">
                        <label for="text" class="form-label fw-bold">paese</label>
                        <input type="text" class="form-control" id="book" name="museumCountry">
                        <label for="number" class="form-label fw-bold">anno di apertura</label>
                        <input type="number" class="form-control" id="book" name="museumYear">
                        <label for="text" class="form-label fw-bold">descrizione del museo</label>
                        <textarea name="museumDescription" id="book" cols="30" rows="10" class="form-control ">
                         </textarea>     
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                </form>
            </div>
        </section>
    </main>
</x-layout>