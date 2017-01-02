<?php
$title = 'Armures et armes en garnet';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le stuff garnet est un stuff légèrement <u>plus puissant que celui en diamant</u>.
        Cependant, vous ne résisterez pas longtemps contre d’autres personnes avec des meilleurs stuff.
        Sa <b>résistance</b> et sa <b>durabilité</b> sont <b>assez faible</b>.
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/stuff_garnet.png') ?>" alt="" class="img-rounded" width="339" height="637" />

    </div>

<?php include 'elements/footer.php' ?>
