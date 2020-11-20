<?php
include "../conecta.php";
session_start();
if(isset($_SESSION['user'])){$userCPF = $_SESSION['user'];}else{$userCPF = 0;} 

$sqlVal = mysqli_query($conexao, "select * from UserID where cpfUser = $userCPF");
$row = mysqli_num_rows($sqlVal);

if($row > 0){
$votoRealizado = $_SESSION['votoUser'];
?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <link rel="stylesheet" type="text/css" href="style_painel.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body style="background-color: #ffcdd2">

      <nav class="red accent-2">
        <div class="nav-wrapper" style="background-color: #880e4f;">
          <a href="#" class="brand-logo center">Votação</a>
          <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><a href="">Propostas</a></li>
            <li><a href="">Videos</a></li>
            <li><a href="">Projetos</a></li>
            <li><a href="">Envolvidos</a></li>
          </ul>
        </div>
      </nav>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>

<?php

/* CPFS:

13579053414 - Amelia
12345678901 - Gabriel
14509765290 - John
98765409872 - Leonardo
15678901234 - Maria

*/
  echo '<div class="row" style="text-align:center; margin-left:225px; margin-top: 100px;">';
  
  $sql = mysqli_query($conexao, "select * from candidato order by nomeCand ASC");
  while($candidato = mysqli_fetch_array($sql)){
  
	$nomeCand = $candidato["nomeCand"];
	$cpfCand = $candidato["cpfCand"];
	
	//-------Tabela Votos
	$sqlCPF = mysqli_query($conexao, "select * from voto where cpfCand = $cpfCand ");
	$voto = mysqli_fetch_array($sqlCPF);
	$numVotos = $voto["qtdeVotos"];

  
echo '
              
            <div class="col s2">
              <div class="card hoverable" style="background-color: #880e4f;" >
                <div class="card-image">
                  <img src="Fotos/'.strtok($nomeCand," ").'.jpg">
                  <span class="card-title">'.strtok($nomeCand," ").'</span>
                </div>
                <div class="card-content">
					<p style="color: pink; font-size: 20px"><b>'.$numVotos.' votos</b></p>
					<br>
                  <p style="color: white;">I am a very simple card. I am good at containing small bits of information.
                  I am convenient because I require little markup to use effectively.</p>
                </div>
				<div class="card-action">
				';
				
				
				if($votoRealizado == "N"){
				echo '<a class="white-text text-white" href="votoVal.php?'."
				numVotos=$numVotos&&cpfCand=$cpfCand".'
				"
				>VOTAR</a>';
				}else{echo '<p style="color: pink;">Voto Realizado!</p>';}
				
				
				echo '
				</div>
              </div>
            </div>
   ';     
  } 
  
  echo "</div>";
  
}else{
	echo "redirect...";
	header("refresh:1;url=index.php");
}



?>


    </body>
  </html>