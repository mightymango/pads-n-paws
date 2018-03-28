<nav class="prevnext">
  <?php if($prev = $page->prevVisible()): ?>
  <a class="h2 pull-left" href="<?= $prev->url() ?>"><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i><i class="fa fa-angle-left"></i></a>
  <?php endif ?>
  <?php if($next = $page->nextVisible()): ?>
  <a class="h2 pull-right" href="<?= $next->url() ?>"><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i><i class="fa fa-angle-right"></i></a>
  <?php endif ?>
</nav>
<!--end of nav-->
