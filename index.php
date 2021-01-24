<?php get_header(); ?>
    
    <?php $page = 'home'; ?>

    <?php get_template_part('components/menu-index'); ?>

    <section class="section-block">
        <div class="container">
            <?php if(function_exists( 'wp_bannerize' ))
                wp_bannerize(); ?>
        </div>
    </section>

    <div class="section-block -yellow -unpad">
        <div class="container -unpad">
            <div class="home-middle">
                <div class="col1">
                    <section class="section-block -yellow">
                        <header class="section-header -theme-red">
                            <a href="<?php echo site_url('?page_id=26'); ?>" class="section">
                                <i class="icon -newspaper"></i>
                                <h2 class="title">Artigos</h2>
                                <div class="link">
                                    Veja todos os artigos
                                </div>
                            </a>
                        </header>
                        <ul class="article-list">
                            <?php $count3 = 1; ?>
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                                <?php foreach (get_the_category() as $category) { if ( $category->name == 'Artigos' and $count3 < 5 ) { ?>
                                    <li class="item -border-yellow">
                                        <a href="<?php the_permalink() ?>" class="article">
                                            <strong class="title _color-dark-red"><?php the_title(); ?></strong>
                                            <div class="authors _color-dark-yellow">
                                                <div><?php echo excerpt(200, get_the_excerpt()); ?></div>
                                            </div>
                                        </a>
                                    </li>
                                    <?php $count3++; ?>
                                <?php } } ?>
                            <?php endwhile; endif; ?>
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
                        <p class="_color-white"><strong>Cadastre-se</strong> e receba o Informe.</p>
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
                                <a href="https://chat.whatsapp.com/H9RgWCJpk3DAHaewPF9LST" class="form-button -block -orange">Grupo de Not&#237cias - WhatsApp</a>
                            </div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <section class="section-block">
        <div class="container">
            <div class="partners-block">
                <div class="item">
                    <h2 class="title">Parceria<br>Institucional</h2>
                </div>

                <?php
                    $args = array(
                        'posts_per_page' => 3,
                        'post_type'      => 'parceiros',
                    );
                    $parceiros = get_posts($args);
                ?>

                <?php foreach ($parceiros as $parceiro) : ?>
                    <?php $tit_parceiro = $parceiro->post_title; ?>
                    <?php $link_parceiro = $parceiro->parceiros_link; ?>
                    <div class="item">
                        <a href="<?= $link_parceiro ?>" target="_blank" title="<?= $tit_parceiro ?>">
                            <div class="image-block">
                                <?php
                                    $parces = rwmb_meta('parceiros_foto', 'type=plupload_image', $parceiro->ID);
                                    foreach ( $parces as $parce ) {
                                        echo "<img src='{$parce['url']}' alt='{$tit_parceiro}' class='image' />";
                                    }
                                ?>
                            </div>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>