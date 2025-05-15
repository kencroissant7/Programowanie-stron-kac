<?php 
$conn = mysqli_connect('localhost',"root","", "mieszalnia");
if($conn->connect_error){
    die("conn failed: " . mysqli_connect_error());
}

?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Mieszanina farb</title>
    <link rel="icon" type="image/png" href="fav.png" >
</head>
<body>
    <nav><img src="tlo.png" alt="Mieszalnia farb"></nav>

    <form id="formulrz" method="POST">
        <label for="">Data odbioru do: 
            <input type="date" name="od">
        </label>

        <label>do:
            <input type="date" name="do">
        </label>
        <button type="submit">Wyszukaj</button>
    </form>

    <main>

        <table>
            
        <?php
if(empty($_POST['od']) || empty($_POST['do'])) {
    $query = "SELECT klienci.Nazwisko, klienci.Imie, zamowienia.kod_koloru, zamowienia.pojemnosc, zamowienia.data_odbioru 
              FROM klienci 
              JOIN zamowienia ON klienci.Id = zamowienia.id_klienta 
              ORDER BY zamowienia.data_odbioru ASC";
} else {
    $od = $_POST['od'];
    $do = $_POST['do'];
    $query = "SELECT klienci.Nazwisko, klienci.Imie, zamowienia.kod_koloru, zamowienia.pojemnosc, zamowienia.data_odbioru 
              FROM klienci 
              JOIN zamowienia ON klienci.Id = zamowienia.id_klienta 
              WHERE zamowienia.data_odbioru BETWEEN '$od' AND '$do'";
}

$result = mysqli_query($conn, $query);
?>

<table>
    <tr>
        <th>Nazwisko</th>
        <th>Imię</th>
        <th>Kolor</th>
        <th>Pojemność [ml]</th>
        <th>Data odbioru</th>
    </tr>

    <?php
    while($row = mysqli_fetch_assoc($result)) {
        $kolor = $row['kod_koloru'];
        echo "<tr>";
        echo "<td>{$row['Nazwisko']}</td>";
        echo "<td>{$row['Imie']}</td>";
        echo "<td style='background-color:#$kolor'>{$row['kod_koloru']}</td>";
        echo "<td>{$row['pojemnosc']}</td>";
        echo "<td>{$row['data_odbioru']}</td>";
        echo "</tr>";
    }

    $conn->close();
    ?>
        </table>

    </main>

    <footer><h3>Egzamin INF.03</h3><p>Autor: 0000000000</p></footer>
</body>
</html>