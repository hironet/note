<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href=".">ホーム</a>
    </li>
<?php
foreach ($breadcrumb_list as $breadcrumb => $url) {
  if (empty($url)) {
?>
    <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumb ?></li>
<?php
  } else {
?>
    <li class="breadcrumb-item">
      <a href="<?= $url ?>"><?= $breadcrumb ?></a>
    </li>
<?php
  }
}
?>
  </ol>
</nav>
<h1><?= $contents_title ?></h1>
<p>最終更新日：<?= get_update_date(__FILE__); ?></p>
