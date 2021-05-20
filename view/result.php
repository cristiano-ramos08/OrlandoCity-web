<?php include_once("header.php");?>
<?php include("inc/confi2.php"); 


$consulta = "SELECT * FROM tb_estatistica";
$con = $mysqli->query($consulta) or die($msqli->error);

?>

<section>
	<div class="container">
		<div class="row text-center" style="margin:40px auto;">
			<div class="header-simple-page" style="background-image: url(img/stadium.jpg);">				
    
	            <div class="container">

	             	 <h1>Números e Recordes</h1>	      

				</div>      
			</div>
			
		</div>     
		
		<div class="row text-center title-default-black" style="margin:40px auto;">
			<h2 class="mb-20">Geral</h2>
	
		</div>	

		<div class="table-wrapper">
			<table class="fl-table">
				<thead>
					<tr>
						<th></th>
						<th></th>
					</tr>
				</thead>
				<tbody>

					<?php while($dado = $con->fetch_array()){ ?>
					<tr>
						<td>Jogos</td>
						<td><?php echo $dado["jogos"]; ?></td>			
					</tr>
					<tr>
						<td>Vitórias</td>
						<td><?php echo $dado["vitorias"]; ?></td>
					</tr>
					<tr>
						<td>Empates</td>
						<td><?php echo $dado["empates"]; ?></td>
					</tr>
					<tr>
						<td>Derrotas</td>
						<td><?php echo $dado["derrotas"]; ?></td>
					</tr>
					<tr>
						<td>gols marcados</td>
						<td><?php echo $dado["gols_marcados"]; ?></td>
					</tr>
					<tr>
						<td>gols sofridos</td>
						<td><?php echo $dado["gols_sofridos"]; ?></td>
					</tr>
					<tr>
						<td>Retrospecto casa</td>
						<td><?php echo $dado["retrospecto_casa"]; ?></td>
					</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		
</section>



<?php include_once("footerShop.php");?>

<!--

<script>
angular.module("result", []).controller("destaque-controller", function($scope){

$scope.resultados = [];

$scope.resultados.push({

jogos:"101",
vitorias:"23"

	});
});

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
		url: 'resultados'
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