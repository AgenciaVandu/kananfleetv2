@extends('layouts.kanan')
@section('contenido')
    @push('css')
        <style>
            .bg-kanan {
                background-color: #004c98;
            }

        </style>
    @endpush
    <section id="contact-page">
        <div class="container">
            <div class="mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1860.7463088893987!2d-89.78005230301599!3d21.132785234797836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567791c4d2d3b5%3A0x6f93f9dac2ae79bd!2sKananfleet!5e0!3m2!1ses-419!2smx!4v1640612399449!5m2!1ses-419!2smx"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row pt-5 pb-5">

                <div class="col-lg-6 col-md-12 col-sm-12 info-1">
                    <form action="{{ route('sendemail') }}" method="POST">
                        @csrf
                        <div class="form-row">
                            <div class="col source-bold">
                                <label for="formGroupExampleInput">Nombres*</label>
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                            <div class="col source-bold">
                                <label for="formGroupExampleInput">Apellidos*</label>
                                <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                            </div>
                            <div class="col source-bold">
                                <label for="phone">Teléfono</label>
                                <input type="tel" id="phone" class="form-control" name="phone" value="{{ old('phone') }}">
                            </div>
                        </div>
                        <div class="pt-3 source-bold" id="f-emprendedor">
                            <!--Emprendedor-->
                            <div>
                                <label for="formGroupExampleInput">Correo electrónico*</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email" value="{{ old('email') }}">
                                <small id="emailHelp" class="form-text text-muted">No lo compartiremos con nadie
                                    más.</small>
                            </div>
                            <label class="pt-3" for="formGroupExampleInput">Nombre de su empresa*</label>
                            <input type="text" class="form-control" name="bussines" value="{{ old('bussines') }}">
                            <div class="pt-3">
                                <label for="formGroupExampleInput">Página web</label>
                                <input type="text" class="form-control" name="web" value="{{ old('web') }}">
                            </div>
                        </div>
                        <div class="form-group source-bold pt-3">
                            <label for="inputCity">Ciudad*</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="México" name="city" value="{{ old('city') }}">
                        </div>
                        <div class="pt-1">
                            <label class="source-bold" for="formGroupExampleInput">¿En qué plan está interesado?*</label>
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
                        {{-- <div class="g-recaptcha" data-sitekey="6LdOUdIeAAAAAFLWIHfaLUg4VcsH4lVdOgBo-wd2"
                            style="margin-bottom: 10px;"></div> --}}
                        <button type="submit" class="btn btn-primary mt-3">Enviar mensaje</button>
                    </form>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 info-2">
                    <!--contacto-->
                    <h2 class="source-bold">
                        Gracias por su interés en Kananfleet
                    </h2>
                    <p class="source-regular">Estamos a sus ordenes para brindarle toda la información que necesite,
                        envíenos un correo a través de nuestra página de contacto o comuníquese a nuestras oficinas al
                        teléfono <a href="tel:+529999306745" style="color: #000; text-decoration:none;"
                            class="source-bold">+52 999 9306745</a>.
                    </p>
                    <li>
                        <div class="row source-regular ">
                            <div class="col-1">
                                <img src="/img/ubicacion.svg" width="50">
                            </div>
                            <div class="col-11 pl-5 m-auto">
                                <span>
                                    <a href="https://www.google.com/maps?ll=21.133268,-89.779178&z=16&t=m&hl=es-419&gl=MX&mapclient=embed&cid=8040044477750868413" target="blank_" style="color: #004c98; text-decoration:none;"><b>Parque Científico y Tecnológico,</b></a> Centro Heuristic Km. 5.5 Carretera Sierra
                                Papacal, Mérida Yucatán, México. <br> CP. 97302. <img src="{{ asset('/img/Mexico.png') }}"
                                    class="img-fluid" alt="Bandera de México">
                                </span> <br>
                                <span>
                                    <a href="https://www.google.com/maps/place/90%C2%B0+Altabrisa+Business+Center/@21.0221212,-89.5854261,15z/data=!4m5!3m4!1s0x0:0x314e396c017a9360!8m2!3d21.0221275!4d-89.5854329" target="blank_" style="color: #004c98; text-decoration:none;"><b>Business Center</b></a> Calle 17 # 474 por 20 y 22, Fraccionamiento Altabrisa, 97130 Mérida, Yuc. <img src="{{ asset('/img/Mexico.png') }}" class="img-fluid"
                                    alt="Bandera de México"> <br>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row source-regular ">
                            <div class="col-1">
                                <img src="/img/Telefono.svg" width="50">
                            </div>
                            <div class="col-11 pl-5 m-auto">
                              
                                {{-- <span><a href="tel:+529999306745"
                                        style="color: rgb(48, 48, 48); text-decoration:none;">+52 999 9306745</a>
                                </span> --}}
                                <span class="source-regular" >Oficina:
                                    <a href="tel:529999306745" style="color: rgb(23, 23, 23); text-decoration:none;">+52 999 930 6745</a>
                                </span> <br>
                                <span class="source-regular">Celular:
                                    <a href="https://api.whatsapp.com/send/?phone=5219992005672" style="color: rgb(23, 23, 23); text-decoration:none;">+52 999
                                        200 5672</a>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="row source-regular ">
                            <div class="col-1">
                                <img src="/img/Mail.svg" width="50">
                            </div>
                            <div class="col-11 pl-5 m-auto">
                                Email: <a href="mailto:info@administraflotilla.com"
                                    style="color: rgb(48, 48, 48); text-decoration:none;">info@administraflotilla.com</a></span>
                            </div>
                        </div>
                    </li>
                    <li>
                    </li>
                </div>
            </div>
        </div>
    </section>
@endsection
