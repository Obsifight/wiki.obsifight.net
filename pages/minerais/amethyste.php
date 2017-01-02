<?php
$title = 'Minerai d\'Améthyste';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le minerai d’amethyste est un minerai un peu plus puissant que le garnet.
        Vous pouvez le miner entre les couches 0 et 32 ! 
        Ce minerai peut vous servir à craft des <a href="<?= $router->getURL('/armures-armes/amethyste') ?>">équipements et des outils</a>.
        Il intervient également dans le craft des <a href="<?= $router->getURL('/autres/cookies') ?>">cookies aux pépites améthyste</a>. 
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/minerais_amethyste.png') ?>" alt="" class="img-rounded" width="311" height="820" />

    </div>

<?php include 'elements/footer.php' ?>
