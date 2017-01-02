<?php
$title = 'Minerai de cuivre';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <div class="bs-callout bs-callout-info">
        <h4>Nouveautés</h4>
        <p>
          Le minerai de <i>cuivre</i> est une nouveauté de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <p class="lead">
        Le minerai de cuivre est un minerai minable entre les couches 0 et 32 ! 
        Ce minerai peut vous servir à craft des <a href="<?= $router->getURL('/autres/economie') ?>">pièces d’or</a> ou à directement les échanger contre d’autres choses via les PNJ ou via les autres joueurs.
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/minerais_cuivre.png') ?>" alt="" class="img-rounded" width="274" height="725" />

    </div>

<?php include 'elements/footer.php' ?>
