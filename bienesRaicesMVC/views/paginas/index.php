<main class="contenedor seccion">
    <h1>Mas Sobre Nosotros</h1>

    <?php include "iconos.php"; ?>
</main>
<section class="seccion contenedor">
    <h2>Casas y Depas en venta</h2>

    <?php
    $limite = 3;
    include "listado.php";
    ?>

    <div class="alinear-derecha">
        <a href="/propiedades" class="boton-verde">Ver Todas</a>
    </div>
</section>

<section class="imagen-contacto">
    <h2>Encuentra la casa de tu sueños</h2>
    <p>Llena el formulario de contacto y un asesor se pondra en contacto contifo a la brevedad</p>
    <a href="contacto.php" class="boton-amarillo">Contactanos</a>
</section>

<div class="contenedor seccion seccion-inferior">
    <section class="blog">
        <h3>Nuestro Blog</h3>
        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog1.webp" type="imegen/webp">
                    <source srcset="/build/img/blog1.jpg" type="imegen/jpeg">
                    <img loading="lazy" src="/build/img/blog1.jpg" alt="Texto entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Terraza en el techo de tu casa</h4>
                    <p class="informacion-meta">Escrito el: <span>27/10/23</span> por: <span>Admin</span></p>
                    <p>
                        Consejos para construir una terraza en el techo de tu casa con los mejores
                        materiales y ahorrando dinero
                    </p>
                </a>
            </div>
        </article>

        <article class="entrada-blog">
            <div class="imagen">
                <picture>
                    <source srcset="/build/img/blog2.webp" type="imegen/webp">
                    <source srcset="/build/img/blog2.jpg" type="imegen/jpeg">
                    <img loading="lazy" src="/build/img/blog2.jpg" alt="Texto entrada Blog">
                </picture>
            </div>

            <div class="texto-entrada">
                <a href="entrada.php">
                    <h4>Guia para la decoracion de tu hogar</h4>
                    <p class="informacion-meta">Escrito el: <span>27/10/23</span> por: <span>Admin</span></p>
                    <p>
                        Maximisa el espacio en tu hogar con esta guia, aprende a combinar muebles y
                        colores para darle vida a tu espacio
                    </p>
                </a>
            </div>
        </article>
    </section>
    <section class="testimoniales">
        <h2>Testimoniales</h2>
        <div class="testimonial">
            <blockquote>
                El personal se comportó de una exelente forma, muy buena atención y la casa que me
                ofrecieron cumple con todas mis espectativas.
            </blockquote>
            <p>- Everardo Nava</p>
        </div>
    </section>
</div>