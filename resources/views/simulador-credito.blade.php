@extends('welcome',['title'=>'Simulador de crédito'])
@section('content')

    <section class="p-0 m-0">
        <div class="container">
        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
            <li class="breadcrumb-item"><a href="{{ route('inicio') }}"><i class="bi bi-house me-1"></i> Inicio</a></li>
            <li class="breadcrumb-item active">Simulador</li>
            </ol>
        </nav>
        </div>
    </section>

    <section class="pt-2">
        <div class="container">
            <p>OBTÉN TU CRÉDITO EN TAN SOLO <strong>24 HORAS</strong> AL REALIZAR TU SOLICITUD.</p>

           

            <form action="{{ route('simulador.confirmarSolicitudCredito') }}" method="get" id="formSolicitarCredito">

                <div class="calculator-amortization row">
                    <div class="col-sm-6">
                        <div class="form">

                            <div class="mb-3">
                                <label for="monto" class=""><strong>¿Qué monto necesitas?</strong></label>
                                <input type="text" name="monto" class="form-control form-control-lg amount" id="monto" placeholder="Ingrese el monto" value="200" autofocus>
                            </div>

                            <div class="mb-3">
                                <label for="tipo" class=""><strong>Selecciona el destino de tu crédito:</strong></label>
                                <select name="tipo" class="form-select form-select-lg rate" id="tipo">
                                    <option value="15.62">CONSUMO</option>
                                    <option value="20">MICROCREDITO</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="plazo" class=""><strong>¿A qué plazo deseas solicitar el crédito?</strong></label>
                                <select name="plazo" class="form-select form-select-lg term" id="plazo">
                                    <option value="6m">6 meses</option>
                                    <option value="1y">1 año</option>
                                    <option value="2y">2 años</option>
                                    <option value="3y">3 años</option>
                                    <option value="4y">4 años</option>
                                    <option value="5y">5 años</option>
                                </select>
                            </div>
                            
                        </div>

                        <div class="card">
                            <div class="card-header">
                                Detalle de tu crédito:
                            </div>
                            <div class="card-body">
                                <p><strong>Pago Mensual:</strong><br> <span id="PagoMensual"></span></p>
                                <p><strong>Número de Pagos:</strong><br> <span id="NumeroPagos"></span></p>
                                <p><strong>Pagos Totales:</strong><br> <span id="PagosTotales"></span></p>
                                <p><strong>Interés Total:</strong><br> <span id="InteresTotal"></span></p>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-block">SOLICITAR ESTE CRÉDITO</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="seventy">
                            <div class="results table-responsive"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                    
                </div>
            </form>
        </div>
    </section>

    @include('sections.alert-success')
    

@push('scriptsHeader')
<script src="{{ asset('assets/js/jquery.accrue.js') }}"></script>
<script src="{{ asset('assets/js/validate/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/js/validate/messages_es.min.js') }}"></script>
@endpush

@push('scriptsFooter')
<script>
    $(".calculator-amortization").accrue({
		mode: "amortization",
        callback: function ( elem, data ){
            
            $('#PagoMensual').html(data.payment_amount_formatted);
            $('#NumeroPagos').html(data.num_payments);
            $('#PagosTotales').html(data.total_payments_formatted);
            $('#InteresTotal').html(data.total_interest_formatted);

            
        }
	});

    
    $( "#formSolicitarCredito" ).validate( {
        rules: {
            monto: {
                required: true,
                digits: true,
                min:10,
                max:10000
            },
            tipo:"required",
            plazo:"required"

        },
        messages:{
            monto:{
                min:'Por favor, escribe un monto mayor o igual a {0}.',
                max:'Por favor, escribe un monto menor o igual a {0}.'
            }
        },
        submitHandler: function(form) {
            form.submit();
        },
        highlight: function ( element, errorClass, validClass ) {
            $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
        },
        unhighlight: function (element, errorClass, validClass) {
            $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
        }
    } );

</script>
@endpush
@endsection