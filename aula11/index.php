< !DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<pre>
<?php
require_once 'aluno.php';
require_once 'bolsista.php';
/*$v1= new \aula11\visitante();
$v1->setNome("Juvenal");
$v1->setIdade(33);
$v1->setSexo("M");
print_r($v1);*/

$a1 = new \aula11\aluno();

$a1->setNome("pedro");
$a1->setMatricula(1111);
$a1->setIdade(16);
$a1->setSexo("M");
$a1->setCurso("informatica");
$a1->pagarMensalidade();
print_r($a1);

$b1 = new \aula11\bolsista();
$b1->setMatricula(1112);
$b1->setNome("jubileu");
$b1->setBolsa(12.5);
$b1->setCurso("adm");
$b1->setIdade(21);
$b1->pagarMensalidade();
print_r($b1);


?>
    </pre>
</body>
</html>