<x-layout>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="text-center mb-4">Accedi</h1>

                <form class="bg-body-tertiary shadow rounded p-5" action="{{ route('login') }}" method="POST">
                    @csrf

                    <!-- Email -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password">
                        @error('password')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Ricordami -->
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="remember" name="remember">
                        <label class="form-check-label" for="remember">Ricordami</label>
                    </div>

                    <!-- Pulsante Invio -->
                    <div class="d-flex justify-content-between align-items-center">
                        <button type="submit" class="btn btn-dark">Accedi</button>
                        <a href="{{ route('register') }}" class="text-decoration-none">Non sei registrato? Registrati</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>