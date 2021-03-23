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
<ul>
  <li>公開日：
    <time itemprop="datePublished" datetime="<?= get_time_iso8601($ptime) ?>">
      <?= get_date_jp($ptime), PHP_EOL ?>
    </time>
  </li>
  <li>更新日：
    <time itemprop="dateModified" datetime="<?= get_time_iso8601($mtime) ?>">
      <?= get_date_jp($mtime), PHP_EOL ?>
    </time>
  </li>
</ul>
