@extends('welcome',['title'=>'Confirmar solicitud de crédito'])
@section('content')
    <section class="p-0 m-0">
        <div class="container">
        <nav class="d-flex justify-content-center" aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
            <li class="breadcrumb-item"><a href="{{ route('inicio') }}"><i class="bi bi-house me-1"></i> Inicio</a></li>
            <li class="breadcrumb-item"><a href="{{ route('simulador.credito') }}">Simulador</a></li>
            <li class="breadcrumb-item active">Confirmar crédito</li>
            </ol>
        </nav>
        </div>
    </section>

    <section>
        <div class="container">
            <form action="{{ route('simulador.enviarSolicitudCredito') }}" method="POST" id="formSolicitarCredito" autocomplete="off">
                @csrf
                
                <input type="hidden" name="monto" id="monto" value="{{ $detalle->monto }}">
                <input type="hidden" name="tipo" value="{{ $detalle->tipo }}">
                <input type="hidden" name="plazo" id="plazo" value="{{ $detalle->plazo }}">
                <div class="row">
                    <div class="col-sm-6">
                        @include('sections.validation')
                        
                        <div class="card">
                            <div class="card-header">
                                Ingresa los siguientes datos:
                            </div>
                            <div class="card-body">
                                <div class="mb-3">
                                    <label for="apellidosNombres" class=""><strong>APELLIDOS Y NOMBRES</strong></label>
                                    <input type="text" name="apellidosNombres" class="form-control form-control-lg amount" id="apellidosNombres" placeholder="Ejm, DAVID CRIOLLO" value="{{ old('apellidosNombres') }}" autofocus required>
                                </div>
                                
        
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="cedula" class=""><strong>CEDULA</strong></label>
                                            <input type="number" name="cedula" class="form-control form-control-lg amount" id="cedula" placeholder="Ejm, 050xxxxx5625" value="{{ old('cedula') }}"  required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="celular" class=""><strong>NÚMERO DE CELULAR</strong></label>
                                            <input type="number" name="celular" class="form-control form-control-lg amount" id="celular" placeholder="Ejm, 0998808775" value="{{ old('celular') }}" required>
                                        </div>
                                    </div>
                                </div>
        
                                <div class="mb-3">
                                    <label for="correoElectronico" class=""><strong>CORREO ELECTRÓNICO</strong></label>
                                    <input type="email" name="correoElectronico" class="form-control form-control-lg amount" id="correoElectronico" placeholder="Ejm, info@credimundo.com.ec" value="{{ old('correoElectronico') }}"  required>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <button type="submit" class="btn btn-primary">Solicitar</button>
                            </div>
                        </div>

                        
                        
                    </div>
                    <div class="col-sm-6">
                        <div class="card">
                            <div class="card-header">
                                Detalle de tu crédito:
                            </div>
                            <div class="card-body">
                                <p><strong>Pago Mensual:</strong><br> <span id="PagoMensual"></span></p>
                                <p><strong>Número de Pagos:</strong><br> <span id="NumeroPagos"></span></p>
                                <p><strong>Pagos Totales:</strong><br> <span id="PagosTotales"></span></p>
                                <p><strong>Interés Total:</strong><br> <span id="InteresTotal"></span></p>
                               <div class="calculator-amortization">
                                <div class="form" style="display: none"></div>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>

@push('scriptsHeader')
    <script src="{{ asset('assets/js/jquery.accrue.js') }}"></script>
    <script src="{{ asset('assets/js/validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/validate/messages_es.min.js') }}"></script>
    <script src="{{ asset('assets/js/validate/extrax_validates.js') }}"></script>
    {{-- confirm --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/confirmjs/jquery-confirm.min.css') }}">
    <script src="{{ asset('assets/vendor/confirmjs/jquery-confirm.min.js') }}"></script>
@endpush

@push('scriptsFooter')
    <script>

            

        $(".calculator-amortization").accrue({
            mode: "amortization",
            default_values: {
                amount: "{{ $detalle->monto }}",
                rate: "{{ $detalle->tipo }}",
                term: "{{ $detalle->plazo }}",
            },
            callback: function ( elem, data ){
                $('#PagoMensual').html(data.payment_amount_formatted);
                $('#NumeroPagos').html(data.num_payments);
                $('#PagosTotales').html(data.total_payments_formatted);
                $('#InteresTotal').html(data.total_interest_formatted);

                
            }
        });
        
        $( "#formSolicitarCredito" ).validate( {
            
            rules: {
                cedula:{
                    cedula:true,
                    digits: true,
                    
                },
                celular:{
                    digits: true,
                    minlength:9,
                    maxlength:15
                },
                correoElectronico:{
                    email:true
                },

            },
            errorElement:'strong',
            errorPlacement: function ( error, element ) {
				error.addClass( "text-danger" );
                error.insertAfter( element );
			},
            submitHandler: function(form) {
                $.confirm({
                    title: 'Confirmar!',
                    content: '¿Estás seguro/a de solicitar un crédito de '+$('#monto').val()+' dólares ?',
                    theme: 'modern',
                    icon: 'fa-solid fa-check',
                    type: 'blue',
                    buttons: {
                        si: {
                            btnClass: 'btn-blue',
                            isHidden: false,
                            isDisabled: false,
                            keys: ['enter'],
                            action: function(heyThereButton){
                                $.dialog({
                                    title: '',
                                    icon: 'fa fa-spinner fa-spin',
                                    closeIcon: false,
                                    type: 'blue',
                                    theme: 'modern',
                                    content: 'Estamos procesando su solicitud. Por favor, tenga paciencia mientras completamos el proceso.',
                                });
                                form.submit();
                            }
                        },
                        no:{

                        }
                    }
                });
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