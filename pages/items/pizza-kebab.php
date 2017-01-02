<?php
$title = 'Pizza & Kebab';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveautés</h4>
        <p>
          Les <i>pizza et les kebabs</i> sont des nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <p class="lead">
        Les pizzas et les kebabs servent juste à vous restaurer sans donner aucun effet bonus.
        Ils ne peuvent <b>pas</b> être <b>craft</b>. Ils sont uniquement obtenable dans les différents coffres à ouvrir avec des <a href="<?= $router->getURL('/items/cles') ?>">clés</a>.
        Il pourra également arriver aux administrateurs de vous en donner gratuitement de temps en temps.
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/pizza.png') ?>" alt="pizza" class="img-rounded" width="60" height="64" />
      <img src="<?= $router->getURL('/dist/img/kebab.png') ?>" alt="kebab" class="img-rounded" width="64" height="62" />

    </div>

<?php include 'elements/footer.php' ?>
