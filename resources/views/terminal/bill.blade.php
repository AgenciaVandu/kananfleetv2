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
                            Representante legal: <span
                                class="source-regular">{{ auth()->user()->legal_representative_name }}</span>
                        </li>
                        <li class="source-semibold">
                            TAX ID (RFC, RUC, RTN, NIT, etc.): <span class="source-regular">{{ auth()->user()->RFC }}</span>
                        </li>
                        <li class="source-regular" style="color: green">
                            <img src="{{ asset('/img/circle-info-solid.svg') }}" class="mr-2" width="15">
                            Seleccione las partidas a pagar y presione el botón pagar conceptos. <br> <small
                                class="source-light"> Será redireccionado a la pantalla de pago. </small>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </header>
    {{-- @livewire('table-split', ['order' => $order]) --}}
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
                                            <span class="text-uppercase">{{ $split->currency }}</span></small>
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
            @error('currency_error')
                <div class="alert alert-danger text-center">{{ $message }}</div>
            @enderror
            <div class="boton-pagar">
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
                    <a href="" class="btn btn-outline-dark" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                this.closest('form').submit();">Cerrar
                        sesión</a>
                </form>
            </div>
        </div>
    </secion>
@endsection
