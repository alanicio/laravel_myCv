@extends('welcome')

@section('content')
<link rel="stylesheet" href="{{ public_path('css/pdf.css') }}" />
  <style>
    .photo {
      background-image: url("{{ public_path('assets/images/photo.jpeg') }}");
    }
  </style>

  <div class="header">
    <div class="photo"></div>
    <div class="data">
      <div class="name">
        <span>Alan Mauricio Ramírez Narváez</span>
      </div>
      <div class="profession">
        <span>Desarrollador Web</span>
      </div>
      <div class="contact-data">
        <span class="phone">
          5579766689
        </span>
        <span class="mail">
          alamau98@gmail.com
        </span>
        <span class="mail">
          alanicio98@outlook.com
        </span>
      </div>  
    </div>
  </div>

 
  <div class="zone left-content">
    <div class="links">
      <div class="github">
        <a href="https://github.com/alanicio"><img src="{{ public_path('assets/images/githubLogo.png') }}"/>Mi Github</a>
      </div>

      <div>
        <a href="https://www.linkedin.com/in/alan-ramírez-577b34176"><img src="{{ public_path('assets/images/linkedinLogo.png') }}"/>Mi Linkedin</a>
      </div>

      <div class="briefcase">
        <div class="title">Algunos de mis proyectos:</div>
        <ul class="techonolgies">
          
          <li><span class="section">React</span></li>
          <ul class="react">
            <li><a href="https://peaceful-goldwasser-4de5b8.netlify.app/">Administrador de usuarios</a></li>
            <li><a href="https://cranky-villani-834ed2.netlify.app/">Recetas de bebidas</a></li>
            <li><a href="https://hardcore-allen-beb7b7.netlify.app/">Países</a></li>
          </ul>

          <li><span class="section">Angular</span></li>
          <ul class="angular">
            <li><a href="https://quizzical-euler-494918.netlify.app/">Piedra papel o tijera</a></li>
            <li><a href="https://determined-murdock-75b527.netlify.app/">Lista de empleos</a></li>
          </ul>

        </ul>
      </div>  
    </div>

    <div class="skills">
      <div class="title">Habilidades</div>
      <ul class="skills-list">
        <li class="skill">React</li>
        <ul class="technologies">
          <li>Hooks</li>
          <li>Consumo de APIs</li>
          <li>Styled compontents</li>
          <li>React Router</li>
          <li>React Context</li>
          <li>Pruebas unitarias y de integración</li>
          <li>Redux</li>
        </ul>
        <li class="skill">Laravel</li>
        <ul class="technologies">
          <li>MVC</li>
          <li>Migrations</li>
          <li>Laravel Passport</li>
          <li>Task Scheduling</li>
          <li>Eloquent y QueryBuilder</li>
          <li>Blade Template</li>
        </ul>
        <li class="skill">Git</li>
        <li class="skill">HTML</li>
        <li class="skill">CSS</li>
        <li class="skill">PHP</li>
        <li class="skill">JavaScript</li>
        <li class="skill">TypeScript</li>
      </ul>
    </div>
    
  </div>
  <div class="zone right-content">
    <div class="profile">
      <div class="title">
        Perfil
      </div>
      <p>
        Hola, soy un desarrollador con casi 2 años de experiencia en el campo laboral con más de 5 años
        de experiencia codificando. Soy muy capaz tanto en el front end como en el back end, puedo hacer
        sistemas monoliticos o programar los microservicios y  consumirlos en el front end. He desarrollado
        de todo un poco, desde e-commerce, pasando por ERP y CRM, hasta dashboards. Te invito a conocer algunos
        de mis proyectos personales, los puedes ver en mi github.
      </p>
    </div>

    <div class="laboral-experience">
      <div class="title">
        Experiencia laboral
      </div>

      <div class="sub-title">
        Desarrollador Web, BID Group, Ciudad de México
      </div>
      <p>Marzo 2020 — Septiembre 2020</p>
      <p>
        La empresa ofrece un servicio de inteligencia financiera y comercial, el cual incluia dashboards,
        análisis de mercados, de ventas, etc. Yo me encargaba de desarrollar la aplicación web que ofrecen
        a los clientes.
      </p>

      <div class="sub-title">
        Mesa de soporte nivel 2, PRAXIS Desarrollo de software y consultoria TI, Ciudad de México
      </div>
      <p>Noviembre 2019 — Marzo 2020</p>
      <p>
        Me encontraba en el area de sistemas bancarios, identificando los posibles bugs, o solucionando los
        problemas que la mesa de soporte 1 no fuera capaz de resolver.
      </p>

      <div class="sub-title">
        Desarrollador Web, Sistemas Nonex, Ciudad de México
      </div>
      <p>Junio 2019 — Septiembre 2020</p>
      <p>
        La empresa suministra e instala equipo eléctricos. Yo me encargaba de desarrollar las aplicaciones web
        tanto para los procesos internos de la empresa, así como la e-commerce para la empresa.
      </p>

      <div class="sub-title">
        Desarrollador Web, B&W soluciones integrales, Ciudad de México
      </div>
      <p>Marzo 2019 — Junio 2019</p>
      <p>
        La empresa ofrece consultoria de software a la medida. Por lo que me encontraba desarrollando aplicaciones
        web, cada una con una lógica de negocio diferente.
      </p>

    </div>
  </div>


@endsection