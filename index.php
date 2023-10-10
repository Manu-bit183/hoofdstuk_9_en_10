<?php

try {
    $sql = INSERT INTO `fietsen`(`id`, `merk`, `type`, `prijs`)
VALUES(
    '1234',
    'batavus',
    'blockbuster',
    '699'
),('4326', 'batavus', 'flying D', '749'),('7544', 'gazelle', 'eclipse', '799'),('8643', 'gazelle', 'giro', '899'),('8965', 'giant', 'competition', '999'),(
    '5689',
    'giant',
    'expedition AT',
    '1.299'
);
    $fietsenmaker = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","");
    $query = db->prepare("select * FROM fietsen");
    $query->execute();
    $result = $query-fetchAll(PDO::FETCH_ASSOC);
    echo "</table>";
    foreach($result as &$sql) {
        echo "</td>";
            echo "</td>"; $sql["merk"] . "</td>";
            echo "</td>"; $sql["type"] . "</td>";
            echo "</td>"; $sql["prijs"] . "</td>";
        echo "</td>";
    }
    echo "</table>";
} catch(PDOExeception $e) {
    die("Error!: " . $e->getMessage());
}


?>
