<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>APIT</title>
	<link rel="shortcut icon" href="assets/APIT.png" />
	<link rel="stylesheet" type="text/css" href="styles/index.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
		rel="stylesheet">
</head>

<body>
	<nav>
		<div id="conteudo-nav">
			<div>
				<img class="imagem" src="assets/Logo.png" id="logo">
			</div>
			<ul>


				<li>
					Inicío
				</li>



				<li>
					Aulas
				</li>


				<li>
					<a id="botao-login" href="cadastro.php">
						Login
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<main>
		<div id="container-info">
			<h1>
				Sobre a APIT <br>
			</h1>
			<p>
				APIT Associação Promotora de Instrução e Trabalho com os programas Aprendiz Jovem foi criado para
				incentivar os empreendedores de todo território nacional,
				do 2º e do 3º setor, a estabelecerem perspectivas para a juventude através de inclusão de aprendizes
				adolescentes no mundo do trabalho. </br>
				É uma ação promovida para incentivar a aplicação prática da Lei 10.097, que regulariza o trabalho de
				adolescentes de 14 a 24 anos, e, sobretudo, para qualificar a inclusão social de jovens que estejam
				vivendo situações de vulnerabilidade pessoal e social. O Programa conta com a parceria e certificada
				pelo CMDCA – Osasco e do Ministério do Trabalho.
			</p>

			<section id="contato">
				<a href="https://www.apitaprendiz.org.br" target="_blank">
					<img src="https://www.freepnglogos.com/uploads/logo-website-png/logo-website-website-logo-png-transparent-background-background-15.png"
						alt="WhatsApp" style="width: 35px; height: 35px;">
				</a>
				<a href="https://www.instagram.com/apit.aprendiz/" target="_blank">
					<img src="https://png.pngtree.com/png-vector/20221018/ourmid/pngtree-instagram-social-platform-icon-png-image_6315976.png"
						alt="Instagram" style="width: 35px; height: 35px;">
				</a>
			</section>

		</div>
		<div id="container-img">
			<img class="imagem" src="assets/home.svg" id="home">
		</div>

	</main>
</body>

</html>