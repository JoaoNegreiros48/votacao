<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

      <style>
        .centro_pag{
          position: absolute;
          top: 50%;
          left: 75%;
          transform: translate(-50%, -25%);
        }

        input {
          color: #ffcdd2;
        }
      </style>

      <!-- CORES
      #ffcdd2 red lighten-4
      #ef9a9a red lighten-3
      #f48fb1 pink lighten-3
      #ad1457 pink darken-3
      #880e4f pink darken-4 -->
    </head>

    <body class="red lighten-4">

      <div class="row">
        <div class="col s6">
          <div class="center">
            <img src="img_logo.png" class="responsive-img" width="250px" height="250px">  
          </div>
          
          <h4 class="center pink-text text-darken-4"><b>Conheça um pouco dos candidatos</b></h4>
          <div class="row">
            <div class="col s10 offset-s1">
            <h5 class="flow-text pink-text text-darken-4">O objetivo desta votação é a eleição do novo(a) Secretário(a) da Cultura do Brasil. Os(as) candidatos(as) estarão representando o interesse do povo em relação ao cinema, artes, música e toda a cultura brasileira, assim, está nas mãos de nosso povo selecionar o(a) mais apto para esse serviço que será prestado. Sendo eles(as):</h5>
            </div>
          </div>
          <!-- Candidatos -->
          <div class="col s12">
            <div class="card-panel hoverable pink darken-4 z-depth-1">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="Fotos/Gabriel.jpg" alt="" class="circle responsive-img">
                </div>
                <div class="col s10">
                  <span class="pink-text text-lighten-5">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12">
            <div class="card-panel hoverable pink darken-4">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="Fotos/João.jpg" alt="" class="circle responsive-img">
                </div>
                <div class="col s10">
                  <span class="pink-text text-lighten-5">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12">
            <div class="card-panel hoverable pink darken-4">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="Fotos/Leonardo.jpg" alt="" class="circle responsive-img">
                </div>
                <div class="col s10">
                  <span class="pink-text text-lighten-5">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12">
            <div class="card-panel hoverable pink darken-4">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="Fotos/Amelia.jpg" alt="" class="circle responsive-img">
                </div>
                <div class="col s10">
                  <span class="pink-text text-lighten-5">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col s12">
            <div class="card-panel hoverable pink darken-4">
              <div class="row valign-wrapper">
                <div class="col s2">
                  <img src="Fotos/Maria.jpg" alt="" class="circle responsive-img">
                </div>
                <div class="col s10">
                  <span class="pink-text text-lighten-5">
                    This is a square image. Add the "circle" class to it to make it appear circular.
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>


        <!-- Parte do LOGIN -->
        <div class="col s6 card-panel">
          <div class="centro_pag" id="">
            <div class="card-panel pink darken-4">
              <div class="center-align">
            <div class="cyan-text text-lighten-5">
                <h4>Faça o Login para continuar Votando</h4>         
            </div>
            <br>
            <form action="loginVal.php" method="POST">
              <div class="input-field pink-text text-darken-4">
                <input type="text" name="email" id="usuario" placeholder="contato@email.com">
                <label for="usuario">Email</label>
              </div>
              <div class="input-field pink-text text-darken-4">
                <input type="password" name="password" id="senha" placeholder="">
                <label for="senha">Senha</label>
              </div>
              </div>
              <div class="row center-align">
                <div class="col s4">
                  <a href="cadastrar.php" class="waves-effect waves-light pink lighten-3 pink-text text-darken-4 btn">Cadastrar<i class="material-icons right">send</i></a>
                </div>
                <div class="col s4 offset-s4">
                  <button class="btn waves-effect waves-light pink lighten-3 pink-text text-darken-4" type="submit" name="action">
                  Confirmar<i class="material-icons right">send</i>
                  </button>
                </div>
              </div>
              
            </form>
          
            </div>
          </div>
        </div>
      </div>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>