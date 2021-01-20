<?php include 'components/header.php'; ?>

<header class="main-header -expanded">
    <div class="header">
        <div class="item -logo">
            <a href="index.php" title="Página Inicial" class="logo">
                <h1 class="_sr-only">Bom Dia Advogado</h1>
                <img src="assets/img/logo1.svg" alt="Logo - Bom Dia Advogado" class="_full _hidden-sm-block">
                <img src="assets/img/logo2.svg" alt="Logo - Bom Dia Advogado" class="_full _visible-sm-block">
            </a>
        </div>

        <div class="item -button-diario">
            <a href="http://www.bomdia.adv.br/pesquisa.php" class="form-button -orange -block">
                Receba nosso Clipping Jur&iacute;dico Di&aacute;rio
            </a>
        </div>

        <div class="item -search">
            <form action="busca.php" class="form-block" method="POST">
                <div class="control">
                    <div class="form-input -transparent">
                        <label for="busca" class="label">Pesquisar:</label>
                        <input type="text" name="q" placeholder="Pesquisa" class="input" id="busca" required>
                        <button type="submit" class="button">
                            <i class="icon -search"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="item -menu">
            <div class="header-menu">
                <span class="label || js-menu-label">
                    <span class="disabled">Menu</span>
                    <span class="actived">Fechar</span>
                </span>
                <button class="button || js-menu-button">
                    <div class="hamburger">
                        <div class="burger -burger1"></div>
                        <div class="burger -burger2"></div>
                        <div class="burger -burger3"></div>
                    </div>
                </button>
                <nav class="menu || js-menu">
                    <ul>
                        <li>
                            <a href="index.php" class="js-page-home">Home</a>
                        </li>
                        <li>
                            <a href="noticias.php" class="js-page-noticias">Notícias</a>
                        </li>
                        <li>
                            <a href="artigos.php" class="js-page-artigos">Artigos</a>
                        </li>
                        <li>
                            <a href="BomDiaAdvogado2.htm" class="js-page-informe-diario">Informe Diário</a>
                        </li>
                        <li>
                            <a href="cursos.php" class="js-page-cursos">Cursos</a>
                        </li>
                        <li>
                            <a href="contato.php" class="js-page-contato">Contato</a>
                        </li>
                        <li>
                            <a href="dificuldade-recebimento.php" class="js-page-dificuldade">
                                Dificuldade no recebimento
                            </a>
                        </li>
                        <li>
                            <a href="cancelamento.php" class="js-page-cancelamento">Cancelamento</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>


    <div class="container || js-home-news-slider">


        <div class="home-news">
            <div class="column">
                <a href="noticia-single.php?id=71809" class="box">
                    <div class="date">
                        <span class="day">20</span>
                        <span class="month">JAN</span>
                    </div>
                    <span class="title">
                    Consumidor não pode obrigar empresa de eletrônicos a fornecer acessórios                  </span>
                    <div class="plus">
                        <i class="icon -add"></i>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="noticia-single.php?id=71808" class="box">
                    <div class="date">
                        <span class="day">20</span>
                        <span class="month">JAN</span>
                    </div>
                    <span class="title">
                    Juiz concede medidas protetivas para transexual que sofria agressões do ex-namorado                  </span>
                    <div class="plus">
                        <i class="icon -add"></i>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="noticia-single.php?id=71807" class="box">
                    <div class="date">
                        <span class="day">20</span>
                        <span class="month">JAN</span>
                    </div>
                    <span class="title">
                    Mulher segue presa após ser filmada por câmara de segurança do carro que havia roubado                  </span>
                    <div class="plus">
                        <i class="icon -add"></i>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="noticia-single.php?id=71806" class="box">
                    <div class="date">
                        <span class="day">20</span>
                        <span class="month">JAN</span>
                    </div>
                    <span class="title">
                    Órgão de comunicação é condenado a indenizar mulher exposta por crime que não cometeu                  </span>
                    <div class="plus">
                        <i class="icon -add"></i>
                    </div>
                </a>
            </div>
        </div>


        <div class="home-news">
            <div class="column">
                <a href="noticia-single.php?id=71805" class="box">
                    <div class="date">
                        <span class="day">20</span>
                        <span class="month">JAN</span>
                    </div>
                    <span class="title">
                    COVID-19: Em Curitiba, Justiça estadual mantém limitação ao funcionamento de restaurantes e lanchonetes aos domingos                  </span>
                    <div class="plus">
                        <i class="icon -add"></i>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="noticia-single.php?id=71804" class="box">
                    <div class="date">
                        <span class="day">20</span>
                        <span class="month">JAN</span>
                    </div>
                    <span class="title">
                    Município condenado por falta de acessibilidade em escola                  </span>
                    <div class="plus">
                        <i class="icon -add"></i>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="noticia-single.php?id=71802" class="box">
                    <div class="date">
                        <span class="day">19</span>
                        <span class="month">JAN</span>
                    </div>
                    <span class="title">
                    OAB vai ao STF contra decreto que excluiu representantes da sociedade civil do Conad                  </span>
                    <div class="plus">
                        <i class="icon -add"></i>
                    </div>
                </a>
            </div>
            <div class="column">
                <a href="noticia-single.php?id=71801" class="box">
                    <div class="date">
                        <span class="day">19</span>
                        <span class="month">JAN</span>
                    </div>
                    <span class="title">
                    TRT-9 passa a usar Zoom para audiências a partir de fevereiro                  </span>
                    <div class="plus">
                        <i class="icon -add"></i>
                    </div>
                </a>
            </div>
        </div>


    </div>

    <div class="home-news-bar">
        <div class="inner _position-relative">
            <div class="dots || js-home-news-dots"></div>
            <a href="noticias.php" class="link">
                Veja mais <strong class="_color-white _font-effra">Notícias</strong>
            </a>
        </div>
    </div>


    <div class="home-articles">



        <a href="noticia-single.php?id=71800" class="column">
            <span class="date">19/JAN</span>
            <span class="title">
            Projeto define crime de pedofilia no Código Penal          </span>
        </a>


        <a href="noticia-single.php?id=71799" class="column">
            <span class="date">19/JAN</span>
            <span class="title">
            Contrato de aluguel é válido mesmo que apenas um dos coproprietários tenha locado o imóvel          </span>
        </a>


        <a href="noticia-single.php?id=71798" class="column">
            <span class="date">19/JAN</span>
            <span class="title">
            Músico tem vínculo de emprego reconhecido com pizzaria onde tocou por sete anos          </span>
        </a>


        <a href="noticia-single.php?id=71797" class="column">
            <span class="date">19/JAN</span>
            <span class="title">
            Professora poderá corrigir equívoco no cadastramento de recurso no PJe          </span>
        </a>
    </div>

