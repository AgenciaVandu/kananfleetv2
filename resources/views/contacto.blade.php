@extends('layouts.kanan')
@section('contenido')
@push('css')
    <style>
        .bg-kanan {
            background-color: #004c98 ;
        }
    </style>
@endpush
<section id="contact-page">
    <div class="container">
        <div class="mapa">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1860.7463088893987!2d-89.78005230301599!3d21.132785234797836!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f567791c4d2d3b5%3A0x6f93f9dac2ae79bd!2sKananfleet!5e0!3m2!1ses-419!2smx!4v1640612399449!5m2!1ses-419!2smx" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="row pt-5 pb-5">
            <div class="col-lg-6 col-md-12 col-sm-12 info-1">
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
            <div class="col-lg-6 col-md-12 col-sm-12 info-2"> <!--contacto-->
                <h2 class="source-bold">
                    Gracias por su interés en Kananfleet
                </h2>
                <p class="source-regular">Estamos a sus ordenes para brindarle toda la información que necesite, envíenos un correo a través de nuestra página de contacto o comuníquese a nuestras oficinas al teléfono <a href="tel:+529999306745" style="color: #000; text-decoration:none;" class="source-bold">+52 999 9306745</a>.
                </p>
                <li>
                    <div class="row source-regular ">
                        <div class="col-1">
                            <img src="/img/ubicacion.svg" width="50">
                        </div>
                        <div class="col-11 pl-5 m-auto">
                            Dirección: Parque Científico y Tecnológico, Centro Heuristic Km. 5.5 Carretera Sierra Papacal, Mérida Yucatán. CP. 97302.
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row source-regular ">
                        <div class="col-1">
                            <img src="/img/Telefono.svg" width="50">
                        </div>
                        <div class="col-11 pl-5 m-auto">
                            Teléfono: <span><a href="tel:+529999306745" style="color: rgb(48, 48, 48); text-decoration:none;">+52 999 9306745</a></span>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="row source-regular ">
                        <div class="col-1">
                            <img src="/img/Mail.svg" width="50">
                        </div>
                        <div class="col-11 pl-5 m-auto">
                            Email: <a href="mailto:info@administraflotilla.com" style="color: rgb(48, 48, 48); text-decoration:none;">info@administraflotilla.com</a></span>
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