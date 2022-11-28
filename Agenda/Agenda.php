
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php

        //include "Agenda_class.php";
        function chargeClass($nombre_clase) {
            include "$nombre_clase.php";
        }

        
        // CREACION DE FORMULARIO
        $form = "<form method='GET'>"
                . " <p>Nombre: <input type='text' name='name' size:'40'/>"
                . " <p>Telefono: <input type='number' name='tel' />"
                . "<br><br><input type='submit' name='send'/>";
        // IMPRIMO FORMULARIO
        echo $form;
        echo "<br> AGENDA: <br>";
        // COMPRUEBO SI LA AGENDA TIENE VALORES
        if (isset($_GET['agend'])) {
            $agend = $_GET['agend'];
        } else {
            $agend = array();
        }
        // COMPRUEBO QUE SE ENVIA ALGO
        if (isset($_GET['send'])) {

            $nameForm = filter_input(INPUT_GET, 'name');
            $phoneForm = filter_input(INPUT_GET, 'tel');
            // COMPROBAMOS SI EL CAMPO NO ESTA VACIO
            if (empty($nameForm)) {
                echo "introduzca nombre";
            }
            // COMPROBAMOS QUE EL CAMPO TELEFONO ESTE VACIO 
            // Y ELIMINAMOS EL VALOR DE LA AGENDA
            elseif (empty($phoneForm)) {
                unset($agend[$nameForm]);
                echo "se ha eliminado el contacto $nameForm";
            } else {
                // AÑADIMOS LOS VALORES AL ARRAY
                $agend[$nameForm] = $phoneForm;
            }
            // CREAMOS UN INPUT PARA CADA UNO DE LOS ELEMENTOS DE LA ARRAY
            foreach ($agend as $nameA => $numA) {
                echo'<input type="hidden" name="agend[' . $nameA . ']" value="' . $numA . '"/>';
            }
            // COMPROBAMOS SI LA AGENDA ESTA VACIA
            if (count($agend) == 0) {
                echo"la agenda esta vacia";
            } else {
                foreach ($agend as $name => $number) {
                    echo"<li>" . $name . ": " . $number . "</li>";
                }
            }


            echo"</form>";
        }
        ?>
    </body>
</html>
