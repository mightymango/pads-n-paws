<?php if($page->imageblock_enable()->bool()): ?>

<section class="imageblock bg-primary">
  <div class="imageblock-content col-md-6 col-sm-4">
    <?php $imageblock_img = $page->imageblock_img()->toFile(); ?>
    <div class="background-image-holder" style="background: url(&quot;<?php if($imageblock_img != null) echo $imageblock_img->url()?>&quot;)">
    </div>
  </div>
  <!--end of imageblock-->
  <div class="container">
    <div class="row">
      <div class="col-md-5 col-sm-7">
        <h2><?= $page->imageblock_title() ?></h2>
        <div class="lead opacity">
          <?= $page->imageblock_text()->kt() ?>
        </div>
      </div>
      <!--end of col-->
    </div>
    <!--end of row-->
  </div>
  <!--end of container-->
</section>
<!--end of section-->
<?php endif ?>
