<?php if($page->showcase_enable()->bool()): ?>

<section class="showcase">
  <div class="container">
      <div class="row text-center breakline">
        <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2">
          <h2><?= $page->showcase_title() ?></h2>
          <p class="lead">
            <?= $page->showcase_subtitle() ?>
          </p>
        </div>
        <!--end of col-->
      </div>
      <!--end of row-->
    <div class="row">
      <?php $projects = page('projects')->children()->visible()->limit(3); ?>
      <?php foreach($projects as $project): ?>
      <div class="col-sm-4">
          <?php if($image = $project->img()->toFile()): ?>
          <a class="border-round" href="<?= $project->url() ?>">
            <?= thumb($image, array('width' => 600, 'height' => 400, 'crop' => true)) ?>
          </a>
          <?php endif ?>
          <h4><?= $project->title() ?></h4>
          <p>
            <?= excerpt($project->text(), 15, 'words') ?>
          </p>
      </div>
      <!--end of col-->
      <?php endforeach ?>
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>
<!--end of section-->

<?php endif ?>
