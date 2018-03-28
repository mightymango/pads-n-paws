<?php snippet('header') ?>

<main role="main">

  <section class="blog">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8">
          <?php foreach($articles as $article): ?>
              <article class="article">
                <div class="article-title">
                  <a href="<?= $article->url() ?>">
                    <h2><?= $article->title() ?></h2>
                  </a>
                  <span><?= $article->date('F jS, Y') ?></span>
                </div>
                <div class="article-body">
                  <a class="border-round" href="<?= $article->url() ?>">
                    <?php if($image = $article->coverimage()->toFile()): ?>
                    <!--generate a thumbnaial-->
                    <?= thumb($image, array('width' => 900, 'height' => 600, 'crop' => true)) ?>
                    <?php endif ?>
                  </a>
                  <p>
                    <!--a preview of that article-->
                    <?= excerpt($article->text(), 60, 'words') ?>
                  </p>
                  <a href="<?= $article->url() ?>">Continue reading »</a>
                </div>
              </article>
              <!--end of article-->
              <hr />
          <?php endforeach ?>
          <?php snippet('pagination') ?>
        </div>
        <?php snippet('blog/sidebar') ?>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

</main>

<?php snippet('footer') ?>
