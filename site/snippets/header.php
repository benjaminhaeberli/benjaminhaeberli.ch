<!DOCTYPE html>
<html lang="<?= kirby()->languageCode() ?>">

<head>
  <base href="<?= site()->url() ?>">
  <link rel="icon" href="<?= url('favicon.svg') ?>">
  <link rel="icon" type="image/x-icon" href="<?= url('favicon.ico') ?>">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 shrink-to-fit=no">
  <title><?= site()->title() ?></title>
</head>

<body>
  <?php site()->blueprint()->field('address') ?>
  <header>
    <ul>
      <li>
        <a href="<?= site()->url() ?>">
          <?= site()->title() ?>
        </a>
      </li>
    </ul>
  </header>