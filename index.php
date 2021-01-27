<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="#" />      
    <link rel="stylesheet" href="bootstrap4/css/bootstrap.min.css">
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,500' rel='stylesheet' type='text/css'>
	  <link rel="stylesheet" href="estilos.css">
    <title>Registro</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="forte.js"></script>
  </head>
  <body>
     <header style="height: 70px">
     </header> 
    <div style="height: 30px;"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class="card shadow-lg p-3 mb-5 bg-white ">
        <div class="card-header">REGISTRO NUEVO</div>
        <div class="card-body">
        <form id="form1" name="form1" action="procesar.php" method="post" class="needs-validation" novalidate>
                  <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="nombre">Nombre</label>
                      <input name="nombre" type="text" class="form-control" id="nombre" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>    
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="apellido">Apellido Paterno</label>
                      <input name="apellido" type="text" class="form-control" id="apellido" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>
                  <div class="form-row">
                      <div class="col-md-4 mb-3">
                      <label for="apellido2">Apellido Materno</label>
                      <input name="apellido2" type="text" class="form-control" id="apellido2" placeholder="" value="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                      <div class="col-md-4 mb-3">
                      <label for="telefono">Número de Teléfono</label>
                      <input name="telefono" type="number" class="form-control" id="telefono" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                      </div>
                    <div class="form-row">
                    <div class="col-md-4 mb-3">
                      <label for="direccion">Dirección</label>
                      <input name="direccion" type="text" class="form-control" id="direccion" placeholder="" required>
                      <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="ema">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="inputGroupPrepend">@</span>
                        </div>
                        <input name="ema" type="email" class="form-control" id="ema" placeholder="" aria-describedby="inputGroupPrepend" required>
                        <div class="valid-feedback">¡Ok válido!</div>
                      <div class="invalid-feedback">Complete el campo.</div>   
                      </div>
                    </div>
                  </div>
                <div class="form-row">
                      <div class="col-md-4 mb-3">
                      <label for="pass1">Password</label>
                      <input name="pass1" autofocus="autofocus" min="8" max="10" type="password" class="form-control" id="pass1" placeholder="" required>
                      <span id="passstrength"></span>
                      <!--<div class="valid-feedback">¡Ok válido!</div>-->
                      <div class="invalid-feedback">Complete el campo.</div>  
                    </div>
                    <div class="col-md-4 mb-3">
                      <label for="pass2">Confirmar Password</label>
                      <input name="pass2" autofocus="autofocus" min="8" max="10" type="password" class="form-control" id="pass2" placeholder="" required>
                      <!--<div class="valid-feedback">¡Ok válido!</div>-->
                      <div class="invalid-feedback">Complete el campo.</div>   
                    </div>
                  </div>
                
                <div class="form-group">
                <div class="form-check">
                            <div class="g-recaptcha form-control" id="invalidCheck" data-sitekey="6LceszwaAAAAAG1_-UmFvef7RQB2YCZUQ2QxQtAX" required></div>
                            <div class="valid-feedback">¡Aceptado!</div> 
                          </div><br>
            
                  <!-- <div class="form-group">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                      <label class="form-check-label" for="invalidCheck">Acepto términos y condiciones</label>
                      <div class="valid-feedback">¡Aceptado!</div>
                    </div>
                  </div> -->
                  <button class="btn btn-primary" type="submit">Enviar</button>
                </form>
        </div>   
    </div>
            </div>       
        </div>                  
    </div>
      
    <script src="jquery/jquery-3.3.1.min.js"></script>	 	
    <script src="popper/popper.min.js"></script>	 	 	
    <script src="bootstrap4/js/bootstrap.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="codigo.js"></script> 	  	
  </body>
</html>