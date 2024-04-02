<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>aula2</title>
</head>
<body>
<div>
  <!--  --><?php
/*
    require_once 'caneta.php';
    $c1 = new caneta;
    $c1->cor = "azul";
    $c1->modelo = "azul";
    $c1->ponta = 0.5;
    $c1->tampada = false;
    $c1->tampar();
    print_r($c1);
    echo "<br/>";
    $c2 = new caneta;
    $c2->cor = "verde";
    $c2->carga = 50;
    $c2->destampar();
    print_r($c2);
    */?>
<pre>
    <?php
    require_once 'caneta.php';
    $c1 = new caneta;
    $c1-> modelo = "bic cristal";
    $c1 -> cor = "azul";
    $c1-> rabiscar();
    $c1->tampar();
    print_r($c1);
    ?>
    </pre>
</div>

</body>
</html>


