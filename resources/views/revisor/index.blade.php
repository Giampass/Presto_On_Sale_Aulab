<x-layout>
    <x-nav/>
    <div class="container-fluid marginCustom">
        <div class="row">
            <div class="col-3">
                <div class="rounded shadow bg-body-secondary">
                    <h1>Area del revisore</h1>
                </div>
            </div>
        </div>
    </div>
    @if (session()->has('message'))
<div class="row justify-content-center">
    <div class="col-5 alert alert-success text-center shadow rounded">
        {{ session('message') }}
    </div>
</div>
@endif
    @if ($article_to_check)
    <div class="row justify-content-center-pt-5">
        <div class="col-md-8">
            <div class="row justify-content-center">
                @for ($i = 0; $i < 2; $i++)
                <div class="col-6 ocl-md-4 mb-4 text-center">
                    <img src="https://picsum.photos/300" class="img-fluid rounded shadow" alt="immagine segnaposto">
                </div>
                @endfor
            </div>
        </div>
        <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
            <div>
                <h1>{{$article_to_check->title}}</h1>
                <h3>Atutore:{{$article_to_check->user->name}}</h3>
                <h4>{{$article_to_check->user->price}}€</h4>
                <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4>
                <p class="h6">{{$article_to_check->description}}</p>
            </div>
            <div class="d-flex pb-4 justify-content-around">
                <form action="{{route('reject', ['article' => $article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-5 px-5 fw-bold">Rifiuta</button>
                </form>
                <form action="{{route('accept', ['article' => $article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success py-5 px-5 fw-bold">Accetta</button>
                </form>
            </div>
        </div>
    </div>
    @else
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h1 class="fst-italic display-4">
                Nessun articolo da revisionare
            </h1>
            <a href="{{route('home')}}" class="mt-5 btn btn-success">Torna all'homepage</a>
        </div>
    </div>
    @endif
</div>
</x-layout>