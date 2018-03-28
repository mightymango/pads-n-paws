<?php if($articles->pagination()->hasPages()): ?>
<nav class="navigation">
  <?php if($articles->pagination()->hasPrevPage()): ?>
  <a class="h2 pull-left" href="<?= $articles->pagination()->prevPageURL() ?>"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></a>
  <?php endif ?>
  <?php if($articles->pagination()->hasNextPage()): ?>
  <a class="h2 pull-right" href="<?= $articles->pagination()->nextPageURL() ?>"><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
  <?php endif ?>
</nav>
<!--end of nav-->
<?php endif ?>
