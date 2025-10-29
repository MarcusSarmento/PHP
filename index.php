<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h4, p {
            display: inline; /* mantém tudo na mesma linha */
            margin: 0; /* remove espaçamentos extras */
        }
    </style>

    <title>Aula 2 - Variaveis</title>
</head>
<body>
    <h2>CONSTANTES E VARIÁVEIS</h2>
        <hr>
        <small>Curso de Básico de PHP</small>

        <br>
        <h3>Apresentar valor de variáveis</h3>

        <?php 
        $nome = "Marcus";
        $saldo = 100;
        define('banco', 'BNV'); // define uma constante 
        ?>

        <h4>Nome: </h4> 
        <p><?php echo $nome?></p>
        <!--<p><?= $nome?></p> - versão abreviada -->

        <br>
        
        <h4>Saldo: </h4> 
        <p><?= $saldo?></p>

        <br>
        
        <h4>Menssagem: </h4> 
        <p><?= 'Olá, meu nome é ' . $nome ?></p>
    
        <br>
  
        <h4>Menssagem 2: </h4> 
        <p><?= "Meu saldo é  $saldo e meu banco é " .banco ?></p>
    
        <br>

        
        <?php include 'functions/bottom_index.php';?>
    </body>
</html>