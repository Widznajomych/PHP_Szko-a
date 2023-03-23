<!DOCTYPE html>
<html lang="pl=PL">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>23.03.2023</title>
        <link rel="stylesheet" href="../styles/styles.css">
    </head>
    <body>
        <?php
            #Zmienne 
            $x = 6;
            # Tablice których używam
            $tablica = array(32, 12, 3, 4.11, 294, -85);
            $tablica_nazwy = ["Jabłko", "Banan", "Smoczy Owoc", "Grejfrujt"];
            # Opis Sortowania Cyfrowego
            echo'<h2>Sortowanie Tablic Cyfrowych</h2>';
            echo'Tablice można posortować za pomocą funkcji <b>Sort</b> który posortuje <b>od najmniejszej do największej</b><br><hr>';
            # Tablica Cyfrowa
            echo'Tablica przed sortowaniem:<br> <div class=tablica> ';
            print_r ($tablica);
            sort($tablica);
            echo '</div> Posortowana tablica<div class=tablica>';
            print_r ($tablica);
            echo'</div>Tablica posortowana przez <b>rsort</b><div class=tablica>';
            rsort($tablica);
            print_r($tablica);
            echo '</div><br><hr>';
            # Tablica Imienna

            # Funkcja 
            echo'<h2>Fukcje i zmienne globalne</h2>';
            echo'Funkcje służą do wywoływania rzeczy przy napisaniu nazwy funkcji lub sygnału aktywowania (np. za użyciem przycisku). Funkcje mogą robić różne rzeczy. Od wiadomości do działań itd.<br> Przyładowa funkcja jest poniżej:<br><br><hr>';

            #Sama Funkcja
            function kwadrat(){
                $xp = $GLOBALS['x'] * $GLOBALS['x'] ;
                echo'<div class=function>Pole kwadratu wynosi ' .$xp. '</div>';
            }
            kwadrat();
            #Dlaszy Opis funkcji
            echo'<hr><br>Funkcja polega na obliczeniu pola kwadratu o boku 6 używając funkcji x * x gdzie x to 6.';
        ?>
    </body>
</html>