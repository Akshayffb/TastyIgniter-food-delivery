<select
    name="guest"
    id="noOfGuests"
    class="form-control input-lg"
>
    @foreach ($__SELF__->getGuestSizeOptions() as $key => $value)
        <option
            value="{{ $key }}"
            {!! set_select('guest', $key) !!}
        >{{ $value }}</option>
    @endforeach
</select>

