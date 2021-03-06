<header class="main-header -expanded">
    <div class="header">
        <div class="item -logo">
            <a href="<?php echo site_url('/'); ?>" title="Página Inicial" class="logo">
                <h1 class="_sr-only">Bom Dia Advogado</h1>
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.svg" alt="Logo - Bom Dia Advogado" class="_full _hidden-sm-block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo2.svg" alt="Logo - Bom Dia Advogado" class="_full _visible-sm-block">
            </a>
        </div>

        <div class="item -button-diario">
            <a href="http://www.bomdia.adv.br/pesquisa.php" class="form-button -orange -block">Receba nosso Clipping Jurídico Diário</a>
        </div>

        <div class="item -search">
            <form action="busca.php" class="form-block" method="POST">
                <div class="control">
                    <div class="form-input -transparent">
                        <label for="busca" class="label">Pesquisar:</label>
                        <input type="text" name="q" placeholder="Pesquisa" class="input" id="busca" required>
                        <button type="submit" class="button"><i class="icon -search"></i></button>
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
                        <li><a href="<?php echo site_url('/'); ?>" class="js-page-home">Home</a></li>
                        <li><a href="<?php echo site_url('?page_id=22'); ?>" class="js-page-noticias">Notícias</a></li>
                        <li><a href="<?php echo site_url('?page_id=26'); ?>" class="js-page-artigos">Artigos</a></li>
                        <li><a href="<?php echo site_url('?page_id=35'); ?>" class="js-page-informe-diario">Informe Diário</a></li>
                        <li><a href="<?php echo site_url('?page_id=28'); ?>" class="js-page-cursos">Cursos</a></li>
                        <li><a href="contato.php" class="js-page-contato">Contato</a></li>
                        <li><a href="<?php echo site_url('?page_id=39'); ?>" class="js-page-dificuldade">Dificuldade no recebimento</a></li>
                        <li><a href="<?php echo site_url('?page_id=42'); ?>" class="js-page-cancelamento">Cancelamento</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <div class="container || js-home-news-slider">
        <div class="home-news">
            <?php $count = 1; ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php foreach (get_the_category() as $category) { if ( $category->name == 'Destaque 1' and $count < 5 ) { ?>
                    <?php $dia = get_the_date('d'); ?>
                    <?php $mes = ucfirst(get_the_date('M')); ?>
                    <div class="column">
                        <a href="<?php the_permalink() ?>" class="box">
                            <div class="date">
                                <span class="day"><?php echo "{$dia}"; ?></span>
                                <span class="month"><?php echo "{$mes}"; ?></span>
                            </div>
                            <span class="title"><?php the_title(); ?></span>
                            <div class="plus">
                                <i class="icon -add"></i>
                            </div   >
                        </a>
                    </div>
                    <?php $count++; ?>
                <?php } } ?>
            <?php endwhile; endif; ?>
        </div>
    </div>

    <div class="home-news-bar">
        <div class="inner _position-relative">
            <div class="dots || js-home-news-dots"></div>
            <a href="<?php echo site_url('?page_id=22'); ?>" class="link">Veja mais <strong class="_color-white _font-effra">Notícias</strong></a>
        </div>
    </div>

    <div class="home-articles">
        <?php $count2 = 1; ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <?php foreach (get_the_category() as $category) { if ( $category->name == 'Destaque 2' and $count2 < 5 ) { ?>
                <?php $dia = get_the_date('d'); ?>
                <?php $mes = ucfirst(get_the_date('M')); ?>
                <a href="<?php the_permalink() ?>" class="column">
                    <span class="date"><?php echo "{$dia}/{$mes}"; ?></span>
                    <span class="title"><?php the_title(); ?></span>
                </a>
                <?php $count2++; ?>
            <?php } } ?>
        <?php endwhile; endif; ?>
    </div>
</header>