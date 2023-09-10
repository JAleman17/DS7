<!DOCTYPE html>
<html lang="en">
<head>
<title>Laboratorio 3.3</title>
</head>
<body>
    <?php 
    
    if (array_key-exists('enviar', $_POST)){
        if ($_REQUEST ['Apellido'] !="")
        {
            echo "El apellido Ingresado es : $_REQUEST[Apellido]";
        }
        else
        {
            echo "Favor coloque el nombre";
        }
    }
    else{
        ?>
        <form action="lab.33" METHOD = "POST">
            Nombre: <Input TYPE = "SUBMIT" NAME="enviar" VALUE="Enviar datos">
    </FORM>
    <?php
    }
    ?>  
</body>
</html>