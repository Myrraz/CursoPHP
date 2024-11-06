<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="" method="get">
        <select name="desplegable" id="">
            <option value="1">Opcion1</option>
            <option value="2">Opcion2</option>
        </select>
        <br><br>
        <table border="1">
            <thead>
                <th>Documentos</th>
                <th>Nombres</th>
                <th>Telefono</th>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>a</td>
                    <td>21</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>b</td>
                    <td>22</td>
                </tr>

                <?php

                $inicio = 1;

                while ($inicio <= 10) { //generando mas filas 10 mas
                    $inicio++;

                ?>
                    <tr>
                        <td>2</td>
                        <td>b</td>
                        <td>22</td>
                    </tr>

                <?php

                }

                ?>

            </tbody>

        </table>
        <br>
        <button type="submit" class="shadow__btn">Enviar</button>
    </form>
</body>

</html>