<div class="col-md-4 hidden-sm hidden-xs">
  <div class="sidebar">
    <div class="sidebar-item">
      <h3>Categories</h3>
      <ul class="list">
        <?php foreach($cats as $cat): ?>
        <li>
          <!--list all categories and set the link-->
          <a href="<?= url('blog/' . url::paramsToString(['category' => $cat])) ?>">
            <?= $cat?>
          </a>
        </li>
        <?php endforeach ?>
      </ul>
    </div>
    <div class="sidebar-item">
      <h3>Tags</h3>
      <?php foreach($tags as $tag): ?>
      <!--list all tags and set the link-->
      <a class="btn btn-primary" style="margin: 4px;" href="<?= url('blog/' . url::paramsToString(['tag' => $tag])) ?>">
        <?= $tag?>
      </a>
      <?php endforeach ?>
    </div>
    <!--end of item-->
  </div>
  <!--end of sidebar-->
</div>
<!--end of col-->
