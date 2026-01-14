<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8" /> 
		<title>Big Bang Game</title>
		<link rel="icon" href="#" />
		<!-- <link rel="stylesheet" type="text/css" href="css/styleNiveis.css"/>  -->
		<link rel="stylesheet" type="text/css" href="css/estilo.css"/> 
		<link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/game.css"/> 
	    <script type="text/javascript" src="js/jquery-1.5.2.js"></script>
		<script language="javascript" type="text/javascript">
	$(function(){
	
		$("body").css("display", "none");
	 
		$("body").fadeIn('slow');
	 
		$("a").click(function(event){
			event.preventDefault();
			linkLocation = this.href;
			$("body").fadeOut(1000, redirectPage);
		});
	 
		function redirectPage() {
			window.location = linkLocation;
		}
		
	});

	</script>
</head>
	<body>
			<div class="row justify-content-center">
			<div class="col-8 ">
				<div id="bigbang">
				<?php
				if (isset($_POST['nome'])) {
				
					$nome 	= $_POST['nome'];
					$pontuacao 	= $_POST['pontuacao'];
					$nivel 	= $_POST['nivel'];

					echo "<div class='finish'>";
						echo '<h2> Nível: '.$nivel.'</h2>';
					echo "</div>";
					echo "<div class='finish'>";
						echo '<p> Nome: '.$nome.'</p>';
					echo "</div>";
					echo "<div class='finish'>";
						echo '<p> Pontuação: '.$pontuacao.' pts</p>';
					echo "</div>";
					
					$usuario 	= $_POST['nome'];
					
					require('Conexao.php');
				 	$cadastra = mysqli_query($conecta,"INSERT INTO bigbang_ranking (usuario, nivel, pontuacao, data_hora) VALUES ('$usuario','$nivel', '$pontuacao', now())") or die ('<h5>Erro ao gravar: '.mysqli_error($conecta).'</h5>');
				}
				?>
				<img class="bandeira" src="img/finish.png">
				<img class="tf l" src="img/trofeu/trofeuRanking.png" >
				<img class="tf r" src="img/trofeu/trofeuRanking.png" >
				
				</div>
			</div>
		</div>

		<div class="row  justify-content-center">
			<div class="col-2">
				
				<a class="bt_voltar" title="Visualizar ranking" href="ranking.php"><img class="efeito" src="img/ranking.png"  alt=""/></a>


			</div>
			<div class="col-2">
				
                        <a class="bt_voltar" href="index.html">
                            <img class="efeito" src="img/home.png" title="Início" >
                        </a>
                    
			</div>
		</div>
    </body>
</html>
