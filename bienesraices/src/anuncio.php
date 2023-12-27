<?php
    require "../includes/funciones.php";
    incluirTemplates("header");
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>
        <picture>
            <source srcset="/build/img/destacada.webp" type="image/webp">
            <source srcset="/build/img/destacada.jpg" type="image/jpeg">
            <img loading="lazy" src="/build/img/destacada.jpg" alt="imagen de la prorpiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000 </p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="/build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="/build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="/build/img/icono_dormitorio.svg" alt="icono habitaciones">
                    <p>4</p>
                </li>
            </ul>
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