</header>

<section class="section-block">
    <div class="container">

        <a href="url.php?id=13" class="ads-block" target="_blank">
            <div class="image-block">
                <img src="arquivos/publicidades/1600507165177e1b07c6b.gif" alt="" class="image">
            </div>
        </a>
        <a href="url.php?id=11" class="ads-block" target="_blank">
            <div class="image-block">
                <img src="arquivos/publicidades/16044091703e2348f4af94.gif" alt="" class="image">
            </div>
        </a>
        <a href="url.php?id=10" class="ads-block" target="_blank">
            <div class="image-block">
                <img src="arquivos/publicidades/16062144460d5a92c4e2a6.png" alt="" class="image">
            </div>
        </a>
        <a href="url.php?id=4" class="ads-block" target="_blank">
            <div class="image-block">
                <img src="arquivos/publicidades/1604963355aa4dbf82fc6.png" alt="" class="image">
            </div>
        </a>

    </div>
</section>

<div class="section-block -yellow -unpad">
    <div class="container -unpad">
        <div class="home-middle">

            <div class="col1">
                <section class="section-block -yellow">
                    <header class="section-header -theme-red">
                        <a href="artigos.php" class="section">
                            <i class="icon -newspaper"></i>
                            <h2 class="title">Artigos</h2>
                            <div class="link">
                                Veja todos os artigos
                            </div>
                        </a>
                    </header>
                    <ul class="article-list">
                        <li class="item -border-yellow">
                            <a href="article-single.php?id=141" class="article">
                                <strong class="title _color-dark-red">
                                A felicidade de uma nação é diretamente proporcional à igualdade que ela pratica                  </strong>
                                <div class="authors _color-dark-yellow">
                                    <div>
                                    A condi&ccedil;&atilde;o de pessoas iguais, independentemente de ra&ccedil;a, credo, cor, ...                    </div>
                                    <div>
                                    Cássio Lisandro Telles é presidente da OAB-PR                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="item -border-yellow">
                            <a href="article-single.php?id=140" class="article">
                                <strong class="title _color-dark-red">
                                Regime Jurídico Emergencial e Transitório das relações jurídicas de Direito Privado (RJET – Lei 14.010/2020)                  </strong>
                                <div class="authors _color-dark-yellow">
                                    <div>
                                    A pandemia ocasionada em raz&atilde;o da propaga&ccedil;&atilde;o do v&iacute;rus Sars-Cov-2 ...                    </div>
                                    <div>
                                    Caio Jardini Luiz e Antônio Carlos Jardini Luiz, advogados                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="item -border-yellow">
                            <a href="article-single.php?id=139" class="article">
                                <strong class="title _color-dark-red">
                                A criação inoportuna de um novo tribunal                  </strong>
                                <div class="authors _color-dark-yellow">
                                    <div>
                                    Em meio &agrave; pandemia, que tira a vida de muitos brasileiros e brasileiras, traz dor &agrave;s ...                    </div>
                                    <div>
                                    Cássio Lisandro Telles é presidente da OAB-PR                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="item -border-yellow">
                            <a href="article-single.php?id=138" class="article">
                                <strong class="title _color-dark-red">
                                O necessário apaziguamento de conflitos federativos                  </strong>
                                <div class="authors _color-dark-yellow">
                                    <div>
                                    No meio jur&iacute;dico nacional, importantes questionamentos t&ecirc;m surgido, inclusive com ...                    </div>
                                    <div>
                                    Felipe Santa Cruz e  Ophir Cavalcante, exs-Presidentes da OAB Nacional                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </section>
            </div>

            <div class="col2">
                <section class="section-block -dark-yellow">
                    <header class="section-header -theme-dark-yellow">
                        <a href="#" class="section">
                            <i class="icon -megaphone"></i>
                            <h2 class="title">Informe Diário</h2>
                        </a>
                    </header>
                    <p class="_color-white">
                        <strong>Cadastre-se</strong> e receba o Informe.
                    </p>
                    <form action="mail.php" method="POST" class="form-block || js-validate">
                        <input type="hidden" name="token" value="6aca604df16598a2eee39b8f644c2ced">
                        <div class="control">
                            <div class="form-input -yellow">
                                <label class="label" for="nome">Nome</label>
                                <input type="text" name="nome" placeholder="Nome" class="input" id="nome" required>
                                <i class="icon -man-user"></i>
                            </div>
                        </div>
                        <div class="control">
                            <div class="form-input -yellow">
                                <label class="label" for="email">E-mail</label>
                                <input type="email" name="email" placeholder="E-mail" class="input" id="email" required>
                                <i class="icon -envelope"></i>
                            </div>
                        </div>
                        <div class="control">
                            <div class="form-input -yellow">
                                <label class="label" for="cidade">Cidade</label>
                                <input type="text" name="cidade" placeholder="Cidade" class="input" id="cidade" required>
                                <div class="icon -map"></div>
                            </div>
                        </div>
                        <div class="control">
                            <div class="form-input -yellow">
                                <label class="label" for="obs">Observações</label>
                                <input type="text" name="obs" id="obs" rows="5" placeholder="Observações" class="input"></textarea>
                                <div class="icon -megaphone"></div>
                            </div>
                        </div>
                        <div class="control">
                            <button type="submit" class="form-button -block -dark-red">Cadastrar</button>
                        </div>
                        <div class="control">
                            <a href="https://bit.ly/BomDiaAdv-Telegram" class="form-button -block -orange">Canal de Not&#237cias - Telegram</a>
                        </div>
                        <div class="control">
                            <a href="https://chat.whatsapp.com/H9RgWCJpk3DAHaewPF9LST" class="form-button -block -orange">Grupo de Not&#237cias - WhatsApp</a></div>
                        </form>
                    </section>
                </div>

            </div>
        </div>
    </div>

    <!--<section class="section-block -gray">
    <div class="container">
    <header class="section-header -theme-orange">
    <a href="cursos.php" class="section">
    <i class="icon -cursos"></i>
    <h2 class="title">Cursos</h2>
    <div class="link">
    Veja todos os cursos
    </div>
    </a>
</header>-->
    <!--    <div class="clearfix">
    </div>

    </div>
</section>-->
<section class="section-block">
    <div class="container">
        <div class="partners-block">
            <div class="item">
                <h2 class="title">
                    Parceria <br>
                    Institucional
                </h2>
            </div>

        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>