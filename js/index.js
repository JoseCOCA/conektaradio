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

    // Called automatically when JavaScript client library is loaded.
    function onClientLoad() {
        gapi.client.load('youtube', 'v3', onYouTubeApiLoad);
    }

    // Called automatically when YouTube API interface is loaded (see line 9).
    function onYouTubeApiLoad() {
        // This API key is intended for use only in this lesson.
        // See http://goo.gl/PdPA1 to get a key for your own applications.
        gapi.client.setApiKey('AIzaSyD4_DozWcMmVznN2uHdFFTjdkas3IhMN9I'); //introducir desde funcion en controlador

        videos('xb6sSVjXjYk,oNNzdLx-7ZA,7iQviGluTtg');

    }

    function videos(id) {
        // Use the JavaScript client library to create a search.list() API call.
        var request = gapi.client.youtube.videos.list({
            part: 'snippet,statistics',
            id: id,
            
        });
        
        // Send the request to the API server,
        request.execute(function (response) {

           
            

            var data = response.items;
            //Insertar videos de youtube

            for (var i = 0; i < data.length; i++) {

                var channelUrlname = data[i].snippet.channelTitle.toLowerCase();
                var channel = channelUrlname.replace(/\s+/g, '');
                var channelUrl = "https://www.youtube.com/user/"+ channel;



                var thumb = '<div class= "video-thumbnail" data-embedID = "' + data[i].id + '"> <a id="videoLink" href="#overlay" > <img src="'+ data[i].snippet.thumbnails.high.url + '" alt="' + data[i].snippet.channelTitle +'" class="image-thumbnail" ></a><p class = thumb-title>'+ data[i].snippet.title +'</p><p class = "channel-thumbnail"> de <a href= "'+ channelUrl +'" target="_blank">'+ data[i].snippet.channelTitle +'</a></p><p class="count-thumbnail">'+ data[i].statistics.viewCount+' visualizaciones</p>'; 
                $('.thumbVideos').append(thumb);

            };

            //console.log(data[0].snippet);
        });
    }

                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
    
    function embedVideo(vidID){
    var player;
        $('#jquery_jplayer_1').jPlayer("stop");
    player = new YT.Player('ytplayer', {
        height: '390',
        width: '640',
        videoId: vidID,
        events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
        }
    });

    }

    function onPlayerReady(event) {
        event.target.playVideo();
    }
    var done = false;
    function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            setTimeout(stopVideo, 6000);
            done = true;
        }
    }
    function stopVideo() {
        player.stopVideo();
    }
   
jQuery(document).on('ready', function($){
    $=jQuery;

                    /*** YOUTUBE EMBEDDED VIDEOS ***/ 
    $('.thumbVideos').on('click','#videoLink',function(event) {
        /* Act on the event */
       //event.preventDefault();
       var videoID = $(this).parent().data('embedid');
       console.log(videoID);
       embedVideo(videoID);
        
    });
 

    $("#pikame").PikaChoose({carousel:true});

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
                    $("#contenido").load("index.php/templates/home",function(){

                        // carrousel noticias
                        $("#pikame").PikaChoose({carousel:true});

                        //youtube api videos seleccionados

                        videos('xb6sSVjXjYk,oNNzdLx-7ZA,7iQviGluTtg');

                    });
                break;
                case "programacion":
                    $("#contenido").load("index.php/templates/programacion",function(){


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
                    $("#contenido").load("index.php/templates/miFarmacia",function(){
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
                    $("#contenido").load("index.php/templates/renovando");
                break; 
                case "antros":
                    $("#contenido").load("index.php/templates/renovando");
                break; 
                case "noticias":
                    $("#contenido").load("index.php/templates/renovando");
                break; 
                case "podcast":
                    $("#contenido").load("index.php/templates/renovando");
                break; 
                case "musica":
                    $("#contenido").load("index.php/templates/renovando");
                break;
                case "contacto":
                    $("#contenido").load("index.php/templates/renovando");
                break;

            }
    });

    /* JPLAYER RADIO */

    $("#jquery_jplayer_1").jPlayer({
    ready: function () {
      $(this).jPlayer("setMedia", {
        mp3: "http://radio.inimusic.com:7174/;stream.mp3",
         // oga: "audio/TEDxPhoenix-KelliAnderson-DisruptiveWonderforaChange.ogg"
      }).jPlayer("play");
    },
    swfPath: "js/",
    supplied: "mp3",
    solution: "html,flash",
  });
    $('.close-overlay').click(function(event) {
        /* reanudar reproductor al cerrar overlay*/
        $('#jquery_jplayer_1').jPlayer("play");
        $('#ytplayer').remove();
        var playerDiv = '<div id="ytplayer"></div>';
        $('.overlay-cont').append(playerDiv);

    });
})

