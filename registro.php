<?php
include_once('db.php');
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$numero=$_POST['numero'];

echo "¡$nombre!, Gracias por unirte a nustra comunidad. <br>";
echo "Pronto nos pondremos en contacto contigo atraves de tu correo electronico: $email <br>";
echo "o a tu número de celular: $numero <br>";
echo "<br>";
echo "Recuerda que tambien puedes visitarnos en nuestras páginas oficiales";



$conectar=conn();
$sql=" INSERT INTO usuarios (nombre, email, numero )
VALUES ('$nombre', '$email', '$numero')";
$result= mysqli_query($conectar, $sql)or trigger_error("Query Failed! SQL- Error: ".mysqli_error($conectar), E_USER_ERROR);



?>