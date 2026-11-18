<x-layout>
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-3">
                <div class="rounded shadow bg-body-secondary p-3">
                    <div class="display-5 text-center pb-2">
                        Revisor dashboard
                    </div>
                </div>
            </div>

            <div class="col-9">
                @if($article_to_check)
                <div class="row justify-content-center pt-5">
                    
                    {{-- Colonna delle immagini (sinistra) --}}
                    <div class="col-md-8">
                        <div class="row justify-content-center">
                            @if ($article_to_check->images->count())
                                @foreach ($article_to_check->images as $key => $image)
                                <div class="col-6 col-md-4 mb-4 text-center">
                                    <img src="{{ $image->getUrl(300, 300) }}" class="img-fluid rounded shadow" alt="Immagine {{ $key + 1 }} dell'articolo '{{ $article_to_check->title }}'">
                                </div>
                                @endforeach
                            @else
                                @for ($i = 0; $i < 6; $i++)
                                <div class="col-6 col-md-4 mb-4 text-center">
                                    <img src="https://picsum.photos/300" alt="immagine segnaposto" class="img-fluid rounded shadow">
                                </div>
                                @endfor
                            @endif
                        </div>
                    </div>

                    {{-- Colonna dei dettagli e dei pulsanti (destra) --}}
                    <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
                        <div>
                            <h1 class="h2">{{ $article_to_check->title }}</h1>
                            <h3>Autore: {{ $article_to_check->user->name }}</h3>
                            <h4>{{ $article_to_check->price }} €</h4>
                            <h4 class="fst-italic text-muted">{{ $article_to_check->category->name }}</h4>
                            <p class="h6">{{ $article_to_check->description }}</p>
                        </div>
                        <div class="d-flex pb-4 justify-content-around">
                            <form action="{{ route('reject', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-danger py-2 px-5 fw-bold">Rifiuta</button>
                            </form>
                            <form action="{{ route('accept', ['article' => $article_to_check]) }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="btn btn-success py-2 px-5 fw-bold">Accetta</button>
                            </form>
                        </div>
                    </div>

                </div>
                @else
                <div class="row justify-content-center align-items-center height-custom text-center">
                    <div class="col-12">
                        <p class="fst-italic display-4">Nessun articolo da revisionare</p>
                        <a href="{{ route('homepage') }}" class="mt-5 btn btn-success">Torna all'homepage</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</x-layout>