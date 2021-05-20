<?php include_once("headerJogos.php");?>

<section>
	
	<div class="container" id="destaque-produtos-container" ng-controller="destaque-controller">

		<div id="destaque-produtos" class="owl-carousel owl-theme" >
			
			<div class="item" ng-repeat="jogo in jogos">	
				<div class="row"> 
					<div class="col-sm-3 col-dados1">	
						
						<h1><b>Próxima partida</b></h1>
							
						<h2>{{jogo.id_tipo_campeonato}}</h2>					
						
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

		<!-- não precisa, porque a nova versão do carosel já vem com um padrão;
		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button> -->

	</div>

	
</section>

<?php include_once("footerShop.php");?>

<script>

angular.module("shop2", []).controller("destaque-controller", function($scope, $http){

$scope.jogos = [];

var initCarousel = function(){

	$(function(){

		$("#destaque-produtos").owlCarousel({

			autoplay: 5000,
			items:1,
			singleItem: true,
			loop: true,
		    margin: 10,
		    nav: true

		});


		var owl = $("#destaque-produtos");
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