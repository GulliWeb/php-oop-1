<?php
 // Definisco una classe, da questo momento posso genereare un ISTANZA di un OGGETTO di tipo "MOVIE".
class Movie{
    // Dichiaro le variabili di ISTANZA della mia classe
    public $title, $director, $releaseYear, $genre, $duration, $rating; // le dichiaro pubbliche in modo che siano visibili e accessibili in qualsiasi parte del codice.

    // Definisco il COSTRUTTORE della mia classe, così facendo mi assicuro che le istanze saranno popolate dalle variabili definite nel mio costruttore.
    function __construct($_title, $_releaseYear, Genre $_genre){
        $this -> title = $_title;
        $this -> releaseYear = $_releaseYear;
        $this -> genre = $_genre;
    }

    // Definisco i METODI della mia classe
    function getMovieInfo(){  // Funzione che restituisce tutte le informazioni del mio metodo
        return "{$this -> title} {$this -> director} | Year: {$this -> releaseYear} | Genre: {$this -> genre -> name} {$this -> duration} {$this -> rating}";
    }
}

// var_dump($fastandfuriousXI) ;

// Definisco una CLASSE GENRE per effettuare la composizione
class Genre{
    // Variabili di istanza pubbliche per la mia classe GENRE.
    public $name, $description;

    // Costruttore della mia classe GENRE.
    function __construct($_name, $_description){
        $this -> name = $_name;
        $this -> description = $_description;
    } 
}

// Istanzio i due OGGETTI della CLASSE GENRE.
$actionGenre = new Genre('Action', 'Fast-paced films with exciting sequences.');
$cartoonGenre = new Genre('Cartoons', 'Animated films suitable for children.');

// Istanzio i due OGGETTI della CLASSE MOVIE e li stampo a schermo.
$fastandfuriousXI = new Movie('Fast XI', 2026, $actionGenre);
$cars4 = new Movie('Cars 4 il ritiro di MCQUEEN', 2028, $cartoonGenre);
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