<?php snippet('header') ?>

<main role="main">

  <section class="article">
    <div class="container">
      <div class="row">
        <div class="col-sm-10 col-md-8 col-sm-offset-1 col-md-offset-2">
          <article>
            <div class="article-title text-center">
              <h1 class="h2"><?= $page->title() ?></h1>
              <span><?= $page->date('F jS, Y') ?></span>
            </div>
            <div class="article-body">
              <?php if($image = $page->coverimage()->toFile()): ?>
                <img class="border-round" src="<?= $image->url() ?>" />
              <?php endif ?>
              <?= $page->text()->kt() ?>
            </div>
            <div class="article-share text-center">
              <a class="btn btn-lg btn-social btn-twitter" href="http://twitter.com/share?url=<?= $page->url() ?>&text=<?= $page->title() ?>">
                          <span class="fa fa-twitter"></span> Share with Twitter
                        </a>
              <a class="btn btn-lg btn-social btn-facebook" href="http://www.facebook.com/sharer.php?u=<?= $page->url() ?>">
                          <span class="fa fa-facebook"></span> Share on Facebook
                        </a>
            </div>
          </article>
          <!--end of article-->
        </div>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

</main>

<?php snippet('footer') ?>
