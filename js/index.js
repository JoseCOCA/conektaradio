function date_time(id)
    {
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Domingo', 'Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado');
        h = date.getHours();
        if(h<10)
        {
                h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
                m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
                s = "0"+s;
        }
        result = ''+days[day]+' '+months[month]+' '+d+' '+year+' '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
    }
jQuery(document).on('ready', function($){
    $=jQuery;
    $("#pikame").PikaChoose({carousel:true});
    //control de radio

    // var audioplayer = document.getElementById("audio-player");
    // $("#play-bt").click(function(){
    //     if (audioplayer.paused) {
    //        audioplayer.play();
    //     }   
    //     else {
    //        audioplayer.pause();
    //     }
    //     $(this).toggleClass('pause');  /* style your toggle button according to 
    //                                       the current state */
    // })
    

    //radio popup window

    $('#radio').click(function(event) {
        event.preventDefault();
        var url = "http://player.inimusic.com/mashter/player/webplayershoutcast/5/5d86be488eca06adda644cba42fc0f80.html";
        window.open(url, "Radio por internet", "width=450, height=350");
    });


    //Navegacion menu
    $('.navMenu').click(function(e) {
            e.preventDefault();
            var id = $(this).attr('id');
            switch(id){
                case "home":
                    $("#contenido").load("templates/home",function(){
                        $("#pikame").PikaChoose({carousel:true});
                    });
                break;
                case "programacion":
                    $("#contenido").load("templates/programacion",function(){

                        $('.Prog').click(function(e){
                            e.preventDefault();
                            var getID = $(this).parent().attr("id");
                            var descripcion = $('#'+ getID).children('article');
                            var foto = $('#' + getID).children('img');
                            if(descripcion.hasClass("oculto")){
                                foto.hide("fast");
                                descripcion.slideDown("slow").toggleClass("oculto");
                            }else{
                                //alert("slideup");
                                foto.show("slow");
                                descripcion.slideUp("fast").toggleClass("oculto");
                            }
                        });
                    });
                break;

                case "miFarmacia":
                    $("#contenido").load("templates/miFarmacia",function(){
                        $('.blog').slick({
                            autoplay: true,
                            //centerMode: true,
                            centerPadding: '60px',
                            slidesToShow: 2

                        });

                        $('#promocion').PikaChoose({
                            autoplay: true,
                            hoverPause: true,
                            //showCaption: false,
                        });                        

                    });
                break;
                case "coffe":
                    $("#contenido").load("templates/renovando");
                break; 
                case "antros":
                    $("#contenido").load("templates/renovando");
                break; 
                case "noticias":
                    $("#contenido").load("templates/renovando");
                break; 
                case "podcast":
                    $("#contenido").load("templates/renovando");
                break; 
                case "musica":
                    $("#contenido").load("templates/renovando");
                break;
                case "contacto":
                    $("#contenido").load("templates/renovando");
                break;

            }
    });
})

