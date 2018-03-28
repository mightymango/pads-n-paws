<section class="cover imagebg space-lg bg-primary" data-scrim-bottom="9">

  <?php $cover_img = $page->cover_img()->toFile(); ?>
  <div class="background-image-holder" style="background: url(&quot;<?php if($cover_img != null) echo $cover_img->url()?>&quot;)">
    <img alt="background" src="<?php if($cover_img != null) echo $cover_img->url() ?>">
  </div>
  <!--end of the cover image-->
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
        <h1><?= $page->cover_title()->kt() ?></h1>
        <p class="lead">
          <?= $page->cover_subtitle() ?>
        </p>
        <a class="btn btn-lg btn-primary type-uppercase" href="#">
          <span class="btn-text"><?= $page->cover_button() ?></span>
        </a>
      </div>
      <!--end of col-->
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>
<!--end of section-->
