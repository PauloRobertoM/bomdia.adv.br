<?php get_header(); ?>
    
    <?php $page = 'home'; ?>

    <?php get_template_part('components/menu-index'); ?>

    <section class="section-block">
        <div class="container">
            <a href="url.php?id=13" class="ads-block" target="_blank">
                <div class="image-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/arquivos/publicidades/1600507165177e1b07c6b.gif" alt="" class="image">
                </div>
            </a>
            <a href="url.php?id=11" class="ads-block" target="_blank">
                <div class="image-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/arquivos/publicidades/16044091703e2348f4af94.gif" alt="" class="image">
                </div>
            </a>
            <a href="url.php?id=10" class="ads-block" target="_blank">
                <div class="image-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/arquivos/publicidades/16062144460d5a92c4e2a6.png" alt="" class="image">
                </div>
            </a>
            <a href="url.php?id=4" class="ads-block" target="_blank">
                <div class="image-block">
                    <img src="<?php echo get_template_directory_uri(); ?>/arquivos/publicidades/1604963355aa4dbf82fc6.png" alt="" class="image">
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
            </div>
        </div>
    </section>

<?php get_footer(); ?>