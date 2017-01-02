<?php
$title = 'Minerai de Titanium';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le minerai de titanium est un minerai un peu plus puissant que l’amethyste. Vous pouvez le miner entre les couches 0 et 24 !
          Ce minerai peut vous servir à craft des <a href="<?= $router->getURL('/armures-armes/titanium') ?>">équipements et des outils</a>.
        Il intervient également dans le craft des <a href="<?= $router->getURL('/autres/cookies') ?>">cookies aux pépites titanium</a>. 
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/minerais_titanium.png') ?>" alt="" class="img-rounded" width="302" height="795" />

    </div>

<?php include 'elements/footer.php' ?>
