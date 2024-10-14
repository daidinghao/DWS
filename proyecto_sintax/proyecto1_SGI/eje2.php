<!DOCTYPE html>
<body>
<?php
    // Crear 3 variables y muestra en la tabla de HTML
    $nombre = "Maria";
    $direccion = "C/Avenida de Madrid";
    $email = "Anamaria@gamil.com";
?>
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>Direccion</th>
        <th>Email</th>
    </tr>
    <tr>
        <td><?php echo "$nombre"; ?></td>
        <td><?php echo "$direccion"; ?></td>
        <td><?php echo "$email"; ?></td>
    </tr>
</table>
</body>
