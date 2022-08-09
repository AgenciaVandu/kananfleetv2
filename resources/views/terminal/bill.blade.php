@extends('layouts.kanan-login')
@section('contenido')
    @push('css')
        <style>
            .bg-kanan {
                background-color: #004c98;
            }

            #checkout-f {
                padding-top: 50px
            }

            .bill {
                padding-top: 3em;
            }

            .card {
                padding: 1em;
                border-radius: .8em;
                box-shadow: 0px 2px 5px 1px rgba(154, 154, 154, 0.2);
                border: none;
            }

            .btn-outline-dark:hover {
                color: #fff;
            }

        </style>
    @endpush
    <header class="bill">
        <div class=" pt-5 pb-3 text-center">
            <h2 class="source-bold">Terminal de pago Virtual<br>
                <small>Panel de usuario</small>
            </h2>
        </div>
        <div class="container-fluid pl-4 pb-3">
            <div class="row">
                <div class="col-12">
                    <div class="datos">
                        <li class="source-semibold">
                            Empresa: <span class="source-regular">{{ auth()->user()->company_name }}</span>
                        </li>
                        <li class="source-semibold">
                            Representante legal: <span class="source-regular">{{ auth()->user()->legal_representative_name  }}</span>
                        </li>
                        <li class="source-semibold">
                            TAX ID (RFC, RUC, RTN, NIT, etc.): <span
                                class="source-regular">{{ auth()->user()->RFC }}</span>
                        </li>
                        <li class="source-regular" style="color: green">
                            <img src="{{ asset('/img/circle-info-solid.svg') }}" class="mr-2" width="15">
                            Seleccione las partidas a pagar y presione el botón pagar conceptos. <br> <small
                                class="source-light"> Será redireccionado a la pantalla de pago. </small>
                        </li>
                    </div>
                </div>
                {{-- <div class="col-6 text-right m-auto">
                    <figure>
                         <img src="{{asset('/img/logoetecno-3.png')}}" class="img-fluid" alt="">
                    </figure>
                 </div> --}}
            </div>
        </div>
    </header>
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
                        <form action="{{ route('terminal.checkout') }}" method="POST">
                            @csrf
                            @foreach ($splits as $split)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td class="source-regular">{{ $split->description }}</td>
                                    <td class="source-regular text-center">
                                        ${{ $split->amount }} <br> <small class="source-regular"
                                            style="font-size: .65rem;">Importe en
                                            USD</small>
                                    </td>
                                    <td class="text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="{{ $split->id }}"
                                                name="splits[]">
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
                {{-- <a href="{{ route('terminal.checkout', $reference) }}" class="btn btn-primary btn-block">Pagar conceptos</a> --}}
                <input type="hidden" name="order" value="{{ $order }}">
                <button type="submit" class="btn btn-primary btn-block">Pagar conceptos</button>
                <div class="text-center mt-2">
                    <a class="source-semibold" style="color: #004c98; text-decoration:none;"
                        href="javascript:history.back()">Regresar</a>
                </div>
            </div>
        </div>
        </form>
    </section>
    {{-- <section class="info-bill">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-sm-12" style="background-color: #fbfcfc">
                    <h4 class="source-bold text-center pt-3 pb-2">
                        Referencias pendientes
                    </h4>
                    <div class="bill-content p-2">
                        @foreach ($references_pend as $reference)
                            <div class="card mb-3">
                                <!--Card de referencia pendiente-->
                                <h5 class="source-semibold">
                                    Referencia: <span class="source-light">{{ $reference->reference }}</span>
                                    </h4>
                                    <p class="source-regular" style="">
                                        {{ $reference->description }}
                                    </p>
                                    <div class="total-card mb-2">
                                        <li class="source-semibold">
                                            <div class="row">
                                                <div class="col-6">
                                                    TOTAL:
                                                </div>
                                                <div class="col-6 text-right">
                                                    ${{ number_format($reference->amount, 2) }} <span>USD</span>
                                                </div>
                                            </div>
                                        </li>
                                    </div>

                                    <a href="{{ route('terminal.checkout', $reference) }}"
                                        class="btn btn-primary source-semibold">Pagar referencia</a>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <h4 class="source-bold text-center pt-3 pb-2">
                        Referencias pagadas
                    </h4>
                    <div class="bill-content p-2">
                        <div class="bill-pagado">
                            @foreach ($references_pay as $reference)
                                <div class="card mb-3">
                                    <!--Card de referencia pagada-->
                                    <h5 class="source-semibold">
                                        Referencia: <span class="source-light">{{ $reference->reference }}</span>
                                        </h4>
                                        <p class="source-regular" style="">
                                            {{ $reference->description }}
                                        </p>
                                        <div class="total-card mb-2">
                                            <li class="source-semibold">
                                                <div class="row">
                                                    <div class="col-6">
                                                        TOTAL:
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        ${{ number_format($reference->amount, 2) }} <span>USD</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12" style="background-color: #fbfcfc">
                    <h4 class="source-bold text-center pt-3 pb-2">
                        Descargar archivos
                    </h4>
                    <div class="bill-content p-2">
                        @foreach ($references_pay as $reference)
                            @if ($reference->document)
                                <div class="card">
                                    <h5 class="source-semibold">
                                        Contrato de servicio
                                    </h5>
                                    <p class="source-regular" style="color: gray;">
                                        {{ $reference->description }}
                                    </p>
                                    <a href="{{ Storage::url($reference->document->url) }}" target="_blank"
                                        class="btn btn-outline-dark source-semibold">Descargar archivo</a>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <secion>
        <div class="container">
            <p class="pt-4 source-regular text-center">Recuerde comprobar que todos los datos incluidos son correctos, en
                caso contrario comuniquese al <br class="d-block d-sm-block d-md-none d-lg-none">
                <span class="source-regular" style="color: gray;">
                    <a href="https://api.whatsapp.com/send/?phone=5219992005672" style="color: gray;">+52 1 999 200 5672</a>
                </span> <br class="d-none d-sm-none d-md-block d-lg-block"> o por correo electrónico a <span
                    class="source-regular" style="color: gray; ">
                    <a href="mailto:info@administraflotilla.com" style="color: gray;">info@administraflotilla.com</a>
                </span> para solicitar ajustes.
            </p>
            <div class="col m-auto text-center">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="" class="btn btn-outline-dark" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">Cerrar sesión</a>
                </form>
            </div>
        </div>
    </secion>
@endsection
