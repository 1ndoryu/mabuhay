<?php

// Cierre de contenedor principal abierto en header.php o en las plantillas.
?>
</div>

<footer class="footer flex pa40 gap20 column" style="padding-bottom: 20px;">
    <div class="flex gap40 row">
        <div class="footerTop flex gap15 wrap column pa5">
            <div class="footerLogo">
                <a href="<?php echo home_url('/'); ?>">
                    <?php echo $GLOBALS['logoViaje']; ?>
                </a>
            </div>

            <nav class="footerNav flex column" aria-label="Menú de navegación del sitio">
                <a href="<?php echo home_url('/'); ?>">Inicio</a>
                <a href="<?php echo home_url('/destino'); ?>">Destinos</a>
                <a href="<?php echo home_url('/experiencias'); ?>">Experiencias</a>
                <a href="<?php echo home_url('/nosotros'); ?>">Nosotros</a>
            </nav>

        </div>

        <div class="flex gap20 column footerContact">
            <div class="flex gap20">
                <p><strong>TELÉFONO</strong><br />
                    <a href="tel:+34640366580">+34 640 366 580</a>
                </p>
                <p><strong>EMAIL</strong><br />
                    <a href="mailto:rodrigo@mabuhayviajes.com">rodrigo@mabuhayviajes.com</a>
                </p>
            </div>
            <div class="flex gap20 footerSocial">
                <ul class="flex gap10">
                    <li>
                        <a href="https://www.tiktok.com/@mabuhayviajes" " title=" Seguir en TikTok" target="_blank" rel="noopener noreferrer"><?php echo $GLOBALS['tiktok']; ?></a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/mabuhayviajes" " title=" Seguir en Instagram" target="_blank" rel="noopener noreferrer"><?php echo $GLOBALS['instagram']; ?></a>
                    </li>
                    <li>
                        <a href="https://www.facebook.com/profile.php?id=61573013153180" " title=" Seguir en Facebook" target="_blank" rel="noopener noreferrer"><?php echo $GLOBALS['facebook']; ?></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="flex footerBottom spaceBetween">
        <p>MABUHAY – Todos los derechos reservados 2025 ®</p>
        <p>Sitio web hecho con amor por <a href="https://wandori.us" target="_blank" rel="noopener noreferrer">Wan</a></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>