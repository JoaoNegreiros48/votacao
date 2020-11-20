<?php
// João Negreiros(04/02 12:44) // Leonardo Delgado(11/02 6:40) *Revisado;
include "../conecta.php";
session_start();
$email = mysqli_real_escape_string($conexao,$_POST['email']);
$password = mysqli_real_escape_string($conexao,$_POST['password']);

if(empty($email) || empty($password))
{
	echo "Campo Vazio!";
	echo "<script>setTimeout(function(){window.history.go(-1)},3000)</script>";
}

$sql = "select * from UserID where email = '$email' and senha = '$password'";
$query = mysqli_query($conexao, $sql);
$rows = mysqli_num_rows($query);

if ($rows > 0) {
	$user = mysqli_fetch_array($query);
	$cpfUser = $user["cpfUser"];
	$votoReal = $user["votoReal"];
	
	$_SESSION['user'] = $cpfUser;
	$_SESSION['votoUser'] = $votoReal;
	
	echo "redirect...";
	header("refresh:1;url=painel.php"); 
}
else{
	
	echo "Usuário não cadastrado!";
	echo "<script>setTimeout(function(){window.history.go(-1)},3000)</script>";

}
?>