<?php
$title = 'Sadian';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Changement de nom</h4>
        <p>
          Le <b>sadian</b> s'appellait auparavant la <b>grobsi</b> (avant V5).
        </p>
      </div>

      <p class="lead">
        Le <i>sadian</i> est un bloc principalement de protection et soumis à la <b>gravité</b> tout comme le sable ou le gravier.
        Mais celui-ci est <b>plus résistant</b> que le sable et que l'obsidian (restant cassable avec une TNT).
        Ce bloc est utilisé dans les protections de bases tout comme le bloc de <a href="<?= $router->getURL('/blocs/pierre-renforcee') ?>">pierre renforcée (ou pousse)</a>.
      </p>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>4 blocs d'obsidian</li>
        <li>1 bloc de sable</li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/sadian.png') ?>" alt="craft sadian" class="img-rounded" width="336" height="128" />

    </div>

<?php include 'elements/footer.php' ?>
