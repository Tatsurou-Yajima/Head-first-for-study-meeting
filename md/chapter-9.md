---
title: Iterator & Composite
theme: solarized
slideNumber: true

---
<style type="text/css"> .reveal h1, .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6 { text-transform: none; text-align: left;}
.reveal p {line-height: initial; text-align: left;}.text-center { text-align: center; } li {font-size: 0.9em; line-height: initial;} .reveal small {line-height: 2.3em}
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
<section data-auto-animate>
<h3>例えば？</h3>
<p>カフェでメニューを言う、という仕事をしている人がいます。</p>

<img src="https://2.bp.blogspot.com/-jYjhbgQhYiE/VYJcWv6lk3I/AAAAAAAAuXE/uTmyE9V6aM8/s800/job_waitress.png" style="width: 30%; float: left;">
</section>
<section data-auto-animate>
<img src="https://2.bp.blogspot.com/-jYjhbgQhYiE/VYJcWv6lk3I/AAAAAAAAuXE/uTmyE9V6aM8/s800/job_waitress.png" style="width: 30%; float: left;">
< 当店のメニューはこちらです！

<ul>
    <li>コーヒー</li>
    <ul>
        <li>ブレンドコーヒー</li>
        <li>カフェオレ</li>
    </ul>
    <li>パンケーキ</li>
    <ul>
        <li>ホイップパンケーキ</li>
        <li>フルーツパンケーキ</li>
    </ul>
</ul>

</section>
<section data-auto-animate>
<img src="https://2.bp.blogspot.com/-jYjhbgQhYiE/VYJcWv6lk3I/AAAAAAAAuXE/uTmyE9V6aM8/s800/job_waitress.png" style="width: 30%; float: left;">
< 当店のメニューはこちらです！

<ul>
    <li>コーヒー</li>
    <ul>
        <li>ブレンドコーヒー</li>
        <li>カフェオレ</li>
    </ul>
    <li>パンケーキ</li>
    <ul>
        <li>ホイップパンケーキ</li>
        <li>フルーツパンケーキ</li>
    </ul>
</ul>

<p><span style="color: blue;">イテレーター（繰り返し）</span>になっている</p>

</section>
---
## ……？
<code>foreach</code> でいいんじゃないの？

もしかして、**PHPでは不要？**
---
## いいえ！
下記のような

