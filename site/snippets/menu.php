<?php if ($page == 'home' OR $page == 'about' ){ ?>
<div class="navbar-wrapper">
  <?php } ?>
  <div class="container">
    <!-- Static navbar -->
    <nav class="navbar <?php if ($page == 'home' OR $page == 'about' ){ ?>navbar-inverse <?php } else { ?>navbar-default<?php } ?>">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          <!--Navbar Logo-->
          <a class="navbar-brand" href="<?= $pages->home()->url() ?>">
            <!--Here we define the logo for the sites which have a Cover Image-->
            <?php if ($page == 'home' OR $page == 'about' ): ?>
              <?php if($image = $site->logo()->toFile()): ?>
              <div class="svg">
                <img alt="Brand" src="<?= $image->url() ?>">
              </div>
            <?php else: ?>
              <h4 style="margin: 0; color: #fff"><?= $site->title() ?></h4>
              <?php endif ?>
            <?php else: ?>
            <!--Here we define the logo for the sites which dont have a Cover Image-->
              <?php if($image = $site->logoinverse()->toFile()): ?>
                <div class="svg">
                  <img alt="Brand" src="<?= $image->url() ?>">
                </div>
              <?php else: ?>
                <h4 style="margin: 0;"><?= $site->title() ?></h4>
              <?php endif ?>
            <?php endif ?>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <!--Navbar Buttons-->
          <?php $menu_btn = $site->menu_btn()->toStructure(); ?>
          <form class="navbar-form navbar-right hidden-xs">
            <?php foreach($menu_btn as $b): ?>
            <a class="btn<?php if($b->design() == "primary"){ ?> btn-primary<?php } else { ?> btn-default<?php } ?>" href="<?= $b->url(); ?>"><?= $b->title(); ?></a>
            <?php endforeach ?>
          </form>
          <!--The Menu Items-->
          <ul class="nav navbar-nav navbar-right">
            <?php foreach($pages->visible() as $p): ?>
            <!--If a alternative Menu Title is set whe define it here-->
            <?php $ptitle = ($p->menu_title()->isEmpty() ? $p->title()->html() : $p->menu_title()->html());?>
            <!--We dont want to have a Dropdown for the blog and the about site-->
            <?php if ($p->hasvisibleChildren() && $p->template() != 'blog' && $p->template() != 'about'){ ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?= $ptitle ?> <i class="fa fa-caret-down" aria-hidden="true"></i></a>
              <ul class="dropdown-menu">
                <!--List the subpages for the Dropdown Menu-->
                <?php foreach($p->children() as $n): ?>
                <?php $ntitle = ($n->menu_title()->isEmpty() ? $n->title()->html() : $n->menu_title()->html());?>
                <li>
                  <a href="<?= $n->url(); ?>">
                    <?= $ntitle ?>
                  </a>
                </li>
                <?php endforeach ?>
              </ul>
            </li>
            <?php } else{ ?>
            <!--Here we have the Menu Item without a Dropdown-->
            <li <?php e($p->isOpen(), ' class="active"') ?>>
              <a href="<?= $p->url() ?>">
                <?= $ptitle ?>
              </a>
            </li>
            <?php } ?>
            <?php endforeach ?>
          </ul>
          <!--end of ul-->
        </div>
        <!--end of navbar-collapse-->
      </div>
      <!--end of container-fluid-->
    </nav>
    <!--end of nav-->
  </div>
  <!-- /container -->
  <?php if ($page == 'home' OR $page == 'about' ){ ?>
</div>
<!--end of navbr-wrappers-->
<?php } ?>
