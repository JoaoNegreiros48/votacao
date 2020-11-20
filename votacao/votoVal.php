<?php 
include "../conecta.php";
session_start();
if(isset($_SESSION['user'])){$userCPF = $_SESSION['user'];}else{$userCPF = 0;} 

$sqlVal = mysqli_query($conexao, "select * from UserID where cpfUser = $userCPF");
$row = mysqli_num_rows($sqlVal);

if($row > 0){
$votoRealizado = $_SESSION['votoUser'];

if($votoRealizado == "N"){ 
$cpfCand = filter_input(INPUT_GET, "cpfCand", FILTER_DEFAULT);
$numVotos = filter_input(INPUT_GET, "numVotos", FILTER_DEFAULT);

$numVotos++;

mysqli_query($conexao, "UPDATE UserID SET votoReal='S'");
$_SESSION['votoUser'] = "S";
mysqli_query($conexao, "UPDATE voto SET qtdeVotos=$numVotos WHERE cpfCand=$cpfCand");

echo "redirect...";
header("refresh:1;url=painel.php");

	

	}else{
	echo "redirect...";
	header("refresh:1;url=index.php");
	
	}

}else{
	echo "redirect...";
	header("refresh:1;url=index.php");
}

?>