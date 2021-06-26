@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#log">コンテナのログ確認</a>
      </li>
      <li>
        <a href="#file">ファイルコピー</a>
      </li>
      <li>
        <a href="#research">コンテナ関連の調査</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="log" class="title">コンテナのログ確認</h2>
<h3 class="oper">コンテナのログを出力する</h3>
<pre class="block"><code class="shell">$ docker logs [コンテナID]</code></pre>
<h3 class="oper">コンテナのログの末尾100行を出力する</h3>
<pre class="block"><code class="shell">$ docker logs --tail=100 [コンテナID]</code></pre>
<h3 class="oper">コンテナのログを出力し続ける</h3>
<pre class="block"><code class="shell">$ docker logs -f [コンテナID]</code></pre>
<h3 class="oper">指定した時刻以降のコンテナのログを出力する</h3>
<pre class="block"><code class="shell">$ docker logs --since 2020-01-01T00:00:00 [コンテナID]</code></pre>
<h2 id="file" class="title">ファイルコピー</h2>
<h3 class="oper">コンテナからホストOSにファイルをコピーする</h3>
<pre class="block"><code class="shell">$ docker cp [コンテナID]:[ファイルパス] [ファイルパス]</code></pre>
<h3 class="oper">ホストOSからコンテナにファイルをコピーする</h3>
<pre class="block"><code class="shell">$ docker cp [ファイルパス] [コンテナID]:[ファイルパス]</code></pre>
<h2 id="research" class="title">コンテナ関連の調査</h2>
<h3 class="oper">コンテナの情報を表示する</h3>
<pre class="block"><code class="shell">$ docker inspect [コンテナID]</code></pre>
<h3 class="oper">Dockerデーモンによって使用されているディスク総容量を表示する</h3>
<pre class="block"><code class="shell">$ docker system df</code></pre>
<h3 class="oper">コンテナのリソース使用状況をライブで表示し続ける</h3>
<pre class="block"><code class="shell">$ docker stats</code></pre>
<h3 class="oper">コンテナで実行しているプロセスを確認する</h3>
<pre class="block"><code class="shell">$ docker top [コンテナID]</code></pre>
<h3 class="oper">コンテナで実行しているプロセス毎のCPU・メモリ使用率を確認する</h3>
<pre class="block"><code class="shell">$ docker top [コンテナID] aux</code></pre>
<h3 class="oper">プロセスIDからコンテナIDを特定する</h3>
<pre class="block"><code class="shell">$ cat /proc/[プロセスID]/cgroup</code></pre>
@endsection
