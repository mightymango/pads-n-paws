<div class="container breakline project-body">
  <div class="row">
    <div class="col-sm-3 col-md-2">
      <div class="text-block">
        <span class="h5">Client:</span>
        <span class="block"><?= $page->client() ?></span>
      </div>
      <div class="text-block">
        <span class="h5">Project Link:</span>
        <span class="block"><a href="#"><?= $page->website()->html() ?></a></span>
      </div>
    </div>
    <!--end of col-->
    <div class="col-sm-5 col-md-5 col-md-offset-1">
      <div class="text-block">
        <span class="h5">Description:</span>
        <?= $page->text()->kt() ?>
      </div>
    </div>
    <!--end of col-->
    <div class="col-sm-4 col-md-3 col-md-offset-1">
      <div class="text-block">
        <span class="h5">Services:</span>
        <ul class="bullets">
          <?php foreach($page->categories()->split(',') as $cat): ?>
          <li>
            <?= $cat ?>
          </li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
    <!--end of col-->
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <?php if($image = $page->img()->toFile()): ?>
        <img class="border-round" src="<?php if($image != null) echo $image->crop(1500, 800)->url() ?>" />
      <?php endif ?>
    </div>
    <!--end of col-->
  </div>
  <!--end of row-->
</div>
<!--end of container-->
