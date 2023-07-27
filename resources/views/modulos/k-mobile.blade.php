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
            <p class="source-regular text-center" style="color: #000">Brinde a sus choferes, operadores y supervisores las herramientas para ha cer mejor su trabajo. Kananfleet Mobile es una aplicación incluida con el sistema Kananfleet, la cual puede trabajar on-line, off-line, y le permitirá:</p>
          </div>
         </div>
         <div class="row pt-5">
            <div class="col-lg-6 col-md-12 col-sm-12 text-center">
                <img src="{{ asset('/img/2023/mockups/k-mobile/1.png') }}" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 m-auto">
                <h4 class="source-bold pb-3">Gestión simple en la palma de su mano</h4>
                <li class=" source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Registrar recargas de combustible o despacho de<br> combustible (autoconsumo).</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Reportar incidencias sobre el vehículo/activo, e incidencias <br> sobre llantas/neumáticos.</p>
                    </div>
                </li>
                <li class=" source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold" style="padding-top: 1px">
                            Solicitar órdenes de mantenimiento.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Ver los viajes asignados y actualizar el estatus <br> de cada uno de ellos (iniciar, pausar,
                            finalizar, solicitar timbrado <br> de la carta porte).</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold">Registrar evidencia fotográfica y posición  georreferenciada <br> de cargas  de combustible, incidencias, siniestros,<br> paradas, viajes finalizados  y otros eventos.</p>
                    </div>
                </li>
                <li class="source-semibold">
                    <div class="row m-auto">
                        <div class="check pr-2">
                            <img src="{{ asset('/img/icons/check.svg') }}" width="25" alt="">
                        </div>
                        <p class="source-semibold" style="padding-top: 1px">Consultar el estatus de una orden de mantenimiento.</p>
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
                        <p class="source-semibold" style="padding-top: 1px">Obtener reportes de productividad, entre otras funcionalidades.</p>
                    </div>
                </li>
                    <a href="https://play.google.com/store/apps/details?id=etecno.agg.kananfleet.mob&hl=es" class="btn btn-google source-bold" title="Google Play">
                        Google Play
                    </a>
                    <small class="source-light mt-3">Descárguela aquí</small>
                </li>
            </div>
        </div>
      </div>
    </div>
 </header>
{{--  <section>
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
            </div>
            <!--Logotipo de clientes-->
        </div>
    </div>
</section> --}}
 
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
