<?php
use ENTERPRISE\ChildExtendsAbstract;
use ENTERPRISE\Render;
?>
<!doctype html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/src/css/bootstrap.min.css">
    <title>php exercise: OOP - Enterprise</title>
</head>
<body>
<?php
$employer = array();
$employer[0] = new ChildExtendsAbstract("Matas", "Dirgėla", '39507132034','+37061351256','m.dirgela@serveriai.lt','Pravieniškės, Pravieniškių g. 5','Direktorius');
$employer[1] = new ChildExtendsAbstract("Jolanta", "Piniginė", '45003162039','+37061231230','niekad.neatrasau@enterprise.lt','Vilnius, Šv.Barboros g. 19', 'Buhalteris');
$employer[2] = new ChildExtendsAbstract("Liudvikas", "Bethovenas", '30001016666','+37067777777','l.bethovenas@music.com','Karmėlavos sen., Akloji g. 5', 'Programuotojas');
$employer[3] = new ChildExtendsAbstract("Giedrius", "Strazdas", '37410297777','+37067779989','giedrius.strazdas@yahoo.com','Kaunas, Hipodromo g. 42-54','Programuotojas');
$employer[4] = new ChildExtendsAbstract("Tomas", "Alkūnė", '38911308025','+37061121126','kreivas.tomas@grebliai.lt','Kėdainių raj., Lažų kaimas, Alyvų g. 9','Testuotojas');
$employer[5] = new ChildExtendsAbstract("Margarita", "Rytautaitė", '49103126969','+37066666969','as.ledaine@versace.com','Vilnius, Gedimino pr. 9','Testuotojas');
Render::showInfo($employer);
?>
</body>
</html>