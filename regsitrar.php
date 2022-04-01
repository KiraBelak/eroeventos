 <!-- comienza el guardado de informacion en base de datos   -->
 <?php   
require 'database.php';
$message='';
if(!empty($_POST['username']) && !empty($_POST['pass'])){
  $sql = "INSERT INTO usuario(username,pass)VALUES(:username,:pass)";
  $state=$conn->prepare($sql);
  $state->bindParam(':username',$_POST['username']);
  $password = password_hash($_POST['pass'],PASSWORD_BCRYPT);
  $state->bindParam(':pass',$password);
  if($state->execute()){
    $message='se arma';
  }else{
    $message='no se arma';
  }
}
?>
 <!-- termina el guardado de informacion en base de datos   -->
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ero Register</title>
    <link rel="stylesheet" href="style1.css">
</head>
<body>
    <div class="login-box">
        <img src="ero.png" class="avatar" alt="Avatar Image">
        <h1>REGISTRO</h1>
        <form action="#" method="post">
        <?php
          if(!empty($message)) : ?>
<p><?=$message?></p>
          <?php endif;
          ?>
          <!-- USERNAME INPUT -->
          <label for="username">Su nombre</label>
          <input type="text" name="username"placeholder="Escriba su nombre">
          <!-- PASSWORD INPUT -->
          <label for="password">Contraseña</label>
          <input type="password" name="pass"placeholder="Escriba su contraseña">
          <input type="submit" value="Registrar">
         
        </form>
</body>
</html>