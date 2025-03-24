<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portifólio</title>

    <link rel="stylesheet" href="tools/fontawesome/css/all.css" />
    <link rel="stylesheet" href="css/styles.css" />

</head>
<body>

<div id="interface">

    <header class="cabecalho">

        <nav class="menu">

            <div class="logo">
                <img src="imagens/logo.png" alt="LOGO" />
            </div>

            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Portifólio</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="#">Restrito</a></li>
            </ul>

        </nav>
        
        <div class="titles"> <!-- ========================= -->
            <div class="container-titles">
                <h1 class="titulo">Entregando Serviços de Qualidade</h1>
                <h1 class="subtitulo">Soluções em TI</h1>

                <p class="paragrafo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id vitae rerum, necessitatibus quod quaerat mollitia.</p>
                
            </div>

            <div class="socialIcons">
                <a href="#" title="Visite nosso Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" title="Visite nosso Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" title="Visite nosso LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="#" title="Visite nosso Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div> <!-- ========================== -->
        
    </header>

    <!-- ========================================================= -->

    <main id="corpo">

        <section class="servicos">

            <article class="servico">
                <img src="imagens/service-design.svg" alt="Design">
                <h3 class="title-servico">Desenvolvimento WEB</h3>
                <p class="text-servico">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis omnis, voluptas error impedit consectetur vitae.</p>
            </article>
            <article class="servico">
                <img src="imagens/service-hosting.svg" alt="Hosting">
                <h3 class="title-hosting">WEB Hosting</h3>
                <p class="text-servico">Possimus vel temporibus deleniti repudiandae in similique unde necessitatibus odit corporis nihil soluta, ad repellendus?</p>
            </article>
            <article class="servico">
                <img src="imagens/service-social.svg" alt="Social Media">
                <h3 class="title-servico">Mídias Sociais</h3>
                <p class="text-servico">Earum mollitia a, quaerat magni dignissimos, sint velit libero minus magnam saepe perferendis aspernatur? Libero!</p>
            </article>
            <article class="servico">
                <img src="imagens/service-seo.svg" alt="SEO">
                <h3 class="title-servico">Aplicações SEO</h3>
                <p class="text-servico">Maiores aliquid sequi expedita. Rerum itaque nihil maxime at explicabo similique recusandae saepe magnam a!</p>
            </article>
            <article class="servico">
                <img src="imagens/service-cloud.svg" alt="Cloud">
                <h3 class="title-servico">Computação em Nuvem</h3>
                <p class="text-servico">Provident velit fuga consequuntur quae, iste accusamus repellendus, officiis quibusdam, odio doloribus voluptates iusto perspiciatis.</p>
            </article>
            <article class="servico">
                <img src="imagens/service-secure.svg" alt="Security">
                <h3 class="title-servico">Segurança de Dados</h3>
                <p class="text-servico">Expedita illo fugit error in quidem qui, architecto eligendi quae, perspiciatis modi non ab aliquid.</p>
            </article>

        </section>

        <section class="portifolio">

            <h3 class="title-portifolio">Nosso Portifólio</h3>
            <p class="sub-title">Lorem ipsum dolor sit amet.</p>

            <div class="container-imagens">
                <a href="#" class="img"style="background-image:url('imagens/product-1.jpg');">
                    
                </a>
                <a href="#" class="img"style="background-image:url('imagens/product-2.jpg');">
                
                </a>
                <a href="#" class="img"style="background-image:url('imagens/product-3.jpg');">
                  
                </a>
                <a href="#" class="img"style="background-image:url('imagens/product-4.jpg');">
                  
                </a>
                <a href="#" class="img"style="background-image:url('imagens/product-5.jpg');">
                  
                </a>
                <a href="#" class="img"style="background-image:url('imagens/product-6.jpg');">
                  
                </a>
            </div>

        </section>

        <section class="banner">

        <hgroup class="container-texto">
        <h4 class="title-banner">Saiba mais sobre nossos Projetos</h4>

<p class="txt-banner">Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis deleniti mollitia eius tempore beatae hic labore et. Iste aliquid facilis, numquam fugiat fugit distinctio qui.</p>

<a class="btn-banner">Saiba mais </a>



        </hgroup>


        </section>

        <section class="sobre">



        </section>
<section class="contato">
<h3 class="title-cntato">Fale conosco</h3>
<p class="sub-title">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
 
<div class="cntainer-contato">

<aside class="dados-contato">
                    <h4 class="title-aside">Endereço</h4>
                    <p class="txt-aside">Rua das Margaridas, S/Nº - Centro - Manhuaçu/MG</p>

                    <h4 class="title-aside">Telefone</h4>
                    <p class="txt-aside">33 3331-3333</p>
                    <p class="txt-aside">33 9 8400-9999</p>

                    <h4 class="title-aside">E-Mail</h4>
                    <p class="txt-aside">contato@meusite.com.br</p>
                    <p class="txt-aside">faleconosco@meusite.com.br</p>
                </aside>

                <form action="" method="POST">

<input type="text" name="nome" id="nome" placeholder="Nome*" required />
<input type="email" name="email" id="email" placeholder="E-Mail*" required />
<input type="text" name="assunto" id="assunto" placeholder="Assunto" />
<textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>

<input type="submit" value="Envia mensagem" />

</form>


</div>





</section>

    </main>

</div>
    
</body>
</html>