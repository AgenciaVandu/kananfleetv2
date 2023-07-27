@extends('layouts.kanan')
@section('contenido')
@push('css')
    <style>
        .bg-kanan {
            background-color: #004c98 ;
        }
    </style>
@endpush
<section id="soluciones" class="pt-5">
    <div class="container">
        <div class="text-center">
            <h4 class="source-bold pt-5 pb-3">
                Sin importar a que se dedique su empresa, Kananfleet® le ayudará a <br class="d-none d-sm-none d-md-none d-lg-block"> controlar aspectos clave de su operación
            </h4>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                <a>
                 <img src="/img/2023/iconos/transporte/transporte.svg" width="50">
                 <h5 class="source-bold pt-3">Transportistas</h5>
                  <p class="source-regular">
                    Empresas con vehículos propios de diferentes tamaños para transportar mercancía de terceros.
                  </p>
                  <div class="row">
                    <div class="col-12">
                        <img src="{{asset('img/2023/iconos/iconos-transporte.svg')}}" class="img-fluid" alt="">
                    </div>
                  </div>
                </a>
             </div>
            <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                <a>
                    <img src="/img/2023/iconos/comercio/comercio.svg" width="50">
                <h5  class="source-bold pt-3">Comercializadoras</h5>
                <p class="source-regular">
                    Empresas que venden cualquier tipo de producto (Abarrotes, alimentos, lácteos, ropa, zapatos, ferretería, combustible, etc), y que, como parte del valor agregado a la venta de su producto, proveen el transporte hacia la bodega final del cliente.
                </p>
                <div class="row">
                    <div class="col-12">
                        <img src="{{asset('img/2023/iconos/iconos-comercio.svg')}}" class="img-fluid" alt="">
                    </div>
                  </div>
                </a>
            </div>
          {{--   <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                <a>
                    <img src="/img/icons/tire.svg" width="50">
                <h5  class="source-bold pt-3">Constructoras</h5>
                <p class="source-regular">
                    Empresas con activos que pueden utilizar para sus propios proyectos para dar en renta a otras empresas de construcción.
                </p>
              
                </a>
            </div> --}}
            <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                <a>
                    <img src="/img/2023/iconos/industria/industria.svg"  width="50">
                <h5  class="source-bold pt-3">Rentadoras de Autos/Maquinaria</h5>
                <p class="source-regular">
                    Empresas con vehículos propios de diferentes tamaños para dar en renta por un periodo de tiempo.
                </p>
                <div class="row ">
                    <div class="col-12">
                        <img src="{{asset('img/2023/iconos/iconos-industria.svg')}}" class="img-fluid" alt="">
                    </div>
                  </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                <a>
                    <img src="/img/2023/iconos/agro/agro.svg" width="50">
                <h5  class="source-bold pt-3">Agropecuario</h5>
                <p class="source-regular">
                    Empresas con diversos activos que utilizan para la producción, venta y/o distribución de productos agrícolas o ganaderos.
                </p>
                <div class="row pt-4">
                    <div class="col-12">
                        <img src="{{asset('img/2023/iconos/iconos-agro.svg')}}" class="img-fluid" alt="">
                    </div>
                  </div>
                </a>
            </div>

            <div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
               <a>
                <img src="/img/2023/iconos/servicios/servicios.svg" width="50">
                <h5 class="source-bold pt-3">Logística</h5>
                 <p class="source-regular">
                    Empresas con unidades propias y de terceros (rentadas), que proveen servicios de almacenaje, maniobras, transporte de mercancías y planeación logística.
                 </p>
                 <div class="row">
                    <div class="col-12">
                        <img src="{{asset('img/2023/iconos/iconos-servicios.svg')}}" class="img-fluid" alt="">
                    </div>
                  </div>
               </a>
            </div>
            <!--<div class="col-lg-4 col-md-12 soluciones col-sm-12 text-center pad">
                <a href="">
                 <img src="/img/icons/chofer.svg" width="50">
                 <h5 class="source-bold pt-3">Administración de choferes</h5>
                  <p class="source-regular">
                    Asigne operadores a sus vehículos y activos, lleve el control de sus infracciones, licencias, permisos, certificaciones, e historial de su comportamiento.
                  </p>
                </a>
             </div>-->

            <div class="col-lg-4 col-md-12 col-sm-12 text-center  m-auto">
                <h2 class="source-bold">¿Quieres saber cómo funciona?</h4>
                <a class="btn btn-primary" href="/contacto">SOLICITAR DEMO</a> <br>
                <small class="source-light" style="color: gray;">Explore las soluciones que tenemos para usted.</small>
            </div>
        </div>
    </div>
</section>
<section id="mapa-conceptual " style="padding-top: 6em">
    <div class="container text-center pb-4">
        <img src="/img/2023/complementos/Collage-Soluciones.png" class="img-fluid" alt="">
    </div>
</section>
<section id="video" class="mt-5">
    <div class="bg-azul">
        <div class="container text-center">
            <h3 class="source-bold pb-4 pt-5">¿Por qué elegir Kananfleet® como su administrador de activos?</h4>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/v9Gu9VvFKEg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p class="source-semibold pt-3" style="color: #fff;">
                Comience a optimizar los recursos y gastos de su empresa, reduzca costos,<br class="d-none d-sm-none d-md-none d-lg-block"> aumente la productividad de su organización.
            </p>
            <a href="/contacto" class="btn btn-secondary btn-lg source-black mb-5">
                SOLICITAR DEMO
            </a>
        </div>
    </div>
</section>
@endsection
