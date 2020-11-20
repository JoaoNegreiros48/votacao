<?php
// João Negreiros(04/02 12:47)
include "../conecta.php";
session_start();
$email = mysqli_real_escape_string($conexao, $_POST['email']);
$password = mysqli_real_escape_string($conexao, $_POST['password']);
$name = mysqli_real_escape_string($conexao, $_POST['name']);
$CPF = mysqli_real_escape_string($conexao, $_POST['cpf']);
$sql = "select * from UserID where email = '$email' or cpfUser = $CPF";
$query = mysqli_query($conexao, $sql);
$rows = mysqli_num_rows($query);

if ($rows > 0) {

	echo "USUARIO JÁ CADASTRADO!";
	echo "<script>setTimeout(function(){window.history.go(-1)},1000)</script>";

}
else{
	$sql = "insert into UserID values('$name', '$CPF', '$password', '$email','N')";
	$query = mysqli_query($conexao, $sql);
	if ($query)
	{
		echo "redirect...";
		header("refresh:1;url=index.php");
		
	}
	
}
?>