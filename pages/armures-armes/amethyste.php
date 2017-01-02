<?php
$title = 'Armures et armes en améthyste';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le stuff améthyste est un stuff légèrement <u>plus puissant que celui en <a href="<?= $router->getURL('/armures-armes/garnet') ?>">garnet</a></u>.
        Vous pourrez tenir un peu plus longtemps qu’avec un stuff garnet mais cela ne reste pas exceptionnel. 
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/stuff_amethyste.png') ?>" alt="" class="img-rounded" width="329" height="608" />

    </div>

<?php include 'elements/footer.php' ?>
