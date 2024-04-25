<div>
    <label for="Seleccione divisa">Divisas</label>
    <select wire:model.live="currencySelected">
        <option value="">{{ __('Select a currency') }} </option>
        @foreach ($currencies as $currency)
            <option value="{{ $currency->currency }}">{{ $currency->currency }}</option>
        @endforeach
    </select>
    @foreach ($references as $item)
        {{ $item }}
    @endforeach
    <section id="info-bill">
        <div class="container-fluid">
            <div class="col-lg-12">
                <table class="table table-striped table-hover table-borderless">
                    <thead>
                        <tr>
                            <th scope="col" class="source-bold text-center">#</th>
                            <th scope="col" class="source-bold text-center">DESCRIPCIÓN</th>
                            <th scope="col" class="source-bold text-center">TOTAL</th>
                            <th scope="col" class="source-bold text-center">PAGAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form wire:submit.prevent="checkout">
                        @foreach ($splits as $split)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td class="source-regular">{{ $split->description }}</td>
                                <td class="source-regular text-center">
                                    ${{ $split->amount }} <br> <small class="source-regular"
                                        style="font-size: .65rem;">Importe en
                                        <span class="text-uppercase">{{ $split->currency }}</span></small>
                                </td>
                                <td class="text-center">
                                    <div class="form-check">
                                        <input wire:model="references" class="form-check-input" type="checkbox"
                                            value="{{ $split->id }}">
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="container">
            @error('splits')
                <div class="alert alert-danger text-center">Seleccione una partida para continuar</div>
            @enderror
            <div class="boton-pagar">
                {{-- <input type="hidden" name="order" value="{{ $order }}"> --}}
                <button type="submit">Pagar conceptos</button>
                <div class="text-center mt-2">
                    <a class="source-semibold" style="color: #004c98; text-decoration:none;"
                        href="javascript:history.back()">Regresar</a>
                </div>
            </div>
        </div>
    </form>
    </section>
</div>
