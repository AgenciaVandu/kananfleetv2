@extends('layouts.kanan-login')
<?php

?>
@push('css')
    <style>
        .bg-kanan {
            background-color: #004c98;
        }

        #checkout-f {
            padding-top: 50px
        }

        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .card {
            border-radius: 1em;
        }

        /* Variables */
        * {
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, sans-serif;
            font-size: 16px;
            -webkit-font-smoothing: antialiased;
            display: flex;
            justify-content: center;
            align-content: center;
            height: 100vh;
            width: 100vw;
        }

        form {
            width: 100%;
            /* min-width: 500px; */
            align-self: center;
            box-shadow: 0px 0px 0px 0.5px rgba(50, 50, 93, 0.1),
                0px 2px 5px 0px rgba(50, 50, 93, 0.1), 0px 1px 1.5px 0px rgba(0, 0, 0, 0.07);
            border-radius: 7px;
            padding: 40px;
        }

        .hidden {
            display: none;
        }

        #payment-message {
            color: rgb(105, 115, 134);
            font-size: 16px;
            line-height: 20px;
            padding-top: 12px;
            text-align: center;
        }

        #payment-element {
            margin-bottom: 24px;
        }

        /* Buttons and links */
        button {
            background: #5469d4;
            font-family: Arial, sans-serif;
            color: #ffffff;
            border-radius: 4px;
            border: 0;
            padding: 12px 16px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            display: block;
            transition: all 0.2s ease;
            box-shadow: 0px 4px 5.5px 0px rgba(0, 0, 0, 0.07);
            width: 100%;
        }

        button:hover {
            filter: contrast(115%);
        }

        button:disabled {
            opacity: 0.5;
            cursor: default;
        }

        /* spinner/processing state, errors */
        .spinner,
        .spinner:before,
        .spinner:after {
            border-radius: 50%;
        }

        .spinner {
            color: #ffffff;
            font-size: 22px;
            text-indent: -99999px;
            margin: 0px auto;
            position: relative;
            width: 20px;
            height: 20px;
            box-shadow: inset 0 0 0 2px;
            -webkit-transform: translateZ(0);
            -ms-transform: translateZ(0);
            transform: translateZ(0);
        }

        .spinner:before,
        .spinner:after {
            position: absolute;
            content: "";
        }

        .spinner:before {
            width: 10.4px;
            height: 20.4px;
            background: #5469d4;
            border-radius: 20.4px 0 0 20.4px;
            top: -0.2px;
            left: -0.2px;
            -webkit-transform-origin: 10.4px 10.2px;
            transform-origin: 10.4px 10.2px;
            -webkit-animation: loading 2s infinite ease 1.5s;
            animation: loading 2s infinite ease 1.5s;
        }

        .spinner:after {
            width: 10.4px;
            height: 10.2px;
            background: #5469d4;
            border-radius: 0 10.2px 10.2px 0;
            top: -0.1px;
            left: 10.2px;
            -webkit-transform-origin: 0px 10.2px;
            transform-origin: 0px 10.2px;
            -webkit-animation: loading 2s infinite ease;
            animation: loading 2s infinite ease;
        }

        @-webkit-keyframes loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes loading {
            0% {
                -webkit-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @media only screen and (max-width: 600px) {
            form {
                /* width: 80vw; */
                min-width: initial;
            }
        }
    </style>
@endpush
@section('contenido')
    <div id="checkout-f" class="container mb-3">
        <div class="py-5 text-center">
            <h2 class="source-bold">Terminal de pago Virtual <br>
                <small>Pánel de usuario</small>
            </h2>
            <p class="source-regular">Recuerde comprobar que todos los datos incluidos son correctos, en caso contrario
                comuniquese al
                <span class="source-regular" style="color: gray;">
                    <a href="https://api.whatsapp.com/send/?phone=5219992005672" style="color: gray;">+52 1 999 200 5672</a>
                </span> <br> o por correo electrónico a <span class="source-regular" style="color: gray; ">
                    <a href="mailto:info@administraflotilla.com" style="color: gray;">info@administraflotilla.com</a>
                </span> para solicitar ajustes.
            </p>
        </div>

        <div class="row">
            <div class="col-md-12 order-md-1 mb-4">
                <h4 class="d-flex justify-content-between align-items-center mb-3">
                    <span class="text-muted">Información de pago</span>
                </h4>
                <ul class="list-group mb-3">
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Referencia</h6>
                            <small class="text-muted">{{ $order->contract }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Empresa</h6>
                            <small class="text-muted">{{ auth()->user()->company_name }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Razón social</h6>
                            <small class="text-muted">{{ auth()->user()->legal_representative_name }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Puesto</h6>
                            <small class="text-muted">{{ auth()->user()->bussiness_name }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between lh-condensed">
                        <div>
                            <h6 class="my-0">Email</h6>
                            <small class="text-muted">{{ auth()->user()->email }}</small>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between bg-light">
                        <div class="text-success">
                            <h6 class="my-0">
                                @foreach ($references as $reference)
                                    {{ $reference->description }}<br>
                                @endforeach
                            </h6>
                        </div>
                    </li>
                    <li class="list-group-item d-flex justify-content-between">
                        <span>Total (USD)</span>
                        <strong>${{ number_format($total) }}</strong>
                    </li>
                </ul>
            </div>
            {{-- {{ $paymentIntent->client_secret }} --}}
            <div class="col-md-12 order-md-1">
                <div class="alert alert-warning mx-auto" role="alert">
                    Espere un periodo de 10 seg hasta que estén disponibles los campos de información de pago
                </div>
                {{-- <form class="needs-validation" action="{{ route('terminal.payment') }}" method="POST" id="payment-form">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <li>
                                Tarjetas de crédito: <br>
                                <img src="{{ asset('/img/cards_vm.png') }}" class="img-fluid" alt="">
                            </li>
                        </div>
                        <div class="col-6 pb-3">
                            <li>
                                Tarjetas de débito: <br>
                                <img src="{{ asset('/img/cards_vm1.png') }}" class="img-fluid" alt="">
                            </li>
                        </div>
                        <input type="hidden" name="token_id" id="token_id">
                        <input type="hidden" name="use_card_points" id="use_card_points" value="false">
                        <input type="hidden" name="amount" value="{{ $total }}">
                        <div class="col-md-6 mb-3">
                            <label for="cc-name">Nombre</label>
                            <input type="text" class="form-control" type="text" placeholder="Como aparece en la tarjeta"
                                autocomplete="off" data-openpay-card="holder_name" name="name" required>
                            <div class="invalid-feedback">
                                Name on card is required
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="cc-number">Número de la tarjeta</label>
                            <input type="text" class="form-control" autocomplete="off" data-openpay-card="card_number"
                                name="card" required>
                            <div class="invalid-feedback">
                                Credit card number is required
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Mes de vigencia</label>
                            <select class="form-control" data-openpay-card="expiration_month" name="expiration_month">
                                <option value="01">1</option>
                                <option value="02">2</option>
                                <option value="03">3</option>
                                <option value="04">4</option>
                                <option value="05">5</option>
                                <option value="06">6</option>
                                <option value="07">7</option>
                                <option value="08">8</option>
                                <option value="09">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                            </select>
                            <div class="invalid-feedback">
                                Fecha de expiración requerida
                            </div>
                        </div>
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">año de expiración</label>
                            <select class="form-control" data-openpay-card="expiration_year" name="expiration_year">
                                <option value="22">2022</option>
                                <option value="23">2023</option>
                                <option value="24">2024</option>
                                <option value="25">2025</option>
                                <option value="26">2026</option>
                                <option value="27">2027</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 mb-3">
                            <label for="cc-expiration">Código de seguridad</label>
                            <input type="text" class="form-control" type="text" placeholder="3 dígitos" autocomplete="off"
                                data-openpay-card="cvv2" name="cvv" required>
                            <div class="invalid-feedback">
                                Security code required
                            </div>
                            <div class="invalid-feedback">
                                Código de seguridad
                            </div>
                        </div>
                        <div class="col-md-3 pt-4">
                            <img src="{{ asset('/img/cvv_visaMastercard.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>

                    <small class="text-success mt-3">Tus pagos se realizan de forma segura con encriptación de 256
                        bits</small>
                    <hr class="mb-4">
                    <button class="btn btn-primary btn-lg btn-block" id="pay-button">Pagar</button>
                    <div class="text-center mt-2">
                        <a class="source-semibold" style="color: #004c98; text-decoration:none;"
                            href="javascript:history.back()">Regresar</a>
                    </div>
                </form> --}}
                <!-- Display a payment form -->
                <form id="payment-form">
                    <div id="payment-element">
                        <!--Stripe.js injects the Payment Element-->
                    </div>
                    <button id="submit">
                        <div class="spinner hidden" id="spinner"></div>
                        <span id="button-text">Pay now</span>
                    </button>
                    <div id="payment-message" class="hidden"></div>
                </form>
            </div>
        </div>
    @endsection
