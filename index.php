<!-- comienza el consulta de informacion en base de datos   -->
<?php   
session_start();
require 'database.php';
 
$message='';
if(!empty($_POST['username']) && !empty($_POST['pass'])){
  $sql="SELECT id,username,pass FROM usuario WHERE username=:username";
  $state =$conn->prepare($sql) ;
 $state->bindParam(':username', $_POST['username']);
 $state->execute();
 $results= $state->fetch(PDO::FETCH_ASSOC);
 $message='';
 if(count($results) > 0 && $_POST['pass'] == $results['pass']){
 
 $_SESSION['usuario_id']= $results[ 'id'];

 $message= ' coincide credenciales';
 { ?>

  $ventana= <form  mame=forma action="login.php" method="post">
  
  <?php }
 
 }else{
   $message= 'no coincide credenciales';
   { ?>

    $ventana= <form  mame=forma action="#" method="post">
    
    <?php }
 }

}
?>
 <!-- termina el guardado de informacion en base de datos   -->
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ero Eventos</title>
    <link rel="stylesheet" href="style1.css">
  </head>
  <body>

    <div class="login-box">
        <img src="ero.png" class="avatar" alt="Avatar Image">
        <h1>Entra!</h1>
        <?php $ventana?>
       <form method="post">
          
          <!-- USERNAME INPUT -->
          <?php
          if(!empty($message)) : ?>
<p><?=$message?></p>
          <?php endif;
          ?>
          <label for="username">Su nombre</label>
          <input type="text" name="username"placeholder="Escriba su nombre">
          <!-- PASSWORD INPUT -->
          <label for="password">Contraseña</label>
          <input type="password"name="pass" placeholder="Escriba su contraseña">
           <!-- SUBMIT  -->
          <input type="submit" value="Entrar">
          
          <a href="restaracount.html">Olvido su Contraseña</a><br>
          <a href="regsitrar.php">Aun no tengo cuenta</a>
        </form>
      </div>
  </body>
</html>