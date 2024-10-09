<?php
 // Definisco una classe, da questo momento posso genereare un ISTANZA di un OGGETTO di tipo "MOVIE".
class Movie{
    // Dichiaro le variabili di ISTANZA della mia classe
    public $title, $director, $releaseYear, $genre, $duration, $rating; // le dichiaro pubbliche in modo che siano visibili e accessibili in qualsiasi parte del codice.

    // Definisco il COSTRUTTORE della mia classe

    // Definisco i METODI della mia classe

    // Funzione che restituisce tutte le informazioni del mio metodo
    function getMovieInfo(){
        return "{$this -> title} {$this -> director} {$this -> releaseYear} {$this -> genre} {$this -> duration} {$this -> rating}";
    }
}
?>
 
 <!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
</body>
</html>