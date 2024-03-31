@if(isset($resultThemes))
    @foreach($resultThemes as $resultTheme)
        <option value="{{ $resultTheme->id }}">{{ $resultTheme->theme }}</option>
    @endforeach
@endif
