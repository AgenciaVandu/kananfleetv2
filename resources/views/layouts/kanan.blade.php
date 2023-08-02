<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El software ideal para administrar y controlar tu flota vehícular, maquinaria pesada o de construcción — Kananfleet®</title>
    <meta name="description" content=" Aumenta la rentabilidad de tu flota, reduce costos de mantenimiento, combustible, llantas, choferes, viajes.">
    <meta name="keywords" content="administración, control, gestión, flotilla, flotillas, flota, vehículos, camiones, maquinaria, software, combustible, gasolina, transporte, mantenimiento, llantas, gomas, choferes, operadores, sap"/>
    <meta name="robots" content="index">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="stylesheet" href="{{ asset('css/fleet-style.css') }}">
    @stack('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '309569444491923');
        fbq('track', 'PageView');
    </script>
    <noscript>
        <img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=309569444491923&ev=PageView&noscript=1" />
    </noscript>
    <!-- End Meta Pixel Code -->
    {!! htmlScriptTagJsApi([
        'action' => 'homepage',
        'callback_then' => 'callbackThen',
        'callback_catch' => 'callbackCatch'
    ]) !!}
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-kanan fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{ asset('/img/logo-kanan-bco.svg') }}" width="120" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/sectores">Sectores</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-expanded="false">
                            Módulos {{-- <span class="badge badge-light">1</span> --}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item source-regular" href="/mantenimiento">Mantenimiento</a>
                            <a class="dropdown-item source-regular" href="/hoja-de-inspeccion">Hoja de inspección <span class="badge badge-success">Nuevo</span> </a>
                            <a class="dropdown-item source-regular" href="/llantas">Neumáticos / Llantas</a>
                            <a class="dropdown-item source-regular" href="/operadores">Choferes / Operadores</a>
                            <a class="dropdown-item source-regular" href="/disponibilidad">Panel de Disponibilidad</a>
                            <a class="dropdown-item source-regular" href="/carta-porte">Viajes / Carta Porte</a>
                            <a class="dropdown-item source-regular" href="/combustible">Combustible</a>
                            <a class="dropdown-item source-regular" href="/estadisticas">Indicadores de Desempeño y Reportes</a>
                            <a class="dropdown-item source-regular" href="/kananfleet-mobile">KANANFLEET® MOBILE para Android</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/aliados">Aliados</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/empresa">Empresa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contacto">Contacto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/preguntas-frecuentes">FAQ</a>
                    </li>
                    <li class="nav-item">
                        <a href="/sap" class="navbar-brand">
                            <img src="/img/icons/sap.svg" width="80" alt="">
                        </a>
                    </li>

                </ul>
                <div class="form-inline my-2 my-lg-0">
                    <a href="https://www.linkedin.com/showcase/kananfleet/" class="pr-2" target="blank_"
                        style="color:#fff; font-size: 1.3em">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://www.facebook.com/Kananfleet" target="blank_" style="color:#fff; font-size: 1.3em">
                        <i class="fab fa-facebook pr-2"></i>
                    </a>
                    <a href="https://www.instagram.com/kananfleet" target="blank_" style="color:#fff; font-size: 1.3em">
                        <i class="fab fa-instagram pr-3"></i>
                    </a>
                    <a href="/contacto" class="btn btn-secondary btn-sm source-semibold">SOLICITAR DEMO</a>
                </div>
            </div>
        </div>
    </nav>
    @yield('contenido')
    <footer>
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-lg-3 col-sm-6 col-sm-12 m-auto">
                    <img src="{{ asset('/img/logoetecno.png') }}" class="img-fluid">
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-12">
                    <h4 class="source-bold" style="color: #fff;">Contacto</h4>
                    <li class="source-semibold pt-3" style="color: #fff;">Dirección: <br>
                        {{-- <span class="source-regular" style="color: gray; font-size: .8em;">
                           <a href="https://www.google.com/maps?ll=21.133268,-89.779178&z=16&t=m&hl=es-419&gl=MX&mapclient=embed&cid=8040044477750868413" target="blank_" style="color: #0b71d8; text-decoration:none;"><b>Parque Científico y Tecnológico,</b></a> Centro Heuristic Km. 5.5 Carretera Sierra Papacal, Mérida Yucatán, México. CP. 97302 <img src="{{ asset('/img/Mexico.png') }}" class="img-fluid"
                                alt="Bandera de México">
                        </span> <br> --}}
                        <span class="source-regular" style="color: gray; font-size: .8em;">
                           <a href="https://www.google.com/maps/place/90%C2%B0+Altabrisa+Business+Center/@21.0221212,-89.5854261,15z/data=!4m5!3m4!1s0x0:0x314e396c017a9360!8m2!3d21.0221275!4d-89.5854329" target="blank_" style="color: #0b71d8; text-decoration:none;"><b>90 Grados Altabrisa Business Center </b></a><br> Calle 17 #474 x 20 y 22, Fraccionamiento Altabrisa, 97130 Mérida, Yucatán. <img src="{{ asset('/img/Mexico.png') }}" class="img-fluid"
                                alt="Bandera de México">
                        </span>
                    </li>
                    <li class="source-semibold" style="color: #fff;">Teléfonos: <br>
                        <span class="source-regular" style="color: gray; font-size: .8em;">Oficina:
                            <a href="tel:529999306745" style="color: gray;">+52 999 930 6745</a>
                        </span> <br>
                        <span class="source-regular" style="color: gray; font-size: .8em;">Celular:
                            <a href="https://api.whatsapp.com/send/?phone=5219992005672" style="color: gray;">+52 999
                                200 5672</a>
                        </span>
                    </li>
                    <li class="source-semibold" style="color: #fff;">Email: <br>
                        <span class="source-regular" style="color: gray; font-size: .8em;">
                            <a href="mailto:info@administraflotilla.com"
                                style="color: gray;">info@administraflotilla.com</a>
                        </span>
                    </li>
                    <li class="source-semibold m-auto" style="color: #fff;">Síguenos: <br>
                        <span class="source-regular pt-3" style="color: gray; font-size: 1.3em;">
                            <a href="https://www.facebook.com/Kananfleet" target="blank_"
                                style="color: #fff; text-decoration: none;">
                                <i class="fab fa-facebook pr-3"></i>
                            </a>
                            <a href="https://www.linkedin.com/showcase/kananfleet/" target="blank_"
                                style="color: #fff; text-decoration: none;">
                                <i class="fab fa-linkedin pr-3"></i>
                            </a>
                            <a href="https://www.instagram.com/kananfleet" target="blank_"
                            style="color: #fff; text-decoration: none;">
                            <i class="fab fa-instagram"></i>
                        </a>
                            
                        </span>
                    </li>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-12">
                    <h4 class="source-bold" style="color: #fff;">Mapa del sitio</h4>
                    <div class="row">
                        <div class="col-6 pt-3">
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="/" style="color: #fff; text-decoration: none;">Inicio</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="/mantenimiento" style="color: #fff; text-decoration: none;">Mantenimiento</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="/llantas" style="color: #fff; text-decoration: none;">Llantas</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="/operadores" style="color: #fff; text-decora tion: none;">Operadores</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="/disponibilidad" style="color: #fff; text-decoration: none;">Disponibilidad</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="/combustible" style="color: #fff; text-decoration: none;">Combustible</a>
                            </li>
                        </div>
                        <div class="col-6 pt-3">
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="/estadisticas" style="color: #fff; text-decoration: none;">Estadísticas</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="/contacto" style="color: #fff; text-decoration: none;">Contacto</a>
                            </li>
                        </div>
                        <div class="col-12 pt-3 ">
                            <a href="/orders" class="btn btn-primary">Portal de pagos</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-12">
                    <h4 class="source-bold pb-3" style="color: #fff;">Ubicación</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14897.055897457587!2d-89.5854261!3d21.0221212!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f56771f8517c033%3A0x314e396c017a9360!2s90%C2%B0%20Altabrisa%20Business%20Center!5e0!3m2!1ses-419!2smx!4v1689265336456!5m2!1ses-419!2smx" width="auto" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="text-center pb-2">
                <span class="source-regular" style="color: #8f8f8f" >Todos los derechos reservados Kananfleet® 2022<a href="/politica-de-privacidad" style="color: #8f8f8f" target="blank_"> Consulte nuestro aviso de privacidad.</a>
                </span>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
    <script>
        $(window).scroll(function() {
            $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        })
    </script>
    <script src="/js/carrusel.js"></script>
</body>

</html>
