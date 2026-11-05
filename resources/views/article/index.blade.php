<x-layout>
    <div class="container my-5">
        <div class="row">
            <div class="col-12 text-center">
                <hdisplay class="display-4">Tutti gli articoli</hdisplay>
            </div>
        </div>

        <div class="row justify-content-center mt-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4 mb-4">
                    <div class="card shadow h-100">
                        <div class="card-body d-flex flex-column justify-content-between">
                            <div>
                                <h4 class="card-title">{{ $article->title }}</h4>
                                <p class="card-text text-muted">{{ Str::limit($article->description, 50) }}</p>
                                <p class="fw-bold text-success">{{ $article->price }} €</p>
                            </div>
                            <div>
                                <span class="badge bg-secondary">{{ $article->category->name ?? 'Senza categoria' }}</span>
                                <a href="{{ route('article.show', $article) }}" class="btn btn-outline-primary w-100 mt-3">Leggi di più</a>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p class="h4 text-muted">Non ci sono articoli pubblicati al momento.</p>
                </div>
            @endforelse
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $articles->links() }}
        </div>
    </div>
</x-layout>