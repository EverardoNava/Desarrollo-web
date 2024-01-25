<?php
    require "../includes/app.php";
    incluirTemplates("header");
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>

        <picture>
            <source srcset="/build/img/destacada2.webp" type="image/webp">
            <source srcset="/build/img/destacada2.jpg" type="image/jpeg">
            <img loading="lazy" src="/build/img/destacada2.jpg" alt="imagen de la prorpiedad">
        </picture>

        <p class="informacion-meta">Escrito el: <span>12/12/2023</span> por: <span>Admin</span></p>

        <div class="resumen-propiedad">

            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem laudantium laborum animi quis nisi? Cum
                aspernatur aut fuga. Molestiae, eius! Voluptatem harum praesentium facilis eaque eligendi placeat,
                illum atque officiis.</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rem laudantium laborum animi quis nisi? Cum
                aspernatur aut fuga. Molestiae, eius! Voluptatem harum praesentium facilis eaque eligendi placeat,
                illum atque officiis.</p>
        </div>
    </main>

    <?php
    incluirTemplates("footer");
    ?>