@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="toc">
      <li>
        <a href="#oper">ブランチ操作</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="oper" class="title">ブランチ操作</h2>
<h3 class="oper">ブランチの一覧を確認する</h3>
<pre class="block"><code class="shell">$ git branch</code></pre>
<h3 class="oper">ブランチを作成する</h3>
<pre class="block"><code class="shell">$ git branch [ブランチ名]</code></pre>
<h3 class="oper">ブランチを切り替える</h3>
<pre class="block"><code class="shell">$ git checkout [ブランチ名]</code></pre>
<h3 class="oper">ブランチの作成と切り替えを同時に行う</h3>
<pre class="block"><code class="shell">$ git checkout -b [ブランチ名]</code></pre>
<h3 class="oper">ブランチをマージする</h3>
<pre class="block"><code class="shell">$ git checkout [マージ先のブランチ名]
$ git merge [マージ元のブランチ名]</code></pre>
<h3 class="oper">ブランチを削除する</h3>
<pre class="block"><code class="shell">$ git branch -d [ブランチ名]</code></pre>
@endsection
