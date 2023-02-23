<!DOCTYPE html>
<html lang="pl=PL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./styles.css">
        <title>Zmienne w PHP</title>
    </head>
    <body>
        <ol type="number">

        <h1> Rzeczy które może nie wiedziałeś lub wiedziałeś nwm ¯\_(ツ)_/¯</h1>
        <?php 
        $uczniowie = 21;
        $klasy = 4;
        $razem = $uczniowie * $klasy;

        echo "<li> <div> W szkole jest ".$razem." Uczniów klas Pierwszych (nie naszej) </li> </div>"; 

        $uczniowie3A = 40;
        $razemA3 = $uczniowie3A * 0.4;

        echo "<li> <div> W klasie A3 jest ".$uczniowie3A." osób. 60% z nich poszło na wycieczkę, reszta czyli " .$razemA3. " osób zostało w szkole. </li> </div>"; 

        $liczba = 33;
        $wynik = $liczba ** $liczba;

        echo "<li> <div>Ciekawosta. 33 do potęgi 33 wynosi " .$wynik. " </li> </div>"; 

        $liczba_2 = 2;
        $wynik_2 = $liczba_2 + $liczba_2;

        echo "<li> <div> 2 + 2 = " .$wynik_2. "<br> </li> </div>"; 

        $sen = 8;
        $dzien = 24;
        $dzien_z_wyjatkiem_spania = $dzien - $sen;

        echo "<li> <div> przeciętny człowiek śpi po ".$sen." godzin co stanowi 1/3 dnia. Wiedząc że dzień trwa ".$dzien." godzin możemy obliczyć że człowiek jest aktywny średnio ".$dzien_z_wyjatkiem_spania." godzin. </li> </div>"
        ?>

        </ol>
    </body>
</html>