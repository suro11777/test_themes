<form action="{{ route('themes.switch') }}" method="POST">
    @csrf
    <label for="theme">Select Theme:</label>
    <select name="theme" id="theme">
        @foreach(\App\Enums\Theme::cases() as $theme)
            @if(session('theme') == $theme->value)
                <option selected value="{{$theme->value}}">{{$theme->name}}</option>
            @else
                <option value="{{$theme->value}}">{{$theme->name}}</option>
            @endif
        @endforeach
    </select>
    <button type="submit">Save</button>
</form>
