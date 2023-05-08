<?php
session_start();
if(isset($_POST["enviar"])){
    if(isset($_POST["usuario"])=="Admin" && isset($_POST["contraseña"])=="ILoveMessi"){
        $_SESSION["validado"]=1;
        header("Location: internoAdmin.php");
        exit();
    }else{
        setcookie("seguridad","0",time()-6000);
        echo "Error de usuario o de clave";
    }
}

//ESTO PUEDE SER UTIL PARA MOSTRAR LOS POKEMONES

/*$servername="localhost";
$username="root";
$password="";
$database="pokedex";

$conn= new mysqli($servername,$username,$password,$database) or die();

$sql="SELECT * FROM Usuario";
$result=$conn->query($sql);
$resultado=$result->fetch_all(MYSQLI_ASSOC);

$conn->close();

foreach ($resultado as $element){
    echo $element["nombre"] ."<br>";
}
*/

?>
<h1>Ingreso como administrador</h1>
<form method="post" action="login.php">
    <label for="usuario">Usuario</label>
    <input type="text" name="usuario" placeholder="Admin">
    <br><br>
    <label for="contraseña">Contraseña</label>
    <input type="password" name="contraseña" placeholder="ILoveMessi">
    <br><br>
    <input type="submit" name="enviar">
</form>
