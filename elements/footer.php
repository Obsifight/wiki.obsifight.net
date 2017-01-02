
    <div class="clearfix"></div>

    <?php if(!$router->isIndex) { ?>
      <div class="container margin-top-50">
        <p class="text-center">
          <em><a class="lead" href="<?= $router->getURL('/') ?>">&laquo; Retourner au sommaire</a></em>
        </p>
      </div>
    <?php } ?>

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <p class="text-muted">© ObsiFight 2016</p>
          </div>
          <div class="col-md-4">
            <p class="text-muted">
    					<a href="http://obsifight.fr/forum/index.php?threads/c-g-u-dobsifight.15819/">CGU &amp; CGV</a> |
    					<a href="http://status.obsifight.fr">Statut</a> |
    					<a href="http://obsifight.net/stats">Stats</a>
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script type="text/javascript" src="<?= $router->getURL('/dist/js/site.min.js') ?>"></script>
    <script type="text/javascript" src="<?= $router->getURL('/dist/js/jquery.js') ?>"></script>
    <script type="text/javascript" src="<?= $router->getURL('/dist/js/app.js') ?>"></script>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-60496805-1', 'auto');
      ga('send', 'pageview');
    </script>

  </body>
</html>
