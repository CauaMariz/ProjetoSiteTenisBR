<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    html,
    body {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      flex-direction: column;
      height: 100%;
      display: flex;
    }

    .pag {
      flex: 1;
    }

    .cabecalho {
      display: flex;
      background-color: rgb(255, 240, 24);
      line-height: normal;
      align-items: center;
      box-shadow: 1px 1px 10px 1px rgba(34, 34, 34, 0.336);
      justify-content: center;
    }

    .cabecalho h1 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    ul {
      display: flex;
      list-style: none;
      display: inline-flex;
    }

    .footer li {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      margin-left: 5vh;
      font-weight: 600;
      transition: .5s;
      font-size: 18px;
      padding: 5px;
      border-radius: 8px;
    }

    .footer li:hover {
      transition: .5s;
      background-color: rgb(34, 34, 34);
      cursor: pointer;
      border-radius: 8px;
      padding: 5px;
      color: rgb(255, 240, 24);
    }

    .cabecalho li {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      margin-left: 5vh;
      font-weight: 600;
      transition: .5s;
      font-size: 18px;
      padding: 5px;
      border-radius: 8px;
    }

    .cabecalho li:hover {
      transition: .5s;
      background-color: rgb(34, 34, 34);
      cursor: pointer;
      border-radius: 8px;
      padding: 5px;
      color: rgb(255, 240, 24);
    }

    .menu li {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      margin-left: 5vh;
      font-weight: 600;
      transition: .5s;
      font-size: 18px;
      padding: 5px;
      border-radius: 8px;
    }

    .menu li:hover {
      transition: .5s;
      background-color: rgb(34, 34, 34);
      cursor: pointer;
      border-radius: 8px;
      padding: 5px;
      color: rgb(255, 240, 24);
    }

    .bloco {
      position: relative;
      float: right;
    }

    .imgTenis {
      position: relative;
      width: 200px;
      rotate: -20deg;
      top: -.5vh;
      right: 7vh;
    }

    .btnMenu {
      position: absolute;
      right: 1vh;
      font-size: 30px;
      display: none;
      cursor: pointer;
    }

    @media (max-width: 1200px) {
      .footer li {
        font-size: 15px;
      }
    }

    @media (max-width: 900px) {
      .footer li {
        font-size: 12px;
      }
    }

    @media (max-width: 760px) {
      .footer li {
        font-size: 10px;
      }
    }

    @media (max-width: 550px) {
      .footer li {
        font-size: 7px;
      }
    }

    @media (max-width: 690px) {
      .cabecalho li {
        font-size: 15px;
      }
    }

    @media (max-width: 490px) {
      .imgTenis {
        width: 100px;
      }
    }

    @media (max-width:300px) {
      .imgTenis {
        right: 3vh;
        width: 80px;
      }
    }

    @media (max-width: 650px) {
      .cabecalho ul {
        display: none;
      }

      .btnMenu {
        display: flex;
      }
    }

    @media (min-width: 650px) {
      .menu {
        display: none;
      }
    }

    .menu {
      position: absolute;
      background-color: rgb(255, 240, 24);
      right: 0;
      border-radius: 0 0 10px 10px;
      overflow: hidden;
      font-size: 16px;
      text-decoration: none;
      list-style: none;
      padding-bottom: 1vw;
    }

    .menu li {
      display: flex;
      margin-left: 2vw;
    }

    .showMenu {
      transition: .5s;
      width: 140px;
      height: 170px;
    }

    .exclMenu {
      transition: .5s;
      width: 0;
      height: 0;
    }

    .footer {
      width: 100%;
      display: flex;
      flex-wrap: wrap;
      background-color: rgba(221, 221, 221, 1);
      justify-content: space-around;
      margin-top: 10vh;
    }

    .footer ul {
      list-style: none;
      display: block;
      align-content: space-between;
      margin-left: -5vw;
    }

    .footer a {
      color: black;
      text-decoration: none;
    }

    .footer li:hover {
      a {
        color: rgb(255, 240, 24);
      }
    }

    .mainSection {
      display: flex;
      width: 100%;
      align-items: center;
      justify-content: center;
    }

    .loginContainer {
      display: flex;
      width: fit-content;
      min-width: 400px;
      min-height: 400px;
      height: 100%;
      padding: 3vw 4vw 2vw 4vw;
      box-shadow: 5px 5px 10px 0px gray;
      justify-content: center;
      align-items: start;
      border-top-right-radius: 20px;
      border-bottom-right-radius: 20px;
    }

    .loginForm {
      justify-content: space-between;
    }

    .loginForm #inputEmail,
    #inputSenha {
      display: block;
      justify-self: start;
      padding: 12px 12px 12px 0;
      width: 240px;
      border: none;
      margin-bottom: 2vh;
      border-bottom: 1px solid grey;
    }

    .loginForm input::placeholder {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      text-align: left;
    }

    .loginForm button {
      background-color: whitesmoke;
      padding: 10px;
      width: 266px;
      border: 1px solid gray;
      border-radius: 16px;
      cursor: pointer;
      font-weight: 600;
      color: black;
      transition: .5s;
      display: block;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .loginForm button:hover {
      transition: .5s;
      background-color: rgb(255, 240, 24);
      color: black;
      scale: 1.033;
    }

    .loginForm .LIs {
      display: flex;
      justify-content: space-between;
      list-style: none;
      padding: 0;
      margin-top: 5vh;
      gap: 70px;
    }

    .loginForm .LIs li {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }


    .title {
      cursor: pointer;
    }

    .titleForm {
      display: flex;
      margin: 0;
      justify-self: center;
      font-size: 5vh;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin-bottom: 5vh;
    }

    input:focus {
      outline: none;
    }
  .containerOla {
      display: flex;
      width: 350px;
      word-wrap: normal;
      min-width: 200px;
      min-height: 400px;
      height: 100%;
      padding: 3vw 4vw 2vw 4vw;
      border-top-left-radius: 20px;
      border-bottom-left-radius: 20px;
      box-shadow: -5px 5px 10px 0px gray;
      justify-content: center;
      align-items: start;
      background: linear-gradient(320deg, rgb(12, 92, 12), rgb(255, 240, 24));
      background-size: 200% 200%;
      background-position: left;
      transition: background-position 0.5s;
    }

    .containerOla:hover {
        background-position: right;
    }

    .fraseCadastro {
      max-width: 260px;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-size: 18px;
    }
    
    .titleOla {
      max-width: 350px;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      font-size: 5vh;
      margin-top: -.2vh;
    }
    .btnIrCadastro{
      padding: 5px;
      border-radius: 10px;
      border: none;
      box-shadow: 1px 1px 6px grey;
      transition: .5s;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      cursor: pointer;
    }
    .btnIrCadastro:hover{
      transition: .5s;
      padding: 10px;
    }
  </style>
</head>

<body>

  <div class="pag">
    <header class="cabecalho">
      <h1 class="title" onclick="location.href = 'home.php'">Tenis BR</h1>
      <ul>
        <li>Ver Mais</li>
        <li onclick="location.href = 'loginPag.php'">Login</li>
        <li onclick="location.href = 'cadastroPag.php'">Cadastrar</li>
        <li>Configurações</li>
        <li onclick="location.href = '../php/logout.php'">Sair</li>
      </ul>

      <div class="btnMenu" onclick="showMenu()">&#9776;</div>

    </header>
    <div class="bloco">
      <img src="../assets/ChatGPT Image 2 de abr. de 2025, 19_41_23.png" alt="" class="imgTenis">
    </div>

    <div class="menu">
      <li>Ver Mais</li>
      <li onclick="location.href = 'loginPag.php'">Login</li>
      <li onclick="location.href = 'cadastroPag.php'">Cadastrar</li>
      <li>Configurações</li>
      <li>Sair</li>
    </div>

    <section class="mainSection">

      <div class="containerOla">
        <div class="mensagemOla">
          <h1 class="titleOla">Olá, seja bem vindo!</h1>
          <p class="fraseCadastro">Caso voce nao tenha uma conta, clique no botao abaixo e faca já seu cadastro!</p>

          <button class="btnIrCadastro" onclick="location.href = 'cadastroPag.php' ">Ir para o cadastro</button>
        </div>
      </div>

      <div class="loginContainer">
        <form action="../php/configLogin.php" class="loginForm" method="post">
          <h1 class="titleForm">Entre com sua conta.</h1>

          <input type="email" name="emailUser" placeholder="Digite seu email: " id="inputEmail" required>
          <input type="password" name="senhaUser" placeholder="Digite sua senha: " id="inputSenha" required>

          <button type="submit">Entrar</button>

          <ul class="LIs">
            <li>Esqueceu sua senha?</li>
            <li>
              <label for="input">Lembrar de mim</label>
              <input type="checkbox" id="input">
            </li>
          </ul>

        </form>
      </div>
    </section>

  </div>

  <footer class="footer">
    <ul>
      <li><strong>Institucional</strong></li>
      <li><a href="#">Sobre nós</a></li>
      <li><a href="#">Trabalhe conosco</a></li>
      <li><a href="#">Política de privacidade</a></li>
    </ul>

    <ul>
      <li><strong>Ajuda</strong></li>
      <li><a href="#">FAQ</a></li>
      <li><a href="#">Fale conosco</a></li>
      <li><a href="#">Trocas e devoluções</a></li>
    </ul>

    <ul>
      <li><strong>Serviços</strong></li>
      <li><a href="#">Entrega</a></li>
      <li><a href="#">Rastreamento de pedido</a></li>
      <li><a href="#">Garantia</a></li>
    </ul>

    <ul>
      <li><strong>Redes Sociais</strong></li>
      <li><a href="#">Instagram</a></li>
      <li><a href="#">Facebook</a></li>
      <li><a href="#">YouTube</a></li>
    </ul>

    <ul>
      <li><strong>Formas de Pagamento</strong></li>
      <li>Pix</li>
      <li>Cartão de Crédito</li>
      <li>Boleto Bancário</li>
    </ul>
  </footer>

  <script src="../scripts/scriptHome.js"></script>
</body>

</html>