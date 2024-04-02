<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<pre>
<?php
require_once 'video.php';
require_once 'gafanhoto.php';
require_once 'visualizacao.php';
$v[0]=new \aula14\video("aula 14 de poo");
$v[1]= new \aula14\video("aula 12 de php");
$v[2]= new \aula14\video("aula15 de html5");

$g[0]=new \aula14\gafanhoto("maria",18,"m", "mamonas", 3);
$g[0]->viuMaisUm();
$g[0]->viuMaisUm();


$vis[0] = new visualizacao($g[0],$v[1]);

$vis[1] = new visualizacao($g[0],$v[2]);

$vis[0] ->avaliar();
$vis[1] ->avaliarPorc(85);

print_r($vis);
?>
</pre>
</body>
</html>