<x-layout>
    <h1 class="text-center">i nostri musei</h1>
      @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <main class="container">
        <section class="row">
            @foreach ($museums as $museum)
            <div class="col-12 col-md-3">
                <x-card_museum :museum="$museum"/>
            </div>
            @endforeach
</x-layout>