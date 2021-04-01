<?php
$ptime = '2021-04-01 00:00:00';
$mtime = get_mtime(__FILE__);
?>
<header>
<?php include_once(__DIR__ . '/../common/header.php'); ?>
<?php include_once(__DIR__ . '/../common/date.php'); ?>
</header>
<h2 class="title">目次</h2>
<ul>
  <li>
    <a href="#homebrew-install">Homebrewのインストール</a>
  </li>
  <li>
    <a href="#homebrew-command">Homebrewのコマンド</a>
  </li>
  <li>
    <a href="#homebrew-cask-install">Homebrew-Caskのインストール</a>
  </li>
  <li>
    <a href="#homebrew-cask-command">Homebrew-Caskのコマンド</a>
  </li>
</ul>
<h2 id="homebrew-install" class="title">Homebrewのインストール</h3>
<p><a rel="noopener noreferrer" href="https://brew.sh/index_ja.html" target="_blank">Homebrew</a>の説明に従ってインストールする。</p>
<h2 id="homebrew-command" class="title">Homebrewのコマンド</h3>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>操作</th>
      <th>コマンド</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>インストールされているパッケージ一覧を表示する。</td>
      <td><pre class="inline"><code>$ brew list</code></pre></td>
    </tr>
    <tr>
      <td>インストール可能なパッケージ一覧を表示する。</td>
      <td><pre class="inline"><code>$ brew search</code></pre></td>
    </tr>
    <tr>
      <td>パッケージ情報を検索する。</td>
      <td><pre class="inline"><code>$ brew search [Formula]</code></pre></td>
    </tr>
    <tr>
      <td>パッケージをインストールする。</td>
      <td><pre class="inline"><code>$ brew install [Formula]</code></pre></td>
    </tr>
    <tr>
      <td>パッケージをアンインストールする。</td>
      <td><pre class="inline"><code>$ brew uninstall [Formula]</code></pre></td>
    </tr>
    <tr>
      <td>Homebrew本体とFormulaを更新する。</td>
      <td><pre class="inline"><code>$ brew update</code></pre></td>
    </tr>
    <tr>
      <td>インストールされている全てのパッケージを更新する。</td>
      <td><pre class="inline"><code>$ brew upgrade</code></pre></td>
    </tr>
    <tr>
      <td>インストールされている個別のパッケージを更新する。</td>
      <td><pre class="inline"><code>$ brew upgrade [Formula]</code></pre></td>
    </tr>
    <tr>
      <td>Homebrewの問題を診断する。</td>
      <td><pre class="inline"><code>$ brew doctor</code></pre></td>
    </tr>
  </tbody>
</table>
<h2 id="homebrew-cask-install" class="title">Homebrew-Caskのインストール</h3>
<pre class="block"><code>$ brew tap caskroom/cask
$ brew tap caskroom/versions</code></pre>
<h2 id="homebrew-cask-command" class="title">Homebrew-Caskのコマンド</h3>
<table class="table table-striped table-sm">
  <thead>
    <tr>
      <th>操作</th>
      <th>コマンド</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>インストールされているパッケージ一覧を表示する。</td>
      <td><pre class="inline"><code>$ brew cask list</code></pre></td>
    </tr>
    <tr>
      <td>パッケージをインストールする。</td>
      <td><pre class="inline"><code>$ brew cask install [パッケージ名]</code></pre></td>
    </tr>
    <tr>
      <td>パッケージをアンインストールする。</td>
      <td><pre class="inline"><code>$ brew cask uninstall [パッケージ名]</code></pre></td>
    </tr>
    <tr>
      <td>不要になったダウンロード済みファイルを削除する。</td>
      <td><pre class="inline"><code>$ brew cask cleanup</code></pre></td>
    </tr>
    <tr>
      <td>バージョンが古くなったパッケージ一覧を表示する。</td>
      <td><pre class="inline"><code>$ brew cask outdated</code></pre></td>
    </tr>
    <tr>
      <td>バージョンが古くなった全てのパッケージを更新する。</td>
      <td><pre class="inline"><code>$ brew cask upgrade</code></pre></td>
    </tr>
    <tr>
      <td>Homebrew-Caskの問題を診断する。</td>
      <td><pre class="inline"><code>$ brew cask doctor</code></pre></td>
    </tr>
  </tbody>
</table>
