<?php
$usuarioId = get_current_user_id();

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>



<body>
    <header class="header">

        <nav class="flex gap20 pa25">
            <a href="<? echo home_url('/'); ?>">Test</a>
            <a href="<? echo home_url('/'); ?>">Test</a>
            <a href="<? echo home_url('/'); ?>" class="logoSitio">
                <?php echo $GLOBALS['logoViaje']; ?>
            </a>
            <a href="<? echo home_url('/'); ?>">Test</a>
            <a href="<? echo home_url('/'); ?>">Test</a>
        </nav>
    </header>

    <main id="contentAjax" class="main contentAjax">