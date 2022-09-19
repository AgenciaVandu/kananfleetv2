@component('mail::message')
# Pago Realizado


{{-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent --}}
@component('mail::table')
| Referencia       | Descripcion         | Total  |
| ------------- |:-------------:| --------:|
@foreach ($references as $reference)
| {{ $reference->id }}      | {{ $reference->description }}      | ${{ $reference->amount }}      |
@endforeach
@endcomponent
<br>
<p>
    Cobro hecho con tipo de cambio a ${{ number_format($cambio,2) }}
</p>
<br>
{{ config('app.name') }}
@endcomponent
