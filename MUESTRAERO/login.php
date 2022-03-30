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