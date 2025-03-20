<!DOCTYPE html>
<html lang="pt-br">

<head>
  <title>Conecte</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <!-- Primeira seção -->
  <section class="section" id="section-home">
    <nav id="nav" class="d-flex justify-content-between align-items-center px-4 py-3 shadow">
      <!-- logo - esquerda -->
      <a href="#section-home">
        <img src="../conecte/img/logo.png" alt="Logo" class="logo">
      </a>
      <!-- links - direita -->
      <div id="links" class="d-flex gap-3"> <!-- display flex, gap é espaço entre os itens -->
        <a href="#section-home" class="text-decoration-none text-dark fw-bold">Home</a> <!-- texto preto, em negrito -->
        <a href="#section-quemsomos" class="text-decoration-none text-dark fw-bold">Quem Somos</a>
        <a href="#section-equipe" class="text-decoration-none text-dark fw-bold">Equipe</a>
        <a href="#section-contato" class="text-decoration-none text-dark fw-bold">Contato</a>
      </div>
    </nav>

    <div id="container-home" class="text-center text-white">
      <h1 class="fs-1">Conectando sua empresa ao futuro.</h1> <!-- font-size 1 -->
      </br>
      <p>Sente que os clientes não encontram a sua empresa? Sua identidade visual não transmite sua essência? Conecte-se com a Conecte e te conectamos com o seu cliente!</p>
      </br>
      <button class="next-section text-white" onclick="window.location.href='#section-quemsomos';">Saiba Mais</button>
    </div>
  </section>

  <!-- Segunda seção -->
  <section class="section" id="section-quemsomos">
    <div id="container-quemsomos" class="text-center text-dark">
      <p class="m-0">A Conecte nasceu com o objetivo de transformar a comunicação das pequenas empresas, oferecendo soluções inovadoras e acessíveis que simplificam a conexão com o público e promovem uma gestão eficiente. Nosso propósito é ajudar empresários a ganharem autonomia, se identificarem com suas marcas e conquistarem novos clientes, superando desafios de comunicação e atingindo novos patamares no mercado. Valorizamos a acessibilidade e a humanização, garantindo que negócios de todos os portes tenham a chance de crescer e prosperar com o nosso apoio dedicado.</p> <!-- m é de margim -->
      <br>
      <button class="next-section next-section-equipe text-white text-center m-1" onclick="window.location.href='#section-equipe';">Conheça nossa equipe!</button>
      <!-- imagens dos sites que fizemos -->
      <h1 class="text-black fs-4 m-5">Nossos Projetos:</h1>
      <div class="img-sites">
        <img src="../conecte/img/site1.png" class="img-quemsomos" alt="Imagem 1">
        <img src="../conecte/img/site2.png" class="img-quemsomos" alt="Imagem 2">
        <img src="caminho/para/imagem.jpg" class="img-quemsomos" alt="Imagem 3">
        <img src="caminho/para/imagem.jpg" class="img-quemsomos" alt="Imagem 4">
      </div>
    </div>
  </section>

  <!-- Terceira seção -->
  <section class="section" id="section-equipe">
    <div class="d-flex p-5" id="container-equipe"> <!-- display flex, padding 5 -->
      <!-- retângulo de texto e setinha -->
      <div class="col-md-6 d-flex flex-column justify-content-center"> <!-- coluna de tamanho médio, largura 6 (metade da largura da tela) -->
        <div id="caixa-texto" class="caixa-texto text-center p-4">
          <p id="conteudo-texto">Transforma designs em páginas reais, cuida para que funcione em qualquer dispositivo e garante que a navegação seja simples e agradável. Utiliza as linguagens HTML, CSS e JavaScript e trabalha junto com o back-end para integrar funções ao site ou app. Em resumo, torna a experiência do usuário funcional e atrativa.</p> <!-- texto do retangulo -->
        </div>

        <!-- setinha para mudar o texto -->
        <div class="arrow-container text-center mt-3"> <!-- margin top 3 -->
          <button id="botao-mudar-texto"> <!-- botao q tem a setinha pra mudar o texto -->
            <i class="bi bi-arrow-right"></i> <!-- i de icone, "bi" é pro navegador caçar na biblioteca do bootstrap icons, por fim exibe seta apontando pra direita -->
          </button>
        </div>
      </div>

      <!-- Imagem -->
      <div class="equipe-img col-md-6"> <!-- na metade da tela -->
        <img src="../conecte/img/equipe-img.jpg" alt="Imagem da Seção Equipe">
      </div>
    </div>
  </section>

  <!-- Quarta seção -->
  <section class="section" id="section-contato">
    <div id="contato-conteudo">
      <!-- laiss coloca ai -->
    </div>
  </section>

  <script src="../conecte/js/javascript.js"> </script>
</body>

</html>