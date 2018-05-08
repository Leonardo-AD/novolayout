<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="img/logoo.png">

  <title>Músicos de Aluguel</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/font-awesome.css">
  <link rel="stylesheet" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/demo.css" />
  <link rel="stylesheet" type="text/css" href="css/set1.css" />
  <link href="css/overwrite.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">

</head>

<body>
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
    
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
        <a class="navbar-brand" href="index.html"><span>Músicos de Aluguel</span></a>
      </div>
      <div class="navbar-collapse collapse">
        <div class="menu">
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation"><a href="index.php">Home</a></li>
            <li role="presentation"><a href="genero.php">Gêneros Musicais</a></li>
            <li role="presentation"><a href="cadastro.php">Cadastre-se</a></li>
            <li role="presentation"><a href="login.php">Login</a></li>
            <li role="presentation" class="active"><a href="quemsomos.php">Quem Somos</a></li>
          </ul>
        </div>
      </div>
    </div>
  </nav>

  <figure class="grupo">

<img src="img/grupo.jpg">

  <section id="contact-page">
    <div class="container">
      <div class="center">
        <h2>Deixe Sua Mensagem </h2>
        <p>Sua Mensagem é Importante Para nós!</p>
      </div>
      <div class="row contact-wrap">
        <div class="col-md-8 col-md-offset-2">
          <div id="sendmessage"></div>
          <div id="errormessage"></div>
          <form action="" method="post" role="form" class="contactForm">
            <div class="form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
              <div class="validation"></div>
            </div>
            <div class="form-group">
              <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
              <div class="validation"></div>
            </div>

            <div class="text-center"><button type="submit" class="btn btn-primary btn-lg">Enviar Mensagem</button></div>
          </form>
        </div>
      </div>
      <!--/.row-->
    </div>
    <!--/.container-->
  </section>
  <!--/#contact-page-->

  <footer>
    <div class="inner-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-4 f-about">
            <a href="index.html"><h1></span> Músicos de Aluguel</h1></a>
            <p>O Músicos de Aluguel é uma plataforma web que presta serviços de contratação musical destinados a atender as necessidades de cada cliente no Brasil com qualificação, confiabilidade e recursos de qualidade com custos adequados a seu negócio.
            </p>
          </div>
          <div class="col-md-4 l-posts">
            <h3 class="widgetheading">Desenvolvedores</h3>
            <ul>
              <li><a href="#">Lucielly Fernanda - E-mail: luciellyx5@gmail.com</a></li>
              <li><a href="#">Rafael Vieira - E-mail: rafaelvieiraoffiline@gmail.com</a></li>
              <li><a href="#">Anderson dos Santos - E-mail: aslap7xx@gmail.com</a></li>
              <li><a href="#">Leonardo Alves - E-mail: leonardo.alves779@gmail.com</a></li>
              <li><a href="#">Tarcísio Marques - E-mail: tarcisiomarques00000@gmail.com</a></li>
            </ul>
          </div>
          <div class="col-md-4 f-contact">
            <h3 class="widgetheading">Nossos contatos</h3>
            <a href="#">
              <p><i class="fa fa-envelope"></i> Musicosdealuguel@gmail.com</p>
            </a>
            <p><i class="fa fa-phone"></i> +345 578 59 45 416</p>
            <p><i class="fa fa-home"></i> -Instituto Federal de Pernanbuco -Igarassu. <br></p>
          </div>
        </div>
      </div>
    </div>

    <div class="last-div">
      <div class="container">
        <div class="row">
          <div class="copyright">
            &copy; Músicos de Aluguel. Todos os Direitos Reservados
            <div class="credits">
              <a href="https://bootstrapmade.com/"></<a href="https://bootstrapmade.com/"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <ul class="social-network">
            <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="github"><i class="fa fa-github fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin fa-1x"></i></a></li>
            <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus fa-1x"></i></a></li>
          </ul>
        </div>
      </div>
      <a href="" class="scrollup"><i class="fa fa-chevron-up"></i></a>
    </div>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script type="text/javascript" src="js/fliplightbox.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>
  <script src="js/functions.js"></script>
  <script type="text/javascript">
    $('.portfolio').flipLightBox()
  </script>
  <script src="contactform/contactform.js"></script>

</body>

</html>
