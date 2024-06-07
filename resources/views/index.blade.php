@extends('layouts.kanan')
@section('contenido')
    @if ($headers->image)
        {{-- <a href="{{ $header->image->link }}">
<header id="b-index" style="background-image: url({{ Storage::url($header->image->url) }}); background-repeat: no-repeat; background-position: center; background-size: cover;
                    min-height: 100vh;">
    <div class="container">
        <div class="cabecera-titular">
            <h1 class="source-bold">
                Administre sus activos <br class="d-none d-sm-none d-md-none d-lg-block"> en un sólo lugar
            </h1>
            <a href="" class="btn btn-outline-light source-black">
                SOLICITAR DEMO
            </a>
        </div>
    </div>
</header>
</a> --}}

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($headers->images as $header)
                            <li data-target="#carouselExampleCaptions" data-slide-to="0"
                                class="{{ $loop->iteration == 1 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($headers->images as $header)
                            <div class="carousel-item carousel-banner {{ $loop->iteration == 1 ? 'active' : '' }}">
                                <img src="{{ Storage::url($header->url) }}" class="d-block w-100 bannercarrusel" alt="...">
                                <div class="carousel-caption">
                                    <div class="contenido">
                                        <h5>{{ $header->name }}</h5>
                                        <a href="{{ $header->link }}" class="btn btn-outline-light source-black">
                                            {{ $header->text_button }}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </button>
        </div>
    @else
        <header id="b-index"
            style="background-image: url(/img/banners/1-index.png); background-repeat: no-repeat; background-position: center; background-size: cover;
                    min-height: 100vh;">
            <div class="container">
                <div class="cabecera-titular">
                    <h1 class="source-bold">
                        Administre sus activos <br class="d-none d-sm-none d-md-none d-lg-block"> en un sólo lugar
                    </h1>
                    <a href="/contacto" class="btn btn-outline-light source-black">
                        SOLICITAR DEMO
                    </a>
                </div>
            </div>
        </header>
    @endif
    <section id="soluciones">
        <div class="container">
            <div class="text-center">
                <h4 class="source-bold pt-5 pb-3">
                    Gestionar sus activos con Kananfleet® <br class="d-none d-sm-none d-md-none d-lg-block"> traerá muchos
                    beneficios a su empresa
                </h4>
            </div>
            <div class="d-none d-sm-none d-md-block d-lg-block">
                <div class="row">
                    <div class="col-lg-6 col-md-12 soluciones col-sm-12 text-center pad">
                        <a >
                            <img src="{{ asset('/img/2023/saving.svg') }}" width="50">
                            <h5 class="source-bold pt-3">Optimizar costos operativos</h5>
                            <p class="source-regular">
                                Al controlar adecuadamente el combustible, llantas,
                                neumáticos, mantenimientos y más, puede ahorrar hasta el 30% de los costos en su
                                ejercicio presupuestal en activos.
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 soluciones col-sm-12 text-center pad">
                        <a>
                            <img src="{{ asset('/img/2023/servicio.svg') }}" width="50">
                            <h5 class="source-bold pt-3">Mejorar servicio al cliente</h5>
                            <p class="source-regular">
                                Mantener los activos en buen estado le permite a su empresa
                                cumplir los compromisos de tiempo, precio y calidad con sus clientes.
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 soluciones col-sm-12 text-center pad">
                        <a >
                            <img src="{{ asset('/img/icons/proceso.svg') }}" width="50">
                            <h5 class="source-bold pt-3">Eficientar procesos de negocio</h5>
                            <p class="source-regular">
                                Con el software de Kananafleet puedes ahorrar desde un
                                20% del tiempo utilizado en generar reportes, estadísticas e indicadores. Mantén tu
                                productividad al máximo y reduce el riesgo de errores.
                            </p>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-12 soluciones col-sm-12 text-center pad">
                        <a >
                            <img src="{{ asset('/img/icons/gobierno.svg') }}" width="50">
                            <h5 class="source-bold pt-3">Cumplir con las regulaciones de gobierno</h5>
                            <p class="source-regular">
                                Constantemente surgen nuevas disposiciones
                                gubernamentales relacionadas a la gestión de activos operativos, no responder a tiempo
                                puede ser causal de penalizaciones. Nuestra tecnología les facilita estar al día con estas
                                regulaciones.
                            </p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none">
                <div class="carousel">
                    <div class="carousel__contenedor mb-5">
                        <button aria-label="anterior" class="carousel__anterior">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <div class="carousel__lista">
                            <!--1-->
                            <div class="carousel__elemento">
                                <div class="col-12 soluciones text-center pad">
                                    <a href="/soluciones">
                                        <img src="{{ asset('/img/2023/saving.svg') }}" width="50">
                                        <h5 class="source-bold pt-3">Optimizar costos operativos</h5>
                                        <p class="source-regular">
                                            Al controlar adecuadamente el combustible, llantas,
                                            neumáticos, mantenimientos y más, puede ahorrar hasta el 30% de los costos en su
                                            ejercicio presupuestal en activos.
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <!--2-->
                            <div class="carousel__elemento">
                                <div class="col-12 soluciones text-center pad">
                                    <a href="/soluciones">
                                        <img src="{{ asset('/img/2023/servicio.svg') }}" width="50">
                                        <h5 class="source-bold pt-3">Mejorar servicio al cliente</h5>
                                        <p class="source-regular">
                                            Mantener los activos en buen estado le permite a su empresa
                                            cumplir los compromisos de tiempo, precio y calidad con sus clientes.
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <!--3-->
                            <div class="carousel__elemento">
                                <div class="col-12 soluciones text-center pad">
                                    <a href="/soluciones">
                                        <img src="{{ asset('/img/icons/proceso.svg') }}" width="50">
                                        <h5 class="source-bold pt-3">Eficientar procesos de negocio</h5>
                                        <p class="source-regular">
                                            Con el software de Kananafleet puedes ahorrar desde un
                                            20% del tiempo utilizado en generar reportes, estadísticas e indicadores. Mantén
                                            tu
                                            productividad al máximo y reduce el riesgo de errores.
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <!--4-->
                            <div class="carousel__elemento">
                                <div class="col-12 soluciones text-center pad">
                                    <a href="/soluciones.html">
                                        <img src="{{ asset('/img/icons/gobierno.svg') }}" width="50">
                                        <h5 class="source-bold pt-3">Cumplir con las regulaciones de gobierno</h5>
                                        <p class="source-regular">
                                            Constantemente surgen nuevas disposiciones
                                            gubernamentales relacionadas a la gestión de activos operativos, no responder a
                                            tiempo
                                            puede ser causal de penalizaciones. Nuestra tecnología les facilita estar al día
                                            con estas regulaciones.
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <button aria-label="siguiente" class="carousel__siguiente">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
            {{-- <div class="text-center mt-4 pad-1">
                <h4 class="source-bold">Kananfleet se adapta a cualquier sistema de contabilidad, ERP, CRM.</h4>
                <p class="source-regular " style="color: gray;">Nosotros creamos las integraciones necesarias para
                    garantizar el flujo de información. Si es usuario del ERP SAP B1, contamos con una versión certificada e
                    integrada a este ERP.
                </p>
                <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a> <br>
                <small class="source-light">Pónganse en contacto con nosotros</small>
            </div> --}}
        </div>
    </section>
    <section id="informes">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('/img/banners/inicio/1.png') }}" loading="lazy" class="d-block w-100"
                                    alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/banners/inicio/2.png') }}" loading="lazy" class="d-block w-100"
                                    alt="Kananfleet">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/banners/inicio/3.png') }}" loading="lazy" class="d-block w-100"
                                    alt="Kananfleet">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('/img/banners/inicio/4.png') }}" loading="lazy" class="d-block w-100"
                                    alt="Kananfleet">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <h4 class="source-bold">Informes detallados</h4>
                    <p class="source-regular" style="color: gray;">Kananfleet® le ayudará a conocer con detalle todo lo
                        que
                        necesita para llevar correctamente la administración de su flotilla y activos, ayudamos a su empresa
                        a gestionar de manera eficiente: operadores, llantas, servicios de mantenimiento preventivo y
                        correctivo, el inventario de refacciones; a obtener reportes estadísticos sobre la ejecución de los
                        presupuestos de mantenimiento y combustible, etc.</p>
                    <a href="/faq.html" class="btn btn-primary">Preguntas frecuentes</a>
                </div>
            </div>
        </div>
    </section>
    <section id="video" class="mt-5">
        <div class="bg-azul">
            <div class="container text-center">
                <h3 class="source-bold pb-4 pt-5">¿Por qué elegir Kananfleet® como su administrador de activos?</h4>
                    <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/dtMnCr9eT5I?si=qt5t55xhKyQ0i2du" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                    <p class="source-semibold pt-3" style="color: #fff;">
                        Comience a optimizar los recursos y gastos de su empresa, reduzca costos,<br
                            class="d-none d-sm-none d-md-none d-lg-block"> aumente la productividad de su organización.
                    </p>
                    <a href="/contacto" class="btn btn-secondary btn-lg source-black mb-5">
                        SOLICITAR DEMO
                    </a>
            </div>
        </div>
    </section>
    <section id="kanan-mobile">
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                    <img src="{{ asset('/img/banners/inicio/3-5-fueldata.png') }}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                    <h4 class="source-bold ">KANANFLEET MOBILE</h4>
                    <p class="source-semibold">Brinde a sus choferes, operadores y supervisores las herramientas para hacer
                        mejor su trabajo. Kananfleet Mobile es una aplicación incluida con el sistema Kananfleet, la cual
                        puede trabajar on-line, off-line, y le permitirá:</p>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="20" alt="">
                            </div>
                            <p class="source-semibold">Registrar recargas de combustible <br> o despacho de combustible
                                (autoconsumo).</p>
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="20" alt="">
                            </div>
                            <p class="source-semibold">Reportar incidencias sobre el vehículo/activo, <br> e incidencias
                                sobre llantas/neumáticos.</p>
                        </div>
                    </li>
                    <li class=" source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="20" alt="">
                            </div>
                            <p class="source-semibold" style="padding-top: 1px">
                                Solicitar órdenes de mantenimiento.</p>
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="20" alt="">
                            </div>
                            <p class="source-semibold">Ver los viajes asignados y actualizar el estatus <br> de cada uno de
                                ellos (iniciar, pausar,
                                finalizar,<br> solicitar timbrado de la carta porte).</p>
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="20" alt="">
                            </div>
                            <p class="source-semibold">Registrar evidencia fotográfica y posición georreferenciada<br> de
                                cargas de combustible,
                                incidencias, siniestros, <br> paradas, viajes finalizados, otros eventos.</p>
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="20" alt="">
                            </div>
                            <p class="source-semibold" style="padding-top: 1px">Consultar el estatus de una orden de
                                mantenimiento.</p>
                        </div>
                    </li>
                    <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="20" alt="">
                            </div>
                            <p class="source-semibold" style="padding-top: 1px">Obtener reportes de productividad, entre
                                otras funcionalidades.</p>
                        </div>
                    </li>
                    {{-- <li class="source-semibold">
                        <div class="row m-auto">
                            <div class="check pr-2">
                                <img src="{{ asset('/img/icons/check.svg') }}" width="20" alt="">
            </div>
            <p class="source-semibold">Entre otros.</p>
        </div>
        </li> --}}
                    <li class="mt-3">
                        <a href="https://play.google.com/store/apps/details?id=etecno.agg.kananfleet.mob&hl=es"
                            class="btn btn-google source-bold" title="Google Play">
                            Google Play
                        </a>
                        <small class="source-light">Descárguela aquí</small>
                    </li>
                </div>
            </div>
        </div>
    </section>
    <section id="CTA" class="m-5">
        <div class="container text-center">
            <div class="pad-1">
                <h2 class="source-bold mt-4">Kananfleet® cuenta con una versión certificada para SAP e integrada al ERP SAP
                    Business One</h2>
                {{-- <p class="source-regular " style="color: gray;">Kananfleet ® se adapta a cualquier entorno, no importa si
                    es un software de
                    contabilidad, CRM o ERP. Nosotros creamos las integraciones necesarias.
                </p> --}}
                <a href="/contacto" class="btn btn-primary mt-3">SOLICITAR DEMO</a> <br>
                <small class="source-light">Pónganse en contacto con nosotros</small>
            </div>
        </div>
    </section>
    <section id="reel-aliados" class="mb-4">
        <div class="container text-center">
            <h2 class="source-bold pt-3 pb-4">Nuestros clientes</h2>
            <div>
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
                {{-- <div class="glider-contain">
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
    </div> --}}
            </div>
            {{-- <div class="carousel">
        <div class="carousel__contenedor mb-5">
            <button aria-label="anterior" class="carousel__anterior">
                <i class="fas fa-chevron-left"></i>
            </button>
            <div class="carousel__lista1">
                <!--1-->
                <div class="carousel__elemento">
                    <div class="row">
                        <a href="">
                            <div class="col aliado-elemento">
                                <img src="{{asset('/img/aliados/algory.png')}}" class="img-fluid">
    </div>
    </a>
    </div>
    </div>
    <!--2-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/b1pro.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--3-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/beelog.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--4-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/corponet.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--5-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/dintec.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--6-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/evolve.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--7-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/ework.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--8-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/ijam.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--9-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/INFORUM.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--10-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/interlatin.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--11-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/intic.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--12-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/kaitzen.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--13-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/PRIZMA-SOFTWARE.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--14-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/sap.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--15-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/sineti.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    <!--15-->
    <div class="carousel__elemento">
        <div class="row">
            <a href="">
                <div class="col">
                    <img src="{{asset('/img/aliados/sixma.png')}}" class="img-fluid">
                </div>
            </a>
        </div>
    </div>
    </div>

    <button aria-label="siguiente" class="carousel__siguiente">
        <i class="fas fa-chevron-right"></i>
    </button>
    </div>
    </div> --}}
        </div>
    </section>
@endsection
