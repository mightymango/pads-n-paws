<footer class="text-center bg-second">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="heading-block">
          <ul class="list-inline">
            <?php foreach($pages->visible() as $p): ?>
            <li>
              <a href="<?= $p->url() ?>"><span><?= $p->title() ?></span></a>
            </li>
            <?php endforeach ?>
          </ul>
        </div>
        <ul class="social-list list-inline list-hover">
          <li>
            <a href="<?= $site->facebook() ?>"><i class="fa fa-facebook fa-2x"></i></a>
          </li>
          <li>
            <a href="<?= $site->twitter() ?>"><i class="fa fa-twitter fa-2x"></i></a>
          </li>
          <li>
            <a href="<?= $site->instagram() ?>"><i class="fa fa-instagram fa-2x"></i></a>
          </li>
        </ul>
        <div class="list-inline-mid">
          <span>Created by <a href="https://mightymango.ltd">MightyMango</a></span>
        </div>
        <div>
          <span><?= $site->copyright()->kt() ?></span>
        </div>
      </div>
      <!--end of col-->
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</footer>
<!--end of footer-->
