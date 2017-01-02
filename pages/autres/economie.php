<?php
$title = 'Économie - pièces d\'or';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveautés</h4>
        <p>
          Les <i>pièces d'or</i> sont une nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <p class="lead">
        Les pièces d’or consistent en la nouvelle économie du serveur. Les dollars ont étés abandonnés pour leur laisser la place.
        Vous pourrez soit les échanger avec d’autres joueurs, soit les échanger au PNJ sous le spawn.
        Ou alors, tout simplement en les craftant.
      </p>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin :</p>
      <ul>
        <li>4 <a href="<?= $router->getURL('/minerais/cuivre') ?>">cuivre</a></li>
        <li>5 lingot d'or</li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/pieces-or.png') ?>" alt="craft pieces d'or" class="img-rounded" width="336" height="138" />

    </div>

<?php include 'elements/footer.php' ?>
