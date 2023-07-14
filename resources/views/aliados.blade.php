@extends('layouts.kanan')
@section('contenido')
    @push('css')
        <style>
            .bg-kanan {
                background-color: #004c98;
            }

        </style>
    @endpush
    <section id="mapa-aliados" class="mapa-aliados">
        <div class="container text-center">
            <h2 class="source-bold text-center">Kananfleet® está presente en</h2>
            <img src="/img/2023/mapa.png" alt="Aliados Kananfleet" class="img-fluid">
        </div>
    </section>
    <section id="aliados">
        <div class="container-fluid">
            <div class="d-none d-sm-none d-md-block d-lg-block">
                <div class="row pt-5 aliados text-center">
                    <div class="col-12">
                        <h2 class="source-bold text-center">Nuestros aliados</h2>
                    </div>
                    @foreach ($aliados->images as $aliado)
                        <div class="col-lg-3 col-md-3 col-sm-3">
                            <a href="{{ $aliado->link }}">
                                <img src="{{ Storage::url($aliado->url) }}" alt="" class="img-flui">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none mt-4">
                <div class="glider-contain">
                    <div class="glider">
                        @foreach ($aliados->images as $aliado)
                            <div class="px-2 text-center">
                                <a href="{{ $aliado->link }}">
                                    <div class="col aliado-elemento">
                                        <img src="{{ Storage::url($aliado->url) }}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    </div>
                    <button aria-label="Previous" class="glider-prev">«</button>
                    <button aria-label="Next" class="glider-next">»</button>
                    <div role="tablist" class="dots"></div>
                </div>
            </div>
        </div>
    </section>
    <section id="CTA" class="m-5">
        <div class="container text-center">
            <div class="pad-1">
                <h4 class="source-bold">Kananfleet cuenta con un atractivo esquema de negocio, programa de recompensas y
                    apoyo para la generación de oportunidades</h4>
                <p class="source-regular " style="color: gray;">¿Estaría interesado en formar parte de nuestra red de
                    alianzas?
                </p>
                <a href="/contacto" class="btn btn-primary">Enviar un mensaje</a> <br>
                <small class="source-light">Pónganse en contacto con nosotros</small>
            </div>
        </div>
    </section>
@endsection
