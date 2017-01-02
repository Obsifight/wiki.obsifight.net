<?php
$title = 'Minerai d\'Obsidienne';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le minerai d'obsidienne est un minerai un peu plus puissant que l’amethyste. Vous pouvez le miner entre les couches 0 et 16 !
          Ce minerai peut vous servir à craft des <a href="<?= $router->getURL('/armures-armes/obsidienne') ?>">équipements et des outils</a>.
        Il intervient également dans le craft des <a href="<?= $router->getURL('/autres/cookies') ?>">cookies aux pépites obsidienne</a>. 
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/minerais_obsidienne.png') ?>" alt="" class="img-rounded" width="285" height="784" />

    </div>

<?php include 'elements/footer.php' ?>
