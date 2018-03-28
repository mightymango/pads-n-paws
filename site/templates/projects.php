<?php snippet('header') ?>

<main role="main">

  <div class="hidden">
    <h1><?= $page->title() ?></h1>
  </div>

  <section class="project-body">
    <div class="container">
      <div class="row">
        <!--fetch the first supages-->
        <?php $project = page('projects')->children()->visible()->first() ?>
        <div class="col-md-12">
          <a href="<?= $project->url() ?>">
            <?php if($image = $project->image()): ?>
            <img class="border-round" src="<?= $image->crop(1500, 600)->url() ?>" alt="">
            <?php endif ?>
          </a>
        </div>
      </div>
      <!--end of row-->
      <div class="row">
        <!--fetch the other supages and limit them to max 2 items-->
        <?php foreach($page->children()->offset(1)->limit(2) as $project): ?>
        <div class="col-md-6">
          <a href="<?= $project->url() ?>">
            <?php if($image = $project->image()): ?>
            <img class="border-round" src="<?= $image->url() ?>" alt="">
            <?php endif ?>
          </a>
        </div>
        <?php endforeach ?>
      </div>
      <!--end of row-->
    </div>
    <!--end of container-->
  </section>
  <!--end of section-->

</main>

<?php snippet('footer') ?>
