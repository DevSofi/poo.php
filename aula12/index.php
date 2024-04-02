<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
/*require_once 'mamifero.php';
require_once 'reptil.php';
require_once 'peixe.php';
require_once 'ave.php';
require_once 'canguru.php';
require_once 'cobra.php';
require_once 'tartaruga.php';
require_once 'goldfish.php';

$m = new \aula12\mamifero();
$a = new \aula12\ave();
$r = new \aula12\reptil();
$c = new \aula12\canguru();
$t = new \aula12\tartaruga();

$m->locomover();
$c->locomover();
$t->locomover();

$c->emitirSom()*/

 require_once 'mamifero.php';
 require_once 'lobo.php';
 require_once 'cachorro.php';
 $c = new \aula12\cachorro();
 $c->reagirHora(11,45);
 $c->reagirHora(21,00);

?>
</body>
</html>