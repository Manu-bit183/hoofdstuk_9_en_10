<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=fietsenmaker","root","");
    $query = db->prepare("select * FROM fietsen");
    $query->execute();
} catch(PDOExeception $e) {
    die("Error!: " . $e->getMessage());
}

?>
