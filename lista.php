<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styl.css">
    <title>Lista przyjaciół</title>
</head>
<body>
<div class="baner">
<h1>Portal Społecznościowy - moje konto </h1>

</div>
<div class="glowny">
<h2>Moje zainteresowania</h2>
<ul>
<li>Muzyka</li>
<li>Film</li>
<li>Komputery</li>
</ul>

<h2>Moi znajomi</h2>
<?php
$polaczenie = mysqli_connect('localhost', 'root', '', 'dane');
$zapytanie = "SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN (1,2,6)";

$wynik = mysqli_query($polaczenie, $zapytanie);
while($wiersz = mysqli_fetch_array($wynik)){
echo "<div id='zdjecie'><img src='$wiersz[3]' alt='przyjaciel'></div>";
echo "<div id='opis'>
<h3>$wiersz[0] $wiersz[1]</h3>
<p>Ostatni wpis: $wiersz[2]</p>
</div>";
echo "<div id='linia'><hr></div>";
}
mysqli_close($polaczenie);
?>

</div>
<div class="stopka1">
    Strone wykonał:000000000000000

</div>
<div class="stopka2">
    <a href="odnośnik pocztowy" target="ja@portal.pl">napisz do mnie</a>

</div>

</body>
</html>