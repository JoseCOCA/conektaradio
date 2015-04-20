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
    $('#promocion').PikaChoose({
        autoplay: true,
        hoverPause: true,
        //showCaption: false,
    });
    $('.blog').slick({
        autoplay: true,
        //centerMode: true,
        centerPadding: '60px',
        slidesToShow: 2

    });

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
})

