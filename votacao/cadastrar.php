<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <!-- CSS CUSTOM -->
      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <style type="text/css">
        .centro_pag{
          position: absolute;
          top: 50%;
          left: 50%;
          transform: translate(-50%, -50%);
        }
        input {
          color: #e0f7fa;
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

      <form action="cadastro.php" method="POST">
        <div class="container">
          <div class="card-panel pink darken-4">
            <div class="row container">
              <div class="col s6">
                <div class="input-field pink-text text-darken-4">
                  <input type="text" name="name" placeholder="Roberto Alvaro Cardoso">
                  <label for="nome">Digite seu Nome</label>
                </div>
              </div>
              <div class="col s6">
                <div class="input-field pink-text text-darken-4">
                  <input type="text" name="cpf" placeholder="123.123.123-00">
                  <label for="cpf">CPF</label>
                </div>
              </div>
            </div>
            <div class="row container">
                <div class="col s6">
                  <div class="input-field pink-text text-darken-4">
                    <input type="text" name="email" placeholder="jorginho.pedro@gmail.com">
                    <label for="email">Email</label>
                  </div>
                </div>
                <div class="col s6">
                  <div class="input-field pink-text text-darken-4">
                    <input type="text" name="password" placeholder="">
                    <label for="senha">Senha</label>
                  </div>
                </div>
            </div>
            <div class="right">
              <button class="btn waves-effect waves-light pink lighten-3 pink-text text-darken-4" type="submit" name="action">
                  Cadastrar<i class="material-icons right">send</i>
            </div>
          </div>
        </div>
      </form>

      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>