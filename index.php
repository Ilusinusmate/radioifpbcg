<?php
// Template name: Página inicial
get_header();
$template_directory = get_template_directory_uri();
$inicio_id = get_page_by_title('Página inicial')->ID;
?>
<header id="header">
    <img src="<?php echo $template_directory; ?>/public/assets/logo.png" alt="logo-radio" class="logo" />
    <nav>
        <ul id="menu">
            <li><a class="distance a" href="#sobre-section">Sobre</a></li>
            <li><a class="distance" href="#programacao-container">Programação</a></li>
            <li><a class="distance" href="#programas-section">Programas</a></li>
            <li><a class="distance" href="#equipe-section">Equipe</a></li>
            <li><a class="distance" href="#galeria-section">Galeria</a></li>
            <li><a class="distance" href="#contato-container">Contato</a></li>
        </ul>
    </nav>
    <img src="<?php echo $template_directory; ?>/public/assets/lupa.png" id="lupa" class="lupa" />
    <div id="caixa-de-pesquisa" class="invisivel">
        <form>
            <input type="text" name="pesquisa" />
            <button type="submit" id="search-btn">Enviar</button>
        </form>
    </div>
    <nav class="redes">
        <ul>
            <li>
                <?php
                $meta_value = get_post_meta(get_the_ID(), 'facebook', true); ?>
                <a href="<?php echo $meta_value; ?>" target="_blank">
                    <img style="max-width: 3rem; margin-top: 0.2rem;"
                        src="<?php echo $template_directory; ?>/public/assets/ic_round-facebook.svg" alt="facebook"
                        class="facebook" />
                </a>
            </li>
            <li>
                <?php
                $meta_value = get_post_meta(get_the_ID(), 'instagram', true); ?>
                <a href="<?php echo $meta_value ?>" target="_blank">
                    <img style="max-width: 5.5rem; margin-top: 0.2rem;"
                        src="<?php echo $template_directory; ?>/public/assets/instagram.png" alt="instagram"
                        class="instagram" />
                </a>
            </li>
            <li>
                <?php
                $meta_value = get_post_meta(get_the_ID(), 'youtube', true); ?>
                <a href="<?php echo $meta_value; ?>" target="_blank">
                    <img style="max-width: 2.7rem; margin-top: 0.5rem;"
                        src="<?php echo $template_directory; ?>/public/assets/youtube.png" alt="YouTube"
                        class="Youtube" />
                </a>
            </li>
        </ul>
    </nav>
</header>
<main>
    <img id="fundo" src="<?php echo $template_directory; ?>/public/assets/background.png" alt="imagem de fundo" />
    <img class="imgplay" src="<?php echo $template_directory; ?>/public/assets/fundo-play.svg" alt="imagem-do-play" />
    <img class="logo2" src="<?php echo $template_directory; ?>/public/assets/logo2.svg" alt="logo-do-play" />
    <button class="button">OUÇA AO VIVO</button>

    <div>
        <img class="musica" src="<?php echo $template_directory; ?>/public/assets/musica.svg" alt="musica" />
    </div>

    <div>
        <img class="sugestoes" src="<?php echo $template_directory; ?>/public/assets/sugestoes.svg" alt="sugestoes" />

    </div>
    <div>
        <img class="participe" src="<?php echo $template_directory; ?>/public/assets/participe.svg" alt="participe" />

    </div>
</main>

