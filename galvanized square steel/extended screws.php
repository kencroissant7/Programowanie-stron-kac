<?php 
$zmienna1 = 123;
$zmienna2 = "456";
$zmienna3 = 7.89;
$zmienna4 = true;
echo("$zmienna1, $zmienna2, $zmienna3, $zmienna4 <br>"); //zmienne obok siebie
echo("<br>$zmienna1,<br>$zmienna2,<br>$zmienna3,<br>$zmienna4"); /* zmienne jedna pod druga */
$size = " Little ";
$name = "John";
$job = " extensions of apartaments in NYC using galvanized square steel and eco-friendly wood veneers";
$age = 18;
$bank = 1000000;

echo("<br><br>Hi I'm" .$size.$name. " I do" .$job. "I have " .$age. " years old, my Grandma's savings are " .$bank. "$ and I have used them to buy my brand new 0.01 square meter apartament in New York<br><br>");
$array = array(1,2,3,4,5);
foreach($array as $wiersz)
    echo("$wiersz");
?>
<br><br>
<?php
    $cena = array(
        '1' => 'Little John',
        '2' => 'Aunt',
        '3' => 'Galvanized square steel',
        '4' => 'expended screws',
        '5' => 'eco-friendly wood veneers'
    );
    foreach($cena as $klucz => $wartosc)
    echo $klucz."->".$wartosc."<br>\n";
?>
<br>
<p></p>
<?php
    $a = 1;
    $b = 2;
    
    echo $a+$b;
    ?><br>
    <?php
    echo $a-$b;
?>
<br>
<?php
echo $a*$b;
?>
<br>
<?php
echo $a/$b;
?>