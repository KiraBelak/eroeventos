<?php 
//here we declare all the variables for each button
$boton="";
$boton1="";
$boton2="";
//then add the value of the button
if(isset($_POST['boton'])) $boton=$_POST['boton'];
if(isset($_POST['boton1'])) $boton1=$_POST['boton1'];
if(isset($_POST['boton2'])) $boton2=$_POST['boton2'];
// now the condition to move to another window
if($boton){ {?>
$ventana= <form   action="servicios.php" method="post">
<?php }}
if($boton1){ {?>
  $ventana= <form   action="clientes.php" method="post">
  <?php }}         
if($boton2){ {?>
  $ventana= <form   action="eventos.php" method="post">
  <?php }}   

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ero Register</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
<div class="login-box">
       
        <form  <?php $ventana?> method="post">

          <input type="submit" name="boton" value="Servicios">
          <input type="submit" name="boton1" value="Clientes">
          <input type="submit" name="boton2" value="Eventos">
        </form>
</body>
</html>