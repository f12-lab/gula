<?php
set_time_limit(0);

session_start();

if (!isset($_SESSION["ini"])){
    header("Location:formulario.php");
    exit;
}
else{
    $token=$_SESSION["ini"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $cupcakes=$_POST["cupcakes"];
    $chocolate=$_POST["chocolate"];
    $gominolas=$_POST["gominolas"];
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Pedido</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Tu pedido: <?php echo $token ?></h1>
    <p>Tendrás que presentar en tienda tu token</p>
    <table>
        <tr>
            <th colspan="2">Pedido Infernal</th>
        </tr>
        <tr>
            <td>Nombre</td><td><?php echo $name ?></td>
        </tr>
        <tr>
            <td>Cupcakes</td><td><?php echo $cupcakes?></td>
        </tr>
        <tr>
            <td>Chocolate</td><td><?php echo $chocolate?></td>
        </tr>
        <tr>
            <td>Gominolas</td><td><?php echo $gominolas?></td>
        </tr>
    </table>
    <div class="center-button">
        <a href="session.php"><button>Volver</button></a>
    </div>
</body>
</html>
