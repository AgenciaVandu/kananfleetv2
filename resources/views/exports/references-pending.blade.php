<table>
    <thead>
        <tr>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                REPORTE DE REFERENCIAS PENDIENTES POR FECHA
            </td>
        </tr>
        <tr>
            <td>
                Rango de fecha: {{ \Carbon\Carbon::parse($start_date)->toDateTimeString() }} - {{ \Carbon\Carbon::parse($end_date)->toDateTimeString() }}
            </td>
        </tr>
    </tbody>
</table>

<table>
    <thead>
        <tr>
            <th>Cliente</th>
            <th>Orden</th>
            <th>Referencia</th>
            <th>Monto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($references as $reference)
            <tr>
                <td>{{ $reference->order->user->name }}</td>
                <td>{{ $reference->order->contract }}</td>
                <td>{{ $reference->description }}</td>
                <td>${{ number_format($reference->amount, 2) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
