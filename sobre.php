<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>APIT</title>
	<link rel="shortcut icon" href="assets/APIT.png" />
	<link rel="stylesheet" type="text/css" href="styles/sobre.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body>
	<nav>
		<div id="conteudo-nav">
			<div>
				<img class="imagem" src="assets/Logo.png" id="logo">
			</div>
			<ul>
				<li>
					<a href="index.php" id="1">Inicío</a>
				</li>
				<li>
					<a id="botao-login">
						Perfil
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<main>
		<div id="container-info">
			<div id="informacoes-curso">
				<h1 class="titulo">
					Curso de Jovem Aprendiz
				</h1>
				<h2 class="sub-titulo">
					Trabalhamos para educar e empregar jovens em busca de um futuro melhor!
				</h2>
			</div>
			<div id="o-que-vamos-aprender">
				<h1 class="titulo">
					Confira as disciplinas do curso:
				</h1>
				<div>
					<ul class="conteudos">
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Cidadania e Participação Social - 36h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Direito do Trabalho - 26h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Educação para o Trabalho - 40h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Matemática Aplicada e Financeira - 50h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Português e Redação Comercial - 56h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Gestão Empresarial - 50h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Introdução a Administração - 20h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Administração Financeira - 20h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Contabilidade Geral - 24h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Administração de RH - 20h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Administração e Marketing - 30h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Economia e Mercado de Capitais - 40h
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/check.svg" class="icon">
								Administração de Materiais e Produtos - 24h
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div id="este-curso-inclui">
				<h1 class="titulo">
					Este curso inclui:
				</h1>
				<div>
					<ul class="conteudos">
						<li class="conteudo">
							<div class="item">
								<img src="assets/play.svg" class="icon">
								436 horas de aulas online
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/file.svg" class="icon">
								Atividades
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/download.svg" class="icon">
								Recursos para download
							</div>
						</li>
						<li class="conteudo">
							<div class="item">
								<img src="assets/mobile.svg" class="icon">
								Acesso no dispositivo móvel
							</div>
						</li>

					</ul>
				</div>
			</div>
		</div>
		<div id="container-img">
			<img class="imagem" src="assets/aula.jpg" id="aula">
			<div id="detalhes-curso">
				<h2 class="sub-titulo">
					Tenha acesso a todo o conteúdo
				</h2>
				<button type="button" disabled>
					Em progresso
				</button>
				<ul class="detalhes">
					<li>
						<div class="item">
							<img src="assets/check.svg" class="icon">
							Responsabilidade Social, Excelência, Ética e Transparência.
						</div>
					</li>
					<li>
						<div class="item">
							<img src="assets/check.svg" class="icon">
							Ferramentas de engajamento de aprendizado.
						</div>
					</li>
					<li>
						<div class="item">
							<img src="assets/check.svg" class="icon">
							Curso com atualizações garantidas pela associação.
						</div>
					</li>
				</ul>

			</div>

		</div>


	</main>

</body>


</html>