<?php
$ptime = '2021-05-04 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2 class="title">配列の基本操作</h2>
<h3 class="title">配列の作成</h3>
<p>array()で空の配列を作成する。</p>
<pre class="block"><code>$array = array();</code></pre>
<p>短縮構文で空の配列を作成する。</p>
<pre class="block"><code>$array = [];</code></pre>
<h3 class="title">添字配列の初期化</h3>
<p>array()で添字配列を初期化する。</p>
<pre class="block"><code>$array = array('red', 'green', 'blue');
echo $array[0];  # red</code></pre>
<p>短縮構文で添字配列を初期化する。</p>
<pre class="block"><code>$array = ['red', 'green', 'blue'];
echo $array[2];  # blue</code></pre>
<h3 class="title">連想配列の初期化</h3>
<p>array()で連想配列を初期化する。</p>
<pre class="block"><code>$array = array('order_no' => 10, 'product_name' => 'iPhone 12', 'price' => 94380);
echo $array['product_name'];  # iPhone 12</code></pre>
<p>短縮構文で連想配列を初期化する。</p>
<pre class="block"><code>$array = ['order_no' => 10, 'product_name' => 'iPhone 12', 'price' => 94380];
echo $array['price'];  # 94380</code></pre>
<h2 class="title">配列の便利な操作</h2>
<h3 class="title">list構文</h3>
<p>配列から複数の変数に代入する。</p>
<pre class="block"><code>$color_array = ['red', 'green, 'blue'];
list($color_1, $color_2, $color_3) = $color_array;
echo "${$color_1}, ${$color_2}, ${$color_3}";  # red, green, blue</code></pre>
