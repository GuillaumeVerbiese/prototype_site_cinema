<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=PT+Sans+Narrow:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/reset.css">
  <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header class="header">
    <div class="header__container">
      <h1 class="header__title">
        <div class="header__subtitle">
          Votre cinéma
        </div>
        <div class="header__maintitle">
          Le Rodia
        </div>
      </h1>

      <?php


        include "templates/nav.php";

      ?>

    </div>
  </header>
  <main class="main-container">
    <section>
      <h2 class="page__title">Films à l'affiche</h2>
      <ul>
        <?php

          $films = [
            "L'Associé du diable (1997)", 
            "Assaut (1976)",           
            "Mulholland Drive (2001)", 
            "A Scanner Darkly (2006)", 
            "Dune (2021)"              
          ];

          $films[] = "Brazil (1985)";
          $films[] = "Shutter Island (2010)";
          $films[] = "Mission (1986)";
          
          $nbreFilms = count($films);

          for ($i=0; $i < $nbreFilms; $i++) { 
            
            echo "<li>" . $films[$i] . "</li>";
            
          }

        ?>
      </ul>
    </section>
    
    <section>
      <h2 class="page__title">Salles</h2>
      
      <?php

        $rooms = [
          'Athéna',   
          'Dyonisos', 
          'Hadès',    
          'Zeus'      
        ];

      ?>
            
      <ul>
        <?php for ($i = 0; $i < 4; $i++): ?>
          <li><?= $rooms[$i]; ?></li>
        <?php endfor; ?>
      </ul>

    </section>

  </main>
  <footer class="footer">
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>