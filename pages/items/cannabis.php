<?php
$title = 'Cannabis';
?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="bs-callout bs-callout-info">
        <h4>Nouveautés</h4>
        <p>
          Le <i>cannabis</i> est une nouveautés de la version 5 d'<b>O</b>bsi<b>F</b>ight.
        </p>
      </div>
      <div class="bs-callout bs-callout-danger">
        <h4>Attention !</h4>
        <p>
          Le <i>cannabis</i> est prohibidé dans la vie courante, il est déconseillé d'en fumer, nous déclarons toute responsabilités en cas de problèmes.
        </p>
      </div>

      <p class="lead">
        Les feuilles de cannabis s’obtiennent en faisant pousser des graines de cannabis qui sont <b>uniquement échangeable avec le PNJ de passage</b> et en <b>échange avec des joueurs</b>.
        Lorsque vous obtenez ces feuilles, vous pourrez les faire cuire pour obtenir des feuilles de cannabis séchées.
        Une fois que vous les aurez, vous pourrez soit les échanger avec un PNJ au spawn, soit vous en servir pour faire des joints.
      </p>

      <img src="<?= $router->getURL('/dist/img/cannabis.png') ?>" alt="" class="img-rounded" width="453" height="442" />

    </div>

<?php include 'elements/footer.php' ?>
