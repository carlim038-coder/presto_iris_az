<form action="{{ route('setLanguage', $lang) }}" method="POST" class="d-inline me-2">
    @csrf
    <button type="submit" class="btn p-0 border-0 bg-transparent">
        <img src="{{ asset('vendor/blade-flags/country-' . ($lang == 'uk' ? 'gb' : $lang) . '.svg') }}" width="32" height="32">
    </button>
</form>