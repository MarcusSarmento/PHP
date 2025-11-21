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

    <title>Aula 6 - Arrays</title>
</head>
    <body>
        <h2>Arrays</h2> 
        <hr>
        <small>Curso de Básico de PHP</small>

        <?php $pedidos = array(
            "Capinha de celulae" => array(
                "Loja" => "Loja A",
                "Preço" => 29.90,
            ),
            "Blusa" => array(
                "Loja" => "Loja B",
                 "Preço" => 49.90));?>

        <h3>Informações dos pedidos</h3>

       <!-- Usando print_r() e var_dump() para exibir o conteúdo do array --> 
       <!-- 
       <p> <?php  print_r($pedidos);?> </p>
        <br>
        <br>

        <p> <?php  var_dump($pedidos);?> </p>
        <br>
        <br>
        -->
        <p> <?php  echo $pedidos["Capinha de celulae"]["Loja"]; ?> </p>
        <?php echo count($pedidos); ?>
    </body>
           
</html>