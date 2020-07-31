@extends('welcome')
@section('content')

<!-- INTRO WRAP -->
    <div id="features">
        <div class="container">
            <div class="row centered">
                <h1><b>Comunicação Aumentativa e Alternativa</b></h1>
                <br>
                <br>
                <p><b>A comunicação pode assumir muitas formas, tais como: a fala, um olhar, texto, gestos, expressões faciais, o toque, a língua gestual, símbolos, imagens, dispositivos que geram discursos, etc. Existem variadas formas de comunicação com base no contexto e no emissor e/ou recetor da mensagem. A comunicação eficaz ocorre quando a intenção e significado de um indivíduo é compreendido por outra pessoa.
                </b></p>
                <br>
                <p><b>
                Dentro as várias formas que a comunicação pode assumir, existe a Comunicação Aumentativa e Alternativa (CAA) que é um conjunto de ferramentas e estratégias que o indivíduo utiliza para resolver os desafios de comunicação do dia-a-dia. A CAA é o termo que é usado para descrever vários métodos de comunicação que podem ajudar as pessoas que são incapazes de usar o discurso verbal para comunicarem. </b></p>
                
            </div>
            <br>
            <br>
        </div> <!--/ .container -->
    </div><!--/ #introwrap -->

    <section id="showcase" name="showcase"></section>
    <div id="showcase">
        <div class="container">
            <div class="row">

                <div class="col-lg-3">
                    <div class="centered">
                    <h4 style="color:white;"><b>Sou Utilizador de CAA</b></h4>
                    <br>
                    <img src="{{asset('frontend/assets/img/caa.png')}}"  height="200" alt="">
                    <button class="btn btn-primary btn-lg" style=" margin-top: 20px;">Saber mais</button>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="centered">
                    <h4 style="color:white;"><b>Sou Familiar de Utilizador CAA</b></h4>
                    <br>
                    <img src="{{asset('frontend/assets/img/caa.png')}}"  height="200" alt="">
                    <button class="btn btn-primary btn-lg" style=" margin-top: 20px;">Saber mais</button>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="centered">
                    <h4 style="color:white;"><b>Sou Tecnico de Reabilitação</b></h4>
                    <br>
                    <img src="{{asset('frontend/assets/img/caa.png')}}"  height="200" alt="">
                    <button class="btn btn-primary btn-lg" style=" margin-top: 20px;">Saber mais</button>
                    </div>
                </div>

                <div class="col-lg-3">
                    <div class="centered">
                    <h4 style="color:white;"><b>Sou Investigador de CAA</b></h4>
                    <br>
                    <img src="{{asset('frontend/assets/img/caa.png')}}"  height="200" alt="">
                    <button class="btn btn-primary btn-lg" style=" margin-top: 20px;">Saber mais</button>
                    </div>
                </div>


                <!-- <h1 class="centered" href="index.html"><b>Clique aqui se pretende saber mais!</b></h1> -->
                <br>
                <br>
            </div>
            <br>    
        </div><!-- /container -->
    </div>  


@endsection