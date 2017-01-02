<?php
$title = 'Pierre renforcée';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Changement de nom</h4>
        <p>
          La <b>pierre renforcée</b> s'appellait auparavant le bloc de <b>pousse</b> (avant V5).
        </p>
      </div>

      <p class="lead">
        La <i>pierre renforcée</i> est un bloc principalement de protection, non soumis à la gravité et ne pouvant pas être poussé par un piston tout comme les fours ou les tables de crafts.
        Ce bloc est utilisé dans les protections de bases tout comme le bloc de <a href="<?= $router->getURL('/blocs/sadian') ?>">sadian</a>.
      </p>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>4 blocs de cobblestone (pierre taillée)</li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/pierre-renforcee.png') ?>" alt="craft pierre renforcée" class="img-rounded" width="323" height="133" />

    </div>

<?php include 'elements/footer.php' ?>
