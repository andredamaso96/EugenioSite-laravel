@extends('welcome')
@section('content')

 <section id="home" name="home"></section>
    <div id="headerwrap">
        <div class="container">
            <div class="row centered">
                <div class="col-lg-12">
                    <h1>Bem-vindo ao <b>Eugénio</b></h1>
                    <h3>O génio das palavras! <a href="/download"><button class="btn download-btn"><i class="fa fa-download"></i> Download</button></a></h3>
                    <br>
                </div>
                
                <div class="col-lg-2">
                    <h5>O que é?</h5>
                    <p>É um agente de software que sugere palavras que completem o texto que está a ser editado.</p>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{asset('frontend/assets/img/arrow1.png')}}">
                </div>
                <div class="col-lg-8">
                    <img class="img-responsive" src="{{asset('frontend/assets/img/fig3.jpg')}}" alt="">
                </div>
                <div class="col-lg-2">
                    <br>
                    <img class="hidden-xs hidden-sm hidden-md" src="{{asset('frontend/assets/img/arrow2.png')}}">
                    <h5>Nova Versão 3!</h5>
                    <p>A terceira versão do Eugénio apresenta diversas novas funcionalidades.</p>
                </div>
            </div>
        </div> <!--/ .container -->
    </div><!--/ #headerwrap -->


    <section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="intro">
        <div class="container">
            <div class="row centered">
                <h1><b>O Eugénio é utilizado:</b></h1>
                <br>
                <br>
                <div class="col-lg-4">
                    <img src="{{asset('frontend/assets/img/teclado.jpg')}}" width="250" height="80" alt="">
                    <h3><b>Escrita</b></h3>
                    <p><b>Teclado personalizado, para a escrita de E-mail, documentos genéricos, comunicação no Facebook.</b></p>
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('frontend/assets/img/som.png')}}" width="250" height="80" alt="">
                    <h3><b>Comunicação Oral</b></h3>
                    <p><b>Utilização do Eugénio para escrever mensagens, texto que são sintetizadas para fala.</b></p>
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('frontend/assets/img/simbolos.jpg')}}" width="250" height="80" alt="">
                    <h3><b>Símbolos</b></h3>
                    <p><b>Utilização do Eugenio para a aprendizagem da leitura e escrita utilizando letras ou símbolos.</b></p>
                </div>
            </div>
            <br>
            <hr>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->
    
    <!-- FEATURES WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1 class="centered"><b>O que tem de novo?</b></h1>
                <br>
                <br>
                <div class="col-lg-6 centered">
                    <br>
                    <img class="centered" src="{{asset('frontend/assets/img/laptop1.png')}}" width="400" alt="">

                    <img class="centered" src="{{asset('frontend/assets/img/laptop3.png')}}" width="400" alt="">
                </div>
                
                <div class="col-lg-6">
                    <h3><b>Novas Funcionalidades</b></h3>
                    <br>
                <!-- ACCORDION -->
                    <div class="accordion ac" id="accordion2">
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne"><b>
                                Predição Sem Limites
                                </b></a>
                            </div><!-- /accordion-heading -->
                            <div id="collapseOne" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                <p><b>A segunda versão do Eugénio apresenta diversas novas funcionalidades. Em primeiro lugar, a predição deixou de estar limitada ao MS Word, passando a funcionar com todas as aplicações do Windows.</b></p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>
        
                        <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo"><b>
                                Novo Teclado Virtual
                                </b></a>
                            </div>
                            <div id="collapseTwo" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                <p><b>O Eugénio oferece agora também um teclado virtual configurável com a possibilidade de várias formas de varrimento.</b></p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>
        
                         <div class="accordion-group">
                            <div class="accordion-heading">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree"><b>
                                Facilidade Na Leitura
                                </b></a>
                            </div>
                            <div id="collapseThree" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                <p><b>Adicionou-se também a facilidade de leitura quando utilizado em conjunto com um sintetizador de fala compatível com a interface SAPI 4. Finalmente, o Eugénio passou a permitir também a utilização de abreviaturas para a aceleração da escrita</b></p>
                                </div><!-- /accordion-inner -->
                            </div><!-- /collapse -->
                        </div><!-- /accordion-group -->
                        <br>
                        
                        <br>            
                    </div><!-- Accordion -->
                </div>
            </div>
        </div><!--/ .container -->
    </div><!--/ #features -->
    
    
    <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            <div class="row">
                <h1 class="centered"><b>Vídeo de Apresentação</b></h1>
                <br>
                <br>
                <div class="centered">
                    <iframe width="600" height="345" src="https://www.youtube.com/embed/MRGHThxjfZQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <br>
            <br>
            <br>    
        </div><!-- /container -->
    </div>  




@endsection