<section id="sobre-section">
    <h1 class="h1">Sobre</h1>
    <hr color="orange" class="barra" />

    <div>
        <!--
        <p class="text p">
            O Campus Campina Grande do IFPB inaugurou nesta sexta-feira (23)
            a rádio 98,9, primeiro canal licenciado de concessão
        </p>
        <p class="text">
            educativa da Rede Federal. O evento integra as comemorações dos
            113 anos do IFPB.
        </p>
        <p class="text">
            A solenidade oficial de inauguração da Rádio de concessão
            educativa do IFPB foi realizada no auditório do IFPB Campina e
        </p>
        <p class="text">
            transmitida tanto pelo YouTube quanto pela emissora FM.
        </p>
        <p class="text">
            Clique aqui e assista a solenidade de inauguração.
        </p>
    </div>
    -->
        <p class="text">
            <?php $meta_value = get_post_meta(get_the_ID(), 'about_text', true);
            if (!empty($meta_value))
                echo $meta_value;
            else
                echo 'O Campus Campina Grande do IFPB inaugurou nesta sexta-feira (23)
    a rádio 98,9, primeiro canal licenciado de concessão educativa da Rede Federal. O evento integra as comemorações dos
    113 anos do IFPB.'; ?>
        </p>

        <img class="imgesquerda" src="<?php echo $template_directory; ?>/public/assets/imgesquerda.svg"
            alt="imagem-esquerda" />

        <img class="imgdireita" src="<?php echo $template_directory; ?>/public/assets/imgdireita.svg"
            alt="imagem-direita" />

        <?php
        $meta_value = get_post_meta(get_the_ID(), 'about_image_id', true);
        $default_image_url = get_template_directory_uri() . '/public/assets/photo-director.png';

        if (!empty($meta_value)) {
            $image_url = wp_get_attachment_image_src($meta_value, 'thumbnail');
            if ($image_url) {
                $image_url = $image_url[0];
            } else {
                $image_url = $default_image_url;
            }
        } else {
            $image_url = $default_image_url;
        }
        ?>

        <img class="photo" src="<?php echo esc_url($image_url); ?>" alt="foto-diretor" />

