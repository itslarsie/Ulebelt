<?php
include 'config.php';

$sql = "SELECT * from ecoinfo";
$result = $conn->query($sql);


if(isset($_GET["paaltje"])){
    $paaltje = $_GET["paaltje"];
    echo "U heeft paaltje " . $paaltje . " gescand, hieronder informatie: <br>";

    $sql = "SELECT * FROM ecoinfo WHERE qrid = " . $paaltje;
    $result = $conn->query($sql);

    if ($result->num_rows > 0){
        $rij = $result->fetch_assoc();
        echo "info: " . $rij["text"];
    }
    else{
        echo "Geen databasegevens gevonden voor ID ";
    }
}


if ($result->num_rows > 0) {

while($row = $result->fetch_assoc()) {
echo "id: " . $row["qrid"]. " - Name: " . $row["text"]. " " . $row["fotos"]. "<br>";
}
} else {
echo "0 results";
}
$conn->close();
?>