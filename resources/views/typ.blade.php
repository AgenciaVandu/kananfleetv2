@extends('layouts.kanan-green')
@section('contenido')
    @push('css')
       <style>

            .nav-link {
                color: gray !important;
            }
         .header-typ {
            min-height: 100vh;
            display:flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;

        }
       </style>
    @endpush

    <header class="header-typ">
        <div class="container">
            <h1>Gracias por contactarnos.</h1>
            <small>En unos momentos uno de nuestros asesores se comunicará con usted.</small>

        </div>
    </header>

@endsection