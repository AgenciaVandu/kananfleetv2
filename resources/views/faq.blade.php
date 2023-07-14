@extends('layouts.kanan')
@section('contenido')
    @push('css')
        <style>
            .bg-kanan {
                background-color: #004c98;
            }
        </style>
    @endpush
    <section id="faq" class="pb-5">
        <div class="container">
            <h1 class="source-bold pb-4">
                Preguntas frecuentes
            </h1>
            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left source-bold" style="color: #fff;" type="button"
                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                ¿Qué es Kananfleet?
                            </button>
                        </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <h3 class="source-bold">¿Qué es Kananfleet?</h4>
                                <p class="source-regular">
                                    KANANFLEET® es una tecnología que ayuda a la Administración y Gestión de su Flota
                                    Vehicular y Activos, ya sean unidades de transporte terrestre o marítima, maquinaria
                                    pesada, equipo en general .KANANFLEET® cuenta con una versión móvil, para controlar en
                                    ruta aspectos como las recargas de combustible, incidencias sobre el vehículo,
                                    incidencias sobre las llantas, estatus de viaje, gastos de viaje, reportes de órdenes de
                                    servicio, horas de productividad, etc.
                                </p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;"
                                type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                aria-controls="collapseTwo">
                                ¿Qué problemas resuelve Kananfleet?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <h3 class="source-bold">
                                        ¿Qué problemas resuelve Kananfleet?
                                    </h3>
                                    <p class="source-regular">
                                        Ayudamos a administrar y gestionar la flota vehicular o activos en general, mantener
                                        controlados los costos operativos, monitorear los indicadores de desempeño de la
                                        misma y resolver problemas clave como:
                                    </p>
                                    <ul>
                                        <li class="source-regular">Falta de visibilidad de la disponibilidad de mis
                                            vehículos activos.</li>
                                        <li class="source-regular">Falta de conocimiento de que unidades estánfuera de
                                            servicio y porque razón.</li>
                                        <li class="source-regular">Descontrol de los costos de operar cada unidad. </li>
                                        <li class="source-regular">Pérdida de dinero en combustible, llantas y
                                            mantenimientos. </li>
                                        <li class="source-regular">Falta de visibilidad de las unidades que están asignadas
                                            a viajes.</li>
                                        <li class="source-regular">Descontrol de costos cada viaje.</li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;"
                                type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                aria-controls="collapseThree">
                                ¿Qué beneficios obtengo de una correcta administración de mi flota?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                            <h3 class="source-bold">¿Qué beneficios obtengo de una correcta administración de mi flota?</h3>

                            <ul>
                                <li class="source-regular">Ahorro de hasta un 30% del costo de mantenimiento, combustible y
                                    llantas.
                                </li>
                                <li class="source-regular">Reduce más de un 35% en tiempos.
                                </li>
                                <li class="source-regular">Disminuye el número de incidentes administrando correctamente el
                                    mantenimiento de tus activos.

                                </li>
                                <li class="source-regular">Optimiza el ejercicio presupuestal generando reportes
                                    informativos y estadísticos.

                                </li>
                                <li class="source-regular">Entre otros beneficios

                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree1">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;"
                                type="button" data-toggle="collapse" data-target="#collapseThree1" aria-expanded="false"
                                aria-controls="collapseThree1">
                                ¿Por qué es importante?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseThree1" class="collapse" aria-labelledby="headingThree"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <h3 class="source-bold">¿Por qué es importante?</h3>
                            <p class="source-regular">
                                La industria del transporte y la logística es la columna vertebral de cualquier economía y
                                la fuerza impulsora de todos los sectores, ya sea la agricultura, la manufactura o los
                                servicios. Como toda industria se enfrenta a retos muy importantes. Kananfleet le puede
                                ayudar a enfrentarlos de mejor manera:
                            </p>
                            <div class="text-center">
                                <img src="/img/banners/importante.svg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;"
                                type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                aria-controls="collapseFour">
                                ¿Para que empresas es util?
                            </button>
                        </h2>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <!--<p class="source-regular">
                                    Ayudamos a administrar y gestionar la flota vehicular o activos en general, mantener controlados los costos operativos y monitorear los indicadores de desempeño de la misma.
                                  </p>-->
                            <p class="source-regular">Empresas de cualquier giro que cuenten con vehículos o activos para
                                su proceso comercial o productivo, y que deben mantenerse en perfecto
                                estado de uso para no afectar la operación y rentabilidad del negocio.</p>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingfive">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;"
                                type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false"
                                aria-controls="collapsefive">
                                ¿Cuáles son los vehículos ideales?
                            </button>
                        </h2>
                    </div>
                    <div id="collapsefive" class="collapse" aria-labelledby="headingfive"
                        data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="source-regular">
                                Cualquiera que sea su giro y tipo de activo, requiere de una adecuada administración para no
                                perder el control del costo asociado y mantener su rentabilidad. *Imagen actualizada con
                                activos*
                            </p>
                            <div class="text-center">
                                <img src="/img/Imagen-5-activos.jpg" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingsix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;"
                                type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false"
                                aria-controls="collapsesix">
                                ¿Cómo se cotiza Kananfleet®? (licenciamiento)
                            </button>
                        </h2>
                    </div>
                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                        <div class="card-body">
                            <ul>
                                <li class="source-regular"> Se cotiza por número de activos / mantenibles
                                </li>
                                <li class="source-regular"> El precio unitario disminuye por volumen.
                                </li>
                                <li class="source-regular"> Licenciamiento Vitalicio o Base Renta Mensual
                                </li>
                                <li class="source-regular">Paquete mínimo de 10 activos.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                  <div class="card-header" id="headingsix1">
                      <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;"
                              type="button" data-toggle="collapse" data-target="#collapsesix1" aria-expanded="false"
                              aria-controls="collapsesix">
                              ¿Cuál es el tiempo de implementación?
                          </button>
                      </h2>
                  </div>
                  <div id="collapsesix1" class="collapse" aria-labelledby="headingsix1" data-parent="#accordionExample">
                      <div class="card-body">
                        <p class="source-regular"> El tiempo de Implementación estándar es de 90
                          días hábiles (aproximadamente). Este servicio se realiza de manera remota. En caso de que el cliente requiera atención en sitio, los gastos de viaje correspondientes deberán ser cubiertos por éste (1 persona: transporte aéreo/terrestre, comida, hospedaje).
                        </p>
                      </div>
                  </div>
              </div>
                {{--  <div class="card">
                    <div class="card-header" id="headingsix">
                        <h2 class="mb-0">
                            <button class="btn btn-link btn-block text-left collapsed source-bold" style="color: #fff;"
                                type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false"
                                aria-controls="collapsesix">
                                ¿Con que sistemas es compatible?
                            </button>
                        </h2>
                    </div>
                    <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                        <div class="card-body">
                            <p class="source-regular">
                                Kananfleet cuenta con una versión certificada e integrada al ERP SAP B1; adicionalmente
                                puede integrarse a softwares de otros fabricantes (ejemplo. Otros ERPs, sistemas de Rastreo
                                Satelital, sistema de Facturación,
                                <br>
                                de otros fabricantes (ejemplo. Otros ERPs, sistemas de Rastreo Satelital, sistema de
                                Facturación, Básculas, etc.), siempre y cuando sus arquitecturas permitan la integración e
                                intercambio de datos (WS). Dado el caso, es necesario dimensionar el alcance de dicha
                                integración, con la finalidad de que todas las partes (SISTEMA DE TERCERO / KANANFLEET® /
                                CLIENTE) estén de acuerdo sobre los datos que se van a interfacear
                            </p>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>
@endsection
