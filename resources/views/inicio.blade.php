@extends('welcome',['title'=>'Inicio'])

@section('content')



<section class="pb-4 pt-3">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card  h-300 overflow-hidden card-bg-scale" style="background-image :url({{ asset('assets/images/inicio/abrir-cuenta.jpeg') }}); background-position: center left; background-size: cover;">
                    <div class="card-img-overlay align-items-sm-start p-3 p-sm-4"> 
                        <div class="col-md-8  p-4">
                            <h1 class="text-dark">¡Bienvenidos socios!</h1>
                            <p class="text-dark fw-bold">
                                Hoy les presentamos nuestra innovadora aplicación web, que les brinda la comodidad de acceder a sus movimientos, productos y servicios exclusivos para ustedes.
                            </p>
                            <a href="https://appweb.credi-mundo.com/" target="_blanck" class="btn btn-white" data-mdb-ripple-color="dark">INGRESAR APLICACIÓN WEB <i class="fa-solid fa-arrow-right mx-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="pt-4">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mb-4 d-md-flex justify-content-between align-items-center">
                    <h2 class="m-0"><i class="fa-solid fa-chalkboard-user mx-3"></i>¿Qué te gustaría hacer?</h2>
                    <p>
                        <strong>Soluciones en línea,</strong> todo lo que necesitas sin salir de casa.
                    </p>
                </div>
                
                <div class="tiny-slider arrow-hover arrow-blur arrow-dark arrow-round">
                    <div class="tiny-slider-inner"
                        data-autoplay="true"
                        data-hoverpause="true"
                        data-gutter="24"
                        data-arrow="true"
                        data-dots="false"
                        data-items-xl="4" 
                        data-items-md="3" 
                        data-items-sm="2" 
                        data-items-xs="1">

                        <div class="card">
                            <div class="position-relative">
                                <img class="card-img" src="{{ asset('assets/images/inicio/cuenta.jpeg') }}" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    <div class="w-100 mb-auto d-flex justify-content-end">
                                        <div class="text-end ms-auto">
                                            <div class="icon-md bg-white bg-opacity-10 bg-blur text-white fw-bold rounded-circle" title="8.5 rating">8.5</div>
                                        </div>
                                    </div>
                                    <div class="w-100 mt-auto">
                                        <a href="#" class="badge text-bg-info mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>CUENTAS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3 mx-1">
                                <h5 class="card-title"><a href="#" class="btn-link text-reset fw-bold">ABRIR UNA CUENTA</a></h5>
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        Ábrela 100% online y disfruta de todos sus beneficios.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="position-relative">
                                <img class="card-img" src="{{ asset('assets/images/inicio/creditos.jpeg') }}" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    <div class="w-100 mt-auto">
                                        <a href="{{ route('creditos') }}" class="badge text-bg-danger mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>CRÉDITOS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3 mx-1">
                                <h5 class="card-title"><a href="{{ route('creditos') }}" class="btn-link text-reset fw-bold">NECESITO UN CRÉDITO</a></h5>
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        Solicita tu préstamo en minutos y úsalo en lo que necesites.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="position-relative">
                                <img class="card-img" src="{{ asset('assets/images/inicio/ahorros.jpeg') }}" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    <div class="w-100 mt-auto">
                                        <a href="{{ route('ahorros') }}" class="badge text-bg-success mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>AHORROS</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3 mx-1">
                                <h5 class="card-title"><a href="{{ route('ahorros') }}" class="btn-link text-reset fw-bold">QUIERO AHORRAR</a></h5>
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">
                                        Guarda tu dinero de manera segura y utilízalo cuando lo necesites.
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="position-relative">
                                <img class="card-img" src="{{ asset('assets/images/inicio/inversiones.jpeg') }}" alt="Card image">
                                <div class="card-img-overlay d-flex align-items-start flex-column p-3">
                                    <div class="w-100 mb-auto d-flex justify-content-end">
                                        <div class="text-end ms-auto">
                                            <div class="icon-md bg-white-soft bg-blur text-white rounded-circle" title="This post has images"><i class="fas fa-image"></i></div>
                                        </div>
                                    </div>
                                    <div class="w-100 mt-auto">
                                        <a href="{{ route('inversiones') }}" class="badge bg-primary mb-2"><i class="fas fa-circle me-2 small fw-bold"></i>INVERSIONES</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body px-0 pt-3 mx-1">
                                <h5 class="card-title"><a href="{{ route('inversiones') }}" class="btn-link text-reset fw-bold">INVERTIR MI DINERO</a></h5>
                                <ul class="nav nav-divider align-items-center d-none d-sm-inline-block">
                                    <li class="nav-item">Gana dinero por guardar tus ahorros a través de un depósito a plazo fijo.</li>
                                </ul>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container"><div class="border-bottom border-primary border-2 opacity-2"></div></div>

