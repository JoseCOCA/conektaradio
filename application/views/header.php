<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inicio | conektaradio</title>
    <link rel="stylesheet" href="css_/style.css">
    <link rel="stylesheet" href="css_/slides.css">
    <script type="text/javascript" src="js_/jquery-1.11.2.min.js"></script>
    <script type="text/Javascript" src="js_/index.js"></script>
    <!-- <script type="text/javascript" src=" https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> -->
    <script type="text/javascript" src="js_/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js_/jquery.pikachoose.min.js"></script>
    <script type="text/javascript" src="js_/jquery.touchwipe.min.js"></script>
    
    <script language="javascript">
        $(document).ready(
            function (){
            $("#pikame").PikaChoose({carousel:true});
        });
    </script>

</head>
<body>
    <header>
    <a href="JavaScript:newPopup('http://player.inimusic.com/mashter/player/webplayershoutcast/6/5039ddb01ceca2f6494446d610d3229c.html');">
<!--            <div class="animated infinite flash on-air" style="width: 100px; height: 100px; background-color: #C2C8D0;"></div>
 -->
        <img class="headerImg" src="images_/head.jpg" alt="">
    </a>
        <div id="menu">
            <nav>
                <ul>
                    <li><a id="home" href="<?= base_url() ?>">INICIO</a></li>
                    <li><a id="programacion" href= "<?= base_url("renovando") ?>"> PROGRAMACION</a></li>
                    <li><a id="miFarmacia"  href="<?= base_url("renovando") ?>">MI FARMACIA</a></li>
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
