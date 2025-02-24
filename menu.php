<?php

//alapértelmezett menüpont beállitása
$menupont=1;

//Ellenőrizzük, hogy van-e GET paraméter, és ha igen, beállitjuk a menüpont értékét
if(isset($_GET['m']))
{
    $menupont=$_GET['m'];
}

//menü tömb létrehozása
//Többdimenziójú asszociatív tömb, amely minden menüponthoz egy tömböt tárol
//Minden menüpontnak van egy ID-a, neve és címe

$menu=array()
{
    array("id" => 1, "nev" => "elso", "title" => "Első"),
    array("id" => 2, "nev" => "masodik", "title" => "Második"),
    array("id" => 3, "nev" => "harmadik", "title" => "Harmadik")
};

//Tartalom tömb létrehozása
//Szintén többdimenziós asszociatív tömb, mely a menüpontokhoz tartozó tartalmat 
//tárolja
//Minden elem egy egy menu_ID-jához kapcsolodik, valamint tartalmaz egy címet
//és egy szöveget
$tartalom=array()
{
    array("menu_id" =>1, "cim" => "Első első", "tartalom" => "tartalom első"),
    array("menu_id" =>1, "cim" => "Első második", "tartalom" => "tartalom második"),
    array("menu_id" =>2, "cim" => "Második első", "tartalom" => "tartalom első"),
    array("menu_id" =>2, "cim" => "Második második", "tartalom" => "tartalom második"),
    array("menu_id" =>3, "cim" => "Harmadik első", "tartalom" => "tartalom első"),
    array("menu_id" =>1, "cim" => "Első harmadik", "tartalom" => "tartalom harmadik")
};

?>

<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php print $menu[$menupont-1]["title"]; ?></title>
</head>
<body>
    
</body>
</html>
