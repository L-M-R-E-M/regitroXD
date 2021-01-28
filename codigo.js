// Example starter JavaScript for disabling form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
      form.classList.add('was-validated');

      }, false);
    });
  }, false);
})();

$(document).ready(function() {
//validar reCAPCHA
var response = grecaptcha.getResponse();

function coincideRecapcha(){
  

  if(response.length === 0){
    //alert("Captcha no verificado")
    $('#boton').attr("disabled", false);
  } else {
    //alert("Captcha verificado");
    $('#boton').attr("disabled", true);
  }
}
invalidCheck.keyup(function(){
	coincideRecapcha();
  });
});

$(document).ready(function() {
  //variables
  var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
	var pass1 = $('[name=pass1]');
	var pass2 = $('[name=pass2]');
	var confirmacion = "¡Ok válido!";
	var longitud = "La contraseña debe estar formada entre 8-10 carácteres (ambos inclusive)";
  var negacion = "No coinciden las contraseñas";
  var min = "La clave debe tener al menos [a-z], [A-Z], [0-9] y [&$%#/()*]";
  var XD = 0;
	//var vacio = "La contraseña no puede estar vacía";
	//oculto por defecto el elemento span
	var span = $('<span></span>').insertAfter(pass2);
  span.hide();
  
	//función que comprueba las dos contraseñas
	function coincidePassword(){
	var valor1 = pass1.val();
  var valor2 = pass2.val();
  
	//muestro el span
	span.show().removeClass();
	//condiciones dentro de la función
	
	// if(valor1.length==0 || valor1==""){
	// span.text(vacio).addClass('negacion');	
  // }
  //$("#form1").on('submit', function(evt){
	if(valor1.length<8 || valor1.length>10){
  span.text(longitud).addClass('negacion');
  
    XD = 1;
    
	}else{
    if(valor1 != valor2){
      span.text(negacion).addClass('negacion');	
      
        XD = 1;
        
      }else{
        if(strongRegex.test(valor1)){
          if(valor1.length!=0 && valor1==valor2){
            span.text(confirmacion).removeClass("negacion").addClass('confirmacion');
      
            XD = 0;
          
            }
          	
          }else{
            span.text(min).addClass('negacion');
            
              XD = 1;
              
          }
        
      }
  }  
    
  $("#form1").on('submit', function(evt){
  if (XD == 1) {
    evt.preventDefault();
    evt.stopPropagation();
  }
});	
  }
	pass2.keyup(function(){
	coincidePassword();
  });
  pass1.keyup(function(){
    coincidePassword();
    });
});

$('#pass1').keyup(function(e) {
  var strongRegex = new RegExp("^(?=.{8,})(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])(?=.*\\W).*$", "g");
  var mediumRegex = new RegExp("^(?=.{7,})(((?=.*[A-Z])(?=.*[a-z]))|((?=.*[A-Z])(?=.*[0-9]))|((?=.*[a-z])(?=.*[0-9]))).*$", "g");
  var enoughRegex = new RegExp("(?=.{6,}).*", "g");
  if (false == enoughRegex.test($(this).val())) {
          $('#passstrength').html('Pon más caracteres.');
  } else if (strongRegex.test($(this).val())) {
          $('#passstrength').className = 'ok';
          $('#passstrength').html('Fuerte!');
  } else if (mediumRegex.test($(this).val())) {
          $('#passstrength').className = 'alert';
          $('#passstrength').html('Media!');
  } else {
          $('#passstrength').className = 'error';
          $('#passstrength').html('Débil!');
  }
  return true;
});



