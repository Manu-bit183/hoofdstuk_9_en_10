<?php
try {
    $fietsenmaker = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","");
    $query = db->prepare("select * FROM fietsen");
    $query->execute();
} catch(PDOExeception $e) {
    die("Error!: " . $e->getMessage());
}

try {
    $sql = "INSERT INTO `fietsen` (`id`, `merk`, `type`, `prijs`) VALUES (\'1234\', \'batavus\\r\\nbatavus\\r\\ngazelle\\r\\ngazelle\\r\\ngazelle\\r\\ngiant\\r\\ngiant\', \'blockbuster\\r\\nflying D\\r\\neclipse\\r\\ngiro\\r\\ncompetition\\r\\nexpedition AT\', \'699\\r\\n749\\r\\n1049\\r\\n799\\r\\n899\\r\\n999\\r\\n1299\')";
    $fietsenmaker = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","");
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
