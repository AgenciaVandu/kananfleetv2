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
    <header id="gracias" class="bill">
        <div class="agradecimiento text-center ">
            <img src="{{ '/img/check-true.svg' }}" width="180" alt="">
            <h1 class="source-bold">¡Buenas noticias!</h1>
            <p class="source-regular">Su pago ha sido procesado con éxito <br> su comprobante será enviado al correo
                registrado en el portal</p>
            <a href="{{ route('terminal.index') }}" class="btn btn-outline-dark source-bold">Ir a mis cuentas</a>
        </div>


    </header>
@endsection
