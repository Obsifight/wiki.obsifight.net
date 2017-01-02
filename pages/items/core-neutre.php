<?php
$title = 'Core neutre';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveautés</h4>
        <p>
          Le <i>core neutre</i> est une nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <p class="lead">
        Les core neutre servent à craft des cores des différents minerais : les <a href="<?= $router->getURL('/items/core-titanium') ?>">core en titanium</a>, en <a href="<?= $router->getURL('/items/core-obsidian') ?>">obsidienne</a> et en <a href="<?= $router->getURL('/items/core-xenotium') ?>">xénotium</a>.
        Ils sont obtenable en votant, dans le kit minerai et en récompense d’event.
        Ils sont également par moment disponible en échange avec le marchand de passage.
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/core-neutre.png') ?>" alt="core neutre" class="img-rounded" width="34" height="34" />

    </div>

<?php include 'elements/footer.php' ?>
