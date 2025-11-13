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

    <title>Aula 4 - Strings</title>
</head>
<body>
    <h2>Strings</h2>
        <hr>
        <small>Curso de Básico de PHP</small>

        <br>
        <h3>String é uma sequencia de caracteres</h3>

      
        <?php $str = "Eu sou uma string";?>

        <br>

        <h4>Tipo de variável: </h4> 
        <p><?= $str?></p>
  
        <br>

        <h4>Número de caracteres: </h4> 
        <p><?php echo strlen($str);?></p>
  
        <br>

        <h4>Primeiro caractere: </h4> 
        <p><?php echo($str[0])?></p>
  
        <br>

        <h4>Último caractere: </h4> 
        <p><?php echo($str[-1])?></p>
  
        <br>

        <h4>Como extrair parte de uma string: </h4> 
        <p><?php echo substr($str, 0, 3);?></p>
  
        <br>
    
    <h4>Como limpar strings: </h4>

        <?php
            $email = "   marcus@example.com   ";
            $site = "http://www.marcus.com.br";
        ?>

        <h4>Email: </h4>
        <p class = ><?=$email?></p>
        <br>

        <h4>Site: </h4>
        <p><?php echo(trim($site," http://"))?></p>

        <br>

        <?php include 'functions/bottom_index.php';?>
    </body>
</html>