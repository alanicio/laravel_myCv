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
        <span>Web Developer</span>
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
        <a href="https://github.com/alanicio"><img src="{{ public_path('assets/images/githubLogo.png') }}"/>My Github</a>
      </div>

      <div>
        <a href="https://www.linkedin.com/in/alan-ramírez-577b34176"><img src="{{ public_path('assets/images/linkedinLogo.png') }}"/>My Linkedin</a>
      </div>

      <div class="briefcase">
        <div class="title">Some of my projects:</div>
        <ul class="techonolgies">
          
          <li><span class="section">React</span></li>
          <ul class="react">
            <li><a href="https://peaceful-goldwasser-4de5b8.netlify.app/">Users Manager</a></li>
            <li><a href="https://cranky-villani-834ed2.netlify.app/">Drink Recipes</a></li>
            <li><a href="https://hardcore-allen-beb7b7.netlify.app/">Countries</a></li>
          </ul>

          <li><span class="section">Angular</span></li>
          <ul class="angular">
            <li><a href="https://quizzical-euler-494918.netlify.app/">Rock Paper Scisors</a></li>
            <li><a href="https://determined-murdock-75b527.netlify.app/">Job List</a></li>
          </ul>

        </ul>
      </div>  
    </div>

    <div class="skills">
      <div class="title">Skills</div>
      <ul class="skills-list">
        <li class="skill">React</li>
        <ul class="technologies">
          <li>Hooks</li>
          <li>consumption of APIs</li>
          <li>Styled compontents</li>
          <li>React Router</li>
          <li>React Context</li>
          <li>Unit Testing</li>
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
        Profile
      </div>
      <p>
        Hello, I'm a developer with almost 2 years of experience working in companies, but with more than 
        five years coding. I am capable both in front end and back end, can do monolithic applications or
        program an API and consume it in front end. I have developed multiple types of systems, like e-commerce
        , ERP, CRM and dashboards. I invite you to give it a look to my github, where you can see some of my code.
      </p>
    </div>

    <div class="laboral-experience">
      <div class="title">
        Work experience
      </div>

      <div class="sub-title">
        Web Developer, BID Group, Ciudad de México
      </div>
      <p>March 2020 — September 2020</p>
      <p>
        The company offers a bussines intelligence, that includes a dashboard with data about markets,
        sales, etc. I developed de web app that they offer to the clients.  
      </p>

      <div class="sub-title">
        Level 2 IT support, PRAXIS Desarrollo de software y consultoria TI, Ciudad de México
      </div>
      <p>November 2019 — March 2020</p>
      <p>
        I was in banking systems area, finding bugs, and fixing the problems that Level 1 IT support were 
        not able to solve.  
      </p>

      <div class="sub-title">
        Web Developer, Sistemas Nonex, Ciudad de México
      </div>
      <p>June 2019 — September 2020</p>
      <p>
        The company provides and install electric equipment. I developed the web apps for internal 
        processes and the e-commerce too.
      </p>

      <div class="sub-title">
        Web Developer, B&W soluciones integrales, Ciudad de México
      </div>
      <p>Marzo 2019 — Junio 2019</p>
      <p>
        The company offers custom software consulting. I was one of their developers.        
      </p>

    </div>
  </div>


@endsection