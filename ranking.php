<!DOCTYPE html>
<html>
<head>
		<!-- Meta tags Obrigatórias -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

            <!-- Bootstrap CSS -->
             <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css">
            <script type="text/javascript" src="jquery.js"></script>

            <meta http-equiv="pragma" content="no-cache">

            <title>Big Bang Game</title>

            <link rel="icon" href="#" />

            <link rel="stylesheet" type="text/css" href="css/estilo.css"/> 
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
		<div class="barra">
			<div class="row justify-content-center">
					<div class="col-4">

						<div><img id="ranking" src="img/nome_ranking.png" alt=""/></div>
					
						
					</div>

			</div>

			<div class="row justify-content-center">
				<div class="col-4">

					<div class="fora-ranking">
						<div class="dentro">
							<div class="blocos"><br>
								<img src="img/trofeu/bronze.png" width="48" height="66">
								<div class="iniciante">
									<h5>INICIANTE</h5>
									<br>
									<?php
										require('Conexao.php');

										$sql = "SELECT * FROM bigbang_ranking WHERE nivel='INICIANTE' ORDER BY pontuacao DESC LIMIT 10";
										$exe = mysqli_query($conecta,$sql);

									    $contCor = 1;
										while($linha = mysqli_fetch_array($exe)){
											if ($contCor % 2 == 0) {
												echo '<h6 class="cor1">'.$contCor.'. '.$linha['usuario'].' - '.$linha['pontuacao'].' pts</h6>';
											}else{
												echo '<h6 class="cor2">'.$contCor.'. '.$linha['usuario'].' - '.$linha['pontuacao'].' pts</h6>';
											}
											$contCor++;

										}
									?>
								</div>
							</div>
						</div>
				</div>
		</div>
			<div class="col-4">
					<div class="blocos"><br>
						<img src="img/trofeu/ouro.png" width="48" height="66">
						<div class="cientista">
							<h5>CIENTISTA</h5><br>
							<?php

								$sql = "SELECT * FROM bigbang_ranking WHERE nivel='CIENTISTA' ORDER BY pontuacao DESC LIMIT 5";
								$exe = mysqli_query($conecta,$sql);

							    $contCor = 1;
								while($linha = mysqli_fetch_array($exe)){
									if ($contCor % 2 == 0) {
										echo '<h6 class="cor1">'.$contCor.'. '.$linha['usuario'].' - '.$linha['pontuacao'].' pts</h6>';
									}else{
										echo '<h6 class="cor2">'.$contCor.'. '.$linha['usuario'].' - '.$linha['pontuacao'].' pts</h6>';
									}
									$contCor++;

								}
							?>
						</div>
					</div>
				</div>
		

				<div class="col-4">
					<div class="blocos"><br>
						<img src="img/trofeu/prata.png" width="48" height="66">
						<div class="curioso">
							<h5>CURIOSO</h5><br>
							<?php

								$sql = "SELECT * FROM bigbang_ranking WHERE nivel='CURIOSO' ORDER BY pontuacao DESC LIMIT 5";
								$exe = mysqli_query($conecta,$sql);

							    $contCor = 1;
								while($linha = mysqli_fetch_array($exe)){
									if ($contCor % 2 == 0) {
										echo '<h6 class="cor1">'.$contCor.'. '.$linha['usuario'].' - '.$linha['pontuacao'].' pts</h6>';
									}else{
										echo '<h6 class="cor2">'.$contCor.'. '.$linha['usuario'].' - '.$linha['pontuacao'].' pts</h6>';
									}
									$contCor++;

								}
							?>
						</div>
					</div>

				</div>

				
			</div>

						



		<div class="row justify-content-start">
					<div class="col-2">


		 		<div id="bt_som"></div>
		 		<div id="bt_voltar"><a href="index.html"><img class="efeito" src="img/voltar.png" title="Voltar"></a></div>


		 	</div>
	    </div>
    </div>
    </body>
</html>
