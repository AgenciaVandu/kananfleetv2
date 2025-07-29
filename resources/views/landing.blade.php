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
            .formulario-landing .contenedor-form{
                height: 800px;
                width: 100%;
                display: flex;
                flex-direction: row;
                justify-content: center;
                align-items: center;
            }
            .formulario-landing form {
                max-width: 550px;
                
            }

            .floating-btn {
            position: fixed;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            padding: 15px 30px;
            border-radius: 30px;
            text-decoration: none;
            box-shadow: 0 4px 6px rgba(0,0,0,0.2);
            z-index: 1000;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            white-space: nowrap;
            transition: all 0.3s ease;
            }

            /* El contenido interno se escala, no el posicionamiento */
            .floating-btn span {
            display: inline-block;
            transition: transform 0.3s ease;
            }

            .stuck {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            }

            .stuck span {
            transform: scale(0.85); /* Sólo el texto y contenido se reduce */
            }
            .target-alto {
                height: 30px;
            }

            /* ---------- Responsive ---------- */
            @media (max-width: 768px) {
            .floating-btn {
                padding: 15px 30px;
                font-size: 0.9rem;
            }
            }

            @media (max-width: 480px) {
            .floating-btn {
                padding: 15px 30px;
                font-size: 0.8rem;
                border-radius: 25px;
            }
            }

        </style>
    @endpush
    <header id="bg-top">
        <div class="espacio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h1 class="source-black">
                            Potencia la gestión de tu flota con KANANFLEET
                        </h1>
                        <p class="source-regular ">
                            Nuestro software líder en el mercado está diseñado para ofrecerte una visión integral y estratégica de tus activos. Reduce costos operativos, garantiza el mantenimiento preventivo de vehículos y maquinaria, y evalúa la rentabilidad de cada recurso con datos precisos. 

                        </p>
                        <a class="btn btn-secondary btn-sm source-semibold" href="#formulario-landing">SOLICITAR DEMO</a> 
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <div class="d-none d-sm-none d-md-none d-lg-block">
                            <img src="{{ asset('/img/2023/IMG_2935.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top: 3em">
                    <div class="col-lg-7 col-md-12 col-sm-12">
                        <img src="{{asset('/img/2023/foto-sap.png')}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                        <h2 class="source-black">
                            Gracias a KPIs y reportes detallados.
                        </h2>
                        <p class="source-regular text-justify">
                            KANANFLEET te permite tomar decisiones informadas y alineadas con los objetivos de tu negocio, generando con ello eficiencia, control y ayudando a garantizar crecimiento sostenido.
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
                       {{--  @foreach ($clientes ?? ''->images as $cliente)
                            <div class="px-2 text-center">
                                <a href="">
                                    <div class="col aliado-elemento">
                                        <img src="{{ Storage::url($cliente->url) }}" class="img-fluid">
                                    </div>
                                </a>
                            </div>
                        @endforeach --}}
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
                            <img src="{{ asset('./img/2023/complementos/Collage-SAP.png') }}" class="img-fluid" alt="Picture Kananfleet">
                        </figure>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                        <h4 class="source-bold pb-3" style="font-size: 1.3rem">En KANANFLEET, ofrecemos una plataforma integral diseñada para optimizar la gestión de su flota vehicular y maquinaria. Nuestra solución les permite:</h4>
                        <li class=" source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Visualizar en tiempo real la disponibilidad <br> y el estado de sus vehículos y maquinaria.</p>
                            </div>
                        </li>
                        <li class=" source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Administrar el mantenimiento preventivo y correctivo, <br> así como llevar un control preciso de las órdenes de servicio.</p>
                            </div>
                        </li>
                        <li class=" source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">
                                    Gestionar recargas y despachos de combustible<br>  de manera eficiente.</p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Controlar la ubicación, el desgaste y el historial<br> de las llantas.</p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Supervisar la asignación de vehículos y operadores, <br>además de su historial de uso.
                                </p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Programar viajes y actualizar sus estatus, liquidaciones <br> de viaje y carta porte.
                                </p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Programar viajes, actualizar su estatus, 
                                    <br> gestionar liquidaciones y cartas porte.
                                </p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Monitorear el gasto asociado a la flota y a cada<br>  vehículo de forma individual. Generar reportes  e indicadores <br>de rendimiento configurables,que le permitirán<br>   tomar decisiones basadas en datos precisos.</p>
                            </div>
                        </li>
                        <li class="source-semibold">
                            <div class="row m-auto">
                                <div class="check pr-2">
                                    <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                                </div>
                                <p class="source-semibold">Con KANANFLEET, optimice sus recursos, <br> reduzca costos y aumente la productividad de su flota<br>  de manera sencilla y efectiva.</p>
                            </div>
                        </li>
                       {{--  <li class="source-semibold">
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
                        </li> --}}
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
    <section id="CTA" class="m-5" id="targetDiv">
        <div class="container text-center">
            <div class="" id="targetDiv" style="display: flex; flex-direction: column; justify-content:center; align-items:center; width:100%;">
                <h3 class="source-bold mt-4 mb-2" style="max-height: 170px; max-width: 650px">Kananfleet® cuenta con una versión certificada para SAP e integrada al ERP SAP Business One</h3>
                <a href="#formulario-landing" class="btn btn-primary floating-btn mt-2 mb-3" id="floatingBtn">SOLICITAR DEMO</a>
                 <div class="target-alto"  id="targetDiv">
                   
                </div> <br>
             </div>
        </div>
    </section>
    <section id="mapa-aliados" class="pt-4 mb-5">
        <div class="container text-center">
            <h2 class="source-bold text-center">Kananfleet® está presente en</h2>
            <div class="d-none d-sm-none d-md-block d-lg-block">
                <img src="/img/2023/mapa-1.png" alt="" class="img-fluid">
            </div>
            <div class="d-block d-sm-block d-md-none d-lg-none">
                <img src="/img/2023/mapa-2.png" alt="" class="img-fluid mt-3">
                <img src="/img/2023/mapa-3.png" alt="" class="img-fluid">
                <img src="/img/2023/mapa-4.png" alt="" class="img-fluid">

            </div>
        </div>
    </section>
   
    <div class="formulario-landing" id="formulario-landing">
        <div class="text-center">
            <h2 class="source-bold text-center">Contáctanos:</h2>
        </div>
        <div class="container contenedor-form">
            
            <form action="{{ route('sendemail') }}" method="POST">
                @csrf
                <div class="form-row">
                    <div class="col source-bold">
                        <label for="formGroupExampleInput">Nombres*</label>
                        <input type="text" class="form-control" required name="name">
                    </div>
                    <div class="col source-bold">
                        <label for="formGroupExampleInput">Apellidos*</label>
                        <input type="text" class="form-control" required name="lastname">
                    </div>
                    <div class="col source-bold">
                        <label for="phone">Teléfono</label>
                        <input type="tel" id="phone" class="form-control" required name="phone">
                    </div>
                </div>
                <div class="pt-3 source-bold" id="f-emprendedor">
                    <!--Emprendedor-->
                    <div>
                        <label for="formGroupExampleInput">Correo electrónico*</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp" name="email">
                        <small id="emailHelp" class="form-text text-muted">No lo compartiremos con nadie
                            más.</small>
                    </div>
                    <label class="pt-3" for="formGroupExampleInput">Nombre de su empresa*</label>
                    <input type="text" class="form-control" required>
                    <div class="pt-3">
                        <label for="formGroupExampleInput">Página web</label>
                        <input type="text" class="form-control" name="web">
                    </div>
                </div>
                <div class="form-group source-bold pt-3">
                    <label for="inputCity">Ciudad*</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="México" required
                        name="city">
                </div>
                <div class="pt-1">
                    <label class="source-bold" for="formGroupExampleInput">¿En qué plan está
                        interesado?*</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option1"
                            value="Kananfleet Web" checked>
                        <label class="form-check-label source-bold" for="option1">
                            Kananfleet Web
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="option" id="option2"
                            value="Addon Kananfleet para SAPB1">
                        <label class="form-check-label source-bold" for="option2">
                            Addon Kananfleet para SAPB1
                        </label>
                    </div>
                    <div class="pt-1">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="policy" id="policy">
                            <label class="form-check-label source-regular" style="font-size: 12px; text-align: justify;" for="policy">
                                Acepto que Kananfleet use mis datos únicamente para fines contacto y envío de
                                información relacionada con esta solicitud
                                NOTA: Sus datos están protegidos de acuerdo a la Ley de Protección de de Datos
                                Personales.
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar mensaje</button>
            </form>
        </div>
    </div>

    <script>
       const floatingBtn = document.getElementById('floatingBtn');
    const targetDiv = document.getElementById('targetDiv');

    window.addEventListener('scroll', () => {
      const targetRect = targetDiv.getBoundingClientRect();
      const windowHeight = window.innerHeight;

      const targetTop = targetDiv.offsetTop;
      const targetBottom = targetTop + targetDiv.offsetHeight;
      const scrollY = window.scrollY || window.pageYOffset;

      // Si el scroll pasa por debajo del div, "pega" el botón dentro
      if (scrollY + windowHeight >= targetBottom) {
        floatingBtn.classList.add('stuck');
        floatingBtn.style.top = (targetDiv.offsetTop + targetDiv.offsetHeight - floatingBtn.offsetHeight - 20) + 'px';
      } else {
        floatingBtn.classList.remove('stuck');
        floatingBtn.style.top = '';
      }
    });
      </script>
@endsection
