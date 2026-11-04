<x-layout>
    {{-- Titolo principale della Homepage --}}
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-1 fw-bold">Presto.it</h1>
            </div>
        </div>

        {{-- Pulsante Crea Annuncio visibile per gli utenti autenticati --}}
        @auth
            <div class="row justify-content-center text-center mb-5">
                <div class="col-12">
                    <a href="{{ route('create.article') }}" class="btn btn-dark my-3">Pubblica un articolo</a>
                </div>
            </div>
        @endauth

        {{-- Sezione griglia degli ultimi articoli --}}
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3 mb-4">
                    <x-card :article="$article" />
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">Non sono ancora stati creati articoli</h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>