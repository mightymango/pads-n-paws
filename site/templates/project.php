<?php snippet('header') ?>

<main role="main">

  <section class="project project-title">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-xs-8">
          <h1 class="h2"><?= $page->title() ?></h1>
        </div>
        <div class="col-md-2 col-xs-4">
          <?php snippet('prevnext') ?>
        </div>
      </div>
      <!--end of row-->
      <hr />
    </div>
    <!--end of container-->
    <?php snippet('project/body') ?>
  </section>
  <!--end of section-->

</main>

<?php snippet('footer') ?>
