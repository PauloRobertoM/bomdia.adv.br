        <footer class="footer-block">
            <div class="top">
                <div class="inner">
                    <ul class="nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="noticias.php">Notícias</a></li>
                        <li><a href="artigos.php">Artigos</a></li>
                        <li><a href="expediente.php">Expediente</a></li>
                        <li><a href="cursos.php">Cursos</a></li>
                        <li><a href="contato.php">Contato</a></li>
                        <li><a href="dificuldade-recebimento.php">Dificuldade no Recebimento</a></li>
                        <li><a href="cancelamento.php">Cancelamento</a></li>
                    </ul>
                    <div class="social">
                        <span class="label">Redes Sociais:</span>
                        <a href="http://www.facebook.com/BomDiaAdvogado" class="link" target="_blank"><i class="icon -facebook"></i></a>
                        <a href="http://twitter.com/bomdiaadvogado" class="link" target="_blank"><i class="icon -twitter"></i></a>
                    </div>
                </div>
            </div>
            <div class="bottom">
                <div class="inner">
                    <div class="item">
                        Bom Dia Advogados <span class="_color-white">®</span>
                    </div>
                    <div class="item">
                        <div class="info">
                            <i class="icon -envelope"></i>
                            <div>
                                <a href="mailto:contato@bomdia.adv.br" target="_blank"><span class="_color-white">contato@</span>bomdia.adv<span class="_color-white">.br</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="info">
                            <i class="icon -phone-receiver"></i>
                            <div>
                                <span class="_color-white">41</span> 3668.8127  <span class="_color-white">/</span>  3653.5104  <span class="_color-white">/</span> 9.9244.6774
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/bomdia.jpg" alt="Boletim Informativo" class="_fluid boletim">
                        <a href="http://fg1.com" target="_blank" class="fg1"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/fg1.png" alt="" class="_fluid"></a>
                    </div>
                </div>
            </div>
        </footer>

        <script type='text/javascript' src="<?php echo get_template_directory_uri(); ?>/assets/js/bundle.min.js"></script>
        <script type="text/javascript">
            var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
        </script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-3673521-4','auto');ga('send','pageview');
        </script>
    </body>
</html>