<?php include_once("headerJogos.php");?>

		<section>

			
			<div id="banner">
				
				<h1>Orlando City<small>Orlando City Soccer Club</small></h1>

			</div>

		<div id="news" class="containers"><!-- /Container permite deixar o conteúdo alinhado no meio -->
				
			<div class="row text-center">
				<h2>Next Games</h2>
				<hr>	
			</div>				

			<div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">

				<div id="destaque-jogos" class="owl-carousel owl-theme" >
			
					<div class="item" ng-repeat="jogo in jogos">	
						<div class="row"> 
							<div class="col-sm-3 col-dados1">	
						
								<h1><b>Próxima partida</b></h1>
							
								<h2>{{jogo.nome}}</h2>					
						
							</div>					
							<div class="col-sm-3 col-time1">	
								<P>X</P>
								<img src="img/produtos/{{jogo.nome_time}}" class="time1-img">
							</div>
							<div class="col-sm-3 col-time2">
								<img src="img/produtos/{{jogo.nome_time_adversario}}" class="time2-img">						
							</div>
					
							<div class="col-sm-3 col-dados2">
					
								<h3>{{jogo.data}}</h3>
								<h4>{{jogo.local}}</h4>
						
							</div>
						</div>
					</div>
			
				</div>
			</div>
				<!--
				<button type="button" id="btn-news-prev"><i class="fa fa-angle-left"></i></button>
				<button type="button" id="btn-news-next"><i class="fa fa-angle-right"></i></button>

				<div class="row thumbnails owl-carousel owl-theme"><!-- / essa linha usa a tag grid do bootstrap, ajusta o tamanho para diversos tipos de celulares, por terem tamanhos diferentes. Para isso, basta usar a quantidade ideal na base de múltiplos de 12("col-md-3")input-group -->
				<!--	<div class="item">
						<div class="item-inner">
							<img src="img/noticia-thumb.jpg" alt="Noticia">
							<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
							<time>December 21, 2015</time>
						</div>		
					</div>
					<div class="item">
						<div class="item-inner">
						<img src="img/noticia-thumb.jpg" alt="Noticia">
						<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
						<time>December 21, 2015</time>
					</div>
					</div>
					<div class="item">
						<div class="item-inner">
						<img src="img/noticia-thumb.jpg" alt="Noticia">
						<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
						<time>December 21, 2015</time>
					</div>
					</div>
					<div class="item">
						<div class="item-inner">
						<img src="img/noticia-thumb.jpg" alt="Noticia">
						<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
						<time>December 21, 2015</time>
						</div>	
					</div>
					<div class="item">
						<div class="item-inner">
						<img src="img/noticia-thumb.jpg" alt="Noticia">
						<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
						<time>December 21, 2015</time>
						</div>	
					</div>
					<div class="item">
						<div class="item-inner">
						<img src="img/noticia-thumb.jpg" alt="Noticia">
						<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
						<time>December 21, 2015</time>
						</div>	
					</div>
					<div class="item">
						<div class="item-inner">
						<img src="img/noticia-thumb.jpg" alt="Noticia">
						<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
						<time>December 21, 2015</time>
						</div>	
					</div>
					<div class="item">
						<div class="item-inner">
						<img src="img/noticia-thumb.jpg" alt="Noticia">
						<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
						<time>December 21, 2015</time>
						</div>	
					</div>
					<div class="item">
						<div class="item-inner">
						<img src="img/noticia-thumb.jpg" alt="Noticia">
						<h3>Orlando City Acquires Goalkeeper Joe Bendik from Toronto FC</h3>
						<time>December 21, 2015</time>
						</div>	
					</div>
				</div>-->

		</div>


			<div id="estatisticas">
				
				<div class="container">
					<div class="row">
						<div class="col-md-4">
							<p>61348<small>Stadium Capacity</small></p>
						</div>
						<div class="col-md-4">
							<p>2010<small>Founded</small></p>
						</div>
						<div class="col-md-4">
							<p>7th<small>Eastern Conference</small></p>
						</div>
					</div>
				</div>

			</div>

			<div id="call-to-action">
				
				<div class="container">

					<div class="row text-center">
						<h2>American club number one in Brazil</h2>
						<hr>	
					</div>

					<div class="row">
						
						<p>Adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat volup tatem. Uteni ad minima veniam, quis nostrum sed quia non numquam eius modi tempora incidunt ut. quia non numquam eius numquam eius modi temp modi tempora incidunt ut labore et dolore m.</p>

					</div>
					
					<div class="text-center">
						<div class="row row-max-400">
							
							<div class="col-xs-6">
								<a href="shop" class="btn btn-roxo">Shop</a><!-- /btn btn-default deixa o botton padrão -->
							</div>
							<div class="col-xs-6">
								<a href="#" class="btn btn-amarelo">Register</a>
							</div>

						</div>
					</div>

				</div>

			</div>



		</section>



<?php include_once("footerShop.php");?>	


<script>

angular.module("index", []).controller("destaque-controller", function($scope, $http){

$scope.jogos = [];

var initCarousel = function(){

	$(function(){

		$("#destaque-jogos").owlCarousel({

			autoplay: 5000,
			items:1,
			singleItem: true,
			loop: true,
		    margin: 10,
		    nav: true

		});


		var owl = $("#destaque-jogos");
			owl.owlCarousel();

		$('#btn-destaque-prev').on("click", function(){

			owl.trigger('prev.owl.carousel');

		});

		$('#btn-destaque-next').on("click", function(){

		owl.trigger('next.owl.carousel');

	});
});

};

$http({
		method: 'GET',
		url: 'jogos'
	}).then(function successCallback(response) {
		$scope.jogos = response.data;
		//$scope.jogos = response.data;

		setTimeout(initCarousel, 1000); //para um segundo para dar tempo de que o angular levar para carregar as informações

	}, function errorCallback(response) {

	});

/*
$scope.jogos.push({
	id_tipo_campeonato:"United Soccer League",	
	nome_time:"time.jpg",
	nome_time_adversario:"par.jpg",
	data:"21/05/2021",
	local:"SP - São Paulo"

	});
$scope.jogos.push({
	id_tipo_campeonato:"Liga dos Campeoes",	
	nome_time:"time.jpg",
	nome_time_adversario:"par.jpg",
	data:"21/05/2021",
	local:"SP - São Paulo"

	});*/
});

//var initCarousel = function(){

//};
</script>