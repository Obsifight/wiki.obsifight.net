<?php
$title = 'Cookies';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveauté</h4>
        <p>
          Les <i>cookies</i> sont des nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>

      <h4>Cookie pépite garnet</h4>
        <p class="lead">
          Le cookie aux pépites garnet vous sera certainement fort utile au combat vu que dès que vous l’aurez avalé, il vous donnera un effet de <b>vitesse II</b> durant <b>3 minutes et 30 secondes</b>. 
          Il se craft au moyen d’un cookie, 3 <a href="<?= $router->getURL('/minerais/garnet') ?>">minerais de garnet</a> et un bloc de <a href="<?= $router->getURL('/minerais/garnet') ?>">garnet</a>.
        </p>

      <h4>Cookie pépite améthyste</h4>
        <p class="lead">
          Le cookie aux pépites améthyste vous sera certainement fort utile au combat vu que dès que vous l’aurez avalé, il vous donnera un effet de <b>force II</b> durant <b>1 minutes et 40 secondes</b>. 
          Il se craft au moyen d’un cookie, 3 <a href="<?= $router->getURL('/minerais/amethyste') ?>">minerais d'améthyste</a> et un bloc d'<a href="<?= $router->getURL('/minerais/amethyste') ?>">améthyste</a>.
        </p>

      <h4>Cookie pépite titanium</h4>
        <p class="lead">
          Le cookie aux pépites titanium vous sera certainement fort utile au combat vu que dès que vous l’aurez avalé, il vous donnera un effet de <b>résistance au feu</b> durant <b>12 minutes et 30 secondes</b>. 
          Il se craft au moyen d’un cookie, 3 <a href="<?= $router->getURL('/minerais/titanium') ?>">minerais de titanium</a> et un bloc de <a href="<?= $router->getURL('/minerais/titanium') ?>">titanium</a>.
        </p>

      <h4>Cookie pépite obsidienne</h4>
        <p class="lead">
          Le cookie aux pépites obsidienn vous sera certainement fort utile au combat vu que dès que vous l’aurez avalé, il vous donnera un effet de <b>régénération II</b> durant <b>50 secondes</b>. 
          Il se craft au moyen d’un cookie, 3 <a href="<?= $router->getURL('/minerais/obsidienne') ?>">minerais d'obsidienne</a> et un bloc d'<a href="<?= $router->getURL('/minerais/obsidienne') ?>">obsidienne</a>.
        </p>

      <h4>Images et récapitulatif</h4>

        <img src="<?= $router->getURL('/dist/img/cookies/garnet.png') ?>" alt="" class="img-rounded" width="1111" height="477" />
        <img src="<?= $router->getURL('/dist/img/cookies/amethyste.png') ?>" alt="" class="img-rounded" width="1120" height="476" />
        <img src="<?= $router->getURL('/dist/img/cookies/titanium.png') ?>" alt="" class="img-rounded" width="1083" height="460" />
        <img src="<?= $router->getURL('/dist/img/cookies/obsidian.png') ?>" alt="" class="img-rounded" width="1075" height="461" />

    </div>

<?php include 'elements/footer.php' ?>
