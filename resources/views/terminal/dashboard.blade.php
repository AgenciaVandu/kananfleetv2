@extends('layouts.kanan-login')
@section('contenido')
    @push('css')
        <style>
            .bg-kanan {
                background-color: #004c98;
            }

            #checkout-f {
                padding-top: 50px
            }

            .bill {
                padding-top: 3em;
            }

            .card {
                padding: 1em;
                border-radius: .8em;
                box-shadow: 0px 2px 5px 1px rgba(154, 154, 154, 0.2);
                border: none;
            }

            .btn-outline-dark:hover {
                color: #fff;
            }
        </style>
    @endpush
    <!-- Button trigger modal -->
    {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
  </button> --}}
    <!-- Modal -->
    <div class="modal fade" id="cambiar-password" tabindex="-1" aria-labelledby="cambiar-password" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="cambiar-password-label">Actualizar contraseña</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="source-regular text-muted">
                        Asegúrese que su cuenta esté usando una contraseña larga y aleatoria para mantenerse seguro.
                    </p>
                    <form method="POST" action="{{ route('user.update.password') }}" class="text-left">
                        @csrf
                        <div class="form-group">
                            <label for="cambiar-pswd">Contraseña actual</label>
                            <input type="password" class="form-control" id="cambiar-pswd" name="current_password">
                            <small class="text-muted">Contraseña asignada por Kananfleet</small>
                        </div>
                        <div class="form-group">
                            <label for="pswd-nuevo">Contraseña nueva</label>
                            <input type="password" class="form-control" id="pswd-nuevo" name="password">
                            <small class="text-muted">Sugerencia: Utilice caracteres especiales</small>
                        </div>
                        <div class="form-group">
                            <label for="confirmar-pswd">Confirmar contraseña</label>
                            <input type="password" class="form-control" id="confirmar-pswd" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary mb-4">Cambiar contraseña</button>
                    </form>
                </div>

                {{-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div> --}}
            </div>
        </div>
    </div>
    <header class="bill">
        <div class=" pt-5 pb-3 text-center">
            <h2 class="source-bold">Terminal de pago Virtual <br>
                <small>Panel de usuario</small>
            </h2>
        </div>
        <div class="container pb-3">
            <div class="row">
                <div class="col-12 datos">
                    <li class="source-semibold">
                        Empresa: <span class="source-regular">{{ auth()->user()->company_name }}</span>
                    </li>
                    <li class="source-semibold">
                        Razón social: <span class="source-regular">{{ auth()->user()->bussiness_name }}</span>
                    </li>
                    <li class="source-semibold">
                        TAX ID (RFC, RUC, RTN, NIT, etc.): <span class="source-regular">{{ auth()->user()->RFC }}</span>
                    </li>
                    <li class="source-regular" style="color: green">
                        <img src="{{ asset('/img/circle-info-solid.svg') }}" width="15"> seleccione su orden de compra
                    </li>
                    <button type="button" class="btn btn-light btn-sm mt-2" data-toggle="modal"
                        data-target="#cambiar-password">Cambiar contraseña</button>

                </div>
                {{-- <div class="col-6 text-right m-auto">
                   <figure>
                        <img src="{{asset('/img/logoetecno-3.png')}}" class="img-fluid" alt="">
                   </figure>
                </div> --}}
            </div>
        </div>
    </header>
    <section id="ordenes">
        <div class="container">
            @foreach (auth()->user()->orders as $order)
                <div class="card mb-3"> {{-- titulo de orden de compra --}}
                    <div class="row pt-3 pb-4">
                        <div class="col-lg-8 m-auto">
                            <h5 class="source-semibold text-center">
                                OC: <span style="color: gray">{{ $order->contract }}</span>
                            </h5>
                        </div>
                        <div class="col-lg-4 text-center source-bold">
                            <a href="{{ route('terminal.order', $order) }}" class="btn btn-primary source-bold">Ver
                                detalle</a>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- <div class="card mb-3"> {{-- titulo de orden de compra --}}
            {{-- <div class="row pt-3 pb-4">
                    <div class="col-lg-8 m-auto">
                        <h5 class="source-semibold text-center">
                            OC: <span style="color: gray">OC-ADDONKF-ALIANZAMEX-TRANSPORTES YOYO-21012022</span>
                        </h5>
                    </div>
                    <div class="col-lg-4 text-center source-bold">
                        <a href="/bill" class="btn btn-primary source-bold">Ver detalle</a>
                    </div>
                </div> --}}
        </div>
        </div>
        <div class="col m-auto text-center">
            @hasanyrole('superadmin|admin|editor')
                <div class="mb-2">
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Panel Admin</a>
                </div>
            @endhasanyrole
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a href="" class="btn btn-secondary" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                                                            this.closest('form').submit();">Cerrar
                    sesión</a>
            </form>

        </div>
    </section>
@endsection
