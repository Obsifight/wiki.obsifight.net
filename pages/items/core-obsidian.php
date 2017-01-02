<?php
$title = 'Core en Obsidienne';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Les core en obsidienne servent à craft tous les éléments du stuff <a href="<?= $router->getURL('/minerais/obsidienne') ?>">Obsidienne</a>.
        Vous n’en avez pas besoin pour craft l’épée et les outils.
      </p>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>4 minerais d'<a href="<?= $router->getURL('/minerais/obsidienne') ?>">obsidienne</a></li>
        <li>1 <a href="<?= $router->getURL('/items/core-neutre') ?>">core neutre</a></li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/core-obsidian.png') ?>" alt="craft core obsidienne" class="img-rounded" width="630" height="271" />

    </div>

<?php include 'elements/footer.php' ?>
