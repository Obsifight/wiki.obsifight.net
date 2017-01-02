<?php
$title = 'Échelle en fer';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        L'<i>échelle en fer</i> est similaire à l'échelle normale sauf que celle-ci vous permet de grimper plus rapidement et sont détruite par l'eau.
      </p>

      <h3>La rapidité</h3>

      <div class="row">

        <div class="col-md-6">
          <img src="<?= $router->getURL('/dist/img/echelle_classique-min.gif') ?>" style="width: 100%;" alt="Echelle classique" class="img-rounded"/>
          <p class="img-comment">Échelle classique.</p>
        </div>

        <div class="col-md-6">
          <img src="<?= $router->getURL('/dist/img/echelle_fer-min.gif') ?>" style="width: 100%;" alt="Echelle en fer" class="img-rounded"/>
          <p class="img-comment">Échelle en fer.</p>
        </div>

      </div>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>7 lingots de fer</li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/echelle_fer.png') ?>" alt="craft échelle en fer" class="img-rounded" width="340" height="135" />

    </div>

<?php include 'elements/footer.php' ?>
