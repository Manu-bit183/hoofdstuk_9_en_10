<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","");
    $query = db->prepare("select * FROM fietsen");
    $query->execute();
} catch(PDOExeception $e) {
    die("Error!: " . $e->getMessage());
}

try {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","");
    $query = db->prepare("select * FROM fietsen");
    $query->execute();
    $result = $query-fetchAll(PDO::FETCH_ASSOC);
    foreach($result as &$data) {
        echo $data["merk"] . "";
        echo $data["type"] . "";
        echo $data["prijs"] . "<br>";
    }
} catch(PDOExeception $e) {
    die("Error!: " . $e->getMessage());
}


?>
