<nav class="navbar navbar-expand-lg bg-body-tertiary shadow">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('homepage') }}">Presto.it</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">{{ __('ui.home') }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('article.index') }}">{{ __('ui.allArticles') }}</a>
                </li>
                {{-- Menu a tendina delle Categorie (User Story #2) --}}
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.categories') }}
                    </a>
                    <ul class="dropdown-menu">
                        @foreach ($categories as $category)
                        <li>
                            <a class="dropdown-item text-capitalize" href="{{ route('byCategory', ['category' => $category]) }}">
                                {{ __("ui." . $category->name) }}
                            </a>
                        </li>
                        @if (!$loop->last)
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @endif
                        @endforeach
                    </ul>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto align-items-center">
                {{-- Bandiere racchiuse in li e corrette con 'gb' per l'inglese --}}
                <li class="nav-item px-1">
                    <x-_locale lang="it" />
                </li>
                <li class="nav-item px-1">
                    <x-_locale lang="gb" />
                </li>
                <li class="nav-item px-1">
                    <x-_locale lang="es" />
                </li>

                {{-- FORM DI RICERCA (User Story #10) --}}
                <form class="d-flex me-3 ms-2" role="search" action="{{ route('article.search') }}" method="GET">
                    <div class="input-group">
                        <input type="search" name="query" class="form-control" placeholder="{{ __('ui.searchPlaceholder') }}" aria-label="Search">
                        <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">{{ __('ui.search') }}</button>
                    </div>
                </form>

                {{-- Gestione Ruolo Revisore (User Story #3) --}}
                @auth
                @if (Auth::user()->is_revisor)
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-success btn-sm position-relative w-sm-25 me-3" href="{{ route('revisor.index') }}">
                        {{ __('ui.revisorZone') }}
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            {{ \App\Models\Article::toBeRevisedCount() }}
                        </span>
                    </a>
                </li>
                @endif
                @endauth

                {{-- Gestione Autenticazione (User Story #1) --}}
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.hello') }}, {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('create.article') }}">{{ __('ui.createArticle') }}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">{{ __('ui.logout') }}</a>
                        </li>
                    </ul>
                    <form action="{{ route('logout') }}" method="post" class="d-none" id="form-logout">
                        @csrf
                    </form>
                </li>
                @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        {{ __('ui.helloUser') }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('login') }}">{{ __('ui.login') }}</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="{{ route('register') }}">{{ __('ui.register') }}</a></li>
                    </ul>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>