<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" lang="es">
<head>
    <meta name="description" content="Conektaradio | la radio nunca habia estado tan cerca
     de ti, conektando tus sentidos con programas de calidad y la musica que más te gusta.
     Escuchanos todos los días he inicia tu día al cien!!">
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <meta property="og:url" content="http://conektaradio.com" />
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
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
    <!-- <script src="//api.html5media.info/1.1.8/html5media.min.js"></script> -->
    <script type="text/javascript" src="js/jquery.jplayer.min.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=OnLoadCallback"></script>
</head>
<body>
    <header>
        <a href="#" id="radio">
            <img class="headerImg" src="images/head.jpg" alt="">
        </a>
        <div id="menu">
            <nav>
                <ul>
                    <li><a class="navMenu" id="home" href="">INICIO</a></li>
                    <li><a class="navMenu" id="programacion" href= ""> PROGRAMACION</a></li>
                    <li><a class="navMenu" id="miFarmacia"  href="">MI FARMACIA</a></li>
                    <li><a class="navMenu" id= "coffe" href="">COFFEE SEED</a></li>
                    <li><a class="navMenu" id="antros" href="">ANTROS REST & BAR</a></li>
                    <li><a class="navMenu" id="noticias" href="">NOTICIAS</a></li>
                    <li><a class="navMenu" id="podcast" href="">PODCAST</a></li>
                    <li><a class="navMenu" id="musica" href="">MUSICA</a></li>
                    <li><a class="navMenu" id="contacto" href="">CONTAKTANOS</a></li>
                </ul>
            </nav>
        </div>
    </header> 


<!--         <button id = "play-bt">
            <img style="width:30px;"src="images/playBtn.png" alt="">
        </button> -->
    <div class="wrapper" id="contenido">        
        <?php $this->load->view('home'); ?>
    </div>
        <?php $this->load->view('aside'); ?>
<footer>
<!--     <iframe src="http://player.inimusic.com/mashter/player/webplayershoutcast/6/5039ddb01ceca2f6494446d610d3229c.html" frameborder="0" allowfullscreen></iframe>
 -->    <section class="slogan">
        <img src="images/slogan.png" alt="">
    </section>
</footer>
    <script type="text/Javascript" src="js/index.js"></script>
    <script type="text/Javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.pikachoose.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
    <script src="http://shoutbox.widget.me/v1.js" type="text/javascript"></script>
    <script language="javascript" type="text/javascript" src="http://radio.inimusic.com/system/streaminfo.js"></script>
    <script language="javascript">
        window.onload = date_time('date_time');
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
    </script>
</body>
</html>