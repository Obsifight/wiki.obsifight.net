<?php
$title = 'Clés';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveautés</h4>
        <p>
          Les <i>clés</i> sont des nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <p class="lead">
        Ils existent 4 clés différentes : la clé garnet, améthyste, titanium et xénotium.
        <ul>
          <li>Les clés en garnet et améthyste sont obtenables uniquement en <b>récompense d’event</b>.</li>
          <li>Les clés en titanium et en xenotium peuvent être <b>achetées sur la boutique</b>, obtenue en tant que <b>récompense d’event</b> ou <b>récupérée dans un coffre en garnet</b>.</li>
        </ul>
        Pour savoir ce que vous pouvez avoir comme lot dans les différents coffres, il suffit de faire un clic gauche sur le coffre qui vous intéresse.
      </p>

      <h3>Image</h3>

      <img src="<?= $router->getURL('/dist/img/cles.png') ?>" alt="liste des clés" class="img-rounded" width="284" height="67" />

      <h3>Gains</h3>

      <div class="col-md-8">
        <img src="<?= $router->getURL('/dist/img/garnet-chest-key.png') ?>" alt="liste des gains d'une clé en garnet" class="img-rounded" width="663" height="273" />
        <p class="img-comment">Liste des gains d'une clé en garnet.</p>
      </div>

      <div class="col-md-8">
        <img src="<?= $router->getURL('/dist/img/titanium-chest-key.png') ?>" alt="liste des gains d'une clé en titanium" class="img-rounded" width="661" height="273" />
        <p class="img-comment">Liste des gains d'une clé en titanium.</p>
      </div>

      <div class="col-md-8">
        <img src="<?= $router->getURL('/dist/img/xenotium-chest-key.png') ?>" alt="liste des gains d'une clé en xénotium" class="img-rounded" width="670" height="278" />
        <p class="img-comment">Liste des gains d'une clé en xénotium.</p>
      </div>


    </div>

<?php include 'elements/footer.php' ?>
