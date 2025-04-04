<!doctype html>

<html lang="<?= $kirby->language()->code() ?>">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <?php snippet('seo/head'); ?> 

  <meta name="author" content="">
  <meta name="copyright" content="">

  <link rel="shortcut icon"  href="<?= url('assets/img/x.png') ?>" type="image/png">
  <link rel="icon" href="<?= url('assets/img/x.png') ?>" type="image/png">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">

  <?= css([
    'assets/css/index.css',
    '@auto'
    ]) ?>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.min.js"></script>

  <?= js([
    'assets/js/main.js',
    '@auto'
    ]) ?>


</head>

<body>
