@extends('welcome',['title'=>'Ahorros'])
@section('content')
<section class="pt-4">
	<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark-overlay-1 overflow-hidden card-bg-scale h-200 text-left" style="background-image:url({{ asset('assets/images/ahorros/1.jpeg') }}); background-position: center left; background-size: cover;">
                    <div class="card-img-overlay d-flex align-items-start p-3 p-sm-4"> 
                        <div class="w-100 my-auto">
                            <h1 class="text-white display-4">AHORROS</h1>
                            <p class="text-muted">
                                Guarda tu dinero de manera segura y utilízalo cuando lo necesites.
                            </p>
                        </div>
                    </div>
                </div>
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
                                <img class="rounded-3" src="{{ asset('assets/images/ahorros/2.jpeg') }}" alt="Card image">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="accordion accordion-borderless" id="ahorroAlaVista">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hav1">
                                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cav1" aria-expanded="true" aria-controls="cav1">
                                      <i class="fa-solid fa-plus mx-2"></i>
                                      <strong>AHORRO A LA VISTA</strong>
                                    </button>
                                  </h2>
                                  <div id="cav1" class="accordion-collapse collapse show" aria-labelledby="hav1"
                                    data-mdb-parent="#ahorroAlaVista">
                                    <div class="accordion-body">
                                        Libreta de ahorros donde Usted tiene el control total de su dinero, de disponibilidad inmediata que genera una rentabilidad o interés mensual durante un período de tiempo según el monto ahorrado.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hav2">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cav2" aria-expanded="false" aria-controls="cav2">
                                      <i class="fa-solid fa-plus mx-2"></i>BENEFICIOS
                                    </button>
                                  </h2>
                                  <div id="cav2" class="accordion-collapse collapse" aria-labelledby="hav2"
                                    data-mdb-parent="#ahorroAlaVista">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Disponibilidad en todo momento.</li>
                                            <li>Efectivización de cheques en 24 horas.</li>
                                            <li>Transferencias desde y hacia cuentas del sistema financiero CREDIMUNDO.</li>
                                            <li>Servicios complementarios.</li>
                                            <li>Alta rentabilidad con un interés del 2%.</li>

                                        </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hav3">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cav3" aria-expanded="false" aria-controls="cav3">
                                      <i class="fa-solid fa-plus mx-2"></i>REQUISITOS
                                    </button>
                                  </h2>
                                  <div id="cav3" class="accordion-collapse collapse" aria-labelledby="hav3"
                                    data-mdb-parent="#ahorroAlaVista">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Documento original cédula de identidad.</li>
                                            <li>Ciudadanos extranjeros, cédula de ciudadanía ecuatoriana o poder autorizado.</li>
                                            <li>Certificado de Votación.</li>
                                            <li>Planilla de un servicio básico, luz, agua, teléfono (validez de 90 días).</li>
                                            <li>Monto mínimo de apertura USD $20,00.</li>
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
                                <img class="rounded-3" src="{{ asset('assets/images/ahorros/3.jpeg') }}" alt="Card image">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="accordion accordion-borderless" id="cuentaInfantil">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hci1">
                                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cci1" aria-expanded="true" aria-controls="cci1">
                                      <i class="fa-solid fa-plus mx-2"></i>
                                      <strong>CUENTA INFANTIL</strong>
                                    </button>
                                  </h2>
                                  <div id="cci1" class="accordion-collapse collapse show" aria-labelledby="hci1"
                                    data-mdb-parent="#cuentaInfantil">
                                    <div class="accordion-body">
                                        Es dirigido tanto a niños, jóvenes que inician sus ahorros acordes a sus posibilidades.
                                        Incúlcales a tus hijos el hábito de ahorrar y prepárales para el futuro.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hci2">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cci2" aria-expanded="false" aria-controls="cci2">
                                      <i class="fa-solid fa-plus mx-2"></i>BENEFICIOS
                                    </button>
                                  </h2>
                                  <div id="cci2" class="accordion-collapse collapse" aria-labelledby="hci2"
                                    data-mdb-parent="#cuentaInfantil">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Fomentar una cultura de ahorro en la juventud, forjando futuros emprendedores que logren cumplir sus objetivos a través de una apropiada educación financiera.</li>
                                            <li>Con el transcurso del tiempo y disciplina, permitirá en el futuro tener un respaldo financiero.</li>
                                            <li>Seguridad de cumplir las metas soñadas.</li>
                                            <li>Premios por la apertura de tu cuenta junior.</li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hci3">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cci3" aria-expanded="false" aria-controls="cci3">
                                      <i class="fa-solid fa-plus mx-2"></i>REQUISITOS
                                    </button>
                                  </h2>
                                  <div id="cci3" class="accordion-collapse collapse" aria-labelledby="hci3"
                                    data-mdb-parent="#cuentaInfantil">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Copia a color de la Cédula del Tutor o Apoderado.</li>
                                            <li>Certificado de Votación del Tutor o Apoderado.</li>
                                            <li>Copia de cédula del titular (niño (a) o joven) o partida de nacimiento original.</li>
                                            <li>Ciudadanos extranjeros, cédula de residencia.</li>
                                            <li>Certificado de Votación del Tutor o Apoderado Extranjero</li>
                                            <li>Planilla de un servicio básico, luz, agua, teléfono (validez de 90 días).</li>
                                            <li>Monto mínimo de apertura USD $3,00</li>
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
                                <img class="rounded-3" src="{{ asset('assets/images/ahorros/4.jpeg') }}" alt="Card image">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="accordion accordion-borderless" id="ahorroProgramado">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hap1">
                                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cap1" aria-expanded="true" aria-controls="cap1">
                                      <i class="fa-solid fa-plus mx-2"></i>
                                      <strong>AHORRO PROGRAMADO</strong>
                                    </button>
                                  </h2>
                                  <div id="cap1" class="accordion-collapse collapse show" aria-labelledby="hap1"
                                    data-mdb-parent="#ahorroProgramado">
                                    <div class="accordion-body">
                                        Es momento de planificar tu futuro a través de nuestro ahorro programado, empieza alcanzar tus objetivos e incrementar tus posibilidades de tener el futuro que tanto anhelas.
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hap2">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cap2" aria-expanded="false" aria-controls="cap2">
                                      <i class="fa-solid fa-plus mx-2"></i>BENEFICIOS
                                    </button>
                                  </h2>
                                  <div id="cap2" class="accordion-collapse collapse" aria-labelledby="hap2"
                                    data-mdb-parent="#ahorroProgramado">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Tasa de interés preferencial.</li>
                                            <li>Su ahorro mi futuro podrán ser utilizado como garantía de su crédito.</li>
                                            <li>Seguridad de cumplir las metas soñadas.</li>
                                        </ul>
                                    </div>
                                  </div>
                                </div>
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hap3">
                                    <button class="accordion-button collapsed" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cap3" aria-expanded="false" aria-controls="cap3">
                                      <i class="fa-solid fa-plus mx-2"></i>REQUISITOS
                                    </button>
                                  </h2>
                                  <div id="cap3" class="accordion-collapse collapse" aria-labelledby="hap3"
                                    data-mdb-parent="#ahorroProgramado">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>Mantener cuenta de ahorros vista.</li>
                                            <li>Solicitud de transferencia de Ahorros Vista</li>
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