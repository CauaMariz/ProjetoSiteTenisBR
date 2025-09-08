<?php
session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
  <link rel="stylesheet" href="http://unpkg.com/swiper/swiper-bundle.min.css" />

  <style>
    html,
    body {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      flex-direction: column;
      height: 100%;
      display: flex;
      background-color: whitesmoke;
    }

    .pag {
      flex: 1;
    }

    header.cabecalho {
      display: flex;
      background-color: rgb(255, 240, 24);
      line-height: normal;
      align-items: center;
      box-shadow: 1px 1px 10px 1px rgba(34, 34, 34, 0.336);
      justify-content: center;
    }

    .cabecalho h1 {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif !important;
    }

    header.cabecalho ul {
      display: flex;
      list-style: none;
      display: inline-flex;
      padding: 0;
      margin: 0;
    }

    header.cabecalho li {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      margin-left: 5vh;
      font-weight: 600;
      transition: .5s;
      font-size: 18px;
      padding: 5px;
      border-radius: 8px;
    }

    .cabecalho li:hover,
    .footer li:hover {
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
      .cabecalho ul>li {
        display: none;
      }

      .btnMenu {
        display: flex;
        /* mostra o botão */
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
      padding-bottom: 2vw;
      z-index: 2;
    }

    .menu li {
      display: flex;
      margin-left: 2vw;
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

    .lastUL {
      margin-right: 1vw;
    }

    .footer a {
      color: black;
      text-decoration: none;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .footer li {
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .footer li:hover {
      a {
        color: rgb(255, 240, 24);
      }
    }

    .title {
      cursor: pointer;
    }

    .swiper-slide img {
      object-fit: cover;
      width: 100%;
      height: 100%;
      display: block;
    }

    .mySwiper {
      width: 100%;
      height: 91vh;
    }

    .containerFraseAproveite {
      width: 100%;
      height: fit-content;
      display: flex;
      margin: 0 auto;
      justify-self: center;
    }

    .mainSection {
      width: 100%;
      height: auto;
      display: block;
    }

    .fraseAproveite {
      display: flex;
      margin: 0 auto;
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      font-size: 30px;
    }

    .fraseAproveite span {
      color: rgb(12, 92, 12);
      font-style: italic;
      font-weight: 600;
      padding-left: 8px;
    }

    .barraOpcoes {
      display: inline;
      width: 100%;
      list-style: none;
      background-color: rgba(221, 221, 221, 1);
    }

    .ulOpcoes {
      display: flex;
      width: fit-content;
      list-style: none;
      transition: .4s;
      padding: 20px 30px 20px 30px;
      justify-content: center;
      margin-left: 4.5vw;
      border: 1px solid black;
    }

    .ulOpcoes li {
      white-space: nowrap;
      border-right: 1px solid black;
      margin-right: 2%;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      padding-right: 5px;
      cursor: pointer;
    }

    .ulOpcoes li:hover {
      color: rgb(12, 92, 12);
      font-weight: 600;
    }

    .produtos {
      width: auto;
      height: fit-content;
      display: flexbox;
      overflow: hidden;
      margin-left: 4.5vw;
    }

    .section1 {
      max-width: 80vh;
      display: inline-block;
    }

    .fotosSection1 {
      display: grid;
      grid-template-columns: repeat(6, 1fr);
      /* 4 colunas no PC */
      gap: 20px;
      justify-items: center;
    }

    .swiper-slide_ {
      width: 100%;
      max-width: 250px;
      height: auto;
    }

    /* Tablet grande */
    @media (max-width: 1024px) {
      .fotosSection1 {
        grid-template-columns: repeat(3, 1fr);
        /* 3 colunas */
      }
    }

    /* Tablet pequeno / celular grande */
    @media (max-width: 768px) {
      .fotosSection1 {
        grid-template-columns: repeat(2, 1fr);
        /* 2 colunas */
      }
    }

    /* Celular pequeno */
    @media (max-width: 480px) {
      .fotosSection1 {
        grid-template-columns: repeat(1, 1fr);
        /* 1 coluna */
      }
    }


    .swiper-slide_ img {
      width: 250px;
      height: 350px;
      padding-left: 30px;
    }

    .informacoesProduto {
      list-style: none;
      font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }

    .informacaoPreco {
      font-weight: 600;
    }

    .informacoesProduto span {
      font-weight: 600;
      color: rgb(12, 92, 12);
      cursor: pointer;
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
        <?php
        if (isset($_SESSION["email"]) && isset($_SESSION["nome"])) {
          echo "<li class = \"buttonPagUser\" onclick = \"location.href = 'pagUser.php'\">Minha conta</li>";
        } else {
          session_destroy();
        }
        ?>
      </ul>
      <div class="btnMenu" onclick="showMenu()">&#9776;</div>
    </header>

    <div class="menu">
      <li>Ver Mais</li>
      <li onclick="location.href = 'loginPag.php'">Login</li>
      <li onclick="location.href = 'cadastroPag.php'">Cadastrar</li>
      <li>Configurações</li>
      <li onclick = "location.href = '../php/logout.php'">Sair</li>
    </div>

    <div class="swiper mySwiper">
      <div class="swiper-wrapper">
        <!-- Slides com imagens -->
        <div class="swiper-slide">
          <img src="../assets/Sapatos para sua reunião de amanha A TenisBR também tem! (1).jpg" alt="Imagem 1" />
        </div>
        <div class="swiper-slide">
          <img src="../assets/ImagemBanner2! (1).jpg" alt="Imagem 2" />
        </div>
        <div class="swiper-slide">
          <img src="../assets/imgTenisMain3.jpg" alt="Imagem 3" />
        </div>
      </div>

      <!-- Paginação automática -->
      <div class="swiper-pagination"></div>
    </div>



    <div class="bloco">
      <img src="../assets/ChatGPT Image 2 de abr. de 2025, 19_41_23.png" alt="" class="imgTenis">
    </div>

    <div class="mainSection">
      <div class="containerFraseAproveite">
        <p class="fraseAproveite">Aproveite a semana da <span>CORRIDA 70% OFF!</span></p>
      </div>

      <div class="barraOpcoes">
        <ul class="ulOpcoes">
          <li onclick="location.href = '../html/pagEsportes.php'">Esporte</li>
          <li>Dia a Dia</li>
          <li>Infantil</li>
          <li>Street Wear</li>
          <li>Formal</li>
        </ul>
      </div>

      <nav class="produtos">
        <div class="section1">

          <div class="fotosSection1">
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato1.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 350,99</li>
                <li class="informacao">Tenis Nike Air Force</li>
                <li class="informacao">Unisex <span>Street Wear</span></li>
                <li class="informacao">Disponível no estoque: <span>35</span></li>
              </ul>

            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato2.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 250,90</li>
                <li class="informacao">Puma Suede Classic</li>
                <li class="informacao">Unisex <span>Dia a Dia</span></li>
                <li class="informacao">Disponível no estoque: <span>67</span></li>
              </ul>

            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato3.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 499,99</li>
                <li class="informacao">Tenis Nike Air Force Old</li>
                <li class="informacao">Unisex <span>Street Wear</span></li>
                <li class="informacao">Disponível no estoque: <span>15</span></li>
              </ul>

            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato4.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 199,90</li>
                <li class="informacao">Tenis casual Feminino</li>
                <li class="informacao">Feminino <span>Dia a Dia</span></li>
                <li class="informacao">Disponível no estoque: <span>98</span></li>
              </ul>

            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato5.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 399,90</li>
                <li class="informacao">Chuck Taylor All Star</li>
                <li class="informacao">Unisex <span>Dia a Dia</span></li>
                <li class="informacao">Disponível no estoque: <span>75</span></li>
              </ul>

            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato7.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 279,90</li>
                <li class="informacao">Sapato social masculino FormalMan</li>
                <li class="informacao">Masculino <span>Formal</span></li>
                <li class="informacao">Disponível no estoque: <span>57</span></li>
              </ul>
            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato8.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 199,99</li>
                <li class="informacao">Tenis Fila Unisex</li>
                <li class="informacao">Unisex <span>Dia a Dia</span></li>
                <li class="informacao">Disponível no estoque: <span>120</span></li>
              </ul>
            </div>

            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato9.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 379,90</li>
                <li class="informacao">Sapato Vans masculino</li>
                <li class="informacao">Masculino <span>Street Wear</span></li>
                <li class="informacao">Disponível no estoque: <span>17</span></li>
              </ul>
            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato10.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 279,90</li>
                <li class="informacao">Sapato Vans SkateBoard masculino</li>
                <li class="informacao">Masculino <span>Street Wear</span></li>
                <li class="informacao">Disponível no estoque: <span>12</span></li>
              </ul>
            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato11.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 479,90</li>
                <li class="informacao">Tenis de Corrida Neon</li>
                <li class="informacao">Masculino <span>Esporte</span></li>
                <li class="informacao">Disponível no estoque: <span>65</span></li>
              </ul>
            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato12.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 699,90</li>
                <li class="informacao">Tenis Nike Dunk Green</li>
                <li class="informacao">Unisex <span>Street Wear</span></li>
                <li class="informacao">Disponível no estoque: <span>7</span></li>
              </ul>
            </div>
            <div class="swiper-slide swiper-slide_">
              <img src="../assets/imagemSapato13.jpg" alt="">
              <ul class="informacoesProduto">
                <li class="informacaoPreco">R$ 129,90</li>
                <li class="informacao">Sandália Feminina Womens</li>
                <li class="informacao">Feminino <span>Dia a Dia</span></li>
                <li class="informacao">Disponível no estoque: <span>94</span></li>
              </ul>
            </div>
          </div>
        </div>

    </div>
    <div class="section2"></div>
    <div class="section3"></div>
    <div class="section4"></div>
    <div class="section5"></div>
    </nav>
  </div>
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


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js" integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
  <script src="http://unpkg.com/swiper/swiper-bundle.min.js"></script>

  <script>
    // Swiper do Banner
    const swiperBanner = new Swiper('.mySwiper', {
      loop: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
    let menu = document.querySelector(".menu");
    let btnMenu = document.querySelector(".btnMenu");

    function showMenu() {
      if (menu.classList.contains("exclMenu")) {
        menu.classList.add("showMenu")
        menu.classList.remove("exclMenu")

      } else {
        menu.classList.add("exclMenu")
        menu.classList.remove("showMenu")
      }
    }
  </script>
</body>

</html>