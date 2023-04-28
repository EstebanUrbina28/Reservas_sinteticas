
$('.breadcrumb-counter-nav-item').click(function () {
    $('.breadcrumb-counter-nav-item').removeClass('current');
    $(this).addClass('current');
  });
  $('[data-mobile-app-toggle] .button').click(function () {
    $(this).siblings().removeClass('is-active');
    $(this).addClass('is-active');
  });
  
  
  
  
$(document).foundation();

        $(document).ready(function(){
        $('[data-loading-start]').click(function() {
        $(this).addClass('hide');
        $(this).parent().find('[data-loading-end]').removeClass('hide');
        setTimeout(function() {
          $('[data-loading-start]').removeClass('hide');
          $('[data-loading-end]').addClass('hide');
          $('[data-success-message]').removeClass('hide')
        }, 5000)
      });
      // otro
      
      
      

    $("#mapa").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("mapa.html");
        $("#Modal1").foundation("open");//presentar ventana modal
    });
   

    $("#op_concepto").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("concepto.html");
        $("#Modal1").foundation("open");//presentar ventana modal
    });
    $("#op_iniciar").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("inicio.html");
        $("#Modal1").foundation("open");//presentar ventana modal
    });
    $("#op_registro").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("registro.html");
        $("#Modal1").foundation("open");//presentar ventana modal
    });
    $("#op_registro1").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("registro.html");
        $("#Modal1").foundation("open");//presentar ventana modal
    });

    $("#op_if").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("contactos.html");
        $("#Modal1").foundation("open");//presentar ventana modal
    });


    $("#op_desarrollador").click(function(evt){
        //llamado AJAX 1
        //recargar pagina html en división 
        evt.preventDefault();
        $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
        $("#divres").load("desarrollador.html");
        $("#Modal1").foundation("open");
    });


    $("").click(function(evt){
        //llamado AJAX 2
        //recargar pagina PHP en división 
        evt.preventDefault();
        $.ajax({
            url: "",
            beforeSend: function(){
                $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
            },
            success: function(datos){
                $("#divres").html(datos);
            }
        });
        $("#Modal1").foundation("open");
    });

    $("#cmdBuscar").click(function(evt){
        //llamado AJAX 3
        //recargar pagina PHP en división 
        $.ajax({
            url: "consulta_persona.php",
            type: "POST",
            data: {txtBuscar : $("#txtBuscar").val()},
            beforeSend: function(){
                $("#divres").html("<img src='images/ajax-loader.gif' alt='loader'>");
            },
            success: function(datos){
                $("#divres").html(datos);
            }
        });
        $("#Modal1").foundation("open");
    });

    $("#frmReportes").submit(function(evt){
        evt.preventDefault();
        $.ajax({
            url: "reporte1.php",
            type: "POST",
            data: $("#frmReportes").serialize(),
            beforeSend: function(){
                $("#divSQL1").html("<img src='images/ajax-loader.gif' alt='loader'>");
            },
            success: function(datos){
                $("#divSQL1").html(datos);
            }
        });


    });


});
