---
title: Compound パターン
theme: simple
slideNumber: true
---
<style type="text/css"> .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6 { text-transform: none; text-align: left;}
.reveal p {line-height: initial; text-align: left;}.text-center { text-align: center !important; } li {font-size: 0.9em; line-height: initial;} .reveal small {line-height: 2.3em}
.reveal pre {width: 100%} .reveal.slides{width: 100%}
</style>

<h1>Compound</h1>
<h2 class="text-center">パターン</h2>

<p class="text-center">Head First デザインパターン 12章</p>

---

<section data-auto-animate>

## Compound パターンとは？

</section>

<section data-auto-animate>

## Compound パターンとは？

複数のパターンをコンポーネントとして組み合わせることで、問題を解決しようとするパターン。

例として、<strong style="color: red;">MVC</strong>がある。

</section>

---

### Compound = 化合物

<img src="https://cdn.ttgtmedia.com/rms/onlineimages/water_molecule-h.png">

Mixture(混合物)とは区別される。

化合物は化学反応によって結合＆分離可能。

---
<section data-auto-animate>

## デザインパターンを組み合わせる！

</section>
<section data-auto-animate>

## デザインパターンを組み合わせる！

例として、

<span style="color: brown">カモの鳴き声</span>を出力するシミュレータを作成する。

</section>
---

### デモ

<small>Head-first-for-study-meeting/sample/chapter-12/before</small>

```php:php
php before_01.php
```
---
<section data-auto-animate>

## 次の要望

</section>
<section data-auto-animate>

## 次の要望

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIHINjyTvQMOkZaZcuRBHp2CAWuGot_aoEeg&usqp=CAU" style="float: left; margin-top: 20px;">

<p style="margin-top: 10%">カモがいるなら、ガチョウもいるはずだよね？</p>

</section>
<section data-auto-animate>

## 次の要望

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIHINjyTvQMOkZaZcuRBHp2CAWuGot_aoEeg&usqp=CAU" style="float: left; margin-top: 20px;">

<p style="margin-top: 10%">カモがいるなら、ガチョウもいるはずだよね？</p>

ガチョウはカモとは<span style="color: red;">鳴き方が違う</span>けど、なんとかしてね。

</section>

---

### デモ（Adapter パターン）

<small>Head-first-for-study-meeting/sample/chapter-12/before</small>

```php:php
php before_02.php
```
---

<section data-auto-animate>

## さらなる要望

</section>
<section data-auto-animate>

## さらなる要望

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIHINjyTvQMOkZaZcuRBHp2CAWuGot_aoEeg&usqp=CAU" style="float: left; margin-top: 20px;">

<p style="margin-top: 10%">鳴き声のカウントを出してくれない？</p>

</section>
<section data-auto-animate>

## さらなる要望

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIHINjyTvQMOkZaZcuRBHp2CAWuGot_aoEeg&usqp=CAU" style="float: left; margin-top: 20px;">

<p style="margin-top: 10%">鳴き声のカウントを出してくれない？</p>

<p>カモだけね。よろしく。</p>

</section>

---

### デモ（Decorator パターン）

<small>Head-first-for-study-meeting/sample/chapter-12/before</small>

```php:php
php before_03.php
```
---
<section data-auto-animate>

## さらに要望

</section>
<section data-auto-animate>

## さらに要望

<img src="https://mikaduki.info/wp-content/uploads/2019/11/businessman_dekiru.png"  style="float: left; margin-top: 20px;">

</section>
<section data-auto-animate>

## さらに要望

<img src="https://mikaduki.info/wp-content/uploads/2019/11/businessman_dekiru.png"  style="float: left; margin-top: 20px;">

<p style="margin-top: 10%;">カモの作成はファクトリでやったほうがいいと思うよ！</p>

<p><span style="color: blue">カプセル化</span>しよう！</p>

</section>

---

### デモ（Abstract Factoryパターン）

<small>Head-first-for-study-meeting/sample/chapter-12/before</small>

```php:php
php before_04.php
```

---

<section data-auto-animate>

## 次の要望

</section>
<section data-auto-animate>

## 次の要望

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIHINjyTvQMOkZaZcuRBHp2CAWuGot_aoEeg&usqp=CAU" style="float: left; margin-top: 20px;">

<p style="margin-top: 10%">なんか、カモの管理が面倒になってきたよ。</p>

</section>
<section data-auto-animate>

## 次の要望

<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTIHINjyTvQMOkZaZcuRBHp2CAWuGot_aoEeg&usqp=CAU" style="float: left; margin-top: 20px;">

<p style="margin-top: 10%">なんか、カモの管理が面倒になってきたよ。</p>

<p>なんとかして、管理を楽にしてくれない？</p>

</section>

---

### デモ（Composite パターン）

<small>Head-first-for-study-meeting/sample/chapter-12/before</small>

```php:php
php before_05.php
```

---

### Compound パターン とは、

<span style="color: brown;">**デザインパターンを組み合わせて課題を解決する**</span>こと！

---

<section data-auto-animate>

<h3 class="text-center">Compound パターンを使った例として、<strong style="color: red;">MVC</strong>がある。</h3>

</section>
<section data-auto-animate>

<h3 class="text-center">Compound パターンを使った例として、<strong style="color: red;">MVC</strong>がある。</h3>

- <span style="color: red">M</span> : Model
    - データ、ロジックなど


- <span style="color: red">V</span> : View
    - ユーザーに画面を表示し、入力を受け取る

- <span style="color: red">C</span> : Controller
    - View と Model をつなぐ

</section>

---

<section data-auto-animate>

## デザインパターンの使用例

</section>

<section data-auto-animate>

### Strategyパターン

<img src="https://cdn-ak.f.st-hatena.com/images/fotolife/Y/Yazmatto/20230130/20230130204920.png">

</section>

<section data-auto-animate>

### Observerパターン

<img src="https://cdn-ak.f.st-hatena.com/images/fotolife/Y/Yazmatto/20230130/20230130205940.png">

</section>

<section data-auto-animate>

### Compositeパターン

<img src="https://cdn-ak.f.st-hatena.com/images/fotolife/Y/Yazmatto/20230130/20230130210140.png">

</section>

---

<section data-auto-animate>

## まとめ

</section>

<section data-auto-animate>

## まとめ

<span style="color:brown">Compound パターン</span>とは、複数のデザインパターンを組み合わせて課題を解決するデザインパターンである。

</section>

<section data-auto-animate>

## まとめ

<span style="color:brown">Compound パターン</span>とは、複数のデザインパターンを組み合わせて課題を解決するデザインパターンである。

Webフレームワークでおなじみの<span style="color:red">MVC</span>にも取り入れられている。

</section>
---

## 感想
何気なく使っていたMVCにも、デザインパターンが取り入れられていたと知って驚いた。

Java → PHP は、ChatGPTにやってもらったので楽だった✌️

```
in PHP

Javaのコード
```

---

おしまい

<img src="https://cdn.ttgtmedia.com/rms/onlineimages/water_molecule-h.png">
