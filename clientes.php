 <!-- comienza el guardado de informacion en base de datos   -->
 <?php   
$conn=mysqli_connect('localhost','root','root','eronew',)

?>
 <!-- termina el guardado de informacion en base de datos   -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="tablas.css">

    <title>Document</title>
    
    </style>
</head>
<header>
<img src="ero.png" class="avatar" alt="Avatar Image">
    <a>Clientes</a>
</header>
<body>
    
    <table >
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Correo</th>
            <th>Telefono</th>
            <th>Evento</th>
    </tr>
     <!-- comienza el guardado de informacion en base de datos   -->
 <?php   
$sql="SELECT * FROM cliente";

$result =mysqli_query($conn,$sql);

while($show=mysqli_fetch_array($result)){

?>
 <!-- termina el guardado de informacion en base de datos   -->
    <tr>
        <td><?php echo $show['id']?> </td>
        <td><?php echo $show['nombre']?> </td>
        <td><?php echo $show['apellido']?> </td>
        <td><?php echo $show['correo']?> </td>
        <td><?php echo $show['teléfono']?> </td>
        <td><?php echo $show['id_servicio']?> </td>
    </tr>
    <?php   
}

?>
    </table>
</body>
</html>