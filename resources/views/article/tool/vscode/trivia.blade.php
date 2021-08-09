@extends('layouts/app')

@section('contents')
<header>
@include('components.header')
  <nav>
    <ul class="list-box list-box-toc">
      <li>
        <a href="#regexp">正規表現検索・置換</a>
      </li>
    </ul>
  </nav>
</header>
<h2 id="regexp" class="heading bgcolor-heading">正規表現検索・置換</h2>
<h3 class="heading lowerleftline-heading">正規表現検索・置換を有効化する手順</h3>
<ol>
  <li>左側メニューの「検索」をクリックする。</li>
  <li>検索ボックス右側の「.*」をクリックする。</li>
</ol>
<h3 class="heading lowerleftline-heading">正規表現の表記</h3>
<div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>表記</th>
        <th>説明</th>
        <th>使用例</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>.+</code></td>
        <td>1文字以上の文字列にマッチ</td>
        <td><code>&lt;p&gt;(.+)&lt;/p&gt;</code></td>
      </tr>
      <tr>
        <td><code>.*</code></td>
        <td>0文字以上の文字列にマッチ</td>
        <td><code>&lt;p&gt;(.*)&lt;/p&gt;</code></td>
      </tr>
      <tr>
        <td><code>^</code></td>
        <td>文字列の先頭にマッチ</td>
        <td><code>^&lt;p&gt;</code></td>
      </tr>
      <tr>
        <td><code>$</code></td>
        <td>文字列の末尾にマッチ</td>
        <td><code>&lt;/p&gt;$</code></td>
      </tr>
      <tr>
        <td><code>[]</code></td>
        <td>[]内の任意の1文字にマッチ</td>
        <td><code>&lt;p&gt;[0-9]&lt;/p&gt;</code></td>
      </tr>
      <tr>
        <td><code>{}</code></td>
        <td>直前の文字やグループが登場する回数を指定</td>
        <td><code>&lt;p&gt;[a-z]{5}&lt;/p&gt;</code></td>
      </tr>
    </tbody>
  </table>
  <h3 class="heading lowerleftline-heading">置換における()の使用</h3>
  <ul>
    <li>検索時に正規表現を<code>()</code>で括ると、置換時にマッチした文字列を<code>$1, $2, ...</code>で参照できる。</li>
    <li>置換後は、<code>$1, $2, ...</code>の部分にはマッチした文字列がそのまま入力される。</li>
  </ul>
  <div class="table-responsive">
  <table class="table table-striped table-sm">
    <thead>
      <tr>
        <th>検索時の例</th>
        <th>置換時の例</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><code>&lt;h2&gt;(.*)&lt;/h2&gt;</code></td>
        <td><code>&lt;h2 class="heading"&gt;$1&lt;/h2&gt;</code></td>
      </tr>
    </tbody>
  </table>
</div><!-- /.table-responsive -->
@endsection
