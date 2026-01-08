<x-layout>
    <h1 class="text-center">i nostri libri salvati</h1>
     @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <main class="container">
        <section class="row">
            @foreach ($books as $book)
            <div class="col-12 col-md-3">
                <x-card_book :book="$book"/>
            </div>
            @endforeach
        </section>
    </main>
   
</x-layout>