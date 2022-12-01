@extends('layouts.kanan-green')
@section('contenido')
    @push('css')
        <style>
            .nav-link {
                color: gray !important;
            }

            .bg-kanan {
                background-color: transparent;
                transition: 0.5s ease;
            }

            @media (max-width: 999px) {
                .bg-kanan {
                    background-color: #fffffff;
                }
            }

            .bg-kanan.scrolled {
                background: #fff;
            }

        </style>
    @endpush
    <header id="bg-top">
        <div class="espacio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h1 class="source-black">
                            Integre y estandarice sus procesos de negocio en SAP Business ONE.
                        </h1>
                        <p class="source-regular ">
                            Ayudamos a administrar y gestionar la flota vehicular o activos en general, mantener controlados
                            los costos operativos y monitorear los indicadores de desempeño de la misma. Kananfleet cuenta
                            con una versión certificada por SAP a nivel internacional e integrada al ERP SAP B1.
                        </p>
                        <!-- <button class="btn btn-secondary btn-sm source-semibold" data-toggle="modal"
                            data-target="#lead-kananfleet">SOLICITAR DEMO</button> -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="d-none d-sm-none d-md-none d-lg-block">
                            <img src="{{ asset('./img/stock.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <img src="/img/rubros.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                        <h2 class="source-black">
                            Kananfleet es para usted sin importar la vertical de su empresa.
                        </h2>
                        <p class="source-regular text-justify">
                            El ADDON Kananfleet para SAP Business ONE, es una solución que le ayuda a incorporar
                            herramientas para Administrar y Gestionar sus Vehículos y Activos en general, ya sean
                            tractocamiones, vehículos automotores, vehículos utilitarios, montacargas, grúas, cajas secas,
                            dollys, plataformas, pipas, etc.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="clientes">
        <div>
            <div class="container pt-4 pb-4">
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
                {{-- <div class="row pt-5">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h4 class="source-light">M Ó D U L O S</h4>
                        <h2 class="source-black">
                            Administración y gestión de la flota vehicular/activos
                        </h2>
                        <p class="source-regular">
                            Conozca la disponibilidad y estatus de sus activos en todo momento, y evite perder dinero
                            tenerlos en desuso.
                        </p>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <img src="/img/1-img.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                        <!--modulos-->
                        <img src="/img/2-img.png" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h4 class="source-light">M Ó D U L O S</h4>
                        <h2 class="source-black">
                            Administración del mantenimiento.
                        </h2>
                        <p class="source-regular">
                            Lleve el control de sus mantenimientos correctivos, preventivos y predictivos, así como el
                            seguimiento de las órdenes de servicio y los costos asociados. Consulte en un solo click.
                        </p>
                    </div>
                </div> --}}
                {{-- lista --}}
                <div class="row pt-5">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <figure>
                            <img src="{{ asset('./img/img-4.png') }}" class="img-fluid" alt="Picture Kananfleet">
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h4 class="source-bold pb-3" style="font-size: 2rem">KANANFLEET le ofrece una plataforma completa
                            para:</h4>
                        <li class=" source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Administrar la disponibilidad y<br
                                        class="d-none d-sm-none d-md-none d-lg-block"> estatus de sus vehículos, activos,
                                    mantenibles.</p>
                            </div>
                        </li>
                        <li class=" source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Administrar el mantenimiento preventivo,<br
                                        class="d-none d-sm-none d-md-none d-lg-block"> correctivo y órdenes de servicio.</p>
                            </div>
                        </li>
                        <li class=" source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">
                                    Administrar las recargas y despacho de combustible.</p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Administrar la ubicación, desgaste e historial de llantas.</p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Administrar la asignación e historial de choferes y operadores.
                                </p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Administrar viajes, liquidaciones de viaje, carta porte<br> y
                                    complemento de carta porte</p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Reportes programables sobre cada aspecto de la flota,<br>
                                    vehículo, activo o mantenible.</p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Indicadores de desempeño de la operación y rentabilidad <br> de
                                    la flota, vehículo, activo o mantenible</p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">ENTRE MUCHAS OTRAS FUNCIONALIDADES.</p>
                            </div>
                        </li>
                        <small class="source-regular">* Para mayor información consulte el menú de Módulos de esta página o
                            solicite una demo de nuestro producto.</small>

                    </div>
                </div>
            </div>
            {{-- <div class="bg-sap-2">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                            <!--modulos-->
                            <h4 class="source-light">M Ó D U L O S</h4>
                            <h2 class="source-black">
                                Recargas y despacho de combustible
                            </h2>
                            <p class="source-regular">
                                Evite el robo de combustible. Nuestros indicadores le ayudarán a llevar de forma más
                                sencilla el control sobre los siguientes factores, rendimiento, frecuencia de carga por
                                unidad y muchas cosas más.
                            </p>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                            <img src="/img/3-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                            <!--modulos-->
                            <img src="/img/4-img.png" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                            <h4 class="source-light">M Ó D U L O S</h4>
                            <h2 class="source-black">
                                Administración de choferes.
                            </h2>
                            <p class="source-regular">
                                Asigne operadores a sus vehículos y activos, lleve el control de sus infracciones,
                                licencias, permisos, certificaciones, e historial de su comportamiento.
                            </p>
                        </div>
                    </div>
                    <div class="pad-1 text-center pt-5">
                        <h2 class="source-bold">¿Ya cuenta con un sistema de control administrativo?</h2>
                        <p class="source-regular " style="color: gray;">Kananfleet ® se adapta a cualquier entorno, no
                            importa si es un software de
                            contabilidad, CRM o ERP. <br> Nosotros creamos las integraciones necesarias.
                        </p>
                        <button class="btn btn-secondary source-semibold" data-toggle="modal"
                            data-target="#lead-kananfleet">SOLICITAR DEMO</button> <br>
                        <small class="source-light">Pónganse en contacto con nosotros</small>
                    </div>
                </div>
            </div> --}}
            <!--lista-->

        </div>
    </section>
    <section id="CTA" class="m-5">
        <div class="container text-center">
            <div class="pad-1">
                <h2 class="source-bold">¿Ya cuenta con un sistema de control administrativo?</h2>
                <p class="source-regular " style="color: gray;">Kananfleet ® se adapta a cualquier entorno, no importa si
                    es un software de
                    contabilidad, CRM o ERP. Nosotros creamos las integraciones necesarias.
                </p>
                <!-- <a data-toggle="modal" data-target="#lead-kananfleet" class="btn btn-primary">SOLICITAR DEMO</a> <br>
                <small class="source-light">Pónganse en contacto con nosotros</small> -->
            </div>
        </div>
    </section>
    <section id="mapa-aliados" class="pt-4 mb-5">
        <div class="container text-center">
            <h2 class="source-bold text-center">Kananfleet® está presente en</h2>
            <img src="/img/mapa-kanan.png" alt="" class="img-fluid">
        </div>
    </section>
@endsection
