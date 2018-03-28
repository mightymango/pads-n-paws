<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="<?= $site->description()->html() ?>">
  <?php if($favicon = $site->favicon()->toFile()): ?>
  <link rel="icon" href="<?= $favicon->url() ?>" type="image/x-icon">
  <?php endif ?>

  <title>
    <?= $site->title()->html() ?> | <?= $page->title()->html() ?>
  </title>

  <?= css('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css') ?>
  <?= css('assets/css/style.css') ?>

  <?php snippet('color') ?>

</head>

<body>
  <?php snippet('menu') ?>