</section>
<section id="programacao-container">
    <h1 class="titulo">Programação</h1>
    <hr class="barra" />
    <div id="semana">
        <ul id="lista-cronograma">
            <button id="bt-segunda" class="custom-button" onclick="mostrarDiv('segunda')">segunda-feira</button>
            <button id="bt-terca" class="custom-button" onclick="mostrarDiv('terca')">terça-feira</button>
            <button id="bt-quarta" class="custom-button" onclick="mostrarDiv('quarta')">quarta-feira</button>
            <button id="bt-quinta" class="custom-button" onclick="mostrarDiv('quinta')">quinta-feira</button>
            <button id="bt-sexta" class="custom-button" onclick="mostrarDiv('sexta')">sexta-feira</button>
            <button id="bt-sabado" class="custom-button" onclick="mostrarDiv('sabado')">sábado</button>
            <button id="bt-domingo" class="custom-button" onclick="mostrarDiv('domingo')">domingo</button>
        </ul>
    </div>

    <div id="segunda" class="div-centro" style="display: none;">
        <div id="lista-programacao">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div id="lista-esquerda">
                        <div class="card-programacao">
                            <p class="horario h">00h às 06h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-1', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">06h às 07h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-2', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">07h às 08h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-3', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">08h às 09h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-4', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">09h às 10h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-5', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">10h às 12h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-6', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12h às 12:40h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-7', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12:40h às 13h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-8', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                    <div id="lista-direita">
                        <div class="card-programacao">
                            <p class="horario h">13h às 13:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-9', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">13:35h às 14:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-10', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">14:30h às 15:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-11', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">15:30h às 17h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-12', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">17h às 18h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-13', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">18h às 19h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-14', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">19h às 20h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-15', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">20h às 00h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'segunda-prog-16', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ;
            }
            ; ?>
        </div>
    </div>
    <div id="terca" class="div-centro" style="display: none;">
        <div id="lista-programacao">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div id="lista-esquerda">
                        <div class="card-programacao">
                            <p class="horario h">00h às 06h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-1', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">06h às 07h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-2', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">07h às 08h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-3', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">08h às 09h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-4', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">09h às 10h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-5', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">10h às 12h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-6', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12h às 12:40h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-7', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12:40h às 13h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-8', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                    <div id="lista-direita">
                        <div class="card-programacao">
                            <p class="horario h">13h às 13:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-9', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">13:35h às 14:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-10', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">14:30h às 15:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-11', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">15:30h às 17h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-12', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">17h às 18h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-13', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">18h às 19h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-14', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">19h às 20h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-15', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">20h às 00h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'terca-prog-16', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ;
            }
            ; ?>
        </div>
    </div>
    <div id="quarta" class="div-centro" style="display: none;">
        <div id="lista-programacao">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div id="lista-esquerda">
                        <div class="card-programacao">
                            <p class="horario h">00h às 06h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-1', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">06h às 07h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-2', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">07h às 08h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-3', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">08h às 09h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-4', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">09h às 10h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-5', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">10h às 12h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-6', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12h às 12:40h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-7', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12:40h às 13h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-8', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                    <div id="lista-direita">
                        <div class="card-programacao">
                            <p class="horario h">13h às 13:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-9', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">13:35h às 14:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-10', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">14:30h às 15:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-11', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">15:30h às 17h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-12', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">17h às 18h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-13', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">18h às 19h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-14', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">19h às 20h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-15', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">20h às 00h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quarta-prog-16', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ;
            }
            ; ?>
        </div>
    </div>
    <div id="quinta" class="div-centro" style="display: none;">
        <div id="lista-programacao">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div id="lista-esquerda">
                        <div class="card-programacao">
                            <p class="horario h">00h às 06h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-1', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">06h às 07h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-2', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">07h às 08h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-3', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">08h às 09h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-4', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">09h às 10h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-5', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">10h às 12h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-6', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12h às 12:40h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-7', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12:40h às 13h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-8', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                    <div id="lista-direita">
                        <div class="card-programacao">
                            <p class="horario h">13h às 13:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-9', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">13:35h às 14:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-10', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">14:30h às 15:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-11', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">15:30h às 17h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-12', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">17h às 18h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-13', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">18h às 19h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-14', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">19h às 20h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-15', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">20h às 00h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'quinta-prog-16', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ;
            }
            ; ?>
        </div>
    </div>
    <div id="sexta" class="div-centro" style="display: none;">
        <div id="lista-programacao">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div id="lista-esquerda">
                        <div class="card-programacao">
                            <p class="horario h">00h às 06h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-1', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">06h às 07h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-2', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">07h às 08h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-3', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">08h às 09h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-4', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">09h às 10h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-5', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">10h às 12h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-6', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12h às 12:40h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-7', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12:40h às 13h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-8', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                    <div id="lista-direita">
                        <div class="card-programacao">
                            <p class="horario h">13h às 13:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-9', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">13:35h às 14:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-10', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">14:30h às 15:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-11', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">15:30h às 17h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-12', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">17h às 18h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-13', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">18h às 19h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-14', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">19h às 20h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-15', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">20h às 00h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sexta-prog-16', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ;
            }
            ; ?>
        </div>
    </div>
    <div id="sabado" class="div-centro" style="display: none;">
        <div id="lista-programacao">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div id="lista-esquerda">
                        <div class="card-programacao">
                            <p class="horario h">00h às 06h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-1', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">06h às 07h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-2', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">07h às 08h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-3', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">08h às 09h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-4', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">09h às 10h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-5', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">10h às 12h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-6', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12h às 12:40h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-7', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12:40h às 13h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-8', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                    <div id="lista-direita">
                        <div class="card-programacao">
                            <p class="horario h">13h às 13:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-9', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">13:35h às 14:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-10', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">14:30h às 15:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-11', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">15:30h às 17h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-12', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">17h às 18h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-13', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">18h às 19h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-14', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">19h às 20h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-15', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">20h às 00h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'sabado-prog-16', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ;
            }
            ; ?>
        </div>
    </div>
    <div id="domingo" class="div-centro" style="display: none;">
        <div id="lista-programacao">
            <?php if (have_posts()) {
                while (have_posts()) {
                    the_post(); ?>
                    <div id="lista-esquerda">
                        <div class="card-programacao">
                            <p class="horario h">00h às 06h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-1', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">06h às 07h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-2', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">07h às 08h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-3', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">08h às 09h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-4', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">09h às 10h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-5', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">10h às 12h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-6', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12h às 12:40h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-7', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">12:40h às 13h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-8', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                    <div id="lista-direita">
                        <div class="card-programacao">
                            <p class="horario h">13h às 13:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-9', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">13:35h às 14:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-10', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">14:30h às 15:30h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-11', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">15:30h às 17h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-12', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">17h às 18h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-13', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">18h às 19h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-14', true);

                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">19h às 20h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-15', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                        <div class="card-programacao">
                            <p class="horario h">20h às 00h</p>
                            <p class="programacao h">
                                <?php
                                $meta_value = get_post_meta(get_the_ID(), 'domingo-prog-16', true);
                                if (!empty($meta_value))
                                    echo $meta_value;
                                else
                                    echo 'SEM PROGRAMAÇÃO';
                                ?>
                            </p>
                        </div>
                    </div>
                <?php }
                ;
            }
            ; ?>
        </div>
    </div>

    <div class="div-centro">
        <div class="fundo-card">
            <h1 class="titulo">Especiais</h1>
            <div id="lista-especiais">
                <div class="card-programacao">
                    <p class="horario2 h move">
                        <?php
                        $meta_value = get_post_meta(get_the_ID(), 'horario', true);

                        if (!empty($meta_value))
                            echo $meta_value;
                        else
                            echo 'SEM PROGRAMAÇÃO';
                        ?>
                    </p>
                    <p class="programacao2 h move">
                        <?php
                        $meta_value = get_post_meta(get_the_ID(), 'esp-prog', true);

                        if (!empty($meta_value))
                            echo $meta_value;
                        else
                            echo 'SEM PROGRAMAÇÃO';
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="programas-section" class=" programas-container">
    <h1 id="red" class="titulo">Programas</h1>
    <hr class="barra" />
    <div id="img-centro-container">
        <img src="<?php echo $template_directory; ?>/public/assets/imgesquerda.svg" alt="" class="" />

        <div class="swiper slider">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <img src="<?php echo $template_directory; ?>/public/assets/image-36.svg" alt=""
                        class="img-centro" />
                </li>
                <li class="swiper-slide">
                    <img src="<?php echo $template_directory; ?>/public/assets/image-35.svg" alt=""
                        class="img-centro" />
                </li>
                <li class="swiper-slide">img 3</li>
                <li class="swiper-slide">img 4</li>
            </ul>

            <div class="arrow arrow-left">
                <img src="<?php echo $template_directory; ?>/public/assets/arrow-left.png" alt="" />
            </div>
            <div class="arrow arrow-right">
                <img src="<?php echo $template_directory; ?>/public/assets/arrow-left.png" alt="" />
            </div>
        </div>

        <img src="<?php echo $template_directory; ?>/public/assets/imgdireita.svg" alt="" class="" />
    </div>
