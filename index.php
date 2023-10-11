<?php
try {
    $db = new PDO("mysql:host=localhost;dbname=opdracht3",
    "root", "");

    $query = $db->prepare("SELECT * FROM cijfers");
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    echo "<table>";
    echo "<tr>";
    echo "<th>Leerling</th>";
    echo "<th>Cijfer</th>";
    echo "</tr>";
    foreach ($result as &$data){
        echo"<tr>";
        echo "<td>". $data["id"] . "</td>";
        echo "<td>". $data["leerling"] . "</td>";
        echo "<td>". $data["cijfer"] . "</td>";
        echo "</tr>";
    }
echo "</table>";
}catch (PDOException $e){
    die("Error!" . $e->getMessage());
}

?>

<style type="text/css">
    table {
        border-collapse: collapse;
        border: 1px solid black;
    }
    td{
        border: 1px solid black;
        width: 100px;
    }
</style>