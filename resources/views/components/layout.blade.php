<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>Presto.it</title>
</head>
</head>

<body>
    <x-navbar />
    <div class="min-vh-100">
        @if 
        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
            
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

        {{ $slot }}
    </div>
    <x-footer />
</body>
</html>