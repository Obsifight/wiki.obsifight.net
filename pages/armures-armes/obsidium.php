<?php
$title = 'Armures et armes en obsidium';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le stuff en obsidium allie résistance aux dégâts subis et durabilité mais le cout pour créer l’armure est très important.
         Vous aurez besoin de 7 <a href="<?= $router->getURL('/minerais/xenotium') ?>">xenotiums</a>, un <a href="<?= $router->getURL('/items/core-xenotium') ?>">core en xenotium</a> ainsi que le même élément de stuff que vous voulez faire en obsidian pour réaliser chaque élément de votre stuff !
        Sachez également que ce stuff <u>n’est réparable qu’au moyen d’<a href="<?= $router->getURL('/items/orbe-reparation') ?>">orbe de réparation</a></u>. 
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/stuff_obsidium.png') ?>" alt="" class="img-rounded" width="374" height="700" />

    </div>

<?php include 'elements/footer.php' ?>
