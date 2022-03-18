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
      <h2 class="page__title">Tarifs</h2>
      <div class="prices__lists">

        <div class="prices__list">
          <h3 class="prices__list-title">
            A l'unité
          </h3>
          <ul>

            <?php

              $tarifs = [
                "Tarif Plein" => 8.30,
                "Tarif Réduit" => 6.8,
                "Tarif Enfant" => 4.5,
                "Supplément 3D" => 1
              ];


            ?>

            <?php foreach ($tarifs as $key => $value): ?>

              <li class="prices__item">
                <span class="prices__item-desc"><?= $key; ?></span> <span class="prices__item-value"><?= $value; ?> €</span>
              </li>

            <?php endforeach; ?>

          </ul>
        </div>

        <div class="prices__list">
          <h3 class="prices__list-title">
            Abonnement
          </h3>
          <ul>
            <?php

              $abonnements = [
                "5 places" => 10,
                "5 places -25ans" => 20
              ];

              foreach($abonnements as $clef => $valeur ) {

                echo '<li class="prices__item">';
                echo '<span class="prices__item-desc">' . $clef . '</span>';
                echo '<span class="prices__item-value">-' . $valeur . ' %</span>';
                echo '</li>';

              }

            ?>

          </ul>
        </div>
      </div>

      <div class="prices__description">
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif réduit</strong> pour les personnes de + de 60 ans et de moins de 16 ans
        </p>
        <p class="prices__description-line">
          <strong class="prices__description-name">Tarif enfant</strong> pour les - de 14 ans
        </p>
      </div>
    </section>

    <section>
      <h2 class="page__title">Tarif du capitaine</h2>

      <?php

        $age = 43; 


        $tarifPlein = 8.3; 
        $tarifReduit = 6.8; 
        $tarifEnfant = 4.5;

        if ($age <= 14) {
          $montant = $tarifEnfant;

        } elseif ($age <= 16 OR $age >= 60) {
          $montant = $tarifReduit;

        } else {
          $montant = $tarifPlein;
        }


      ?>

      <div class="prices__list">
        <h3 class="prices__list-title">
          <span class="prices__item-desc">Age</span> <span class="prices__item-value">Tarif unitaire</span>
        </h3>
        <ul>
          <li class="prices__item">
            <span class="prices__item-desc"><?php echo $age; ?> ans</span> <span class="prices__item-value"><?php echo $montant; ?> €</span>
          </li>
        </ul>
      </div>

    </section>

    <section>
      <h2 class="page__title">Tarif âge par âge</h2>
      
      <div class="prices">
        <div class="prices__list">
          <h3 class="prices__list-title">
            <span class="prices__item-desc">Age</span><span class="prices__item-value">Tarif unitaire</span><span class="prices__item-sub">Abonné</span>
          </h3>
          <ul>

            <?php

              for ($age=1; $age <= 99; $age++) {

                if ($age <= 14) {
                  $montant = $tarifEnfant;
                } elseif ($age <= 16 OR $age >= 60) {
                  $montant = $tarifReduit;
                } else {
                  $montant = $tarifPlein;
                }
                if ($age <= 25) {
                  
                  $pourcentageReducAbo = 20;

                } else {
                  
                  $pourcentageReducAbo = 10;

                }


                $montantAbonnement = $montant * ( 100 - $pourcentageReducAbo ) / 100;

                echo '<li class="prices__item">';
                echo '<span class="prices__item-desc">' . $age . ' ans</span> <span class="prices__item-value">' . $montant . ' €</span><span class="prices__item-sub">' . $pourcentageReducAbo . '% 💘 ' . $montantAbonnement .' €</span>';
                echo '</li>';
                
              }


            ?>

          </ul>
        </div>
      </div>

    </section>

  </main>
  <footer class="footer">
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
