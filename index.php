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

<?php
    $es1 = "SNACK1";
    $span = "Svolgimento esercizio";
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
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];


    $es3 = "SNACK 3";
    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    $es4 = "SNACK 4";
    
?>

<!-- Snack 1 -->
<!-- Creiamo un array contenente le partite di basket di un'ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->
<div>
    <h1> <?php echo $es1; ?> </h1>
    <span> <?php echo $span; ?> </span> <br><br>
    <?php
        // var_dump($matchs);
        for($i=0;$i<count($matchs); $i++) {
            echo $matchs[$i]["home"] . " - " . $matchs[$i]["guest"] . " | " . $matchs[$i]["pointsHome"] . " - " . $matchs[$i]["pointsGuest"] . "<br>";
        }
    ?>
</div>


<!-- Snack 2 -->
<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare "Accesso riuscito", altrimenti "Accesso negato" -->
<div>
    <h1> <?php echo $es2; ?></h1>
    <span><?php echo $span; ?></span> <br><br>
    <span>
        <?php
            if(strlen($name) > 3 && strpos($mail, ".") && strpos($mail, "@") && is_numeric($age)) {
                echo "Accesso al sito CONSENTITO";
            } else {
                echo "Accesso al sito NEGATO, dati non validi";
            }
        ?>
    </span>
</div>

<!-- Snack 3 -->
<!-- Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l'array di esempio: https://www.codepile.net/pile/R2K5d68z -->
<div>
    <h1><?php echo $es3; ?></h1>
    <span><?php echo $span; ?></span>
    <h3>
        <?php
            $keys = array_keys($posts);
            for($i=0; $i<count($keys); $i++) {
                $key = $keys[$i];
                $value = $posts[$key];

                echo $key . ":" . $value . "<br>";
            }
        ?>
    </h3>
</div>

<!-- Snack 4 -->
<!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
<div>
    <h1><?php echo $es4; ?></h1>
    <span><?php echo $span; ?></span>
    <div>
        <?php
            $arrNum = [];
            for($i=0;$i<15;$i++) {
                $arrNum[] = rand(1,100);
            }
            var_dump($arrNum);
        ?>
    </div>
</div>


</body>
</html>