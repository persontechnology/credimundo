@extends('welcome',['title'=>'Créditos'])
@section('content')
<section class="pt-4">
	<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark-overlay-2 overflow-hidden card-bg-scale h-200 text-left" style="background-image:url({{ asset('assets/images/creditos/1.jpeg') }}); background-position: center left; background-size: cover;">
                    <div class="card-img-overlay d-flex align-items-start p-3 p-sm-4"> 
                        <div class="w-100 my-auto">
                            <h3 class="text-white">Pide tu crédito en línea.</h3>
                            <p class="text-muted">
                                Solicita tu préstamo en minutos y úsalo en lo que necesites.
                            </p>
                            <a href="" class="btn btn-white">Pedir préstamo en línea</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>

<section class="p-0 m-4">
    <div class="container">
        <div class="row mt-4 mt-lg-0 g-2">
            <div class="col-6 col-sm-3">
              <div class="bg-primary rounded text-center text-white-force p-3 d-block">
                <i class="fa-solid fa-users m-2 fa-2x"></i>
                <h6 class="m-0">SIN GARANTES</h6>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="bg-info rounded text-center text-white-force p-3 d-block">
                <i class="fa-solid fa-file-excel m-2 fa-2x"></i>
                <h6 class="m-0">SIN PAPELES</h6>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="bg-primary rounded text-center text-white-force p-3 d-block">
                <i class="fa-solid fa-check m-2 fa-2x"></i>
                <h6 class="m-0">ACREDITACIÓN INMEDIATA</h6>
              </div>
            </div>
            <div class="col-6 col-sm-3">
              <div class="bg-info rounded text-center text-white-force p-3 d-block">
                <i class="fa-solid fa-clock m-2 fa-2x"></i>
                <h6 class="m-0">HASTA 60 MESES</h6>
              </div>
            </div>
        </div>
        <div class="row g-2 mt-5">
            <h5>PUEDES SOLICITARLO EN SOLO 3 PASOS</h5>
            <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-15 rounded p-2 position-relative">
                <h6 class="m-0 text-primary">Define el monto y tus cuotas.</h6>
                <div class="badge bg-primary stretched-link">PASO 1</div>
            </div>
            <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 rounded p-2 position-relative">
                <h6 class="m-0 text-primary">Acepta y firma tu contrato.</h6>
                <div class="badge bg-primary stretched-link">PASO 2</div>
            </div>
            <div class="d-flex justify-content-between align-items-center bg-primary bg-opacity-10 rounded p-2 position-relative">
                <h6 class="m-0 text-primary">Despues de firmar tu contrato la acreditación será inmediata.</h6>
                <div class="badge bg-primary stretched-link">PASO 3</div>
            </div>
        </div>
    </div>
</section>

<section class="pt-0 pt-lg-5">
	<div class="container">
        <div class="row">
            <div class="col-lg-12">

                <div class="card border rounded-3 p-3 mb-4">
                    <div class="row g-4">
                        <div class="col-md-5">
                            <div class="position-relative">
                                <img class="rounded-3" src="{{ asset('assets/images/creditos/2.jpeg') }}" alt="Card image">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="accordion accordion-borderless" id="ahorroAlaVista">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hav1">
                                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cav1" aria-expanded="true" aria-controls="cav1">
                                      <i class="fa-solid fa-plus mx-2"></i>
                                      <strong>CRÉDITO DE CONSUMO</strong>
                                    </button>
                                  </h2>
                                  <div id="cav1" class="accordion-collapse collapse show" aria-labelledby="hav1"
                                    data-mdb-parent="#ahorroAlaVista">
                                    <div class="accordion-body">
                                        Tu préstamo personal para lo que necesites, compra de vehículos, viajes, implementos para el hogar, estudios o lo que requieras.
                                        <br> <strong>Plazo desde 12 hasta 120 meses.</strong>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hav2">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cav2" aria-expanded="false" aria-controls="cav2">
                                      <i class="fa-solid fa-plus mx-2"></i>REQUISITOS
                                    </button>
                                  </h2>
                                  <div id="cav2" class="accordion-collapse collapse" aria-labelledby="hav2"
                                    data-mdb-parent="#ahorroAlaVista">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Cuenta Aperturada</li>
                                            <li>Cédula y papeleta de votación del solicitante y garantes si es del caso.</li>
                                            <li>Respaldo de ingresos de los solicitantes.</li>
                                            <li>Respaldo de activos (casa, vehículos u otros bienes a nombre del solicitante).</li>
                                            <li>Servicio básico actualizado</li>

                                        </ul>
                                    </div>
                                  </div>
                                </div>
                                
                              </div>
                        </div>
                    </div>
                </div>

                <div class="card border rounded-3 p-3 mb-4">
                    <div class="row g-4">
                        <div class="col-md-5">
                            <div class="position-relative">
                                <img class="rounded-3" src="{{ asset('assets/images/creditos/3.jpeg') }}" alt="Card image">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="accordion accordion-borderless" id="cuentaInfantil">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hci1">
                                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cci1" aria-expanded="true" aria-controls="cci1">
                                      <i class="fa-solid fa-plus mx-2"></i>
                                      <strong>MICROCRÉDITO</strong>
                                    </button>
                                  </h2>
                                  <div id="cci1" class="accordion-collapse collapse show" aria-labelledby="hci1"
                                    data-mdb-parent="#cuentaInfantil">
                                    <div class="accordion-body">
                                        Préstamo rápido y fácil para incrementar capital de trabajo o compra de activos fijos de tu negocio.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hci2">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cci2" aria-expanded="false" aria-controls="cci2">
                                      <i class="fa-solid fa-plus mx-2"></i>REQUISITOS
                                    </button>
                                  </h2>
                                  <div id="cci2" class="accordion-collapse collapse" aria-labelledby="hci2"
                                    data-mdb-parent="#cuentaInfantil">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Cuenta Aperturada</li>
                                            <li>Cédula y papeleta de votación del solicitante y garantes si es del caso.</li>
                                            <li>Respaldo de ingresos de los solicitantes.</li>
                                            <li>Respaldo de activos (casa, vehículos u otros bienes a nombre del solicitante).</li>
                                            <li>Servicio básico actualizado.</li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                               
                              </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>
	</div>
</section>
@endsection