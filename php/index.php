<?php
 // Definisco una classe, da questo momento posso genereare un ISTANZA di un OGGETTO di tipo "MOVIE".
class Movie{
    // Dichiaro le variabili di ISTANZA della mia classe
    public $title, $director, $releaseYear, $genre, $duration, $rating; // le dichiaro pubbliche in modo che siano visibili e accessibili in qualsiasi parte del codice.

    // Definisco il COSTRUTTORE della mia classe, così facendo mi assicuro che le istanze saranno popolate dalle variabili definite nel mio costruttore.
    function __construct($_title, $_releaseYear, $_genre){
        $this -> title = $_title;
        $this -> releaseYear = $_releaseYear;
        $this -> genre = $_genre;
    }

    // Definisco i METODI della mia classe
    function getMovieInfo(){  // Funzione che restituisce tutte le informazioni del mio metodo
        return "{$this -> title} {$this -> director} {$this -> releaseYear} {$this -> genre} {$this -> duration} {$this -> rating}";
    }
}

// Istanzio due oggetti MOVIE e li stampo a schermo.
$fastandfuriousXI = new Movie('Fast XI', 2026, 'action');
$cars4 = new Movie('Cars 4 il ritiro di MCQUEEN', 2028, 'cartoons');

// var_dump($fastandfuriousXI) ;
?>
 
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
     <link rel="stylesheet" href="../styles/style.css">
     
    <title>PHP OOP</title>
</head>
<body>
    <div class="card-wrapper">
        <div class="card">
            <!-- Stampo a schermo i miei oggetti MOVIE con le relative proprietà (almeno le tre richieste dal costruttore). -->
            <h1>Movie List</h1>
            <p>MOVIE: <?php echo $fastandfuriousXI->getMovieInfo(); ?></p>
            <p>MOVIE: <?php echo $cars4->getMovieInfo(); ?></p>
        </div>
    </div>
</body>
</html>