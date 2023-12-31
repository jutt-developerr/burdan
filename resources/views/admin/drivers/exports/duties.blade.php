<table class="table table-hover">
    <thead>
        <tr>
            <th> @lang('view_pages.s_no')</th>
            <th> @lang('view_pages.name')</th>
            <th> @lang('view_pages.logged_date')</th>
            <th> @lang('view_pages.total_logged_duration')</th>
        </tr>
    </thead>

    <tbody>
        @php $i= 1; @endphp

        @forelse($results as $key => $result)
            <tr>
                <td>{{ $i++ }} </td>
                <td> {{ $result->dr_id }}</td>
                <td>{{ $result->selected_date }}</td>
                @if((integer)$result->duration>0)
                <td>{{ intdiv((integer)$result->duration, 60).' hours:'. ((integer)$result->duration % 60).' minutes' }}</td>
                @else
                <td>--</td>
                @endif
            </tr>
        @empty
            <tr>
                <td colspan="11">
                    <h4 class="text-center" style="color:#333;font-size:25px;">@lang('view_pages.no_data_found')</h4>
                </td>
            </tr>
        @endforelse

    </tbody>
</table>
