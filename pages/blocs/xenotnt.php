<?php
$title = 'XénoTNT';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <p class="lead">
        La <i>XénoTNT</i>, aussi appelée <i>TNT en Xénotium</i> est une TNT plus puissante que la TNT normale et surtout plus rare. Elle est obtenable avec un craft ou alors depuis les récompenses de vote.
      </p>

      <h3>L'explosion</h3>

      <div class="row">

        <div class="col-md-6">
          <img src="<?= $router->getURL('/dist/img/tnt-explosion-min.png') ?>" style="width: 100%;" alt="Explosion de TNT normale" class="img-rounded"/>
          <p class="img-comment">Explosion d'une TNT classique.</p>
        </div>

        <div class="col-md-6">
          <img src="<?= $router->getURL('/dist/img/xenotnt-explosion-min.png') ?>" style="width: 100%;" alt="Explosion de XénoTNT" class="img-rounded"/>
          <p class="img-comment">Explosion d'une XénoTNT.</p>
        </div>

      </div>

      <div class="clearfix"></div>

      <h3>Le craft</h3>

      <p class="lead">Vous avez besoin de:</p>
      <ul>
        <li>8 <a href="<?= $router->getURL('/minerais/xenotium') ?>">Xénotium</a></li>
        <li>1 TNT</li>
      </ul>

      <br><br>

      <img src="<?= $router->getURL('/dist/img/craft/xenotnt.png') ?>" alt="craft xenotnt" class="img-rounded" width="335" height="137" />

    </div>

<?php include 'elements/footer.php' ?>
