<?php
include("libs/database.php")

if (isset($_POST['actualizar'])) {
    if (strlen($_POST['nombrecompleto']) >= 1 &&
    strlen($_POST['cara']) >= 1 &&
    strlen($_POST['precio']) >= 1 &&
    strlen($_POST['preciodesc']) >= 1) {
        $nombrecompleto = trim($_POST['nombrecompleto']);
        $cara = trim($_POST['cara']);
        $precio = trim($_POST['precio']);
        $preciodesc = trim($_POST['preciodesc']);

        $consulta = "INSERT INTO oferta(nombre, especificación, prec_anterior, descuento) VALUES ('$nombrecompleto','$cara','$precio','$preciodesc')";
        $resultado = mysqli_query($dsn,$consulta);

        if ($resultado) {
            ?>
            <h3>¡Su oferta ha sido enviada!</h3>
            <?php
        } else {
            ?>
            <h3>¡Ups, ha ocurrido un error!</h3>
            <?php
        }
    } else {
        ?>
        <h3>Por favor, complete los campos!</h3>
        <?php
    }
}
?>