<?php
$title = 'Core en Obsidienne';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveautés</h4>
        <p>
          Le <i>core en xénotium</i> est une nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <p class="lead">
        Les core en xénotium servent à craft tous les éléments du stuff <a href="<?= $router->getURL('/minerais/xenotium') ?>">Xénotium</a>.
        Vous n’en avez pas besoin pour craft l’épée et les outils.
      </p>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>8 minerais de <a href="<?= $router->getURL('/minerais/xenotium') ?>">xénotium</a></li>
        <li>1 <a href="<?= $router->getURL('/items/core-neutre') ?>">core neutre</a></li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/core-xenotium.png') ?>" alt="craft core xenotium" class="img-rounded" width="617" height="272" />

    </div>

<?php include 'elements/footer.php' ?>
