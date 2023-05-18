@extends('welcome',['title'=>'Nosotros'])
@section('content')
<section class="pt-4 pb-0">
	<div class="container">
		<div class="row">
      <div class="col-xl-9 mx-auto">
        <h2>Reseña Histórica</h2>
        <p class="lead">
            Credimundo fue fundado el 23 de febrero de 2023 gracias a la visión de un grupo familiar del cantón Salcedo, ubicado en la provincia de Cotopaxi. Con la intención de mejorar las condiciones de la comunidad y el pueblo en general, la familia Criollo-Chanchicocha inició un proceso organizativo, social y económico con el objetivo de satisfacer las necesidades familiares a través de aportes económicos mensuales y préstamos.
        </p>
        <p>
            La institución ha incursionado en la innovación tecnológica con el fin de brindar mejores beneficios a sus socios y clientes. Como parte de esta transformación digital, hemos desarrollado una aplicación web y una aplicación móvil, que ofrecen una serie de servicios digitales. A través de estas plataformas, nuestros socios tienen la posibilidad de realizar transferencias internas e interbancarias, así como pagar servicios.
        </p>

        <h3 class="mt-4">MISIÓN</h3>
        <p>
            Nuestra misión es proporcionar servicios financieros accesibles y confiables a sus socios, promoviendo el ahorro y facilitando el acceso a créditos de manera responsable. A través de una gestión transparente y ética, la caja busca fomentar la inclusión financiera y contribuir al desarrollo económico de la comunidad.
        </p>
        <h3 class="mt-4">VISÍON</h3>
        <p>
            La visión de nuestra institución es convertirse en una cooperativa de ahorro y crédito líder en nuestro sector, reconocida por su excelencia en el servicio al cliente y su compromiso con la comunidad. En unos años, aspiramos a expandir nuestra oferta de servicios financieros y fortalecer nuestra presencia en el mercado, brindando soluciones integrales a nuestros socios.
        </p>
      
        <p>
            Para lograrlo, nos enfocaremos en la innovación tecnológica, mejorando nuestra infraestructura y capacidades digitales para brindar una experiencia de usuario superior. Además, seguiremos promoviendo una cultura de responsabilidad social, participando activamente en proyectos comunitarios y contribuyendo al desarrollo sostenible de nuestra área de influencia.
        </p>
        

        <h3 class="mt-4">VALORES:</h3>
        <p>Los valores fundamentales que guían a nuestra institución son:</p>
        <ul>
          <li>
            <strong>Integridad:</strong> Actuamos con honestidad, transparencia y ética en todas nuestras acciones, manteniendo altos estándares de conducta profesional y personal.
          </li>
          <li>
            <strong>Responsabilidad:</strong> Cumplimos con nuestros compromisos y asumimos la responsabilidad de nuestras decisiones y acciones. Promovemos la responsabilidad financiera y fomentamos el uso responsable del crédito.
          </li>
          <li>
            <strong>Cooperación:</strong> Fomentamos un ambiente de colaboración y trabajo en equipo, tanto internamente entre nuestros colaboradores, como externamente con nuestros socios y la comunidad en general. Valoramos la participación activa y la construcción conjunta de soluciones.
          </li>
          <li>
            <strong>Servicio al cliente:</strong> Colocamos a nuestros socios y clientes en el centro de nuestras actividades, brindando un servicio amable, eficiente y personalizado. Nos esforzamos por comprender y satisfacer sus necesidades financieras.
          </li>
          <li>
            <strong>Inclusión:</strong> Promovemos la inclusión financiera, asegurando que nuestros servicios sean accesibles y equitativos para todos los miembros de la comunidad. Valoramos la diversidad y la igualdad de oportunidades.
          </li>
          <li>
            <strong>Compromiso social:</strong> Contribuimos activamente al desarrollo sostenible de la comunidad, participando en proyectos sociales, educativos y ambientales que generen un impacto positivo.
          </li>
        </ul>
        
       
        </div>
     </div>
  </div>
</section>

@include('sections.novedades-slider')
@endsection