<?php include_once("header.php");?>

<section ng-controller="destaque-controller">
	
	<div class="container" id="destaque-produtos-container">

		<div id="destaque-produtos" class="owl-carousel owl-theme" >
			
			<div class="item" ng-repeat="produto in produtos">
				<div class="row"> 
					
					<a href="produto-{{produto.id_prod}}">
					<div class="col-sm-6 col-imagem">
						<img src="img/produtos/{{produto.foto_principal}}" alt="{{produto.nome_prod_longo}}">
					</div>
					<div class="col-sm-6 col-descricao">
						<h2>{{produto.nome_prod_longo}}</h2>
						<div class="box-valor">
							<div class="text-noboleto text-arial-cinza">no boleto</div>
							<div class="text-por text-arial-cinza">por</div>
							<div class="text-reais text-roxo">R$</div>
							<div class="text-valor text-roxo">{{produto.preco}}</div>
							<div class="text-valor-centavos text-roxo">,{{produto.centavos}}</div>
							<div class="text-parcelas text-arial-cinza">ou em até {{produto.parcelas}}x de R$ {{produto.parcela}}</div>
							<div class="text-total text-arial-cinza">total a prazo R$ {{produto.total}}</div>	
						</div>
						<a href="produto-{{produto.id_prod}}" class="btn btn-comprar text-roxo"><i class="fa fa-shopping-cart"></i> compre agora</a>

					</div>

				</div>
			</div>

		</div>

		<!-- não precisa, porque a nova versão do carosel já vem com um padrão;
		<button type="button" id="btn-destaque-prev"><i class="fa fa-angle-left"></i></button>
		<button type="button" id="btn-destaque-next"><i class="fa fa-angle-right"></i></button> -->

	</div>

	<div id="promocoes" class="container">
		
		<div class="row">
			<div class="col-md-2">
				
				<div class="box-promocao box-1">
					<p>escolha por desconto</p>
				</div>

			</div>
			<div class="col-md-10">
				
				<div class="row-fluid"><!-- pra não ter as margens laterais-->
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">40</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">60</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">80</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
					<div class="col-md-3">
						<div class="box-promocao">
							<div class="text-ate">até</div>
							<div class="text-numero">85</div>
							<div class="text-porcento">%</div>
							<div class="text-off">off</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</div>

	<div id="mais-buscadas" class="container">
		<div class="row text-center title-default-roxo">
			<h2>Os mais buscados</h2>
			<hr>	
		</div>	

		<div class="row">

			<div class="col-md-3" ng-repeat="produto in buscados">

				<div class="box-produto-info">
					<a href="produto-{{produto.id_prod}}">	
					<img src="img/produtos/{{produto.foto_principal}}" alt="panelas" class="produto-img">
					<h3>{{produto.nome_prod_longo}}</h3>
					<div class="estrelas" data-score="{{produto.media}}"</div> <!--Plugin do jquery -->
					<div class="text-qtd-reviews text-arial-cinza">({{produto.total_reviews}})</div>
					<div class="text-valor text-roxo">R$ {{produto.total}}</div>
					<div class="text-parcelas text-arial-cinza">{{produto.parcelas}}x de {{produto.parcela}} sem juros</div>
					</a>
				</div>	
			</div>
		</div>
	</div>	
</section>

<?php include_once("footerShop.php");?>

<script>
angular.module("shop", []).controller("destaque-controller", function($scope, $http){

$scope.produtos = [];

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
		url: 'produtos'
	}).then(function successCallback(response) {
		$scope.produtos = response.data;

		setTimeout(initCarousel, 1000); //para um segundo para dar tempo de que o angular levar para carregar as informações

	}, function errorCallback(response) {

	});

	var initEstrelas = function(){

		$('.estrelas').each(function(){

	  		$(this).raty({
		  		starHalf    : 'lib/raty/lib/images/star-half.png',                                // The name of the half star image.
				starOff     : 'lib/raty/lib/images/star-off.png',                                 // Name of the star image off.
				starOn      : 'lib/raty/lib/images/star-on.png',
				score		: parseFloat($(this).data("score"))
		  	});

  		});

	};

	$http({
   		method: 'GET',
	   url: 'buscados'
	 	}).then(function successCallback(response) {

		 $scope.buscados = response.data;
	 	setTimeout(initEstrelas, 1000);
	   }, function errorCallback(response) {
    
   });

});		

</script>