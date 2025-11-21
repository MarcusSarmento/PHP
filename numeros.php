<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h4, p {
            display: inline; 
            margin: 0; 
        }
    </style>

    <title>Aula 5 - Números</title>
</head>
    <body>
        <h2>Números</h2> 
        <hr>
        <small>Curso de Básico de PHP</small>

        <h3>Operaores Aritméticos</h3>

        <h4>Escreva a operação:</h4>
          <p> <?php echo(10+5)/5?> </p>
          <br>
          
        <h3>Cálculo da média de dois valores</h3>

        <?php
            $val1 = 6;
            $val2 = 9;  
        ?>

        <table>
            <tr>
                <th>Vslor 1</th>
                <th>Valor 2</th>
                <th>Média</th>
            </tr>
            <tr>
                <td><?php echo $val1; ?></td>
                <td><?php echo $val2; ?></td>
                <td><?php echo (number_format (($val1 + $val2) / 2, 1, ",")) ?>
            </td>
        </table>
       
        <h3>Função matemática</h3>
            <?php 
                $num1 = 420.233;
                $num2 = 289;
            ?>

            <h4>Arredondar: </h4>
            <p> <?php echo round($num1); ?></p>
            <br>

            <h4>Arredondar para cima: </h4>
            <p> <?php echo ceil($num1); ?></p>
            <br>

            <h4>Arredondar para baixo: </h4>
            <p> <?php echo floor($num1); ?></p>
            <br>
    </body>
</html>