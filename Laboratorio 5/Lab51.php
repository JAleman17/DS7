<?php
$allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
$archivoCliente = $_FILES['nombre_archivo_cliente']['name'];
$archivoExtension = pathinfo($archivoCliente, PATHINFO_EXTENSION);

if ($_FILES['nombre_archivo_cliente']['size'] > 1048576) {
    echo "No puede subir el archivo porque supera 1MB de espacio";
} elseif (!in_array(strtolower($archivoExtension), $allowedExtensions)) {
    echo "El archivo no es un formato válido. Por favor, suba una imagen en formato JPG, JPEG, GIF o PNG.";
} else {
    if (is_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'])) {
        $nombreDirectorio = "archivos/";
        $nombrearchivo = $_FILES['nombre_archivo_cliente']['name'];
        $nombreCompleto = $nombreDirectorio . $nombrearchivo;
        
        if (is_file($nombreCompleto)) {
            $idUnico = time();
            $nombrearchivo = $idUnico . "-" . $nombrearchivo;
            echo "Archivo repetido, se cambiará el nombre a $nombrearchivo<br><br>";
        }
        
        move_uploaded_file($_FILES['nombre_archivo_cliente']['tmp_name'], $nombreDirectorio . $nombrearchivo);
        
        echo "El archivo se ha subido satisfactoriamente al directorio $nombreDirectorio <br>";
    } else {
        echo "No se ha podido subir el archivo <br>";
    }
}
?>
