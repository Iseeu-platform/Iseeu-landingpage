<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ISeeU - Charity - Melhor plataforma para voce que gosta de dor!</title>

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

      footer .list-inline-item a{
        color: #008000;
      }

      @media (min-width: 1000px) {
        footer .social-web:hover{
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
        <a class="navbar-brand js-scroll-trigger top-logo" href="#page-top">ISeeU - Charity</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">Team</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Features</a>
            </li>
            <div class="col-12 col-md-6">
              <a href="#email_form_1" class="btn btn-block btn-success text-white sign-up">Sign up!</a>
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
            <h2 class="mb-5">Comece a doador com <strong>ISeeU-Platform</strong>, plataforma pensado em voce que é doador e gosta de ver o sorriso daquele que mais precisa! </h2>
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
                  <button type="submit" class="btn btn-block btn-lg btn-success sign-up">Sign up!</button>
                </div>
              </div>
              <input type="hidden" name="form" value="1">
            </form>
          </div>
    </section>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
              <div class="features-icons-icon d-flex">
                <i class="icon-screen-desktop m-auto text-primary"></i>
              </div>
              <h3>Voluntario</h3>
              <p class="lead mb-0">Sustainable Development</p>
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

    <!-- Image Showcases -->
    <section class="showcase">
      <div class="container-fluid p-0">
        <div class="row no-gutters">

          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-1.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Cadastre na plataforma</h2>
            <p class="lead mb-0">When you use a theme created by Start Bootstrap, you know that the theme will look great on any device, whether it's a phone, tablet, or desktop the page will behave responsively!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/bg-showcase-2.jpg');"></div>
          <div class="col-lg-6 my-auto showcase-text">
            <h2>Faca sua doacao</h2>
            <p class="lead mb-0">Newly improved, and full of great utility classes, Bootstrap 4 is leading the way in mobile responsive web development! All of the themes on Start Bootstrap are now using Bootstrap 4!</p>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/bg-showcase-3.jpg');"></div>
          <div class="col-lg-6 order-lg-1 my-auto showcase-text">
            <h2>Receba os servicos voluntarios</h2>
            <p class="lead mb-0">Landing Page is just HTML and CSS with a splash of SCSS for users who demand some deeper customization options. Out of the box, just add your content and images, and your new landing page will be ready to go!</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials text-center bg-light">
      <div class="container">
        <h2 class="mb-5">What people are saying...</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
              <h5>Margaret E.</h5>
              <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-2.jpg" alt="">
              <h5>Fred S.</h5>
              <p class="font-weight-light mb-0">"Bootstrap is amazing. I've been using it to create lots of super nice landing pages."</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
              <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
              <h5>Sarah	W.</h5>
              <p class="font-weight-light mb-0">"Thanks so much for making these free resources available to us!"</p>
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
                    <button type="submit" class="btn btn-block btn-lg btn-success sign-up">Sign up!</button>
                  </div>
                </div>
                <input type="hidden" name="form" value="2">
              </form>
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
            <p class="text-muted small mb-4 mb-lg-0">&copy; ISeeU - Charity 2018. Todos direitos reservados.</p>
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
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JavaScript for this theme -->
    <script src="js/scrolling-nav.js"></script>

  </body>

</html>
