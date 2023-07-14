@extends('layouts.kanan')
@section('contenido')
    @push('css')
        <style>
            .bg-kanan {
                background-color: #004c98;
            }

        </style>
    @endpush
    <section id="empresa">
        <div class="container text-center">
            <h2 class="source-bold">Más de 15 años de experiencia a su servicio
            </h2>
            <p class="source-regular mb-4">GRUPO ETECNO, es una empresa 100% mexicana ubicada en la ciudad de Mérida,
                Yucatán, México; propietaria de la tecnología Kananfleet®, la cuál fue desarrollada para ayudar a nuestros
                clientes a llevar una mejor Administración y Gestión de sus Flotillas Vehiculares y Activos en general.
                
            </p>
            <div class="row espacio-empresa">
                <div class="col">
                    <img src="{{ asset('/img/icons/user.svg') }}" width=90" alt="">
                    <h5 class="source-semibold pt-2">
                        Más de 100 clientes satisfechos
                    </h5>
                </div>
                <div class="col">
                    <img src="{{ asset('/img/icons/logistic.svg') }}" width=90" alt="">
                    <h5 class="source-semibold pt-2">
                        Más de 8,000 unidades administradas
                    </h5>
                </div>
                <div class="col">
                    <img src="{{ asset('/img/icons/latin-a.svg') }}" width=90" alt="">
                    <h5 class="source-semibold pt-2">
                        Clientes en Norteamérica, Centroamérica, Sudamérica y el Caribe
                    </h5>
                </div>
                
            </div>
        </div>
    </section>
    <!--<section id="mision">
            <div class="container">

            </div>
        </section>-->
    <section id="clientes">
        <div class="container text-center">
            <div class="glider-contain">
                <div class="glider">
                    @foreach ($clientes->images as $cliente)
                        <div class="px-2 text-center">
                            <a href="">
                                <div class="col aliado-elemento">
                                    <img src="{{ Storage::url($cliente->url) }}" class="img-fluid">
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
                <button aria-label="Previous" class="glider-prev">«</button>
                <button aria-label="Next" class="glider-next">»</button>
                <div role="tablist" class="dots"></div>
            </div>
            <div class="container pt-4 pb-4 bord">
                <div class="row p-3">
                    <div class="col-lg-6 col-md-12 col-sm-12">
                        <p class="source-regular m-auto pt-3">
                            Kananfleet® cuenta con la certificación de SAP® como producto Integrado al ERP Business One.
                            Esta certificación nos ha permitido ofrecer a clientes de Business One en toda América Latina,
                            nuestro producto para así ofrecerles un valor agregado.
                        </p>
                        <a href="/contacto" class="btn btn-primary mt-3">SOLICITAR DEMO</a>
                    </div>
                    <!--Logotipo de clientes-->
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                        <img src="{{ asset('/img/sap-logo-4.svg') }}" alt="" width="img-fluid">
                    </div>
                </div>
            </div>
    </section>

@endsection
