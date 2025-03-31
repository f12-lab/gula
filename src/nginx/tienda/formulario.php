<?php
set_time_limit(0);

session_start();
if (!isset($_SESSION["ini"])){
    $_SESSION["ini"]=rand(1000,9999);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <h1>Pedidos</h1>
    <form action="procesa.php" method="post">
        <input type="hidden" name="session_id" value="<?php echo $_SESSION["ini"]; ?>">
        <label for="name">Nombre</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="email">Email</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="cupcakes">Cupcakes</label>
        <input type="number" id="cupcakes" name="cupcakes" min="0" value="0" max="50">
        <br>
        <label for="chocolate">Chocolate</label>
        <input type="number" id="chocolate" name="chocolate" min="0" value="0" max="50">
        <br>
        <label for="gominolas">Gominolas</label>
        <input type="number" id="gominolas" name="gominolas" min="0" value="0" max="50">
        <br>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>