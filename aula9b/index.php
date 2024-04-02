<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <title> livro object</title>
</head>
<body>
<pre>
<?php
require_once 'pessoa.php';
require_once 'livro.php';
$p[0] = new \aula9b\pessoa(22, " pedro", "M");
$p[1] = new \aula9b\pessoa(31, "Maria <hr>", "F");


$l[0] = new \aula9b\livro("php básico", "josé da silva ", 300, $p[0]);
$l[1] = new \aula9b\livro("poo com php", "MAria de Souza", 500, $p[0]);
$l[2] = new \aula9b\livro("livro avançado", "Ana Paula", 800, $p[1]);

$l[0]->abrir();
$l[0]->folhear(80);
$l[0]->avancarPag();
$l[0]->detalhes();

$l[1]->detalhes();
$l[2]->detalhes();

print_r($l[0]);
?>
    </pre>
</body>
</html>