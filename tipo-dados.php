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

    <title>Aula 3 - Tipo de Dados</title>
</head>
<body>
    <h2>Tipos de Dados</h2>
        <hr>
        <small>Curso de Básico de PHP</small>

        <br>
        <h3>Função var_dump</h3>

      
        <?php 
            $genericObject = new stdClass();
        ?>

        <br>

        <?php 
            $nome = "Marcus";
            $saldo = 100;
            $linguagem = array("PHP", "JavaScript", "CSS");
            $valor = NULL;
            $condicao=true;
            $altura=1.75;
        ?>

        <h4>Tipo de variável $nome</h4> 
        <p><?php var_dump($nome)?></p>
  
        <br>
        
        <h4>Tipo de variável $saldo</h4> 
        <p><?= var_dump($saldo)?></p>

        <br>
        
        <h4>Tipo de variável $linguagem</h4> 
        <p><?= var_dump($linguagem)?></p>

        <br>

        <h4>Tipo de variável $valor</h4> 
        <p><?= var_dump($valor)?></p>

        <br>

        <h4>Tipo de variável $condicao</h4> 
        <p><?= var_dump($condicao)?></p>

        <br>

        <h4>Tipo de variável $altura</h4> 
        <p><?= var_dump($altura)?></p>

        <br>

        <h4>Tipo de variável $genericObject</h4> 
        <p><?= var_dump($genericObject)?></p>

        <br>

        <?php include 'functions/bottom_index.php';?>
    </body>
</html>