<!DOCTYPE html>
    <html lang="pl=PL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" href="style/styles.css">
        <title>Loops</title>
    </head>
    <body>
        <header>
            <img src="./images/loop.png" width="60px"><h1>Loops</h1>
        </header>
        <main>
            <?php
                echo "<h2> Pętle </h2>";
                echo "Pętle służą do robienia czegoś w nieskończoność lub do wybranego momentu.";

                echo "<br><br><br><br><br>";
                echo "<hr>";
                echo "<br><br><br><br><br>";

                echo "<h2> Przykład: </h2>";

                #tabela

                echo "<table class=table>";
                for ($i=1;$i<=10;$i++)
                {
                    echo "<tr>";
                    for ($j=1;$j<=10;$j++)
                    {
                        echo "<td>".($i*$j). "</td>";
                    }
                    echo "</tr>";
                }
            ?>
        </main>
    </body>
</html>