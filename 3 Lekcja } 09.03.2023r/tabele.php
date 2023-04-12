<!DOCTYPE html>
<html lang="pl=PL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" href="style/styles.css">
        <title>Tabela nr1</title>
    </head>
    <header>
    <img src="./images/to-do-list.png" width="60px"><h1>Tabele</h1>
    </header>
    <body>
        <main>
            <?php
                #Testowe i bazowe dane

                $liczba1 = 12;
                $liczba2 = 13;
                $wynik1 = $liczba1 - $liczba2;

                echo "TEST. 12-13 to" .$wynik1. "<br><br><br>";
                # Inne
                #początek
                echo "<ul type=none>";

                $wynik2 = $liczba1 += $liczba2;
                echo "<li>wynik użycia += to <xd>" .$wynik2. "</xd></li>";

                $wynik3 = $liczba1 -= $liczba2;
                echo "<li>wynik użycia -= to <xd>" .$wynik3. "</xd></li>";

                $wynik4 = $liczba1 *= $liczba2;
                echo "<li>wynik użycia *= to <xd>" .$wynik4. "</xd></li>";

                $wynik5 = $liczba1 /= $liczba2;
                echo "<li>wynik użycia /= to <xd>" .$wynik5. "</xd></li>";

                $wynik6 = $liczba1 %= $liczba2;
                echo "<li>wynik użycia %= to <xd>" .$wynik6. "</xd></li>";

                $wynik7 = $liczba1 |= $liczba2;
                echo "<li>wynik użycia |= to <xd>" .$wynik7. "</xd></li>";

                $wynik8 = $liczba1 &= $liczba2;
                echo "<li>wynik użycia &= to <xd>" .$wynik8. "</xd></li>";

                $wynik9 = $liczba1 ^= $liczba2;
                echo "<li>wynik użycia ^= to <xd>" .$wynik9. "</xd></li>";

                $wynik10 = $liczba1 <<= $liczba2;
                echo "<li>wynik użycia <<= to <xd>" .$wynik10. "</xd></li>";

                $wynik11 = $liczba1 >>= $liczba2;
                echo "<li>wynik użycia >>= to <xd>" .$wynik11. "</xd></li>";
                #koniec
                echo "</ul>";
            ?>
        </main>
    </body>
</html>
