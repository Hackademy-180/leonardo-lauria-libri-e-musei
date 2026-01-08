<x-layout>
    <h1 class="text-center fw-bold">i nostri film</h1>
    <main class="container">
        <section class="row">
            <div class="col-col col-md-6">
                <form method="POST", action="{{route("post_book")}}">
                    @csrf
                    <div class="mb-3">
                        <label for="text" class="form-label fw-bold">nome del film</label>
                        <input type="text" class="form-control" id="book" name="filmName">
                        <label for="text" class="form-label fw-bold">regista</label>
                        <input type="text" class="form-control" id="book" name="filmRegist">
                        <label for="number" class="form-label fw-bold">anno di uscita</label>
                        <input type="number" class="form-control" id="book" name="filmYear">
                        <label for="text" class="form-label fw-bold">trama del film</label>
                        <textarea name="filmDescription" id="book" cols="30" rows="10" class="form-control ">
                         </textarea>     
                        <button type="submit" class="btn btn-primary my-2">Submit</button>
                    </div>    
                </form>
            </div>
        </section>
    </main>
</x-layout>