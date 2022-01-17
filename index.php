<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file `index.php` in cui:
- è definita una **classe ‘Movie’**
   => all’interno della classe sono dichiarate delle **variabili d’istanza**
   => all’interno della classe è definito **un costruttore**
   => all’interno della classe è definito almeno **un metodo**
- vengono **istanziati almeno due oggetti ‘Movie’** e stampati a schermo i valori delle relative proprietà
- BONUS: creare un file “database” contenente una lista di film che poi vengono istanziati in un ciclo -->



<?php
   require_once __DIR__ . "/database.php";
   require_once __DIR__ . "/Movie.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="css/style.css">
   <title>PHP-OOP-1</title>
</head>
<body>


   <header>
      <h1>Movie-list PHP_OOP</h1>
   </header>

   
   <main>

      <?php foreach ($movies as $movie) : 
         $new_movie = new Movie($movie['nome']);
         $new_movie->cast = $movie['cast'];
         $new_movie->regista = $movie['regsita'];
         $new_movie->riassunto = $movie['riassunto'];
         $new_movie->anno_di_uscita = $movie['anno_di_uscita'];
      ?>
      <div class="film-container">
         
         <h3 class="title">
            <?php echo $new_movie ->nome; ?>
         </h3>

         <ul>
            
         </ul>



      </div>
      <?php endforeach; ?> 


   </main>
   

</body>
</html>