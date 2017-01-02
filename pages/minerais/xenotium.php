<?php
$title = 'Minerai de Xénotium';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le minerai de xenotium est un minerai assez rare, il s’agit du meilleur minerai du serveur.
        Vous pouvez le miner entre les couches 0 et 16 !
          Ce minerai peut vous servir à craft des <a href="<?= $router->getURL('/armures-armes/obsidium') ?>">équipements et des outils</a>.
        Il intervient également dans le craft de la <a href="<?= $router->getURL('/blocs/xenotnt') ?>">XénoTNT</a>. 
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/minerais_xenotium.png') ?>" alt="" class="img-rounded" width="285" height="784" />

    </div>

<?php include 'elements/footer.php' ?>
