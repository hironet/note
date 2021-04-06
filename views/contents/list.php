<header>
<?php include_once(__DIR__ . '/common/header.php'); ?>
</header>
<div class="row">
<?php
// 配列のキーを数値に変換
$titles_2 = array_values($titles);
$descs_2 = array_values($descs);
$links_2 = array_values($links);

for ($i = 0; $i < count($titles_2); $i++) {
?>
  <div class="col-12 col-md-6 col-lg-4">
    <div class="card my-2">
      <div class="card-body">
        <h5 class="card-title"><?= $titles_2[$i] ?></h5>
        <p class="card-text"><?= $descs_2[$i] ?></p>
        <a href="<?= $links_2[$i] ?>" class="card-link">詳しく見る</a>
      </div>
    </div><!-- card -->
  </div><!-- col -->
<?php } ?>
</div><!-- row -->
