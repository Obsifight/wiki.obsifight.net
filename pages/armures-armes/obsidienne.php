<?php
$title = 'Armures et armes en obsidienne';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le stuff en obsidienne est très bien au niveau de la durabilité qui est assez importante mais réfléchissez bien car <u>il absorbe moins de dégâts que celui <a href="<?= $router->getURL('/armures-armes/titanium') ?>">en titanium</a></u>. 
        Pour réaliser ce stuff, vous aurez besoin de <a href="<?= $router->getURL('/minerais/obsidienne') ?>">minerais d’obsidienne</a> ainsi que de <a href="<?= $router->getURL('/items/core-obsidian') ?>">core en obsidienne</a>.
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/stuff_obsidienne.png') ?>" alt="" class="img-rounded" width="357" height="656" />

    </div>

<?php include 'elements/footer.php' ?>