</section>

<section id="equipe-section">
    <h1 class="titulo text2">Equipe</h1>
    <hr class="barra" />

    <div class="equipe-centro">
        <div class="grid-equipe">
            <div>
                <div class="card green">
                    <h2>Laís Bruna</h2>
                    <p>Desenvolvedora</p>
                    <img class="image" src="<?php echo $template_directory; ?>/public/assets/e-mail.svg" alt="e-mail" />
                    <p class="email">
                        lais.bruna@academico.ifpb.edu.br
                    </p>
                </div>
                <div class="card red">
                    <h2>Mariana Lira</h2>
                    <p>Desenvolvedora</p>
                    <img class="image" src="<?php echo $template_directory; ?>/public/assets/e-mail.svg" alt="e-mail" />
                    <p class="email">
                        mariliradev@gmail.com
                    </p>
                </div>
                <div class=" card blue">
                    <h2>Yasmyn Julia</h2>
                    <p>Designer</p>
                    <img class="image" src="<?php echo $template_directory; ?>/public/assets/e-mail.svg" alt="e-mail" />
                </div>
            </div>
            <div>
                <div class="card orange">
                    <h2>Vanderléia Silva</h2>
                    <p>Designer</p>
                    <img class="image" src="<?php echo $template_directory; ?>/public/assets/e-mail.svg" alt="e-mail" />
                </div>
                <div class="card pink">
                    <h2>Integrante 5</h2>
                    <p>contador</p>
                    <img class="image" src="<?php echo $template_directory; ?>/public/assets/e-mail.svg" alt="e-mail" />
                </div>
                <div class="card green">
                    <h2>Integrante 6</h2>
                    <p>contador</p>
                    <img class="image" src="<?php echo $template_directory; ?>/public/assets/e-mail.svg" alt="e-mail" />
                </div>
            </div>
        </div>
    </div>
