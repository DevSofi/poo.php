<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<pre>
<?php
require_once 'pessoas.php';
require_once 'aluno.php';
require_once 'professor.php';
require_once 'funcionario.php';

$p1 = new \aula10\pessoas();
$p2 = new \aula10\aluno();
$p3 = new \aula10\professor();
$p4 = new \aula10\funcionario();

$p1->setNOme("pedro");
$p2->setNome("Maria");
$p3->setNome("Claudio");
$p4->setNome("Fabiana");

$p1->setSexo("M");
$p4->setSexo("F");

$p2->setCurso("informática");
$p3->setSalario(2500);
$p4->setSetor("estoque");




print_r($p1);
print_r($p2);
print_r($p3);
print_r($p4);
?>
</pre>
</body>
</html>