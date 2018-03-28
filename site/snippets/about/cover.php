<section class="cover bg-primary imagebg space-lg" data-scrim-bottom="9">

  <?php $cover_img = $page->cover_img()->toFile(); ?>
  <div class="background-image-holder" style="background: url(&quot;<?php if($cover_img != null) echo $cover_img->url()?>&quot;)">
    <img alt="background" src="<?php if($cover_img != null) echo $cover_img->url() ?>">
  </div>
  <!--end of the cover image-->
  <div class="container">
    <div class="row">
      <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 text-center">
        <h1><?= $page->about_title()->kt() ?></h1>
        <p class="lead">
          <?= $page->about_subtitle() ?>
        </p>
      </div>
      <!--end of col-->
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>
<!--end of section-->
