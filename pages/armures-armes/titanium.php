<?php
$title = 'Armures et armes en titanium';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le stuff titanium est très puissant au niveau de sa résistance aux dégâts pour vous protéger des coups de vos ennemis.
        Sa durabilité est cependant assez faible ! 
        Pour réaliser ce stuff, vous aurez besoin de <a href="<?= $router->getURL('/minerais/titanium') ?>">minerais de titanium</a> ainsi que de <a href="<?= $router->getURL('/items/core-titanium') ?>">core en titanium</a>.
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/stuff_titanium.png') ?>" alt="" class="img-rounded" width="334" height="622" />

    </div>

<?php include 'elements/footer.php' ?>
