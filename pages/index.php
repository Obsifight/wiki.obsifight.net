<?php
$title = 'ObsiWiki';
?>
<?php include 'elements/header.php' ?>

    <div class="container">

      <?php
      $i = 0;
      foreach ($config_pages as $category_name => $articles) {

        $i++;
        if($i%2 == 1) {
          echo '<div class="row">';
        }

          echo '<div class="col-md-6">';
            echo '<div class="panel panel-default">';
              echo '<div class="panel-heading">'.$category_name.'</div>';
              echo '<ul class="list-group">';
                foreach ($articles as $name => $url) {

                  $isAvailable = !$router->is404($url);

                  echo '<li class="list-group-item">';
                    echo '<a href="';
                      echo ($isAvailable) ? $router->getURL($url) : '#';
                    echo '">';
                      echo $name;
                    echo '</a>';
                      echo (!$isAvailable) ? ' <span class="label label-warning">En rédaction</span>' : '';
                  echo '</li>';

                }
              echo '</ul>';
            echo '</div>';
          echo '</div>';

        if($i%2 != 1) {
          echo '</div>';
        }

      }
      ?>

    </div>

<?php include 'elements/footer.php' ?>
