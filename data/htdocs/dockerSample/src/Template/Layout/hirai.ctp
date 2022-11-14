<!DOCTYPE html>
<head>
  <?= $this->Html->charset() ?>
  <title><?= $this->fetch('title') ?></title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize-css@2.3.1/normalize.css">
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <?= $this->Html->css('hirai') ?>
<?= $this->Html->script('hirai') ?>

<style>
    .swiper-container {
      position: relative;
      overflow: hidden;
    }
    .swiper-container.visible {
      overflow: visible;
    }
    .sample-swiper-cards {
      padding: 0 50px;
    }
  </style>
</head>

<body>
  <div class = "content row">
    <?= $this->fetch('content') ?>
  </div>
  <div class = "foot row">
    <h5>copyright 2022 Takahiro Hirai</h5>
  </div>
</body>