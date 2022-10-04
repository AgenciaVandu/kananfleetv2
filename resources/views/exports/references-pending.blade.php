<table>
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                REPORTE DE PARTIDAS PENDIENTES POR FECHAS
            </td>
        </tr>
        <tr>
            <td>
                Rango de fechas: {{ \Carbon\Carbon::parse($start_date)->toDateTimeString() }} -
                {{ \Carbon\Carbon::parse($end_date)->toDateTimeString() }}
            </td>
        </tr>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Orden</th>
            <th>Partidas</th>
            <th>Monto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($references as $reference)
            @if ($reference->order->user)
                <tr>
                    <td>{{ $reference->order->user->name }}</td>
                    <td>{{ $reference->order->contract }}</td>
                    <td>{{ $reference->description }}</td>
                    <td>${{ number_format($reference->amount, 2) }}</td>
                </tr>
            @endif
        @endforeach
        <tr>
            <td>

            </td>
            <td>

            </td>
            <td>
                TOTAL
            </td>
            <td>
                ${{ number_format($total, 2) }}
            </td>
        </tr>
    </tbody>
</table>
