@extends('layouts.kanan')
@section('contenido')
    @push('css')
        <link rel="stylesheet" href="{{ asset('/css/modulos.css') }}">
    @endpush
    <header>
        <div class="bg-mantenimiento">
            <div class="container">
                <div class="cabecera-titular-1">
                    <div class="row centro">
                        <div class="col-lg-5 col-md-12 col-sm-12 m-auto ">
                            <h1 class="source-bold">
                                MANTENIMIENTO
                            </h1>
                            <p class="source-regular">
                                Organice y programe los servicios de mantenimiento
                            </p>
                            <a href="/contacto" class="btn btn-outline-light source-black">
                                SOLICITAR DEMO
                            </a>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 m-auto">
                            <img src="/img/2023//mockups/mantenimiento/1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <section id="kanan-mobile">
        <div class="container-fluid">
            <div class="row pt-5">
                <div class="col-lg-7 col-md-12 col-sm-12 orden text-center m-auto">
                    <img src="/img/2023//mockups/mantenimiento/2.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-5 col-md-12 col-sm-12 right m-auto">
                    {{-- <h4 class="source-bold pb-3">Organice y programe<br class="d-none d-sm-none d-md-none d-lg-block">
                     los servicios de mantenimiento</h4> --}}
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">Programación de mantenimientos preventivos por componente, <br class="d-none d-sm-none d-md-block d-lg-block"> sistema,
                                rutina, por distancia recorrida, tiempo, horas.</p>
                            {{-- <p class="source-semibold">Registro de mantenimiento y sus costos.</p> --}}
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">Gestión y seguimiento de órdenes de trabajo por mantenimiento<br class="d-none d-sm-none d-md-block d-lg-block">
                                preventivo, correctivo, o derivado de alguna incidencia.</p>
                            {{-- <p class="source-semibold">
                             Parametrización de alertas de mantenimiento.</p> --}}
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                Registro de costos asociados y tiempos de cumplimiento.
                            </p>
                            {{--  <p class="source-semibold">
                             Alertas por vencimiento de pólizas.</p> --}}
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">Asignación de aprobadores, responsables, refacciones, <br class="d-none d-sm-none d-md-block d-lg-block">mecánicos o
                                talleres externos.
                            </p>
                            {{-- <p class="source-semibold">Alertas por vencimiento de mantenimiento.</p> --}}
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                Consulta de estatus de órdenes de trabajo<br class="d-none d-sm-none d-md-block d-lg-block"> (programadas, en proceso, con retraso,
                                finalizas, otros)</p>
                                {{-- <p class="source-semibold">
                                Panel de disponibilidad según estatus.</p> --}}
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                Cálculo de refacciones requeridas para cumplir<br class="d-none d-sm-none d-md-block d-lg-block"> con el calendario programado.</p>
                            {{-- <p class="source-semibold">
                                Información a detalle de sus activos.</p> --}}
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                Indicadores de eficiencia, causa raíz,<br class="d-none d-sm-none d-md-block d-lg-block"> ejercicio presupuestal, otros.
                            </p>
                            {{-- <p class="source-semibold">
                               Información a detalle de sus activos.</p> --}}
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                Reportes detallados.
                            </p>
                        </div>
                    </li>
                   
                    <li>
                        <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <section id="hightlights-1">
        <div class="container-fluid pt-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 left m-auto">
                    <h4 class="source-bold pb-3">REGISTRO DIGITAL <br> (hoja inspección / hoja recepción de taller)
                        {{-- <br> <span class="source-regular" style="color: gray; font-size: .7em;">En el módulo de mantenimiento es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.</span> --}}</h4>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">HOJA DE INSPECCIÓN para <br> documentar salidas y llegadas</p>
                            {{-- <p class="source-semibold">Registro de mantenimiento y sus costos.</p> --}}
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            {{-- <p class="source-semibold">Reporte de costos por tipo de mantenimiento.</p> --}}
                            <p class="source-semibold">HOJA DE RECEPCIÓN / ENTREGA de taller.</p>
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                CHECKLIST parametrizable.</p>
                            {{--  <p class="source-semibold">
                                Reporte de historial de mantenimiento.</p> --}}
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                Registro y/o marcación de daños en CHASIS DIGITAL</p>
                            {{-- <p class="source-semibold"> Reporte de próximos servicios a vencer.</p> --}}
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                CONEXIÓN y/o SINCRONIZACIÓN con módulo <br> de mantenimiento</p>
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                FIRMAS DIGITALES</p>
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                REPORTES informativos y estadísticos</p>
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                Alertas vía EMAIL y en plataforma</p>
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                            </div>
                            <p class="source-semibold">
                                Entre otras bondades</p>
                        </div>
                    </li>

                    <li>
                        <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a>
                    </li>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-right p-0 m-auto">
                    <img src="/img/banners/2-mantenimiento/3-reportesmantenimiento.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="CTA" class="m-5">
        <div class="container text-center">
            <div class="pad-1">
                <h3 class="source-bold mt-4 mb-2">Kananfleet® cuenta con una versión certificada para SAP e integrada al ERP SAP Business One</h3>
                {{-- <p class="source-regular" style="color: gray;">Kananfleet ® se adapta a cualquier entorno, no importa si
                    es un software de
                    contabilidad, CRM o ERP. Nosotros creamos las integraciones necesarias.
                </p> --}}
                <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a> <br>
                <small class="source-light">Pónganse en contacto con nosotros</small>
            </div>
        </div>
    </section>
@endsection
