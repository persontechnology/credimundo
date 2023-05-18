@extends('welcome',['title'=>'Inversiones'])
@section('content')
<section class="pt-4">
	<div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card bg-dark-overlay-2 overflow-hidden card-bg-scale h-200 text-left" style="background-image:url({{ asset('assets/images/inversiones/1.jpeg') }}); background-position: center left; background-size: cover;">
                    <div class="card-img-overlay d-flex align-items-start p-3 p-sm-4"> 
                        <div class="w-100 my-auto">
                            <h3 class="text-white">Tus ahorros ganan intereses.</h3>
                            <p class="text-muted">
                              Haga que su dinero trabaje diez veces más por usted únete a nosotros ganaras más  rentabilidad.
                            </p>
                            <a href="" class="btn btn-white">Contratar mi póliza</a>
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
            
            <div class="col-6 col-sm-4">
              <div class="bg-primary rounded text-center text-white-force p-3 d-block">
                <i class="fa-solid fa-check m-2 fa-2x"></i>
                <p class="small">Gana hasta el 8.15% de interés por contratarla en línea.</p>
              </div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="bg-info rounded text-center text-white-force p-3 d-block">
                <i class="fa-solid fa-check m-2 fa-2x"></i>
                <p class="small">Suma intereses desde el día de la contratación.</p>
              </div>
            </div>
            <div class="col-6 col-sm-4">
              <div class="bg-primary rounded text-center text-white-force p-3 d-block">
                <i class="fa-solid fa-check m-2 fa-2x"></i>
                <p class="small">Recibe tus intereses en tu cuenta y en la frecuencia que elijas</p>
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
                                <img class="rounded-3" src="{{ asset('assets/images/inversiones/2.jpeg') }}" alt="Card image">
                            </div>
                        </div>
                        <div class="col-md-7">

                            <div class="accordion accordion-borderless" id="cuentaInfantil">
                                <div class="accordion-item">
                                  <h2 class="accordion-header" id="hci1">
                                    <button class="accordion-button" type="button" data-mdb-toggle="collapse"
                                      data-mdb-target="#cci1" aria-expanded="true" aria-controls="cci1">
                                      <i class="fa-solid fa-plus mx-2"></i>
                                      <strong>CUÁLES SON LAS CONDICIONES?</strong>
                                    </button>
                                  </h2>
                                  <div id="cci1" class="accordion-collapse collapse show" aria-labelledby="hci1"
                                    data-mdb-parent="#cuentaInfantil">
                                    <div class="accordion-body">
                                        <ul>
                                          <li>Tener cuenta en CREDIMUNDO.</li>
                                          <li>Valor mínimo de inversión: $ 500</li>
                                          <li>Tiempo mínimo a invertir: 6 MESES</li>
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