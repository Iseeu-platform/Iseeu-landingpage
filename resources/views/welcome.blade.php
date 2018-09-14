<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ISeeYou - Charity - Melhor plataforma para voce que gosta de dor!</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="css/scrolling-nav.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/landing-page.css" rel="stylesheet">


  <style>
    footer .list-inline-item a {
      color: #008000;
    }

    @media (min-width: 1000px) {
      footer .social-web:hover {
        transform: scale(1.2);
      }
    }


    .card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
    }
  </style>

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger top-logo" href="#page-top">ISeeYou - Charity</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#equipa">Equipa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#solucao">Solucao</a>
          </li>
          <div class="col-12 col-md-6">
            <a href="#email_form_1" class="btn btn-block btn-success text-white sign-up">Inscreva-se!</a>
          </div>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Masthead -->
  <header class="masthead text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-5">Comece a doar com
            <strong>ISeeU-Platform</strong>, plataforma pensado em você que é doador e gosta de ver o sorriso daquele que mais precisa!
            </h2>
        </div>
      </div>
    </div>
  </header>

  <section id="email_form_1" class="bg-dark text-center" style="background-image: url(img/map-image.png);">
    <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
      <div class="col-xl-9 mx-auto text-white text-center">
        <h2 class="mb-4">Deixe o seu email para uma melhor experiencia com a nossa plataforma!</h2>
      </div>
      @if(session('erro1'))
      <div class="alert alert-warning">
        {{session('erro1')}}
      </div>
      @endif
      <form action="{{url('newsletter')}}" method="post" enctype="multipart/form-data">
        <div class="form-row">
          <div class="col-12 col-md-9 mb-2 mb-md-0">
            <input type="email" class="form-control form-control-lg" placeholder="Enter your email..." name="email">
          </div>
          <div class="col-12 col-md-3">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-block btn-lg btn-success sign-up">Inscreva-se!</button>
          </div>
        </div>
        <input type="hidden" name="form" value="1">
      </form>
    </div>
  </section>

  <!-- Icons Grid -->
    <!--  
  <section class="features-icons bg-light text-center">
    <div class="container">
        <div class="col-xl-9 mx-auto">
            <h2 class="mb-4">Nossa solucao</h2>
          </div>
        <img class="col-lg-7" src="./img/solution.png">
      <div class="row">   
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Voluntario</h3>
            <p class="lead mb-0">No ano passado, 77% dos brasileiros fizeram algum tipo de doação. Desses, 
              62% doaram bens, 52% doaram dinheiro e 34% doaram seu tempo para algum trabalho voluntário.</p>
            <p class="lead mb-0">Giving time over money</p>
            <p class="lead mb-0">Preserving Nature</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Projectos</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Doador</h3>
            <p class="lead mb-0">Give money directly to people and families in need</p>
            <p class="lead mb-0">Montly regular donations</p>
            <p class="lead mb-0">Donate online with credit cards and internet platforms</p>
          </div>
        </div>
        
      </div>
    </div>
  </section>
  -->

  
  <!-- Image Showcases -->
  <section id="solucao"  class="testimonials text-center">
    <div class="container-fluid">
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-1 text-white">
          <img src="img/solution.png" alt="" style="width: 70%;">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text;" style="font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif">
            <h2 class="mb-5">A nossa missão</h2>
          <p class="lead mb-0" style="text-align: justify">
            <p class="lead mb-3" style="text-align: justify">O foco principal da ISeeU é <strong>conectar campanhas solidarias lideradas por voluntários com doadores</strong>, onde se recebe um premio por doar. 
            Este premio pode ser um serviço desenvolvido pelo nosso voluntario desde criação de sites, aulas de música ou sessões de coaching entre muitos outros.</p> 
            <p class="lead mb-3" style="text-align: justify">Com isso queremos diminuir as diferenças no impacto das doações, porque se tempo é dinheiro então alguém que doa o seu tempo merece os mesmos créditos.
              A ISeeU quer ter um papel grande no futuro das doações e no impacto do trabalho voluntariado, dando enfâse no trabalho voluntario tanto para ajudar os outros como também um meio para o autodesenvolvimento.</p> 
              <p class="lead mb-3" style="text-align: justify">Através de parcerias com universidades o trabalho voluntario será visto como um estagio profissional, onde jovens terão oportunidades de ganhar experiencia ajudando quem mais precisa.
              O foco é o voluntario, mas o doador também ganha. Na ISeeU acreditamos que doar dinheiro não deve ser dinheiro sem retorno, por isso ainda oferecemos serviços que de outra maneira poderiam ser pagos. 
              A ISeeU ajuda-te quando ajudas quem mais precisa.</p>
              <h2 style="font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">Time is money use one or other to change lifes.</h2> 
        </div>
      </div>
      <!--
      <div class="row no-gutters">
        <div class="col-lg-6  order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
        <div class="col-lg-6 my-auto showcase-text">
          <h2>Faca sua doacao</h2>
          <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development!
            All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
        </div>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6  text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text">
          <h2>Receba os servicos voluntarios</h2>
          <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options.
            Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
        </div>
      </div>
      -->
    </div>
  </section>

  <!-- team -->
  <section id="equipa" class="testimonials text-center bg-light">
    <div class="container">
      <h2 class="mb-5">Conheça a equipa</h2>
      <div class="row">
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/kenio.jpg" alt="">
            <h5>Kenio de Brito</h5>
            <p class="font-weight-light mb-0">CEO &amp; Co-Fundador</p>
            <li class="list-inline-item mr-3 social-web">
              <a href="https://www.linkedin.com/in/k%C3%A9nio-de-brito-3a0233138/">
                <i class="fa fa-linkedin fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3 social-web">
              <a href="https://www.facebook.com/britoken?lst=100026045166323%3A100000533738462%3A1536781062">
                <i class="fa fa-facebook  fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3 social-web">
              <a href="#">
                <i class="fa fa-twitter  fa-fw"></i>
              </a>
            </li>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/PHOTO MATCHO.jpg" alt="">
            <h5>Ailson Moreira</h5>
            <p class="font-weight-light mb-0">Fullstack developer &amp; Co-Fundador</p>
            <li class="list-inline-item mr-3 social-web">
              <a href="https://www.linkedin.com/in/ailson-moreira-340b40161/">
                <i class="fa fa-linkedin fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3 social-web">
              <a href="https://www.facebook.com/profile.php?id=100026045166323">
                <i class="fa fa-facebook  fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3 social-web">
              <a href="#">
                <i class="fa fa-twitter  fa-fw"></i>
              </a>
            </li>
          </div>
        </div>
        <div class="col-lg-3">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/jonny.jpg" alt="">
              <h5>Jhonny Mosquera</h5>
              <p class="font-weight-light mb-0">Advisor</p>
              <li class="list-inline-item mr-3 social-web">
                <a href="https://www.linkedin.com/in/jhonnymosqueracoach">
                  <i class="fa fa-linkedin fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3 social-web">
                <a href="https://www.facebook.com/anitajhonny.mosquera?lst=100026045166323%3A100000604119602%3A1536781157">
                  <i class="fa fa-facebook  fa-fw"></i>
                </a>
              </li>
              <li class="list-inline-item mr-3 social-web">
                <a href="#">
                  <i class="fa fa-twitter  fa-fw"></i>
                </a>
              </li>
            </div>
          </div>
          <div class="col-lg-3">
              <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                <img class="img-fluid rounded-circle mb-3" src="img/ay.jpg" alt="">
                <h5>Ayrthon Gomes</h5>
                <p class="font-weight-light mb-0">Advisor</p>
                <li class="list-inline-item mr-3 social-web">
                  <a href="https://www.linkedin.com/in/ayrtongomes/">
                    <i class="fa fa-linkedin fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item mr-3 social-web">
                  <a href="https://www.facebook.com/ayrtongomes?lst=100026045166323%3A100000560716322%3A1536781197">
                    <i class="fa fa-facebook  fa-fw"></i>
                  </a>
                </li>
                <li class="list-inline-item mr-3 social-web">
                  <a href="#">
                    <i class="fa fa-twitter  fa-fw"></i>
                  </a>
                </li>
              </div>
            </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section id="email_form_2" class="call-to-action text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <h2 class="mb-4">Deixe o seu email para uma melhor experiencia com a nossa plataforma!</h2>
        </div>
        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
          @if(session('erro2'))
          <div class="alert alert-warning">
            {{session('erro2')}}
          </div>
          @endif
          <form action="{{url('newsletter')}}" method="post" enctype="multipart/form-data">
            <div class="form-row">
              <div class="col-12 col-md-9 mb-2 mb-md-0">
                <input type="email" class="form-control form-control-lg" placeholder="Enter your email..." name="email">
              </div>
              <div class="col-12 col-md-3">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-block btn-lg btn-success sign-up">Inscreva-se!</button>
              </div>
            </div>
            <input type="hidden" name="form" value="2">
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- NOTICIA -->
  <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <h2 class="mb-4">Saiba <i class="fa fa-plus"></i></h2>
              </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="fa fa-handshake-o m-auto"></i>
              </div>
              <h3>Voluntario</h3>
              <p class="lead mb-0">No Brazil em 2017, 7,4 Milhões de pessoas realizaram trabalho 
                voluntário, 18% população pratica voluntariado.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-heart m-auto"></i>
              </div>
              <h3>Projectos</h3>
              <p class="lead mb-0">No ano passado, 77% dos brasileiros fizeram algum tipo de doação. Desses, 
                  62% doaram bens, 52% doaram dinheiro e 34% doaram seu tempo para algum trabalho voluntário.</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="fa fa-money m-auto"></i>
              </div>
              <h3>Doador</h3>
              <p class="lead mb-0">Uma dos principais factores para parar de doar é a desconfiança 
                nas organizações da sociedade civil 17% da população.</p>
            </div>
          </div>
        </div>
      </div>
    </section>


  <!-- Footer -->
  <footer class="footer bg-dark">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
          <ul class="list-inline mb-2">
            <li class="list-inline-item">
              <a href="#">Sobre</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Contato</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Termo de uso</a>
            </li>
            <li class="list-inline-item">&sdot;</li>
            <li class="list-inline-item">
              <a href="#">Politica de privacidade</a>
            </li>
          </ul>
          <a href="#" class="text-muted mb-4 mb-lg-0">iseeuplatform@gmail.com</a>
        </div>
        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
          <ul class="list-inline mb-0">
            <li class="list-inline-item mr-3 social-web">
              <a href="https://www.linkedin.com/in/iseeu-platform-661b8316a/">
                <i class="fa fa-linkedin fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item mr-3 social-web">
              <a href="https://www.facebook.com/Iseeu-294380324457461/">
                <i class="fa fa-facebook fa-2x fa-fw"></i>
              </a>
            </li>
            <li class="list-inline-item social-web">
              <a href="https://angel.co/iseeu-platform">
                <i class="fa fa-angellist fa-2x fa-fw"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <p class="text-muted small mb-4 mb-lg-0" style="text-align: right">&copy; ISeeU - Charity 2018. Todos direitos reservados.</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom JavaScript for this theme -->
  <script src="js/scrolling-nav.js"></script>

</body>

</html>