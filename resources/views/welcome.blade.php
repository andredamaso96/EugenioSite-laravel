<!DOCTYPE html>
<html lang="pt-pt">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pratt - Free Bootstrap 3 Theme">
    <meta name="author" content="Alvarez.is - BlackTie.co">
    <link rel="shortcut icon" href="assets/ico/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Eugénio</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/assets/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/assets/css/main.css')}}" rel="stylesheet">
    
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,300,700' rel='stylesheet' type='text/css'>
    
    <script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/smoothscroll.js')}}"></script>
    

  </head>

  <body data-spy="scroll" data-offset="0" data-target="#navigation">

    <!-- Fixed navbar -->
        <div id="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="/"><b>Eugénio</b></a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sobre <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="/url_eugenio">Eugénio</a></li>
                        <li><a href="/url_caa">CAA</a></li>
                        <li><a href="/url_testemunhos">Testemunhos</a></li>
                      </ul>  
                </li>
                <li><a href="/url_download" class="smothscroll">Download</a></li>
                <li><a href="/url_ajuda" class="smothScroll">Ajuda</a></li>
                <li><a href="/<?php echo e(Config::get('chatter.routes.home')); ?>" class="smothScroll">Fórum</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{asset('frontend/assets/img/pt.png')}}" alt="" style="width: 20px;"> Português <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#"><img src="{{asset('frontend/assets/img/en.png')}}" alt="" style="width: 20px;"> Ingês</a></li>
                        <li><a href="#"><img src="{{asset('frontend/assets/img/fr.png')}}" alt="" style="width: 20px;"> Francês</a></li>
                        <li><a href="#"><img src="{{asset('frontend/assets/img/es.png')}}" alt="" style="width: 20px;"> Espanhol</a></li>
                      </ul>  
                </li>
              </ul>
            </div><!--/.nav-collapse -->
          </div>
        </div>


   @yield('content')


    <section id="contact" name="contact"></section>
    <div id="footerwrap">
        <div class="container">
            <div class="col-lg-5">
                <h3>Autores</h3><br>
                <p>Luís Garcia,<br/>
luisbgarcia (@) estig.ipbeja.pt<br/><br>
                Esta aplicação foi desenvolvida no âmbito do projecto «CAPE - Comunicação Aumentativa em Português Europeu» financiado pelo programa CITE IV do Secretariado Nacional de Reabilitação e Integração das Pessoas com Deficiência.</p>
            </div>
            
            <div class="col-lg-7">
                <h3>Deixe-nos uma mensagem</h3>
                <br>
                <form role="form" action="#" method="post" enctype="plain"> 
                  <div class="form-group">
                    <label for="name1">Nome</label>
                    <input type="name" name="Name" class="form-control" id="name1" placeholder="Nome">
                  </div>
                  <div class="form-group">
                    <label for="email1">Email</label>
                    <input type="email" name="Mail" class="form-control" id="email1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label>Mensagem</label>
                    <textarea class="form-control" name="Message" rows="3"></textarea>
                  </div>
                  <br>
                  <button type="submit" class="btn btn-large btn-success">SUBMETER</button>
                </form>
            </div>
        </div>
    </div>
    <div id="c">
        <div class="container">
            <p>2019 <a href="#">EUGENIO.PT</a></p>
        
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{asset('frontend/assets/js/bootstrap.js')}}"></script>
    <script>
    $('.carousel').carousel({
      interval: 3500
    })
    </script>
  </body>
</html>
