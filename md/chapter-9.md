---
title: Iterator & Composite パターン
theme: beige
slideNumber: true
---
<style type="text/css"> .reveal h1, .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6 { text-transform: none; text-align: left;}
.reveal p {line-height: initial; text-align: left;}.text-center { text-align: center !important; } li {font-size: 0.9em; line-height: initial;} .reveal small {line-height: 2.3em}
.reveal pre {width: 100%} .reveal.slides{width: 100%}
</style>

<h1 class="text-center">Iterator & Composite</h1>
Head First デザインパターン 9章
---
## Iterator パターンとは？

コンテナオブジェクトの要素を列挙する手段を独立させることによって、コンテナの内部仕様に依存しない反復子を提供することを目的とする。

<small>[https://ja.wikipedia.org/wiki/Iterator_パターン](https://ja.wikipedia.org/wiki/Iterator_%E3%83%91%E3%82%BF%E3%83%BC%E3%83%B3)</small>

---
<section data-auto-animate>

## どういう時に使う？
**要素を一つ一つ取り出す処理** を実装する時に使います。
</section>
<section data-auto-animate>

## どういう時に使う？
**要素を一つ一つ取り出す処理** を実装する時に使います。

例えば……

<ul>
    <li>あるデータを全件取得し、トリムして出力する</li>
    <li>あるディレクトリ配下のファイル名をすべて取得する</li>
</ul>
</section>
---
<h3 class="text-center">まずは Iterator を使わない例</h3>
---
<section data-auto-animate>
<p>例えば、ウェイトレスさん。</p>
<p>メニューを口頭で伝えなければなりません。</p>

<img src="https://2.bp.blogspot.com/-jYjhbgQhYiE/VYJcWv6lk3I/AAAAAAAAuXE/uTmyE9V6aM8/s800/job_waitress.png" style="width: 30%; float: left;">
</section>
<section data-auto-animate>
<img src="https://2.bp.blogspot.com/-jYjhbgQhYiE/VYJcWv6lk3I/AAAAAAAAuXE/uTmyE9V6aM8/s800/job_waitress.png" style="width: 30%; float: left;">
< 当店のメニューはこちらです！

<ul>
    <li>ブレンドコーヒー</li>
    <li>カフェオレ</li>
    <li>ホイップパンケーキ</li>
    <li>フルーツパンケーキ</li>
</ul>

</section>
<section data-auto-animate>
<img src="https://2.bp.blogspot.com/-jYjhbgQhYiE/VYJcWv6lk3I/AAAAAAAAuXE/uTmyE9V6aM8/s800/job_waitress.png" style="width: 30%; float: left;">
< 当店のメニューはこちらです！

<ul>
    <li>ブレンドコーヒー</li>
    <li>カフェオレ</li>
    <li>ホイップパンケーキ</li>
    <li>フルーツパンケーキ</li>
</ul>

<p><span style="color: blue;">イテレート（繰り返し）</span>処理をしている</p>
</section>
<section>
実装

beforeディレクトリ
<pre><code>php before-01.php</code></pre>

</section>
---
<h2 class="text-center">後日……</h2>
---
店長
<img src="https://3.bp.blogspot.com/-28thHhkG_pQ/VYJcWJ14djI/AAAAAAAAuYI/eLF6N3eMC4M/s800/job_waiter.png" style="width: 30%; float: left; margin-top: 90px;">

今日から<span style="color: brown">ティーメニュー</span>始めるよ。

詳細は担当者に聞いてね！

---
ティーメニュー担当者

<img src="https://1.bp.blogspot.com/-Q9u4VxRhRh4/V-xthtC0pmI/AAAAAAAA-Jg/Yx2eO7wEK28XnXj__6iOMVzDQrBPpQolgCLcB/s800/job_barista_woman.png" style="width:35%; float: left;">

はい、これがメニューです。

<pre style="width: 70%; margin-left: 35%;"><code>
[
    ['ティー' => 'ダージリン'],
    ['ティー' => 'セイロン'],
    ['ハーブティー' => 'ローズヒップ'],
    ['ハーブティー' => 'カモミール'],
]
</code></pre>

え？配列の構造がおかしい？

適当になんとかしておいてください。

---
仕方ないので、実装
<pre><code>php before-02.php</code></pre>
---
<section data-auto-animate>
<p>だんだん依存が増えてきた。</p>

<p>なんとかならないか？</p>
</section>
<section data-auto-animate>
<p>だんだん依存が増えてきた。</p>

<p>なんとかならないか？</p>
<p>↓</p>
<h3>Iterator パターンを使って解決！</h3>
</section>
---
<section>
実装

iteratorディレクトリ
<pre><code>php Waitress.php</code></pre>
</section>
<section data-auto-animate>
<h2>実は……</h2>
</section>
<section data-auto-animate>
<h2>実は……</h2>
<p>Iterator では、ティーメニューのような構造の変化には対応できません！</p>
</section>
<section data-auto-animate>
<h2>実は……</h2>
<p>Iterator では、ティーメニューのような構造の変化には対応できません！</p>

ティーメニューを出力するには、<strong><span style="color: purple;">Compositeパターン</span></strong>を組み合わせる必要があります。
</section>
---
<section data-auto-animate>
<h3>Composite パターンとは？</h3>

</section>
<section data-auto-animate>
<h3>Composite パターンとは？</h3>

<p>オブジェクトをツリー構造で表現・処理するためのパターン。</p>

<small>composite: 複数の異なる要素、複合的な</small>
</section>
<section data-auto-animate>
<p>ツリー構造のイメージ</p>
<img src="https://www.techiedelight.com/wp-content/uploads/Print-Leaf-to-Root-Paths.png">
</section>
<section data-auto-animate>
<p>ツリー構造のイメージ</p>
<img src="https://www.techiedelight.com/wp-content/uploads/Print-Leaf-to-Root-Paths.png" style="float: left;">
<p>ルート: ①</p>

<p>リーフ: ④, ⑤など </p>

<p>ノード: 矢印（または構成要素）</p>

</section>

---
<section data-auto-animate>
<h3>Composite を使うと、何が嬉しいのか？</h3>
</section>
<section data-auto-animate>
<h3>Composite を使うと、何が嬉しいのか？</h3>
<p>呼び出し元は、データ構造や型を知らなくて良い！</p>
</section>
<section data-auto-animate>
<h3>Composite を使うと、何が嬉しいのか？</h3>
<p>呼び出し元は、データ構造や型を知らなくて良い！</p>
<p>（依存しなくて済む）</p>
</section>
---
<section data-auto-animate>
<h3>大まかな処理の流れ</h3>
<p>やりたいこと</p>
<p>→ すべてのリーフに対し処理を行いたい。</p>

<img src="https://www.techiedelight.com/wp-content/uploads/Print-Leaf-to-Root-Paths.png" style="width: 30%;">

</section>
<section data-auto-animate>
<h3>大まかな処理の流れ</h3>

<img src="https://www.techiedelight.com/wp-content/uploads/Print-Leaf-to-Root-Paths.png" style="width: 30%; float: left;">

<ol>
<li>そのノードが小ノードを持つかを判定</li>
<li>持つ場合は、小ノードで再度1.を実行</li>
<ul>
<li>持たない場合はコールバックを実行</li>
<li><small>↑リーフ</small></li>
<li>次のノードへ</li>
</ul>
</ol>
</section>
<section>
実装

iterator-and-composite ディレクトリ
<pre><code>php Waitress.php</code></pre>
</section>
---
<section data-auto-animate>
<h3>まとめ</h3>
</section>
<section data-auto-animate>
<h3>まとめ</h3>
<p><strong>Iterator</strong>: 繰り返し処理をするためのパターン</p>
</section>
<section data-auto-animate>
<h3>まとめ</h3>
<p><strong>Iterator</strong>: 繰り返し処理をするためのパターン</p>
<p><strong>Composite</strong>: ツリー構造を処理するためのパターン</p>
</section>
<section data-auto-animate>
<h3>まとめ</h3>
<p><strong>Iterator</strong>: 繰り返し処理をするためのパターン</p>
<p><strong>Composite</strong>: ツリー構造を処理するためのパターン</p>
<p>組み合わせると、どんな構造のデータも簡単に処理できる！</p>
</section>
---
<h3>おしまい</h3>

<img src="https://3.bp.blogspot.com/-nXH3RSnJnl4/Uku9bM6m3vI/AAAAAAAAYiY/fJeMyoTNauk/s800/tatemono_cafe.png">
