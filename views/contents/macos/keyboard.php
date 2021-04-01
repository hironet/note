<?php
$ptime = '2021-04-01 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h3 class="title">スクリーンショットを撮る</h3>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>操作</th>
      <th>ショートカットキー</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>画面全体を撮る</td>
      <td><kbd>shift + command + 3</kbd></td>
    </tr>
    <tr>
      <td>画面の一部を撮る</td>
      <td><kbd>shift + command + 4</kbd></td>
    </tr>
    <tr>
      <td>ウィンドウを撮る</td>
      <td><kbd>shift + command + 4 + space</kbd></td>
    </tr>
  </tbody>
</table>
<h3 class="title">その他</h3>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>操作</th>
      <th>ショートカットキー</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>アプリを強制終了する</td>
      <td><kbd>option + command + esc</kbd></td>
    </tr>
  </tbody>
</table>
