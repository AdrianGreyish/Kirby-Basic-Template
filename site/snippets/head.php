<!doctype html>

<html lang="<?= $kirby->language()->code() ?>">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta name="author" content="">
  <meta name="copyright" content="">

  <link rel="shortcut icon"  href="<?= url('assets/img/x.png') ?>" type="image/png">
  <link rel="icon" href="<?= url('assets/img/icon.png') ?>" type="image/png">

  <?php snippet('seo/head') ?>

  <title>
    <?php echo $page->metaTitle()->isEmpty() ? 'Greta Magyar - ' . $page->title() : $page->metaTitle(); ?>
  </title>

  <?= css([
    'assets/css/index.css',
    'assets/css/output.css',
    '@auto'
    ]) ?>

  <?= js([
    'assets/js/main.js',
    '@auto'
    ]) ?>

</head>
