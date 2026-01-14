<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<link rel="icon" href="img/32.png" />
	<title>Ranking All - Big Bang</title>
	<style type="text/css">
	*{
		margin: 0px;
		padding: 0px;
		font-family: monospace;
	}
	table{
		/*border:1px solid #000000;*/
		margin: 0 auto;
	}
	.cor1{
		background-color: #ed5353;
	}
	.cor2{
		background-color: #FFFFFF;
	}
	.formatacao{
		font-size: 18px;
		font-weight: bold;
		background-color: #CCC;
	}
	td{
		text-align: center;
		width: 190px;
		height: 40px;
	}
	</style>
</head>
<body>
	<h1 style="text-align:center; margin-top:30px;">Nível Iniciante</h1>
	<?php
		require('Conexao.php');

		$sql = "SELECT * FROM bigbang_ranking WHERE nivel='INICIANTE' ORDER BY pontuacao DESC";
		$exe = mysqli_query($conecta,$sql);

		echo '<table><tr class="formatacao" ><td>Código</td><td>Nome</td><td>Nível</td><td>Pontuação</td><td>Data/Hora</td></tr>';
	    $contCor = 1;
		while($linha = mysqli_fetch_array($exe)){
			if ($contCor % 2 == 0) {
				echo '<tr class="cor1" ><td>' . $linha['codRanking'] . '</td><td>'. $linha['usuario'] . '</td><td>'. $linha['nivel'] . '</td><td>'. $linha['pontuacao'] .'</td><td>'. $linha['data_hora'].'</td></tr>';
			}else{
				echo '<tr class="cor2" ><td>' . $linha['codRanking'] . '</td><td>'. $linha['usuario'] . '</td><td>'. $linha['nivel'] . '</td><td>'. $linha['pontuacao'] .'</td><td>'. $linha['data_hora'].'</td></tr>';
			}
			$contCor++;

		}
		echo '</table>';
	?>
	<br><hr><br><br>
	<h1 style="text-align:center; margin-top:30px;">Nível Curioso</h1>
	<?php

		$sql = "SELECT * FROM bigbang_ranking WHERE nivel='CURIOSO' ORDER BY pontuacao DESC";
		$exe = mysqli_query($conecta,$sql);

		echo '<table><tr class="formatacao" ><td>Código</td><td>Nome</td><td>Nível</td><td>Pontuação</td><td>Data/Hora</td></tr>';
	    $contCor = 1;
		while($linha = mysqli_fetch_array($exe)){
			if ($contCor % 2 == 0) {
				echo '<tr class="cor1" ><td>' . $linha['codRanking'] . '</td><td>'. $linha['usuario'] . '</td><td>'. $linha['nivel'] . '</td><td>'. $linha['pontuacao'] .'</td><td>'. $linha['data_hora'].'</td></tr>';
			}else{
				echo '<tr class="cor2" ><td>' . $linha['codRanking'] . '</td><td>'. $linha['usuario'] . '</td><td>'. $linha['nivel'] . '</td><td>'. $linha['pontuacao'] .'</td><td>'. $linha['data_hora'].'</td></tr>';
			}
			$contCor++;

		}
		echo '</table>';
	?>
	<br><hr><br><br>
	<h1 style="text-align:center; margin-top:30px;">Nível Cientista</h1>
	<?php

		$sql = "SELECT * FROM bigbang_ranking WHERE nivel='CIENTISTA' ORDER BY pontuacao DESC";
		$exe = mysqli_query($conecta,$sql);

		echo '<table><tr class="formatacao" ><td>Código</td><td>Nome</td><td>Nível</td><td>Pontuação</td><td>Data/Hora</td></tr>';
	    $contCor = 1;
		while($linha = mysqli_fetch_array($exe)){
			if ($contCor % 2 == 0) {
				echo '<tr class="cor1" ><td>' . $linha['codRanking'] . '</td><td>'. $linha['usuario'] . '</td><td>'. $linha['nivel'] . '</td><td>'. $linha['pontuacao'] .'</td><td>'. $linha['data_hora'].'</td></tr>';
			}else{
				echo '<tr class="cor2" ><td>' . $linha['codRanking'] . '</td><td>'. $linha['usuario'] . '</td><td>'. $linha['nivel'] . '</td><td>'. $linha['pontuacao'] .'</td><td>'. $linha['data_hora'].'</td></tr>';
			}
			$contCor++;

		}
		echo '</table>';
	?>
</body>
</html>