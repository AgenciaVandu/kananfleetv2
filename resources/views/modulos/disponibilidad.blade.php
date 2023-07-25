@extends('layouts.kanan')
@section('contenido')
@push('css')
<link rel="stylesheet" href="{{asset('/css/modulos.css')}}">
@endpush
<header>
    <div class="bg-disponibilidad">
     <div class="container">
         <div class="cabecera-titular-3">
          <div class="row centro">
              <div class="col-lg-5 col-md-12 col-sm-12 m-auto">
                  <h2 class="source-bold panel-de">
                    PANEL DE DISPONIBILIDAD
                  </h2>
                  <p class="source-regular">
                    Conozca la disponibilidad de sus vehículos, activos y administre fácilmente su flotilla.
                  </p>
                  <a href="/contacto" class="btn btn-outline-light source-black">
                      SOLICITAR DEMO
                  </a>
              </div>
              <div class="col-lg-7 col-md-12 col-sm-12 imagen m-auto" style="padding-top: 3.5em; padding-bottom:1em;">
                  <img src="/img/2023/mockups/disponibilidad/panel-1.png" class="img-fluid" alt="">
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
                 <img src="/img/2023/mockups/disponibilidad/2.png" class="img-fluid" alt="">
             </div>
             <div class="col-lg-5 col-md-12 col-sm-12 right m-auto">
                 {{-- <h4 class="source-bold pb-3">Toda su información a un solo “CLICK”.</h4> --}}
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Clasifique sus vehículos/activos <br> por empresa, sucursal, proyecto, tipo.</p>
                        {{-- <p class="source-semibold">
                            Visualización de órdenes de servicio programadas y en mantenimiento.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                     <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">
                            Identifique el estatus del vehículo en semáforo <br> de colores (disponible, mantenimiento,
                            incidencia, <br> viaje iniciado, viaje pausado, otros).</p>
                        {{-- <p class="source-semibold">
                            Vehículos en estado de incidencia.</p> --}}
                     </div>
                 </li>
                 <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        Consulte el expediente detallado de cada vehículo/activo, <br> incluyendo fotografías e información técnica.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        Gestione cada vehículo/activo: mantenimiento, <br> combustible, llantas, operadores, documentación, etc.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        Asigne y desasigne choferes/operadores;<br> sucursales, empresas, etc.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                       <div class="check pr-2">
                           <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                       </div>
                       <p class="source-semibold">
                        Habilite/deshabilite vehículos/activos <br> del panel de disponibilidad</p>
                    </div>
                </li>
                 <li>
                     <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a>
                 </li>
             </div>
         </div>
     </div>
 </section>
 <section id="CTA" class="m-5">
     <div class="container text-center">
         <div class="pad-1">
            <h3 class="source-bold mt-4 mb-2">Kananfleet® cuenta con una versión certificada para SAP e integrada al ERP SAP Business One</h3>
             <a href="/contacto" class="btn btn-primary">SOLICITAR DEMO</a> <br>
             <small class="source-light">Pónganse en contacto con nosotros</small>
         </div>
     </div>
 </section>
@endsection
