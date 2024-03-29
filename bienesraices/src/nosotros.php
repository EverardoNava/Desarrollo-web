<?php
    require "../includes/app.php";
    incluirTemplates("header");
?>

    <main class="contenedor">
        <h1>Conoce Sobre Nosotros</h1>

        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/nosotros.webp" type="image/webp">
                    <source srcset="/build/img/nosotros.jpg" type="image/jpeg">
                    <img loading="lazy" src="/build/img/nosotros.jpg" alt="Sobre nosotros">
                </picture>
            </div>

            <div class="texto-nosotros">
                <blockquote>25 años de experiencia</blockquote>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia unde odit corrupti reiciendis
                    adipisci in, autem molestias labore exercitationem officia id optio ad iure quasi quidem velit iusto
                    eligendi consequatur!Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia unde odit
                    corrupti reiciendis
                    adipisci in, autem molestias labore exercitationem officia id optio ad iure quasi quidem velit iusto
                    eligendi consequatur!</p>

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Mollitia unde odit corrupti reiciendis
                    adipisci in, autem molestias labore exercitationem officia id optio ad iure quasi quidem velit iusto
                    eligendi consequatur!</p>

            </div>

        </div>
    </main>

    <section class="contenedor seccion">
        <h1>Mas Sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="/build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem laudantium laborum animi quis nisi? Cum
                    aspernatur aut fuga. Molestiae, eius! Voluptatem harum praesentium facilis eaque eligendi placeat,
                    illum atque officiis.</p>
            </div>
            <div class="icono">
                <img src="/build/img/icono2.svg" alt="Icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem laudantium laborum animi quis nisi? Cum
                    aspernatur aut fuga. Molestiae, eius! Voluptatem harum praesentium facilis eaque eligendi placeat,
                    illum atque officiis.</p>
            </div>
            <div class="icono">
                <img src="/build/img/icono3.svg" alt="Icono tiempo" loading="lazy">
                <h3>Tiempo</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem laudantium laborum animi quis nisi? Cum
                    aspernatur aut fuga. Molestiae, eius! Voluptatem harum praesentium facilis eaque eligendi placeat,
                    illum atque officiis.</p>
            </div>
        </div>
    </section>

    <?php
    incluirTemplates("footer");
    ?>