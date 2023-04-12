<!DOCTYPE HTML>
<html>
    <head>
    <link rel="stylesheet" href="./styles.css">
    </head>
    <body>
        <header>
        <img src="./images/cross.png" width="60px"><h1>PHP Lore</h1>
        </header>
        <div class="main">
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
        </div>
    </body>
</html>