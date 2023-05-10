<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista przyjaciół</title>
</head>
<body>
    <div class="baner">
        <h1>Portal Społecznościowy - moje konto</h1>
    </div>
    <div class="main">
        <h2>Moje zainteresowania</h2>
        <ul>
            <li>muzyka</li>
            <li>film</li>
            <li>komputery</li>
        </ul>
        <h2>Moi znajomi</h2>
        <?php
            $con = new mysqli("127.0.0.1","root","","dane");
            $res = ("SELECT imie, nazwisko, opis, zdjecie FROM osoby WHERE Hobby_id IN (1, 2, 6);");

            $wynik = mysqli_query($con, $res);
            while($wiersz = mysqli_fetch_array($wynik)){
                echo "<div class='zdjecie'><img src='$wiersz[3]' alt='przyjaciel'></div>";
                echo "<div class='opis'>
                        <h3>$wiersz[0] $wiersz[1]</h3>
                        <p>Ostatni wpis: $wiersz[2]</p>
                        </div>";
                echo "<div class='linia'><hr></div>";
            }
            mysqli_close($con);
        ?>
        ?>
    </div>
    <div class="author">
        <p>Stronę wykonał: Paweł Lewandowski</p>
    </div>
    <div class="contact">
        <a href="ja@portal.pl">Napisz do mnie</a>
    </div>
</body>
</html>