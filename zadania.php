<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zadanie</title>

</head>

<body>
    <form action="" method="post">
        <form method="post" action="index.php">
            <input type="number" name="liczba1" /><br />
            <input type="number" name="liczba2" /><br />
            <input type="radio" name="znak" value="+" /> +<br />
            <input type="radio" name="znak" value="-" /> -<br />
            <input type="radio" name="znak" value="*" /> *<br />
            <input type="radio" name="znak" value="/" /> /<br />
            <input type="submit" value="Licz" />
        </form>
    </form>
</body>

</html>
<?php

@$tekst = $_GET['tekst'];
@$ilosc = $_GET['ilosc'];


for ($i = 0; $i < $ilosc; $i++) {

    echo $tekst . "<br>";
}

@$liczba1 = $_POST['liczba1'];
@$liczba2 = $_POST['liczba2'];
echo 'Wynik działania ' . $liczba1 . ' ' . $_POST['znak'] . ' ' . $liczba2 . ' wynosi ';
switch ($_POST['znak']) {
    case "+":
        echo $liczba1 + $liczba2;
        break;
    case "-":
        echo $liczba1 - $liczba2;
        break;
    case "*":
        echo $liczba1 * $liczba2;
        break;
    case "/":
        echo $liczba1 / $liczba2;
        break;
}


?>