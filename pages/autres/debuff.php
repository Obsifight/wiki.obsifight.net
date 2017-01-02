<?php
$title = 'Potion No Back';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveauté</h4>
        <p>
          La potion <i>Débuff</i> est une des nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <p class="lead">
        La potion de debuff est une potion qui enlève tous les effets négatifs que vous subissez à ce moment excepté l’<a href="<?= $router->getURL('/autres/no-back') ?>">effet de NoBack</a>.
        Vous conserverez donc tous vos effets positifs comme la vitesse.
         Vous pouvez obtenir cette potion en l’échangeant avec un PNJ au spawn en échange d’une fiole d’eau et d’un sceau de lait.
      </p>

    </div>

<?php include 'elements/footer.php' ?>
