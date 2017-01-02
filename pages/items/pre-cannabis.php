<?php
$title = 'Cannabis';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveautés</h4>
        <p>
          Le <i>cannabis</i> est une nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Attention !</h4>
        <p>
          Le <i>cannabis</i> est prohibidé dans la vie courante, il est déconseillé d'en fumer, nous déclarons toute responsabilités en cas de problèmes.
        </p>
      </div>

      <p class="lead">
        
      </p>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>4 minerais de <a href="<?= $router->getURL('/minerais/xenotium') ?>">xénotium</a></li>
        <li>1 <a href="<?= $router->getURL('/items/core-neutre') ?>">core neutre</a></li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/core-xenotium.png') ?>" alt="craft core xenotium" class="img-rounded" width="617" height="272" />

    </div>

<?php include 'elements/footer.php' ?>
