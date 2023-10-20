<!DOCTYPE html>
<html lang="pl=PL">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP'owskie gówno</title>
    </head>
    <body>
        <form action="index.php" method="get">
            Liczba: <input type="number" name="input_nmb" id="input_nmb"> 
            Text: <input type="text" name="input_text" id="input_text">
            <input type="submit" value="submit">
        </form>
        <hr>
        <?php
            if (isset($_GET['input_nmb'])) {
                $liczba = intval($_GET['input_nmb']);

                echo 'Wypisana liczba: ' . $liczba . '<br> <br>';

                if ($liczba > 0)
                    $wynik1 = 'pozytywny';
                elseif ($liczba < 0) 
                    $wynik1 = 'negatywny';
                elseif ($liczba == 0)
                    $wynik1 = 'jest zerem';

                echo $wynik1 . '<br>';
        
                $wynik2 = ($liczba % 2 == 1) ? 'Nieparzysta' : (($liczba % 2 == 0) ? 'Parzysta' : 'Zero');

                echo $wynik2 . '<br>';
            }

            ?>

            <hr>

        <?php
            if (isset($_GET['input_text'])) 
                $text = $_GET['input_text'];
                echo 'Wypisany text: ' . $text . '<br> <br>'; 
            $text_clr_spa = str_replace(' ','',$text);
            $nmb_text = strlen($text_clr_spa);
            echo 'ilośc liter w wpisanym zdaniu: '.$nmb_text.'<br>';
        ?>

    </body>
</html>