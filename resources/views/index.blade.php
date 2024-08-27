<x-layout>
<div class="row justify-content-center text-center">
    <h1 class="display-1">Tutti gli articoli</h1>
</div>

<div class="row justify-content-center align-items-center">
    @forelse ($articles as $article)
        <div class= "col-12 col-md-3">
        <x-card :article="$article" />
    </div>
    @empty  
    <div class="col-12">
        <h3>Non sono ancora stati creati articoli</h3>
    </div>
    @endforelse
    <div class="justify-content-center">
        {{ $articles->links() }}
    </div>
</div>
</x-layout>