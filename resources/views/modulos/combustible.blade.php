@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-mantenimiento">
     <div class="container">
         <div class="cabecera-titular-1">
          <div class="row">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h1 class="source-bold">
                     Combustible
                  </h2>
                  <p class="source-regular">
                    Administre eficientemente el consumo del combustible
                  </p>
                  <a href="/contacto" class="imagen btn btn-outline-light source-black">
                      SOLICITAR DEMO
                  </a>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 m-auto">
                  <img src="/img/banners/5-llantas/1-banner.png" class="img-fluid" alt="">
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
                 <img src="/img/banners/5-llantas/2-gestionesusneumaticos.png" class="img-fluid" alt="">
             </div>
             <div class="col-lg-5 col-md-12 col-sm-12 right m-auto">
                 <h4 class="source-bold pb-3">Funciones que provee el módulo de combustible <br> <span class="source-regular" style="color: gray; font-size: .7em;">Este módulo permite registrar las cargas de combustible, generar cálculos de rendimiento y consumo, así como proveer reportes estadísticos.</span></h4>
                 <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">Módulo compatible con KANANFLEET MOBILE® (Android).</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">INFORMACIÓN DETALLADA sobre el registro <br> y consumo de combustible.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">Registro de FOTOGRAFÍAS y GEOPOSICIÓN del <br> lugar donde se realizó la recarga.</p>
                    </div>
                </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">Cálculo de consumo de combustible.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Cálculo de rendimiento de combustible.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Registro de recargas de combustible.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">Módulo compatible con <a href="" style="color: #91A435;">KANANFLEET MOBILE®</a> (Android).</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Información a detalle del consumo de combustible.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Registro de fotografías y geoposición del lugar donde <br> se realizó la recarga.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Entre otras bondades.</p>
                     </div>
                 </li>
                 <li>
                     <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a>
                 </li>
             </div>
         </div>
     </div>
 </section>
{{--  <section id="hightlights-1">
     <div class="container-fluid pt-5">
         <div class="row">
             <div class="col-lg-6 col-md-12 col-sm-12 left m-auto">
                 <h4 class="source-bold pb-3">Reportes, la forma más práctica de tener la información más importante de sus activos <br> <span class="source-regular" style="color: gray; font-size: .7em;">En el módulo de combustible es posible generar reportes de todo tipo, así como la información de mayor importancia para la toma de decisiones.</span></h4>
                 <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                        <p class="source-semibold">
                            Reportes informativos y estadísticos.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                        <p class="source-semibold">
                            Reportes vía EMAIL y en plataforma.</p>
                    </div>
                </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">Reporte de recargas de combustible.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Reporte de consumo de combustible.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Reporte de redimiento y costo de combustible.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Reporte con estadísticas sobre las recargas.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                             Entre otras bondades.</p>
                     </div>
                 </li>

                 <li>
                     <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a>
                 </li>
             </div>
             <div class="col-lg-6 col-md-12 col-sm-12 text-right p-0">
                 <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
                     <div class="carousel-inner">
                       <div class="carousel-item active">
                         <img src="/img/banners/4-combustible/3-slide/3-reportes.png" loading="lazy" class="d-block w-100" alt="...">
                       </div>
                       <div class="carousel-item">
                         <img src="/img/banners/4-combustible/3-slide/3-reportesslide.png" loading="lazy" class="d-block w-100" alt="...">
                       </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section> --}}
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
