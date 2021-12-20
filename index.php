<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<style>
    div {
        background-color: red;
        color: white;
        text-align: center;
        margin-bottom: 20px
    }
</style>
<!-- Snack 1 -->
<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<?php
    $es1 = "SNACK1";
    $span1 = "Traccia esercizio";
    $matchs = [
        [
            'home' => 'Juventus',
            'guest' => 'Atalanta',
            'pointsHome' => '52',
            'pointsGuest' => '44'
        ],
        [
            'home' => 'Milan',
            'guest' => 'Inter',
            'pointsHome' => '42',
            'pointsGuest' => '55'
        ]
    ];
    $es2 = "SNACK 2";
    $name = $_GET("name");
    $mail = $_GET("mail");
    $age = $_GET("age");
?>
<div>
    <h1> <?php echo $es1; ?> </h1>
    <span> <?php echo $span1; ?> </span> <br><br>
    <?php
        // var_dump($matchs);
        for($i=0;$i<count($matchs); $i++) {
            echo $matchs[$i]["home"] . " - " . $matchs[$i]["guest"] . " | " . $matchs[$i]["pointsHome"] . " - " . $matchs[$i]["pointsGuest"] . "<br>";
        }
    ?>
</div>

<br><br><br><br>

<!-- Snack 2 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->


<div>
    <h1><?php echo $es2; ?></h1>
    <?php
        if(count($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
            echo "Accesso al sito CONSENTITO";
        } else {
            echo "Accesso al sito NEGATO";
        }
    ?>
</div>

</body>
</html>