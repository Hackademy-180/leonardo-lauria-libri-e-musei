<x-layout>
    <h1 class="text-center fw-bold">
        i nostri migliori film inseriti
    </h1>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
  <main class="container">
    <section class="row">
          @foreach ($films as $film)
    <div class="col-12 col-md-3">
        <x-card_film :film="$film" />
    </div>
        
    @endforeach
    </section>
  </main>
</x-layout>