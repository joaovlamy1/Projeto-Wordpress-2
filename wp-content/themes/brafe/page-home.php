<?php
// Template Name: Home Page
?>

<?php get_header(); ?>
<section class="container" id="sec1">
        <div id="text1">
            <h3><?php the_field('titulo_chamativo') ?></h3>
            <h5><?php the_field('sub-titulo-chamativo') ?></h5>
        </div>
    </section>
    
    <section class="container" id="sec2">
        <div id="text2">
            <h3><?php the_field('titulo_sobre') ?></h3>
            <div id="figures2">
                <figure>
                    <img src="<?php the_field('img1') ?>" alt="Imagem de café com coração">
                    <figcaption>amor</figcaption>
                </figure>
                <figure>
                    <img src="<?php the_field('img2') ?>" alt="Imagem de leite no café">
                    <figcaption>perfeição</figcaption>
                </figure>
                
            </div>
            <p id="ptext2"><?php the_field('text_sobre') ?></p>
        </div>
    </section>

    <section class="container" id="sec3">
        <div id="produtos">
            <div class="type">
                <h3 class="typec" id="sp"><?php the_field('cafe1') ?></h3>
                <p><?php the_field('cafe_text1') ?></p>
            </div>
            
            <div class="type">
                <h3 class="typec" id="rj"><?php the_field('cafe2') ?></h3>
                <p><?php the_field('cafe_text2') ?></p>
            </div>
            
            <div class="type">
                <h3 class="typec" id="mg"><?php the_field('cafe3') ?></h3>
                <p><?php the_field('cafe_text3') ?></p>
            </div>
        <button>SAIBA MAIS</button>    
        </div>
    </section>

    <section id="sec4">
        <div class="franquia">
            <img src="<?php the_field('fran_img1') ?>" alt="franquia Botafogo">
            <div class="franquiatxt">
                <h3><?php the_field('fran_title1') ?></h3>
                <p><?php the_field('fran_text1') ?></p>
                <button>VER MAPA</button>
            </div>
        </div>
        <div class="franquia">
            <img src="<?php the_field('fran_img2') ?>" alt="franquia Iguatemi">
            <div class="franquiatxt">
                <h3><?php the_field('fran_title2') ?></h3>
                <p><?php the_field('fran_text2') ?></p>
                <button>VER MAPA</button>
            </div>
        </div>
        <div class="franquia">
            <img src="<?php the_field('fran_img3') ?>" alt="franquia Mineirao">
            <div class="franquiatxt">
                <h3><?php the_field('fran_title3') ?></h3>
                <p><?php the_field('fran_text3') ?></p>
                <button>VER MAPA</button>
            </div>
        </div>

    </section>

    <section id="sec5">
        <div id="contato">
            <div id="contatotxt">
                <h3><?php the_field('contato_title') ?></h3>
                <h5><?php the_field('contato_text') ?></h5>
            </div>
            <form id="contatoform">
                <input placeholder="Digite seu email"></input>
                <button>Enviar</button>
            </form>
        </div>
    </section>
    <?php get_footer(); ?>