@extends('welcome')
@section('content')

<section id="desc" name="desc"></section>
    <!-- INTRO WRAP -->
    <div id="features">
        <div class="container">
            <div class="row">
                <h1><b>Download</b></h1>
                <br>
                <br>
                <div class="col-lg-8">
                    <h3><b>Eugénio V3 é a versão atual do nosso software</b></h3>
                    <p><b>A instalação está disponível na forma de um arquivo comprimido. Carregue no seguinte ícone para iniciar a transferência:</b></p>
                    <br>
                    <h3><a href="/download"><button class="btn download-btn" style="height: 60px; font-size: 20px;"><i class="fa fa-download"></i> Download</button></a> - eugenio.zip (3.9MB)</h3>
                </div>
                <div class="col-lg-4">
                    <img src="{{asset('frontend/assets/img/eug.jpg')}}" alt=""height="300">
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
                <h1><b>Instalação</b></h1>
                <br>
                <br>
                <div class="col-lg-7">
                    <h3><b>Passos para instalar o Eugénio:</b></h3>
                    <p><b>1) Depois de extrair todos os ficheiros incluídos no arquivo para uma directoria, execute o programa SETUP que está dentro de Disk Images\disk1. Espere até surgir a mensagem indicando que a instalação foi concluída.</b></p>
                    
                    <p><b>2) Para versões de Windows 95 e 98, deverá em seguida correr o programa MSagent também incluído no arquivo.</b></p>
                    
                    <p><b>3) Finalmente, e para todas as versões versões do Windows, terá ainda de executar o programa Genie.</b></p>
                    
                    <p><b>4) Depois de correctamente instalado deverá ter no seu ambiente de trabalho (fundo do écrã) um ícone com o título «Preditor Palavras».</b></p>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                </div>
                <div class="col-lg-5">
                    <div class="centered">
                    <iframe width="100%" height="345" src="https://www.youtube.com/embed/MRGHThxjfZQ"></iframe>
                </div>
                </div>


            </div>

        </div> <!--/ .container -->
    </div><!--/ #features -->



@endsection