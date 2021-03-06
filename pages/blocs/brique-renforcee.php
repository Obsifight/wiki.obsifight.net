<?php
$title = 'Brique renforcée';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveauté</h4>
        <p>
          Le bloc de <i>brique renforcée</i> est une nouveauté de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <p class="lead">
        Le bloc de <i>brique renforcée</i> sont un bloc principalement de décoration, non soumis à la gravité et ne pouvant pas être poussé par un piston tout comme les fours ou les tables de crafts ou encore la <a href="<?= $router->getURL('/blocs/pierre-renforcee') ?>">pierre renforcée</a>.
        Ce bloc est aussi résistant que le bloc de <a href="<?= $router->getURL('/blocs/planche-renforce') ?>">planche renforcée</a> ou la <a href="<?= $router->getURL('/blocs/pierre-renforcee') ?>">pierre renforcée</a>.
      </p>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>1 bloc de <a href="<?= $router->getURL('/blocs/pierre-renforcee') ?>">pierre renforcée</a></li>
        <li>1 bloc de brique</li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/brique-renforcee.png') ?>" alt="craft brique renforcée" class="img-rounded" width="332" height="135" />

    </div>

<?php include 'elements/footer.php' ?>
