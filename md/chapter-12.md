---
title: Compound パターン
theme: simple
slideNumber: true
---
<style type="text/css"> .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6 { text-transform: none; text-align: left;}
.reveal p {line-height: initial; text-align: left;}.text-center { text-align: center !important; } li {font-size: 0.9em; line-height: initial;} .reveal small {line-height: 2.3em}
.reveal pre {width: 100%} .reveal.slides{width: 100%}
</style>

<h1>Compound パターン</h1>

<p class="text-center">Head First デザインパターン 12章</p>

---
## Compound パターンとは？

複数のパターンをコンポーネントとして組み合わせることで、問題を解決しようとするパターン。

例として、**MVC**がある。

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

<p>ガチョウだけね。よろしく。</p>

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

<p>カモの作成はファクトリでやったほうがいいと思うよ！</p>

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

Compound パターン とは、

<span style="color: brown;">**デザインパターンを組み合わせて課題を解決する**</span>こと！

---

