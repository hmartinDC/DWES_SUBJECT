
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $form = "<form method='GET'>"
                . " <p>Nombre: <input type='text' name='nombre' size:'40'/>"
                . " <p>Edad: <input type='number' name='edad' />"
                . "<br><br><input type='submit' name='send'/> </form>";
        if (isset($_GET['send'])) {
            echo $form;
            echo"Nombre del usuario: " . $_GET['nombre'] . "<br>";
            echo"Edad del usuario: " . $_GET['edad']."<br>";
        } else {

            echo $form;
        }
        ?>
    </body>
</html>
