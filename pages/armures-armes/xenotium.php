<?php
$title = 'Armures et armes en obsidium';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        Le stuff en xenotium possède exactement les mêmes caractéristiques que celui <a href="<?= $router->getURL('/armures-armes/obsidium') ?>">en obsidium</a>.
        Il possède cependant une autre texture pour les nostalgiques de la saison 2.
         Ce stuff est par contre très rare dû au fait que vous <b>ne pouvez pas le craft</b>. Il est seulement obtenable en <i>récompense d’event</i> ! 
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/stuff_xenotium.png') ?>" alt="" class="img-rounded" width="654" height="321" />

    </div>

<?php include 'elements/footer.php' ?>
