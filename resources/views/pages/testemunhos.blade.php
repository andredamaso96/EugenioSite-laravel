@extends('welcome')
@section('content')

<!-- SLIDER -->
	<div class="container">
	<div class="row">
		<div class="col-md-8 col-center m-auto">
			<br>
			<div class="row centered">
			<h1><b>Testemunhos dos Utilizadores</b></h1>
			</div>
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<!-- Carousel indicators -->
				<ol class="carousel-indicators">
					<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
					<li data-target="#myCarousel" data-slide-to="1"></li>
					<li data-target="#myCarousel" data-slide-to="2"></li>
				</ol>   
				<!-- Wrapper for carousel items -->
				<div class="carousel-inner">
					<div class="item carousel-item active">
						<div class="img-box"><img src="{{asset('frontend/assets/img/persona1.jpg')}}" alt=""></div>
						<h4 class="testimonial"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</b></h4>
						<h3 class="overview"><b>Utilizador 1</b>, Profissão</h3>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="{{asset('frontend/assets/img/persona2.jpg')}}" alt=""></div>
						<h4 class="testimonial"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</b></h4>
						<h3 class="overview"><b>Utilizador 2</b>, Profissão</h3>
					</div>
					<div class="item carousel-item">
						<div class="img-box"><img src="{{asset('frontend/assets/img/persona3.jpg')}}" alt=""></div>
						<h4 class="testimonial"><b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Idac bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</b></h4>
						<h3 class="overview"><b>Utilizador 3</b>, Profissão</h3>
					</div>
				</div>
				<!-- Carousel controls -->
				<a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
					<i class="fa fa-angle-left"></i>
				</a>
				<a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
					<i class="fa fa-angle-right"></i>
				</a>
			</div>
		</div>
	</div>
</div>

	<section id="showcase" name="showcase"></section>
	<div id="showcase">
		<div class="container">
			<div class="row">

				<h1 class="centered" href="index.html"><b>Partilhe a sua opinião connosco!</b></h1>
				<br>
				<br>

			</div>
			<br>	
		</div><!-- /container -->
	</div>	


@endsection