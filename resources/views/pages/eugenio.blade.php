@extends('welcome')
@section('content')

<section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1><b>Eugénio</b></h1>
                <br>
                <br>
                <div class="col-lg-8">
                    <h3><b>Eugénio, o génio das palavras - Versão 3</b></h3>
                    <p><b>O Eugénio é um agente de software que funciona no ambiente Microsoft Windows para sugerir palavras que completem o texto que está a ser editado. O Eugénio analisa a vizinhança do cursor e sugere um número configurável de palavras que, na sua opinião, são mais relevantes no contexto. Este agente foi concebido para acelerar o processo de escrita a pessoas com limitações motoras. O programa foi desenvolvido em colaboração entre a Escola Superior de Tecnolgia e Gestão (ESTIG) de Beja, o Laboratório de Sistemas de Língua Falada (L²F) do INESC ID e o Centro de Reabilitação de Paralisia Cerebral de Beja (CPCB). A utilização do programa é gratuita para uso particular.</b></p>
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('frontend/assets/img/genio2.png')}}" alt=""height="300">
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