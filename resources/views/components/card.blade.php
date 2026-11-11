<div class="card mx-auto card-w shadow text-center mb-3">
    <img src="https://picsum.photos/280" class="card-img-top" alt="Immagine dell'articolo {{ $article->title }}">
    <div class="card-body">
        <h4 class="card-title">{{ $article->title }}</h4>
        <h5 class="card-subtitle text-body-secondary">{{ $article->price }} €</h5>
        <div class="d-flex justify-content-evenly align-items-center mt-5">
            <!-- Testo statico tradotto -->
           <a href="{{ route('article.show', compact('article')) }}" class="btn btn-primary">{{ __('ui.details') }}</a>
            
            <!-- Nome della categoria tradotto dinamicamente come da specifiche -->
            <a href="{{ route('byCategory', ['category' => $article->category]) }}" class="btn btn-outline-info text-capitalize">{{ __("ui." . $article->category->name) }}</a>
        </div>
    </div>
</div>