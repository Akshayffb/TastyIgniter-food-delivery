@if (count($customerReservations))
    <div class="table-responsive">
        <table class="table table-borderless">
            <thead>
            <tr>
                <th>@lang('igniter.reservation::default.reservations.column_location')</th>
                <th>@lang('igniter.reservation::default.reservations.column_status')</th>
                <th>@lang('igniter.reservation::default.reservations.column_date')</th>
                <th>@lang('igniter.reservation::default.reservations.column_table')</th>
                <th>@lang('igniter.reservation::default.reservations.column_guest')</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            @foreach ($customerReservations as $reservation)
                <tr>
                    <td>{{ $reservation->location ? $reservation->location->location_name : null }}</td>
                    <td><b>{{ $reservation->status->status_name }}</b></td>
                    <td>{{ $reservation->reserve_date->setTimeFromTimeString($reservation->reserve_time)->isoFormat($reservationDateTimeFormat) }}</td>
                    <td>{{ $reservation->related_table ? $reservation->related_table->table_name : null }}</td>
                    <td>{{ $reservation->guest_num }}</td>
                    <td>
                        <a
                            class="btn btn-light"
                            href="{{ site_url($reservationsPage, ['reservationId' => $reservation->reservation_id, 'hash' => $reservation->hash]) }}"
                        ><i class="bi bi-receipt"></i>&nbsp;&nbsp;@lang('igniter.reservation::default.reservations.btn_view')
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <nav class="typical-pagination mb-5">
        @partial('pagination/default', ['paginator' => $customerReservations])
    </nav>
@else
    <p>@lang('igniter.reservation::default.reservations.text_empty')</p>
@endif
