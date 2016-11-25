$(document).ready(function(){
    var formRegister = $('#formRegister');
    //REGISTO DO DOADOR
    formRegister.submit(function(){
      dados = $(this).serialize();
      $.ajax({
        url: '../app/controller/auth.php',
        type: 'POST',
        data: dados+"&action=register",
        beforeSend: function(){
          $('#resposta').empty().html('<img src="../libs/images/load.gif">').fadeIn("fast");
        },
        error: '',
        success: function(resposta){
       if(resposta==111){
            $('#resposta').empty().html("Seu pedido foi enviado com sucesso, aguarde a nossa notificação!").delay(2000).fadeOut();
            window.location.href="photo.php";
       }
        else {
          if (resposta==1062) {
            $('#resposta').empty().html("Conta já existente");
          }else {
            $('#resposta').empty().html("Erro ao registar-se, contacte ao administrador");
          }

        }
        }
      });
      return false;
    });

    //LOGIN DO USUÁRIO

    var loginForm  = $("form[name='loginForm']");
    loginForm.submit(function(){
      dados = $(this).serialize();
      $.ajax({
        url: '../app/controller/auth.php',
        type: 'POST',
        data: dados+'&action=login',
        beforeSend:'',
        error: '',
        success: function(retorno){
          if (retorno===0) {
              $('#resposta').empty().html("<p>As credências de login não correspondem</p>").fadeIn().delay(2000).fadeOut('fast');
          }else {
            window.location.href="user/";
          }
        }
      });
      return false;
    });

    //LOGIN DO ADMINISTRADOR

    var formAdminLogin  = $("form[name='AdminLogin']");
    formAdminLogin.submit(function(){
      dados = $(this).serialize();
      $.ajax({
        url: '../control/AdminControl.php',
        type: 'POST',
        data: dados,
        beforeSend:'',
        error: '',
        success: function(retorno){
          if (retorno===0) {
              $('#resposta').empty().html("<p>As credências de login não correspondem</p>").fadeIn().delay(2000).fadeOut('fast');
          }else {
            window.location.href="index.php";
          }
        }
      });
      return false;
    });
  $(document).on('click', '.modalregister', function(){
    titulodocampo = $(this).attr('id');
    if (titulodocampo=="turmas") {
      $('#turmasselect').fadeIn();
    }else {
      $('#turmasselect').fadeOut();
    }
    $('#camporegistro').attr('placeholder','Digite o/a '+titulodocampo);
    $('input[type="submit"]').attr('value', 'salvar '+titulodocampo);
    $('#page').attr('value', titulodocampo);
    $('#modalregister').css({'display':'block'});
  });

  //HIDE INFO PANEL IN FIRST PAGE
  $("#btn-continue").click(function(){
    $("#firstside").addClass("w3-hide-small").hide();
    $("#form-continue").removeClass("w3-hide-small").fadeIn();
  });

  // HIDE LOGIN FORM IN FIRST PAGE AND BACK TO INFO PANEL
  $("#btn-back").click(function(){
    $("#form-continue").hide();
    $("#firstside").removeClass("w3-hide-small").fadeIn();
  });
  $("#uploadForm").on('change',(function(e) {
  		e.preventDefault();
  		$.ajax({
        url: "../config/uploadAJAX.php",
  			type: "POST",
  			data:  new FormData(this),
  			contentType: false,
      	cache: false,
  			processData:false,
  			success: function(data)
  		    {
  					$('#uploadView').empty().html(data);
            $('#skip').empty().html("Continuar >>");
  		    },
  		  	error: function()
  	    	{
  	    	}
  	   });
  	}));


var formStatus  = $("form[name='formStatus']");
    formStatus.submit(function(){
      dados = $(this).serialize();
      $.ajax({
        url: '../../app/controller/post.php',
        type: 'POST',
        data: dados,
        beforeSend:'',
        error: '',
        success: function(retorno){

        }
    });
    return false;
  });

});
