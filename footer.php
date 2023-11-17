<?php
$template_directory = get_template_directory_uri();
?>
<footer>
    <div class="column">
        <img id="logo-marca" src="<?php echo $template_directory; ?>/public/assets/logo-marca.svg" alt="">
        <img id="logo-if" src="<?php echo $template_directory; ?>/public/assets/logo-if.svg" alt="">
    </div>

    <div class="column">
        <div class="row">
            <p class="titulo-footer">sobre</p>
            <hr color="var(--blue-color);" />
            <a href="#sobre-section" class="link-footer">Informações sobre a rádio</a>
        </div>
        <div class="row">
            <p class="titulo-footer">programação</p>
            <hr color="var(--pink-color);" />
            <a href="#programacao-container" class="link-footer">Dias, horários e programas que ocorreram</a>
        </div>
    </div>

    <div class="column">
        <div class="row">
            <p class="titulo-footer">programas</p>
            <hr color="var(--orange-color);" />
            <a href="#programas-section" class=" link-footer">Parte visual dos programas</a>
        </div>
        <div class="row">
            <p class="titulo-footer">equipe</p>
            <hr color="var(--green-color)" />
            <a href="#equipe-section" class="link-footer">Membros responsáveis pela criação do site e seus
                integrantes</a>
        </div>
    </div>

    <div class="column">
        <div class="row">
            <p class="titulo-footer">galeria</p>
            <hr color="var(--green-color)" />
            <a href="#galeria-section" class="link-footer">Fotos da rádio</a>
        </div>
        <div class="row">
            <p class="titulo-footer">início</p>
            <hr color="var(--orange-color);" />
            <div class="column">
                <a class="link-footer">Logo</a>
                <a href="" class="link-footer">Músicas</a>
                <a href="" class="link-footer">Sugestões</a>
                <a href="" class="link-footer">Participe</a>
            </div>
        </div>
    </div>

    <div class="column">
        <div class="row" style="margin-bottom: 3.9rem;">
            <p class="titulo-footer">contato</p>
            <hr color="var(--blue-color);" />
            <div class="column">
                <a href="" class="link-footer">Telefone</a>
                <a href="" class="link-footer">E-mail</a>
                <a href="" class="link-footer">Caixa de texto</a>
            </div>
        </div>
        <div class="row">
            <hr>
            <?php
            $meta_value = get_post_meta(get_the_ID(), 'youtube', true); ?>
            <a href="<?php echo $meta_value ?>" class="link-footer" target="_blank">
                <img class="rede-social" src="<?php echo $template_directory; ?>/public/assets/logo-youtube-branco.svg"
                    alt="">
            </a>
            <?php
            $meta_value = get_post_meta(get_the_ID(), 'facebook', true); ?>
            <a href="<?php echo $meta_value ?>" class="link-footer" target="_blank">
                <img class="rede-social" src="<?php echo $template_directory; ?>/public/assets/logo-facebook-branco.svg"
                    alt="">
            </a>

            <?php
            $meta_value = get_post_meta(get_the_ID(), 'instagram', true); ?>
            <a href="<?php echo $meta_value ?>" class="link-footer" target="_blank">
                <img class="rede-social"
                    src="<?php echo $template_directory; ?>/public/assets/logo-instagram-branco.svg" alt="">
            </a>
        </div>
    </div>
</footer>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="../public/js/index.js"></script>
<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper", {
        slidesPerView: 2,
        loop: true,
        spaceBetween: 0,
        navigation: {
            nextEl: ".arrow-right",
            prevEl: ".arrow-left",
        },
    });

    var swiperGaleria = new Swiper(".swiper-galeria", {
        slidesPerView: 3,
        loop: true,
        spaceBetween: 0,
        navigation: {
            nextEl: ".arrow-right",
            prevEl: ".arrow-left",
        },
    });
</script>

<?php wp_footer(); ?>

</body>

</html>