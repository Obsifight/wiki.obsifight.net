<?php
$title = 'Orbe de réparation';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Les orbes de réparation vous servent à réparer vos stuffs. Elles sont notamment très intéressante pour les stuffs obsidium.
        Elles sont <b>obtenables</b> en <b>votant</b> et en <b>récompense d’event</b>. Le <b>marchand de passage</b> en propose de temps en temps.
      </p>

      <h3>Utilisation</h3>

      <p class="lead">
        Pour les utiliser, vous devez <b>équiper un stuff</b> sur vous et ensuite faire <b>clic droit</b> avec l’orbe de réparation.
        L’orbe à <b>3 utilisations</b> et chaque utilisation <b>répare 10%</b> de chaque élément du stuff équipé.
        Si le stuff <u>n’a pas perdu au moins 10%</u>, cela <i>ne fonctionnera pas</i>.
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/orbe-reparation.png') ?>" alt="orbe de réparation" class="img-rounded" width="65" height="65" />

    </div>

<?php include 'elements/footer.php' ?>
