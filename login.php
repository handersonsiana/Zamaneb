
<?php

  //Mostrar errores de validacion de usuario, en caso de que lleguen
  
    if( isset( $_POST['msg_error'] ) )
    {
      switch( $_POST['msg_error'] )
      {
        case 1:
      ?>
            
            <div class="alert alert-success" style="position: absolute; left: 43px; top: 538px; width: 920px;">
        <button type="button" class="close" data-dismiss="alert" onClick="window.location='index.php'">&times;</button>
        <strong>Seguridad!</strong> El usuario o password son incorrectos. 
        </div>
    
      <?php
        break;      
        case 2:
        
      ?>
            
             <div class="alert alert-danger" style="position: absolute; left: 43px; top: 538px; width: 920px;">
        <button type="button" class="close" data-dismiss="alert" onClick="window.location='index.php'">&times;</button>
        <strong>Seguridad!</strong> La sección a la que intentó ingresar está restringida. Sólo es permitida para usuarios registrados.
        </div>
         
      <?php   
        break;
        
      }   //Fin switch
    }

  
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content
    <link rel="icon" href="favicon.ico">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/validacionesjs.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <script type="text/javascript">

function validarCampos()
{
    
   if (frmIngresar.inputUsuario.value =="")
   {
    alert("Ingrese Usuario Por Favor");
      frmIngresar.inputUsuario.focus();
      return false;
   }
   if (frmIngresar.inputPassword.value =="")
   {
    alert("Ingrese Contraseña Por Favor") ;
      frmIngresar.inputPassword.focus();
      return false;
   }
   
   return true;
}

</script>

  <body>

    <div class="container">

          <!-- <img src="image/Zamaneb.png" class="img-responsive" alt=""  --> 
      <form class="form-signin" action="paginas/validar_usuario.php" method="POST" name="frmIngresar" onSubmit="return validarCampos();">
       <h2 class="form-signin-heading"> <img src="image/Zamaneb.png" class="img-circle" width="80" height="80"/>
       Iniciar Sesión</h2>

        <label for="inputUsuario" class="sr-only">Email address</label>
        <input type="text" id="inputUsuario" class="form-control input-lg" placeholder="Usuario" name="Usuario" required autofocus><br/>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control input-lg" placeholder="Password" name="Password"required>
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar</button>
      </form>

    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
