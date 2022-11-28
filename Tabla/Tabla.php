<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            .blue:hover{
                background-color: pink;

            }
        </style>
    </head>
    <body>
        <?php
        $table = '<table border="4" align="center"><thead><tr><th>MULTIPLICA</th> ';

        for ($i = 0; $i <= 10; $i++) {
            $table .= "<th id='x" . $i . "'>" . $i . "</th>";
        }
        $table .= '</tr></thead><tbody>';

        for ($f = 0; $f <= 10; $f++) {
            $table .= "<tr><th id='y$f'>" . $f;
            for ($x = 0; $x <= 10; $x++) {
                $j = $f * $x;
                $table .= "<td data-x=$x data-y=$f>" . $j . "</td>";
            }
            echo '<tr>';
        }
        echo $table;
        ?>
    </body>
    <script>
        const paintTd = document.querySelectorAll("td");
        let x;
        let y;

        paintTd.forEach(td => {
            td.addEventListener("mouseover", () => {
                x = td.dataset.x;
                y = td.dataset.y;
                paintTd.forEach(td => {
                    if (td.dataset.x == x) {
                        td.classList.add("blue");
                    }
                });

            });
        });



    </script>
</html>
