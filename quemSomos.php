<?php
  include_once("templates/header.php");
?>

<nav class="navbar navbar-expand-md navbar-light">

  <a href="<?php $BASE_URL?>index.php" class="navbar-brand"><img src="img/logo.png" alt="Imagem logo"></a>

  <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-target">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="nav-target">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php $BASE_URL?>index.php">Home</a> <!--tag de âncora-->
      </li>
      <li class="nav-item">
        <a class="nav-link" href="quemSomos.php">Quem Somos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contatos">Contato</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php $BASE_URL?>admin.php">Administrador</a>
      </li>
    </ul>
  </div>
</nav>	

<div class="container border-somos">
        <h1 class="titulo-pag-quem-somos">Quem Somos</h1>
        <div class="imagem-centralizada">
            <img class="img-pag-quem-somos" src="img/img1.jpg">
        </div>
        <p class="line-p">A FN BEAUTY é uma loja online especializada em maquiagem, que oferece uma ampla gama de produtos de beleza de alta qualidade e das mais variadas marcas. Nós nos esforçamos para fornecer a você, nossas queridas Princesas, um ambiente onde possam aprender sobre maquiagem e ter acesso a uma variedade de produtos que as façam se sentir ainda mais lindas e confiantes. Nossa loja online oferece uma alta variedade de produtos de qualidade, incluindo base, corretivo, pó, blush, iluminador, sombras, delineador, rímel, batom, entre outros. Trabalhamos apenas com marcas renomadas e confiáveis, garantindo que cada produto que oferecemos tenha sido cuidadosamente selecionado para oferecer o melhor desempenho e resultados. <br> Sabemos que a maquiagem pode ser uma forma poderosa de expressão pessoal, ajudando você a se sentir confiante e bela em sua própria pele. É por isso que nos dedicamos a fornecer as ferramentas e os recursos necessários para ajudá-la a alcançar o look que deseja. Quer esteja procurando um visual natural para o dia a dia ou uma maquiagem glamourosa para uma ocasião especial, temos tudo o que você precisa.</p>
        <h2>Nossa Missão</h2>
        <p class="line-p">Como uma loja online dedicada a fornecer as melhores opções de beleza e maquiagem, nossa missão é ser uma referência no setor, oferecendo sempre um serviço excepcional com um toque de amor. Nosso compromisso é atender às necessidades de nossos clientes com excelência em todos os aspectos, desde a qualidade dos nossos produtos até o atendimento ao cliente.</p>
        <div class="imagem-centralizada">
            <img class="img-pag-quem-somos" src="img/img2.jpg">
        </div>
            <h2>Visão</h2>
        <p class="line-p">Nós nos dedicamos a sermos uma loja online referência no ramo da beleza e maquiagens, sempre buscando servir com excelência e amor. Desde o início, colocamos o foco no cliente, e é por isso que trabalhamos duro para fornecer produtos de alta qualidade, preços acessíveis e atendimento ao cliente excepcional.</p>
        <h2>Valores</h2>
        <p class="line-p">Na nossa empresa, acreditamos que a nossa sustentação vem de Cristo e do Seu amor, que nos inspira a buscar a empatia, a transparência e o respeito em todas as nossas relações. Valorizamos cada pessoa envolvida em nossos negócios e buscamos incentivar e motivar a todos a alcançar o seu potencial máximo, proporcionando um ambiente de carinho, afeto e autocuidado.</p>
        <div class="imagem-centralizada">
            <img class="img-pag-quem-somos" src="img/img3.jpg">
        </div>
        <p class="line-p">Nosso compromisso com a sustentabilidade não é apenas uma palavra-chave - é uma parte fundamental do nosso negócio. Nós acreditamos que é nossa responsabilidade proteger o meio ambiente e minimizar o nosso impacto na sociedade. Por isso, trabalhamos duro para tornar nossas embalagens cada vez mais ecológicas, reduzindo o uso de plásticos e materiais descartáveis.</p>
        <p class="line-p">Todas as nossas caixinhas são feitas de materiais reciclados e recicláveis, e nos esforçamos para garantir que nossos produtos sejam entregues de forma segura e sustentável. As embalagens dos produtos que vendemos são reutilizáveis, para que você possa desfrutar deles por mais tempo, e todos os produtos são dermatologicamente e oftalmologicamente testados para garantir a segurança e eficácia.</p>
        <div class="rodape">

        <br>
        <br>
            <div class="rodape-quem-somos-contatos">
                <img class="img-pag-quem-somos" src="img/icone tel rosa.png">
                <p><a class="telefone-bn-beauty" href="#">(21)4002-8922</a></p>
            </div>
            <div class="rodape-quem-somos-email">
                <img class="img-pag-quem-somos" src="img/icone email.png">
                <p><a class="email-bn-beauty" href="#">contato@fnbeauty.com.br</a></p>
            </div>
        </div>
</div>


<?php
  include_once("templates/footer.php");
?>