@extends('welcome')
@section('content')

<section class="p-0 m-0">
    <div class="container">
    <nav class="d-flex justify-content-center" aria-label="breadcrumb">
        <ol class="breadcrumb breadcrumb-dark breadcrumb-dots mb-0">
        <li class="breadcrumb-item"><a href="{{ route('inicio') }}"><i class="bi bi-house me-1"></i> Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('creditos') }}">Créditos</a></li>
        <li class="breadcrumb-item active">Solicitud de crédito</li>
        </ol>
    </nav>
    </div>
</section>


    <section class="py-3">
        <div class="container">
       
            <form action="{{ route('creditos.enviarFormularioCredito') }}" method="POST" id="formSolicitarFormularioCredito" autocomplete="off">
                @csrf
                <div class="card">
                    <div class="card-header">
                        Para solicitar el formulario de crédito, por favor ingresa tu dirección de correo electrónico a continuación. Nos encargaremos de enviar el formulario directamente a tu bandeja de entrada lo más pronto posible.
                    </div>
                    <div class="card-body">
                        @include('sections.validation')
                        <div class="mb-3">
                            <label for="correoElectronico" class="">CORREO ELECTRÓNICO</label>
                            <input type="email" name="correoElectronico" class="form-control form-control-lg amount" id="correoElectronico" placeholder="Ejm, info@credimundo.com.ec" value="{{ old('correoElectronico') }}" autofocus required>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </div>
            </form>
        </div>
    </section>

    
    @push('scriptsHeader')
    
    <script src="{{ asset('assets/js/validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/js/validate/messages_es.min.js') }}"></script>
    {{-- confirm --}}
    <link rel="stylesheet" href="{{ asset('assets/vendor/confirmjs/jquery-confirm.min.css') }}">
    <script src="{{ asset('assets/vendor/confirmjs/jquery-confirm.min.js') }}"></script>
    
@endpush

@push('scriptsFooter')
    <script>

        $( "#formSolicitarFormularioCredito" ).validate( {
            
            rules: {
                correoElectronico:{
                    required:true,
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
                    content: 'Envíame el formulario de crédito a '+$('#correoElectronico').val(),
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