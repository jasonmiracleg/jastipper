<form method="HEAD" action="{{ route('incomplete') }}">
    @csrf
    <button type="submit" class="rounded-full h-20 w-20 border-2">
        <img src="{{ $assetPath }}" alt="{{ $countryName }}" class="rounded-full h-20 w-20 border-2">
    </button>
</form>
