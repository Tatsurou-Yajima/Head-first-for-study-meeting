---
title: Iterator & Composite
theme: solarized
slideNumber: true

---
<style type="text/css"> .reveal h1, .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6 { text-transform: none; text-align: left;}
.reveal p {line-height: initial; text-align: left;}.text-center { text-align: center !important; } li {font-size: 0.9em; line-height: initial;} .reveal small {line-height: 2.3em}
.reveal pre {width: 100%}
</style>
# Iterator & Composite
Head First デザインパターン 9章
---
## Iterator パターンとは？

コンテナオブジェクトの要素を列挙する手段を独立させることによって、コンテナの内部仕様に依存しない反復子を提供することを目的とする。

<small>[https://ja.wikipedia.org/wiki/Iterator_パターン](https://ja.wikipedia.org/wiki/Iterator_%E3%83%91%E3%82%BF%E3%83%BC%E3%83%B3)</small>

---
## どういう時に使う？
**要素を一つ一つ取り出す処理** を実装する時に使います。

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

<p><span style="color: blue;">イテレーター（繰り返し）</span>になっている</p>
</section>
<section>
実装

<pre><code>php chapter-9-before-01.php</code></pre>

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
<pre><code>php chapter-9-before-02.php</code></pre>
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
