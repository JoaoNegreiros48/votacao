<?php
// João Negreiros(04/02 12:39)
$host = 'localhost';
$banco = 'ELEICAO';
$usuario= 'root'; // usuario do banco
$senha = ''; // senha do banco
$conexao = mysqli_connect($host, $usuario, $senha, $banco) or die(mysqli_error());

mysqli_set_charset($conexao, "utf8");

?>