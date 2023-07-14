@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-estadisticas">
     <div class="container">
         <div class="cabecera-titular-3">
          <div class="row">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h1 class="source-bold" style="color: #fff">
                     Datos Estadísticos
                  </h1>
                  <p class="source-regular">
                    Conozca el comportamiento de su flota en un solo panel de control.
                  </p>
                  <a href="/contacto" class="btn btn-outline-light source-black">
                      SOLICITAR DEMO
                  </a>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 imagen m-auto">
                  <img src="/img/banners/8-estadisticas/1-banner.png" class="img-fluid" alt="">
              </div>
          </div>
         </div>
      </div>
    </div>
 </header>
 <section id="kanan-mobile">
     <div class="container-fluid">
         <div class="row pt-5">
             <div class="col-lg-7 col-md-12 col-sm-12 orden text-center">
                 <img src="/img/banners/8-estadisticas/2-visualicesu.png" class="img-fluid" alt="">
             </div>
             <div class="col-lg-5 col-md-12 col-sm-12 right m-auto">
                 <h4 class="source-bold pb">Visualice su información EN TIEMPO REAL.</h4>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">Indicadores de desempeño sobre el comportamiento <br> de su flotilla, vehícul os en uso, en
                            mantenimiento, <br> no disponibles, etc.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                            Indicadores de desempeño del ejercicio presupuestal <br> de su flotilla.</p>
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                            Indicadores de desempeño de la disponibilidad y eficiencia <br> de su flotilla.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">Indicadores de desempeño de los viajes realizados <br> por su flotilla.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                         <p class="source-semibold">
                            Indicadores causa-raíz del mantenimiento de su flotilla, <br> entre muchos otros.</p>
                     </div>
                 </li>
                 <li class="source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                        <p class="source-semibold">
                            Reportes programables por día, semana, mes.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                        <p class="source-semibold">
                            Reportes de servicios, combustible y llantas.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                        <p class="source-semibold">
                            Reportes de mantenibles y operadores.</p>
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
     <div class="container pt-5">
         <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
             <div class="carousel-inner">
               <div class="carousel-item active">
                 <div class="row">
                     <div class="col-lg-6 col-md-12 col-sm-12 d-flex m-auto justify-content-center">
                         <h1 class="source-black">Estadísticas <br> Por día</h1>
                     </div>
                     <div class="col-lg-6 col-md-12 col-sm-12">
                         <img src="/img/banners/8-estadisticas/3-Slide/1-pordia.png" loading="lazy" class="d-block w-100" alt="...">
                     </div>
                 </div>
               </div>
               <div class="carousel-item">
                 <div class="row">
                     <div class="col-lg-6 col-md-12 col-sm-12 d-flex m-auto justify-content-center">
                         <h1 class="source-black">Estadísticas <br> Por mes</h1>
                     </div>
                     <div class="col-lg-6 col-md-12 col-sm-12">
                         <img src="/img/banners/8-estadisticas/3-Slide/2-pormes.png" loading="lazy" class="d-block w-100" alt="...">
                     </div>
                 </div>
               </div>
               <div class="carousel-item">
                 <div class="row">
                     <div class="col-lg-6 col-md-12 col-sm-12 d-flex m-auto justify-content-center">
                         <h5 class="source-black">Indicadores y estadísticas por vehículo/activo, por
                            flotilla, por empresa, por sucursal, por período de tiempo. Todo exportable a Excel, PDF, otros formatos.</h5>
                     </div>
                     <div class="col-lg-6 col-md-12 col-sm-12">
                         <img src="/img/banners/8-estadisticas/3-Slide/3-poranio.png" loading="lazy" class="d-block w-100" alt="...">
                     </div>
                 </div>
               </div>
             </div>
         </div>
     </div>
 </section>
 <section id="CTA" class="m-5">
     <div class="container text-center">
         <div class="pad-1">
            <h3 class="source-bold mt-4 mb-3">Kananfleet® cuenta con una versión certificada para SAP e integrada al ERP SAP Business One</h3>
             <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a> <br>
             <small class="source-light">Pónganse en contacto con nosotros</small>
         </div>
     </div>
 </section>
@endsection
