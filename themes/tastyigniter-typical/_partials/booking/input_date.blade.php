<select
    name="date"
    id="date"
    class="form-control input-lg"
>
    @foreach ($__SELF__->getDatePickerOptions() as $date)
        <option
            value="{{ $date->format('Y-m-d') }}"
            {!! set_select('date', $date->format('Y-m-d')) !!}
        >{{ $date->isoFormat($bookingDateFormat) }}</option>
    @endforeach
</select>
