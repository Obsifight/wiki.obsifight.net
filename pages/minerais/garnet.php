<?php
$title = 'Minerai de garnet';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le minerai de garnet est un minerai légèrement plus puissant que le diamant.
        Vous pouvez le miner entre les couches 0 et 32 ! 
        Ce minerai peut vous servir à craft des <a href="<?= $router->getURL('/armures-armes/garnet') ?>">équipements et des outils</a>.
        Il intervient également dans le craft des <a href="<?= $router->getURL('/autres/cookies') ?>">cookies aux pépites garnet</a>. 
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/minerais_garnet.png') ?>" alt="" class="img-rounded" width="308" height="834" />

    </div>

<?php include 'elements/footer.php' ?>
