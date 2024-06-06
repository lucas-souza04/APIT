<?php

define('HOST', 'localhost');
define('USUARIO', 'id22279612_projeto');
define('SENHA', 'Projeto@uni9');
define('DB', 'id22279612_cadastro
');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die('Não foi possivel conectar');
