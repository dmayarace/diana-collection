<?php
//Create PDO connection including et fetch mode

$db = new PDO('mysql:host=db; dbname=diana-collection', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

$query = $db->prepare("SELECT steeldrums.`name`, steeldrums.`manufacturer`, steeldrums.`inches`, steeldrums.`notes`, steeldrums.`color`, steeldrums.`cost`, steeldrums.`img-url` FROM steeldrums;");

$query->execute();

$result = $query->fetchAll();
var_dump($result);

foreach ($result as $drum) {
    echo 'name: '.$drum['name'] . ',manufacturer: ' . $drum['manufacturer']. ',inches: ' . $drum['inches']. ',notes: ' . $drum['notes']. ',color: ' . $drum['color']. 'cost: ' .$drum['cost']. 'img-url' . $drum['img-url'].'<br>';
}
?>
