<!DOCTYPE html>
<html lang="en">

<head>
  
  <?php include '_head.php'; ?>

</head>

<body>

  <div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Fechar</a>
    <div class="overlay-content">
      <!-- <a href="#">Home</a>
      <a href="#">Vantagens</a>
      <a href="#">Diferenciais</a>
      <a href="#">Para Você</a> -->
      <a href="https://web.scapets.com.br/pre-cadastro" rel="noopener" target="_blank" class="bt-parceiro">Quero Ser Parceiro</a>
    </div>
  </div>  

  <nav data-aos="fade-down">
    <div class="container">
      <div class="row col-md-12" style="margin-left: -11rem;">
          <div class="menu" style="width: 100%;display: flex;justify-content: space-evenly;align-items: end;">
            <a href="index.php"><img src="assets/img/marca.png" alt="Marca Scapets" style="margin-right: 2rem"></a>
            <div class="itens-menu">
              <div class="menu-mobile d-lg-none">
                <span onclick="openNav()"><img src="assets/img/menu.svg" alt="Menu">Menu</span>
              </div>
              <ul style="display: flex; gap: 4rem; padding: 0.5rem;">
                <li>
                  <a href="sub/quemsomos.html" class="itens_menu" style="color: white; font-size: 20px;">Sobre Scapets</a>
                </li>
                <li>
                  <a href="sub/feedback.html" class="itens_menu" style="color: white; font-size: 20px;">Dê o seu Feedback</a>
                </li>
                <li>
                  <a href="sub/faq.html" class="itens_menu" style="color: white; font-size: 20px;">Perguntas Frequentes</a>
                </li>
                <li>
                  <a href="sub/reels.html" class="itens_menu" style="color: white; font-size: 20px;">Reels</a>
                </li>
              </ul>
              <section class="bt-area bt-menu">
                <a data-toggle="collapse" href=".panel-collapse.collapse.parceirias">
                  <h4 class="bt-parceiro panel-title">Quero Ser Parceiro!</h4>
                </a>
                <div class="panel-collapse collapse parceirias">
                    <ul class="list-group d-none d-lg-block">
                      <div class="bt">
                          <li>
                            <a href="https://web.scapets.com.br/pre-cadastro" rel="noopener" target="_blank" class="bt-parceiro list-group-item">Lojista<img src="assets/img/store_icon.svg" class="bt-img"></a>
                          </li>
                          <li>
                            <a href="https://web.scapets.com.br/pre-cadastro" rel="noopener" target="_blank" class="bt-parceiro list-group-item segundo-bt">Motoboy<img src="assets/img/motorcycle_icon.svg" class="bt-img"></a>
                          </li>
                          <li>
                            <a href="https://web.scapets.com.br/pre-cadastro" rel="noopener" target="_blank" class="bt-parceiro list-group-item">Administrador<img src="assets/img/admin_icon.svg" class="bt-img"></a>
                          </li>
                      </div>
                    </ul>
                </div>
              </section>
            </div>
          </div>
    </div>
  </nav>
  <header>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-md-12">
          <div class="info-header" data-aos="fade-right" data-aos-easing="ease-in-sine">
            <h1>Scapets é a maneira mais fácil de encontrar tudo para <span>seu pet!</span></h1>
            <p>Encontre os melhores serviços de petshop e clínica veterinária<br class="d-none d-md-block"> mais próximo de você e seu melhor amigo.</p>
            <div class="bt-download-lojas">
              <a href="https://play.google.com/store/apps/details?id=br.com.scapets" target="_blank" class="mr-2">
                <img src="assets/img/google-play.svg" alt="ícone Google Play">
              </a>
              <a href="https://apps.apple.com/us/app/scapets/id1593517597" target="_blank">
                <img src="assets/img/apple-store.svg" alt="ícone Google Play">
              </a>
            </div>
            <!-- <div class="fazer-download">
              <span>Faça o download do nosso app nas lojas</span>
              <a href="#">FAZER DOWNLOAD</a>
            </div> -->
          </div>
        </div>
        <div class="home-video">
          <video poster="assets/img/mockup-app.png" controls="">
            <source src="assets/img/video_home.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
    <div class="mask"></div>
  </header>

  <section id="vantagens">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="titulo" data-aos="fade-down">
            <h2>Tudo que seu pet precisar!</h2>
            <p>Somos apaixonados por animais e nada melhor que unir a tecnologia com<br class="d-none d-md-block"> o universo animal, facilitando a sua vida e a do seu melhor amigo.</p>
          </div>
        </div>
        <div class="col-md-12">
          <div class="animais">
            <div class="item-animal" data-aos="fade-down" data-aos-easing="ease-in-sine">
              <div class="bg">
                <img src="assets/img/dog.svg" alt="Ícone Cão">
              </div>
              <span>Cães</span>
            </div>
            <div class="item-animal" data-aos="fade-down" data-aos-easing="ease-in-sine">
              <div class="bg">
                <img src="assets/img/cat.svg" alt="Ícone Gato">
              </div>
              <span>Gato</span>
            </div>
            <div class="item-animal" data-aos="fade-down" data-aos-easing="ease-in-sine">
              <div class="bg">
                <img src="assets/img/bird.svg" alt="Ícone Aves">
              </div>
              <span>Aves</span>
            </div>
            <div class="item-animal" data-aos="fade-up" data-aos-easing="ease-in-sine">
              <div class="bg">
                <img src="assets/img/fish.svg" alt="Ícone Peixes">
              </div>
              <span>Peixes</span>
            </div>
            <div class="item-animal" data-aos="fade-up" data-aos-easing="ease-in-sine">
              <div class="bg">
                <img src="assets/img/bunny.svg" alt="Ícone Roedores">
              </div>
              <span>Roedores</span>
            </div>
            <div class="item-animal" data-aos="fade-up" data-aos-easing="ease-in-sine">
              <div class="bg">
                <img src="assets/img/turtle.svg" alt="Ícone Répteis">
              </div>
              <span>Répteis</span>
            </div>
          </div>
        </div>
        <div class="col-md-12 text-left">
          <div class="device-mobile" data-aos="fade-up">
            <img src="assets/img/mobile.png" alt="Tela de Telefone">
          </div>
        </div>
        <div class="col-md-12 text-right">
          <div class="device-mobile aos-init aos-animate" data-aos="fade-up">
            <img src="assets/img/mockup-app.png" alt="Mockup App"
          </div>
        </div>
    </div>
  </section>

  <section id="beneficios">
    <div class="arrow-beneficios">
      <img src="assets/img/arrow-beneficios.svg" alt="Arrow">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-5" data-aos="fade-right" data-aos-easing="ease-in-sine">
          <div class="titulo">
            <h3>BENEFÍCIOS PARA LOJISTAS</h3>
            <h2>Benefícios que o<br class="d-none d-md-block"> Scapets lhe oferece</h2>
          </div>
          <div class="conteudo">
            <p>Quem é apaixonado por animais sabe a relação de carinho e amor que temos com nossos animais de estimação, é um vínculo familiar! Por essa razão, não medimos esforços para oferecer o que há de melhor para trazer ainda mais alegria e qualidade de vida.</p>
            <p>Scapets revoluciona, trazendo para seu bolso os melhores serviços de petshop e clínica veterinária para perto de você, dando mais comodidade para você e seu pet.</p>
            <a href="https://web.scapets.com.br/pre-cadastro" rel="noopener" target="_blank" class="bt-parceiro">Quero Ser Parceiro</a>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="itens-beneficios">
            <div class="item item-1" data-aos="fade-up" data-aos-duration="500">
              <h4>Segmento Específico!</h4>
              <p>Com seguimentos específicos, nosso app facilita o encontro de lojas e clínicas mais próximas de você.</p>
            </div>
            <div class="item item-2" data-aos="fade-up" data-aos-duration="1000">
              <h4>Escalabilidade!</h4>
              <p>Amplie rapidamente a sua loja sem sacrificar a qualidade e atendimento com o Scapets.</p>
            </div>
            <div class="item item-3" data-aos="fade-up" data-aos-duration="1500">
              <h4>Aproximar clientes e lojistas!</h4>
              <p>Com facilidade e ajuda da tecnologia aproximamos o que você precisa com rapidez e agilidade.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="detalhes">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-12">
          <div class="info-detalhes">
            <div class="titulo" data-aos="fade-right" data-aos-easing="ease-in-sine">
              <h3>BENEFÍCIOS PARA CLIENTES</h3>
              <h2>Alguns dos detalhes<br class="d-none d-md-block"> que só tem com o Scapets</h2>
              <p>Com o Scapets, a melhor experiência da vida sempre será aproveitar cada segundo ao lado do seu animalzinho.</p>
            </div>
            <div class="itens-detalhes">
              <div class="item" data-aos="fade-right" data-aos-duration="500">
                <div class="bg">
                  <img src="assets/img/veterinario.svg" alt="Ícone Veterinário">
                </div>
                <div class="info">
                  <h4>Produtos fácil e rápido</h4>
                  <p>Tenha sempre o produto que seu pet precisa com agilidade<br class="d-none d-md-block"> e na hora que você desejar.</p>
                </div>
              </div>
              <div class="item" data-aos="fade-right" data-aos-duration="1000">
                <div class="bg">
                  <img src="assets/img/animal.svg" alt="Ícone Animal">
                </div>
                <div class="info">
                  <h4>Registro dos seus pets</h4>
                  <p>Cadastre seu pet no nosso app e leve todas as informações<br class="d-none d-md-block"> que precisa sempre com você.</p>
                </div>
              </div>
              <div class="item" data-aos="fade-right" data-aos-duration="1500">
                <div class="bg">
                  <img src="assets/img/dog-food.svg" alt="Ícone Prato Comida">
                </div>
                <div class="info">
                  <h4>Comodidades para você</h4>
                  <p>Receba em poucos minutos tudo que seu pet precisa<br class="d-none d-md-block"> de uma maneira rapida, fácil e eficaz.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 col-12">
          <div class="cao d-none d-md-block">
            <img src="assets/img/cao.png" alt="Cão" data-aos="fade-left" data-aos-duration="1000">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="ser-parceiro">
    <div class="bullets1" data-aos="fade-down">
      <img src="assets/img/bullets.png" alt="">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12 conteudo">
          <div class="titulo" data-aos="fade-down">
            <h2>O <span>Scapets</span> é perfeito para o seu negocio<br class="d-none d-md-block"> seja ele do tamanho que for</h2>
            <p>Seja um parceiro Scapets e aumente seus negócios com o app que facilita<br class="d-none d-md-block"> a vida dos seus clientes e aproxima com facilidade ele a você.</p>
            <a href="https://web.scapets.com.br/pre-cadastro" rel="noopener" target="_blank" class="bt-parceiro">Quero Ser Parceiro</a>
          </div>
        </div>
      </div>
    </div>
    <div class="bullets2" data-aos="fade-up">
      <img src="assets/img/bullets.png" alt="">
    </div>
  </section>

  <section id="duvidas">
    <div class="bullets1" data-aos="fade-down">
      <img src="assets/img/bullets.png" alt="">
    </div>
    <div class="mockups-duvidas" data-aos="fade-left" data-aos-easing="ease-in-sine" data-aos-duration="1000">
      <img src="assets/img/mockup-duvidas.png" alt="Mockup App">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-lg-7 col-12">
          <div class="info-duvidas" data-aos="fade-right" data-aos-easing="ease-in-sine">
            <div class="titulo">
              <h3>TIRE DÚVIDAS</h3>
              <h2>Tire todas as suas dúvidas<br class="d-none d-md-block"> sobre o Scapets</h2>
            </div>
            <div class="collapse-duvidas">
              <div id="accordion">
                <div class="card">
                  <div class="card-header" id="1">
                    <a href="#" data-toggle="collapse" data-target="#collapse1" aria-expanded="true" aria-controls="collapse1">Por que usar Scapets?</a>
                  </div>
                  <div id="collapse1" class="collapse show" aria-labelledby="1" data-parent="#accordion">
                    <div class="card-body">
                      <p style="color:white;">Nossa Plataforma foi feita por quem ama animais e para todos aqueles que amam seus pets. A Scapets vem revolucionando trazendo o conforto, segurança e qualidade em relação aos melhores serviços de petshops e clínica veterinárias perto de você. Aproximando de forma prática e tecnológica, a conexão entre você e as melhores lojas na palma da sua mão, realizando sua compra totalmente online e segura, proporcionando comodidade e facilidade para você e seu pet.</p>
                      <p style="color:white;">A Scapets conta também com os melhores serviços no app para o seu pet, além de uma entrega rápida e com os melhores benefícios.</p>
                    </div>
                  </div>
                </div>

                <div class="card">
                  <div class="card-header" id="2">
                    <a href="" class="collapsed" data-toggle="collapse" data-target="#collapse2" aria-expanded="false" aria-controls="collapse2">Por que ser um parceiro Scapets?</a>
                  </div>
                  <div id="collapse2" class="collapse" aria-labelledby="2" data-parent="#accordion">
                    <div class="card-body">
                      <p style="color:white;">Atualmente, a tecnologia vem nos ensinando e modificando nossas vidas. Visando essa modificação do comportamento humano diante dos recursos tecnológicos presentes, a Scapets deseja se aproximar de você empreendedor.</p>
                      <p style="color:white;">Estamos te convidando a fazer parte do nosso time para buscarmos soluções e alternativas de melhoria para facilitar as vendas dos seus produtos e serviços. Seja um petshop e\ou uma clínica veterinária, nossa plataforma atuará proporcionando uma maior visibilidade do seu negócio, seja ele físico ou virtual, gerando maior crescimento no seu faturamento e aumentando o nível de confiança entre você, futuro parceiro Scapets, e os seus clientes, gerindo suas vendas e suas receitas. Então não deixa para depois.</p>
                      <p style="color:#fcc90f;">Venha já ser um parceiro Scapets!</p>
                      
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="copyright">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="footer">
            <div class="documentos">
              <a href="assets/img/documentos/TERMOS-E-CONDICOES-DE-USO-SCAPETS.pdf" target="_blank">
                Termos e Condições de Uso Scapets
              </a>
              <a href="assets/img/documentos/POLITICA-DE-PRIVACIDADE-SCAPETS.pdf" target="_blank">
                Política de Privacidade Scapets
              </a>
              <a href="assets/img/documentos/POLITICA_DE_TROCAS_E_DEVOLUCOES_SCAPETS.pdf" target="_blank">
                Política de Trocas e Devoluções
              </a>
            </div>
            <div class="redes-sociais">
              <a href="https://www.facebook.com/people/scapetsbrasil/100087157000626" target="_blank">
                <img src="assets/img/facebook.svg" alt="Ícone Facebook">
              </a>
              <a href="https://www.instagram.com/scapetsbrasil" target="_blank">
                <img src="assets/img/instagram.svg" alt="Ícone Instagram">
              </a>
              <a href="https://www.youtube.com/@scapets/featured" target="_blank">
                <img src="assets/img/youtube.svg" alt="Ícone YouTube">
              </a>
              <a href="https://www.linkedin.com/company/scapets-brasil/" target="_blank">
                <img src="assets/img/linkedin.svg" alt="Ícone Linkedin">
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="whatsapp">
    <div id="whatsapp-icon">
      <a href="https://api.whatsapp.com/send?text=(Mensagem para enviar)&phone=+55(resto do número)" target="_blank" data-message="Mensagem" data-number="Número de Celular">
      <img src="assets/img/whatsapp_snippet.svg" alt="Whatsapp Snippet"></a>
    </div>
  </section>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="assets/js/all.min.js"></script>

  <script>
    // ANIMATION
    AOS.init();


    // MENU
    function openNav() {
      document.getElementById("myNav").style.height = "100%";
    }

    function closeNav() {
      document.getElementById("myNav").style.height = "0%";
    }
  </script>

</body>

</html>