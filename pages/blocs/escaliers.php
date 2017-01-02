<?php
$title = 'Escaliers en clay';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Les <i>escaliers de clay</i> sont des blocs de décorations non disponible sur minecraft <abbr title="non moddé">vanilla</abbr>.
      </p>

      <h3>Les escaliers disponibles</h3>

      <img src="<?= $router->getURL('/dist/img/escaliers_clay-min.jpg') ?>" alt="liste des esacliers possibles" class="img-rounded" style="width:100%;" />

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>6 blocs d'<abbr title="Terre cuite">hardened clay</abbr> de la couleur voulue</li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/escaliers_clay.gif') ?>" alt="craft escaliers" class="img-rounded" width="340" height="135" />

    </div>

<?php include 'elements/footer.php' ?>
