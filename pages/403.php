<?php $title = 'Erreur 403'; $startTime = microtime(true) ?>
<?php include 'elements/header.php' ?>

    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Erreur !</h3>
            </div>
            <div class="panel-body">
              <div id="error-404">403</div>
              <p class="text-center">La page <b><?= $request ?></b> vous est interdite !</p>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php include 'elements/footer.php' ?>
