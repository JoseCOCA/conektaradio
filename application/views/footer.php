<footer>
	<section class="slogan">
    	<img src="images/slogan.png" alt="">
    </section>
</footer>
    <script type="text/Javascript" src="js/index.js"></script>
    <script type="text/Javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.pikachoose.min.js"></script>
    <script type="text/javascript" src="js/jquery.touchwipe.min.js"></script>
	<script src="http://shoutbox.widget.me/v1.js" type="text/javascript"></script>
    <script language="javascript">
        window.onload = date_time('date_time');
        !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
        // Popup window code
        function newPopup(url) {
            popupWindow = window.open(
                url,'popUpWindow','height=240,width=360,left=10,top=10,resizable=no,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes')
        }

        $(document).ready(
            function (){
            $("#pikame").PikaChoose({carousel:true});
        });
    </script>
</body>
</html>