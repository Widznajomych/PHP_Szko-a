<!DOCTYPE html>
<html lang="pl=PL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="Stylesheet" href="style/styles.css">
        <title>IF ELSE</title>
    </head>
    <body>
        <header>
            <img src="./images/algorithm.png" width="60px"><h1>IF ELSE</h1>
        </header>
        <main>
            <?php
            #Wartości bazowe
            $item1 = 21;
            $item2 = 5456;    
            $item3 = 10.11;
            #Wartości potoczne
            $side1 = $item1 - $item3 ; 
            #Widoczny skrypt
            echo "<h2> Dla informacji </h2>";
            echo "Zostały użyte takie wartości";
            //tabela
            echo "<ul type=none>";
            echo "<li> wartość 1 = <xd>21</xd> </li>";
            echo "<li> wartość 2 = <xd>5456</xd> </li>";
            echo "<li> wartość 3 = <xd>10.11</xd> </li>";
            echo "</ul><br><br><br><br><br>";

            echo "<hr>";
            //koniec tabeli
            #początek IFA itp
            echo "<br><br><br><br><br>";
            echo "<h2> Przykładowe użycia </h2><br>";
            echo "<div class=if1>Teraz sprawdzamy czy wartość 1 (21) jest liczbą parzystą za Pomocą IF w PHP przy użyciu funkcji <xd>[wartośc]%2==0 </xd> <br>";
            if ($item1%2==0)
            {
                echo "<div class=ez> Liczba " .$item1. " jest liczbą parzystą <br></div></div><br>";
            }
            else 
            {
                echo "<div class=ez> Liczba " .$item1. " jest liczbą <xd>nieparzystą<xd></div></div><br>";
            }

            echo "Zastosujemy dla wartośc 2 i 3 <br>";

            if ($item2%2==0)
            {
                echo "<div class=ez> Liczba " .$item2. " jest liczbą <xd>parzystą</xd> <br></div></div><br>";
            }
            else 
            {
                echo "<div class=ez> Liczba " .$item2. " jest liczbą <xd>nieparzystą<xd></div></div><br>";
            }


            if ($item3%2==0)
            {
                echo "<div class=ez> Liczba " .$item3. " jest liczbą <xd>parzystą</xd> <br></div></div><br>";
            }
            else 
            {
                echo "<div class=ez> Liczba " .$item3. " jest liczbą <xd>nieparzystą<xd></div></div><br>";
            }
            
            echo "<br><br><br><br><br>";
            echo "<hr>";
            echo "<br><br><br><br><br>";

            echo "<div class=if1> Inną rzeczą którą można użyć IF to np wielkość liczby lub porównania. Do tego sprawdzimy która liczbą jest większa? wartość 1 czy wartość 2? użyjemu do tego [wartość] <= [wartość] ";

            if ($item2 <= $item1)
            {
                echo "<div class=ez> <xd>21</xd> Jest większe od <xd>5456</xd> </div></div><br>";
            }
            else 
            {
                echo "<div class=ez> <xd>5456</xd> Jest większe od <xd>21</xd> </div></div><br>";
            }

            echo "Sprawdzimy na innych.";
            if ($item3 <= $item2)
            {
                echo "<div class=ez> <xd>5456</xd> Jest większe od <xd>10.11</xd> </div></div><br>";
            }
            else 
            {
                echo "<div class=ez> <xd>10.11</xd> Jest większe od <xd>5456</xd> </div></div><br>";
            }

            if ($item3 <= $item1)
            {
                echo "<div class=ez> <xd>21</xd> Jest większe od <xd>10.11</xd> </div></div><br>";
            }
            else 
            {
                echo "<div class=ez> <xd>10.11</xd> Jest większe od <xd>21</xd> </div></div><br>";
            }
            ?>
    </body>
</html>