<html>
<head>
    <meta charset="UTF-8">

    <title></title>

</head>
<body>
<pre>
<?php
require_once 'Banco.php';
$p1 = new Banco();
$p2 = new Banco();
$p1 ->abrirConta("CC");
$p1 -> setNumConta(1111);
$p1 ->setDono("jubileu");
$p2->abrirConta("cp");
$p2->setNumConta(2222);
$p2->setDono("creuza");

$p1-> depositar(300);
$p2->depositar(500);

$p2->sacar(100);
$p1->pagarMensal();
$p2->pagarMensal();

print_r($p1);
print_r($p2);
?>
    </pre>
</body>
</html>
