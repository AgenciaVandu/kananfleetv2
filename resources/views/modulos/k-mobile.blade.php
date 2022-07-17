@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
<style> 
.bg-kanan {
    background-color: #004c98;
}
</style>
@endpush
<header id="bg-top-mob">
    <div>
     <div class="container">
         <div class="cabecera-titular-3">
          <div class="source-regular centro  pt-4">
            <h1 class="source-bold text-center">KANANFLEET MOBILE</h1>
            <p class="source-regular text-center" style="color: #000">El objetivo de Kananfleet Mobile® es que ahorre dinero al controlar los gastos de combustible para su vehículo; adicionalmente pone a su disposición la información almacenada, la cual le permitirá llevar una administración sana en su consumo de combustible.</p>
          </div>
         </div>
         <div class="row pt-5">
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <img src="{{ asset('/img/banners/inicio/3-5-fueldata.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                <h4 class="source-bold pb-3">Gestión simple en la palma de su mano</h4>
                <li class=" source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Módulo compatible con plataforma KANANFLEET®.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Registro de recarga de combustible en TIEMPO REAL.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Registro de incidencias en TIEMPO REAL.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">PETICIÓN de orden de servicio de <br> mantenimiento (basada en una incidencia).</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">GESTIÓN DE VIAJES.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">FIRMA DIGITAL al cierre de un viaje.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Registro de FOTOGRAFÍAS (evidencia de incidencia, <br> de recarga combustible, gastos de viaje, etc.).</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Obtención de GEOPOSICIÓN del dispositivo móvil <br> desde donde se esta registrando la información.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Registro de datos en modo OFF-LINE y ON-LINE.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">REPORTES informativos y estadísticos.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Alertas mediante NOTIFICACIONES PUSH.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Entre otras bondades.</p>
                    </div>
                </li>
                <li>
                    <a href="https://play.google.com/store/apps/details?id=etecno.agg.kananfleet.mob&hl=es" class="btn btn-google source-bold" title="Google Play">
                        Google Play
                    </a>
                    <small class="source-light">Descárguela aquí</small>
                </li>
            </div>
        </div>
      </div>
    </div>
 </header>
 <section>
    <div class="container pt-4 pb-4 bord">
        <div class="row p-3">
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto text-center">
                <img src="{{ asset('/img/sap-logo-4.svg') }}" alt="" width="img-fluid">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <p class="source-regular m-auto pt-4">
                    Kananfleet® cuenta con la certificación de SAP® como producto Integrado al ERP Business One.
                    Esta certificación nos ha permitido ofrecer a clientes de Business One en toda América Latina,
                    nuestro producto para así ofrecerles un valor agregado.
                </p>
                {{-- <a href="/sap" class="btn btn-primary mt-3">SOLICITAR DEMO</a> --}}
            </div>
            <!--Logotipo de clientes-->
        </div>
    </div>
</section>
 
 <section id="CTA" class="m-5">
     <div class="container text-center">
         <div class="pad-1">
             <h3 class="source-bold">¿Ya cuenta con un sistema de control administrativo?</h3>
             <p class="source-regular" style="color: gray;">Kananfleet ® se adapta a cualquier entorno, no importa si es un software de
                 contabilidad, CRM o ERP. Nosotros creamos las integraciones necesarias.
             </p>
             <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a> <br>
             <small class="source-light">Pónganse en contacto con nosotros</small>
         </div>
     </div>
 </section>
@endsection
