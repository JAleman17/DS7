<!DOCTYPE html>
<html>
<head>
    <title>Mostrar imágenes</title>
</head>
<body>
    <h1>Selecciona una opción:</h1>

    <form method="POST" action="">
        <input type="submit" name="opcion" value="Ventas arriba del 80%">
        <input type="submit" name="opcion" value="Ventas entre el 50 y 79 por ciento">
        <input type="submit" name="opcion" value="Ventas malas">
    </form>

    <?php
    if (isset($_POST['opcion'])) {
        $opcion = $_POST['opcion'];

        // Define las rutas de las imágenes para cada opción
        $imagenBuenaEmpresa = 'imagenes\Bien.png';
        $imagenMalaEmpresa = 'imagenes\mal.png';
        $imagenFatal = 'imagenes\medio.png';

        // Muestra la imagen correspondiente según la opción seleccionada
        switch ($opcion) {
            case 'Ventas arriba del 80%':
                echo '<img src="' . $imagenBuenaEmpresa . '" alt="Buena empresa">';
                break;
            case 'Ventas entre el 50 y 79 por ciento':
                echo '<img src="' . $imagenMalaEmpresa . '" alt="Mala empresa">';
                break;
            case 'Ventas malas':
                echo '<img src="' . $imagenFatal . '" alt="Fatal">';
                break;
            default:
                echo 'Selecciona una opción válida.';
        }
    }
    ?>
</body>
</html>
