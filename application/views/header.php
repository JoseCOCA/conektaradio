<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="es">
<head>
    <meta name="description" content="Conektaradio | la radio nunca habia estado tan cerca
     de ti, conektando tus sentidos con programas de calidad y la musica que más te gusta.
     Escuchanos todos los días he inicia tu día al cien!!">
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <meta property="og:url" content="http://www.conektaradio.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Conektaradio" />
    <meta property="og:description" content="La radio nunca habia estado tan cerca de ti" />
    <!-- Image OGP Logo2-->
    <meta property="og:image" content="http://conektaradio.com/images/logo2.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <!-- Image OGP Logo3-->
    <meta property="og:image" content="http://conektaradio.com/images/logo3.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <!-- FB ID -->
    <meta property="fb:app_id" content="695585400515481" />

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/slides.css">
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>

</head>
<body>
    <header>
    <a href="JavaScript:newPopup('http://player.inimusic.com/mashter/player/webplayershoutcast/6/5039ddb01ceca2f6494446d610d3229c.html');">
<!--            <div class="animated infinite flash on-air" style="width: 100px; height: 100px; background-color: #C2C8D0;"></div>
 -->
        <img class="headerImg" src="images/head.jpg" alt="">
    </a>
        <div id="menu">
            <nav>
                <ul>
                    <li><a id="home" href="<?= base_url() ?>">INICIO</a></li>
                    <li><a id="programacion" href= "<?= base_url("programacion") ?>"> PROGRAMACION</a></li>
                    <li><a id="miFarmacia"  href="<?= base_url("miFarmacia") ?>">MI FARMACIA</a></li>
                    <li><a id= "coffe" href="<?= base_url("renovando") ?>">COFFEE SEED</a></li>
                    <li><a href="<?= base_url("renovando") ?>">ANTROS REST & BAR</a></li>
                    <li><a href="<?= base_url("renovando") ?>">NOTICIAS</a></li>
                    <li><a href="<?= base_url("renovando") ?>">PODCAST</a></li>
                    <li><a href="<?= base_url("renovando") ?>">MUSICA</a></li>
                    <li><a href="<?= base_url("renovando") ?>">CONTAKTANOS</a></li>
                </ul>
            </nav>
        </div>
    </header> 
