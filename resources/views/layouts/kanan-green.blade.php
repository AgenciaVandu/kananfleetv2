<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>El Software para administración de activos respaldado por SAP — Kananfleet®</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
    <link rel="stylesheet" href="{{asset('css/fleet-style.css')}}">
    @stack('css')
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-kanan fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('/img/kanan-green.svg')}}" width="120" alt="">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav m-auto">
            <li class="nav-item active">
              <a class="nav-link" href="/">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/soluciones">Soluciones</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                Módulos
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="/mantenimiento">Mantenimiento</a>
                <a class="dropdown-item" href="/llantas">Llantas</a>
                <a class="dropdown-item" href="/operadores">Operadores</a>
                <a class="dropdown-item" href="/disponibilidad">Disponibilidad</a>
                <a class="dropdown-item" href="/carta-porte">Carta porte</a>
                <a class="dropdown-item" href="/combustible">Combustible</a>
                <a class="dropdown-item" href="/estadisticas">Estadísticas</a>
                
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
                <a class="navbar-brand">
                    <img src="/img/icons/sap-gris.svg" width="80" alt="">
                </a>
            </li>
            
          </ul>
          <div class="form-inline my-2 my-lg-0">
            <a href="https://www.facebook.com/Kananfleet" target="blank_" style="color:gray; font-size: 1.3em">
                <i class="fab fa-facebook pr-3" ></i>
            </a>
            <a href="/sap" class="btn btn-secondary btn-sm source-semibold">SOLICITAR DEMO</a>
          </div>
        </div>
        </div>
    </nav>
    <main role="main">
        <!-- Modal -->
<div class="modal fade" id="lead-kananfleet" tabindex="-1" aria-labelledby="lead-kananfleet" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Gracias por su interes en Kananfleet®</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form>
                <div class="form-row">
                  <div class="col source-bold">
                    <label for="formGroupExampleInput">Nombres*</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="col source-bold">
                    <label for="formGroupExampleInput">Apellidos*</label>
                    <input type="text" class="form-control" required>
                  </div>
                  <div class="col source-bold">
                    <label for="phone">Teléfono</label>
                    <input type="tel" id="phone" class="form-control" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required>
                  </div>
                </div>
                <div class="pt-3 source-bold" id="f-emprendedor"> <!--Emprendedor-->
                    <div>
                        <label for="formGroupExampleInput">Correo electrónico*</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        <small id="emailHelp" class="form-text text-muted">No lo compartiremos con nadie más.</small>
                    </div>
                    <label class="pt-3" for="formGroupExampleInput">Nombre de su empresa*</label>
                    <input type="text" class="form-control" required>
                    <div class="pt-3">
                        <label for="formGroupExampleInput">Página web</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group source-bold pt-3">
                    <label for="inputCity">Ciudad*</label>
                    <input type="text" class="form-control" id="inputCity" placeholder="México" required>
                </div>
                <div class="pt-1">
                    <label class="source-bold" for="formGroupExampleInput">¿En qué plan está interesado?*</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label source-bold" for="exampleRadios1">
                          Kananfleet Web
                        </label>
                      </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                    <label class="form-check-label source-bold" for="exampleRadios2">
                        Addon Kananfleet para SAPB1
                    </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-3">Enviar mensaje</button>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    </main>
    @yield('contenido')
    <footer>
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-lg-3 col-sm-6 col-sm-12 m-auto">
                    <img src="{{asset('/img/logoetecno.png')}}" class="img-fluid">
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-12">
                    <h4 class="source-bold" style="color: #fff;">Contacto</h4>
                    <li class="source-semibold pt-3" style="color: #fff;">Dirección: <br>
                        <span class="source-regular" style="color: gray; font-size: .8em;">
                            Parque Científico y Tecnológico, Centro Heuristic Km. 5.5 Carretera Sierra Papacal, Mérida Yucatán. CP. 97302
                        </span>
                    </li>
                    <li class="source-semibold" style="color: #fff;">Teléfono: <br>
                        <span class="source-regular" style="color: gray; font-size: .8em;">
                            <a href="tel:5219999306745" style="color: gray;">+52 1 999 930 6745</a>
                        </span>
                    </li>
                    <li class="source-semibold" style="color: #fff;">Email: <br>
                        <span class="source-regular" style="color: gray; font-size: .8em;">
                            <a href="mailto:info@administraflotilla.com" style="color: gray;">info@administraflotilla.com</a>
                        </span>
                    </li>
                    <li class="source-semibold m-auto" style="color: #fff;">Síguenos: <br>
                        <span class="source-regular pr-3" style="color: gray; font-size: 1.3em;">
                            <a href="#" style="color: #fff; text-decoration: none;">
                                <span class="icon-facebook"></span>
                            </a>
                        </span>
                        <span class="source-regular pt-3" style="color: gray; font-size: 1.3em;">
                            <a href="https://www.facebook.com/Kananfleet" target="blank_" style="color: #fff; text-decoration: none;">
                                <i class="fab fa-facebook pr-3"></i>
                            </a>
                            <a href="https://www.linkedin.com/showcase/kananfleet/" target="blank_" style="color: #fff; text-decoration: none;">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </span>
                    </li>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-12">
                    <h4 class="source-bold" style="color: #fff;">Mapa del sitio</h4>
                    <div class="row">
                        <div class="col-6 pt-3">
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="" style="color: #fff; text-decoration: none;">Inicio</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="" style="color: #fff; text-decoration: none;">Mantenimiento</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="" style="color: #fff; text-decoration: none;">Llantas</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="" style="color: #fff; text-decoration: none;">Operadores</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="" style="color: #fff; text-decoration: none;">Disponibilidad</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="" style="color: #fff; text-decoration: none;">Combustible</a>
                            </li>
                        </div>
                        <div class="col-6 pt-3">
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="" style="color: #fff; text-decoration: none;">Estadísticas</a>
                            </li>
                            <li class="source-regular" style="font-size: 1em;">
                                <a href="" style="color: #fff; text-decoration: none;">Contacto</a>
                            </li>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-sm-12">
                    <h4 class="source-bold pb-3" style="color: #fff;">Ubicación</h4>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1860.7463088893987!2d-89.78005230301599!3d21.132785234797836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567791c4d2d3b5%3A0x6f93f9dac2ae79bd!2sKananfleet!5e0!3m2!1ses-419!2smx!4v1640612399449!5m2!1ses-419!2smx" width="auto" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
    <script>
        $(window).scroll(function() {
        $('nav').toggleClass('scrolled', $(this).scrollTop() > 100);
        })
    </script>
    <script src="/js/carrusel.js"></script>
</body>
</html>