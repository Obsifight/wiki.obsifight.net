<?php
$title = 'Core en titanium';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Les core en titanium servent à craft tous les éléments du stuff <a href="<?= $router->getURL('/minerais/titanium') ?>">titanium</a>.
        Vous n’en avez pas besoin pour craft l’épée et les outils.
      </p>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>4 minerais de <a href="<?= $router->getURL('/minerais/titanium') ?>">titanium</a></li>
        <li>1 <a href="<?= $router->getURL('/items/core-neutre') ?>">core neutre</a></li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/core-titanium.png') ?>" alt="craft core titanium" class="img-rounded" width="635" height="275" />

    </div>

<?php include 'elements/footer.php' ?>
