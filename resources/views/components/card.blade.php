<div class="card mx-auto card-w shadow text-center mb-3">
    <img src="https://picsum.photos/280" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h5 class="card-subtitle text-body-secondary">{{ $article->price }} €</h5>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">Dettaglio</a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-outline-info text-capitalize">{{ $article->category->name }}</a>
        </div>
    </div>
</div>