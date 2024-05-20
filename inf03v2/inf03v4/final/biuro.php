<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poznaj Europe</title>
    <link rel="stylesheet" href="styl9.css">
</head>
<body>
    <div class="top">
        <h1>BIURO PODRÓŻY</h1>
    </div>
    <main>
        <div class="left">
            <h2>Promocje</h2>
            <table>
                <tr>
                    <td>Warszawa</td>
                    <td>od 600zł</td>
                </tr>
                <tr>
                    <td>Wenecja</td>
                    <td>od 1200zł</td>
                </tr>
                <tr>
                    <td>Paryż</td>
                    <td>od 1200zł</td>
                </tr>
            </table>
        </div>
        <div class="middle">
            <h2>W tym roku jedziemy do...</h2>
            <?php
                $dbhost = "localhost";
                $username = "root";
                $password = "";
                $dbname ="podroze";
                $port = "3306";

                $conn = new mysqli($dbhost, $username, $password, $dbname, $port);
                $records = $conn->query("SELECT nazwaPliku, podpis FROM zdjecia;");

                while(list($nazwaPliku, $podpis) = mysqli_fetch_row($records)){
                    echo("<img src='$nazwaPliku' alt='$podpis' title='$podpis'>");
                }




            ?>
            </div>
        <div class="right">
            <h2>Kontakt</h2>
            <a href="e-mail biuro@wycieczki.pl">napisz do nas</a>
            <p>telefon: 444555666</p>
        </div>
    </main>
    <div class="bottom">
        <h3>W poprzednich latach byliśmy...</h3>
    </div>
    <footer>
        <p>galvanized square steel</p>
    </footer>
 
</body>
</html>