<section>
    <div class="container">
    <div class="row g-4 align-items-center justify-content-between pb-lg-5">
      <div class="col-lg-6 mt-0 position-relative">
        <img class="rounded" src="{{ asset('assets/images/inicio/app.jpeg') }}" alt="">
      </div>
      <div class="col-lg-5">
            <h1>APP</h1>
            <p>Ten acceso directo a tu saldo y últimos movimientos.</p>
            <h1 class="display-3">
                CREDIMUNDO, siempre a la mano.
            </h1>
            <p>Descarga la aplicación móvil y maneja tu dinero desde tu celular o tablet.</p>
            <ul class="list-unstyled d-flex gap-1 gap-sm-2 align-items-center mt-4">
            <li class="h5 mb-0">Disponible en:</li>
            <li class="ms-2"><a href="#"> <img class="w-100" src="{{ asset('assets/images/app-store.svg') }}" alt="app-store"> </a></li>
            <li class="ms-2"><a href="#"> <img class="w-100" src="{{ asset('assets/images/google-play.svg') }}" alt="google-play"> </a></li>
            </ul>
      </div>
    </div>
    </div>
</section>

@include('sections.novedades-slider')
<div class="container"><div class="border-bottom border-primary border-2 opacity-3"></div></div>

<section class="p-0 m-4">
    <div class="container">
        <h3 class="mb-3 mt-5">Consultas rápidas</h3>
        <div class="row mt-4 mt-lg-0 g-2">
            <div class="col-lg-4 col-sm-12">
                <a href="{{ route('creditos.solicitudCredito') }}" class="bg-primary rounded text-center text-white-force p-3 d-block">
                  <i class="fa-solid fa-file m-2 fa-2x"></i>
                  <h6 class="m-0 text-bold">Solicitud de crédito</h6>
                  <p class="text-muted">Puedes descargar gratis el Formulario de Solicitud de crédito.</p>
                </a>
            </div>
            
            <div class="col-lg-4 col-sm-12">
                <a href="{{ route('simulador.credito') }}" class="bg-info rounded text-center text-white-force p-3 d-block">
                  <i class="fa-solid fa-dollar-sign m-2 fa-2x"></i>
                  <h6 class="m-0 text-bold">Simulador de créditos</h6>
                  <p class="text-muted">Calcula las cuotas del crédito que buscas, en el plazo que prefieras.</p>
                </a>
            </div>
              
            <div class="col-lg-4 col-sm-12">
              <a href="{{ route('cuenta.abrir') }}"  class="bg-primary rounded text-center text-white-force p-3 d-block">
                <i class="fa-solid fa-certificate m-2 fa-2x"></i>
                <h6 class="m-0 text-bold">Certificados financieros</h6>
                <p class="text-muted">Obtén un documento certificado de tus cuentas y productos contratados.</p>
              </a>
            </div>
            
            
        </div>
    </div>

</section>


@endsection