</section>

<section id="galeria-section" class="programas-container">
    <h1 id="red" class="titulo">Galeria</h1>
    <hr class="barra" />
    <div id="img-centro-container">
        <img src="<?php echo $template_directory; ?>/public/assets/imgesquerda.svg" alt="" class="" />

        <div class="swiper swiper-galeria slider">
            <ul class="swiper-wrapper">
                <li class="swiper-slide">
                    <img src="<?php echo $template_directory; ?>/public/assets/image-31.svg" alt=""
                        class="img-centro" />
                </li>
                <li class="swiper-slide">
                    <img src="<?php echo $template_directory; ?>/public/assets/image-32.svg" alt=""
                        class="img-centro" />
                </li>
                <li class="swiper-slide">
                    <img src="<?php echo $template_directory; ?>/public/assets/image-33.svg" alt=""
                        class="img-centro" />
                </li>
                <li class="swiper-slide">
                    <img src="<?php echo $template_directory; ?>/public/assets/image-31.svg" alt=""
                        class="img-centro" />
                </li>
                <li class="swiper-slide">
                    <img src="<?php echo $template_directory; ?>/public/assets/image-32.svg" alt=""
                        class="img-centro" />
                </li>
                <li class="swiper-slide">
                    <img src="<?php echo $template_directory; ?>/public/assets/image-33.svg" alt=""
                        class="img-centro" />
                </li>
            </ul>

            <div class="arrow arrow-left">
                <img src="<?php echo $template_directory; ?>/public/assets/arrow-left.png" alt="" />
            </div>
            <div class="arrow arrow-right">
                <img src="<?php echo $template_directory; ?>/public/assets/arrow-left.png" alt="" />
            </div>
        </div>

        <img src="<?php echo $template_directory; ?>/public/assets/imgdireita.svg" alt="" class="" />
    </div>
</section>

<section id="contato-container" class="text2">
    <h1 class="titulo">Contato</h1>
    <hr class="barra" />

    <div class="container">
        <div class="form">
            <form action="" class="contato-form">
                <p>Entre em contato conosco</p>
                <input class="campo" type="text" placeholder="Nome" />
                <textarea class="campo" name="" id="" cols="30" rows="10" placeholder="Mensagem"></textarea>
                <button type="submit" class="back-green text2">
                    Enviar
                </button>
            </form>
        </div>

        <div class="card-contato">
            <p>Contato</p>
            <hr />
            <div id="infos">
                <div>
                    <img id="img-loc" src="<?php echo $template_directory; ?>/public/assets/localizacao-icone.svg"
                        alt="" />
                    <p>
                        <?php
                        $meta_value = get_post_meta(get_the_ID(), 'endereco', true);
                        if (!empty($meta_value))
                            echo $meta_value;
                        else
                            echo '671 - Tranquilino Coelho Lemos';
                        ?>
                    </p>
                </div>
                <div>
                    <img id="img-mail" src="<?php echo $template_directory; ?>/public/assets/email-icone.svg" alt="" />
                    <p>
                        <?php
                        $meta_value = get_post_meta(get_the_ID(), 'email', true);
                        if (!empty($meta_value))
                            echo $meta_value;
                        else
                            echo 'educativafm@ifpb.edu.br';
                        ?>
                    </p>
                </div>
                <div>
                    <img id="img-phone" src="<?php echo $template_directory; ?>/public/assets/telefone-icone.svg"
                        alt="" />
                    <p>
                        <?php
                        $meta_value = get_post_meta(get_the_ID(), 'telefone', true);
                        if (!empty($meta_value))
                            echo $meta_value;
                        else
                            echo '83 2102 - 6298';
                        ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>