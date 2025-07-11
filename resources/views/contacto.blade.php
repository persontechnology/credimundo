@extends('welcome',['title'=>'Contacto'])
@section('content')
<section class="pt-4">
	<div class="container">
		<div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="embed-responsive embed-responsive-16by9 border border-2 border-primary shadow shadow-6-strong">
            <iframe class="w-100 h-300" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d321.74905271791863!2d-78.59168681311657!3d-1.0446716248896422!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x91d47cc9004611e9%3A0x3e417a2e8a6bfce2!2sXC45%2B47P%2C%20Salcedo!5e0!3m2!1ses!2sec!4v1684257330691!5m2!1ses!2sec" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="row mt-5">
          <div class="col-sm-6 mb-5 mb-sm-0">
            <h3>Horario de Atención:</h3>
            
            <p><strong>Lunes a viernes:</strong></p>
            <p>08:30 a 17:30</p>
            <p><strong>Domingos:</strong></p>
            <p>08:30 a 13:00</p>
            <p><strong>Sabados:</strong></p>
            <p>Cerrado</p>
          </div>
          <div class="col-sm-6">
            <h3>Contacto de Información </h3>
            
            <p class="">
                <strong>MATRIZ:</strong> SALCEDO-COTOPAXI <br>
                9 de Octubre y 24 de Mayo, Frente a CACPECO <br>
                <strong>Tel:</strong><a class="" href="tel:+59332598837">+(593) 03 259 8837</a> <br>
                <strong>WhatsApp:</strong> <a class="" href="https://wa.me/593989570091?text=Hola%20CREDIMUNDO,%20quiero%20saber%20m%C3%A1s%20sobre%20su%20servicio.%20%C2%BFMe%20puedes%20ayudar?">+(593) 98 957 0091</a> <br>
                <strong>Email:</strong> <a class="" href="mailto:info@credi-mundo.com">info@credi-mundo.com</a> <br>
                <strong>Web:</strong> <a class="" href="{{ url('/') }}">{{ url('/') }}</a>  <br>
                <strong>Síguenos en:</strong>
            </p>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link px-2 fs-5" href="https://www.facebook.com/credimundoec" target="_blank"><i class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-2 fs-5" href="https://www.youtube.com/channel/UCBSoy3-T1SBUVyZNN7mTBnQ" target="_blank"><i class="fab fa-youtube"></i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link ps-2 pe-0 fs-5" href="https://www.tiktok.com/@credimundo" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                </li>
            </ul>
          </div>
        </div>
    
      </div> 
     </div>
  </div>
</section>

@include('sections.novedades-slider')
@endsection