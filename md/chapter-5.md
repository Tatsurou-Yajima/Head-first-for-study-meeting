---
title: Singletonパターン
theme: solarized
slideNumber: true

---
<style type="text/css"> .reveal h1, .reveal h2, .reveal h3, .reveal h4, .reveal h5, .reveal h6 { text-transform: none; }
.reveal p {line-height: initial;}.text-left { text-align: left; } li {font-size: 0.8em; line-height: initial;} .reveal small {line-height: 2.3em}
.reveal pre {width: 100%}
</style>

# Singleton
Head First デザインパターン 5章
---
<section data-auto-animate>
    <h2>Singleton とは？</h2>
</section>
<section data-auto-animate>
    <h2>Singleton とは？</h2>
    <p class="text-left"><strong>インスタンスを一つしか持たない</strong>ことを保証し、そのインスタンスにアクセスするグローバルポイントを提供するデザインパターン</p>
</section>
<section data-auto-animate>
    <h2>Singleton とは？</h2>
    <p class="text-left"><strong>インスタンスを一つしか持たない</strong>ことを保証し、そのインスタンスにアクセスするグローバルポイントを提供するデザインパターン</p>
    <p class="text-left">アプリ全体で統一しなければならない仕組みの実装に使われる。</p>
</section>
---
<section data-auto-animate>
    <h2>どういう時に使う？</h2>
</section>
<section data-auto-animate>
    <h2>どういう時に使う？</h2>
    <ul>
    <li>キャッシュ</li>
    <li>設定などの共通処理を行うオブジェクト</li>
    <li>バリデーションオブジェクト（Validator - Go）</li>
</section>

---

<h2>Singletonの実装</h2>
<section>
    <pre class="php"><code data-trim data-line-numbers data-noescape>
<?php

class Singleton
{
    private static $singleton;
    // new Singleton()でインスタンスを作成できないよう、アクセス修飾子はprivateにする
    private function __construct()
    {
    }
    // このstaticメソッドで、Singletonクラスのインスタンスを作成する
    public static function getInstance(): Singleton
    {
        if (self::$singleton == null) {
            self::$singleton = new Singleton();
        }
        return self::$singleton;
    }
    // インスタンスのクローンを許可しないようにする
    final function __clone()
    {
        throw new \Exception(sprintf('Clone is not allowed: %s', get_class($this)));
    }
    }

</code>
</pre>
</section>

<section class="text-left">
呼び出し側
<pre class="php"><code>$instance = Singleton::getInstance();
</code></pre>

<small>参考：PHPでデザインパターン【Singleton】</small>
<small>https://qiita.com/u_d/items/a8deda46e2aba0722b5c</small>
</section>
---
## まとめ

- Singletonとは、あるクラスのインスタンスを一つだけ持つことを保証するデザインパターン
- そのインスタンスには、どこからでもアクセスできる
  - <small>（グローバルアクセスポイント）</small>

---
書籍の内容は以上です。

ここからは余談。
---
<section data-auto-animate>
    <h3>Singletonは使わない方が良い！</h3>
</section>

<section data-auto-animate>
<h3>Singletonは使わない方が良い！</h3>

<br>

fukabori.fm

<small>48. GoFデザインパターンとDI(前編)</small>

<small>t_wada氏</small>
<small>https://podcasts.apple.com/jp/podcast/fukabori-fm/id1388826609?i=1000521072533</small>
</section>
---
## Q. なぜSingletonは使わない方が良いのか？
---
### A. Singletonは実質的に「グローバル変数」だから。
---
<section class="text-left">
基本的にグローバル変数は避けるべき。

なぜなら、実装時に<strong>意識しなくてはならない要素が増える</strong>から。
</section>

<section class="text-left">
<h3>グローバル変数を避けるべき理由</h3>
</section>

<section class="text-left">

<strong>理由1. 常にグローバル変数を意識しておかなければならないから。</strong>

変数名が被っていないか？など、気を付ける必要がある。
</section>

<section class="text-left">
<strong>理由2. 思わぬ依存関係が生まれてしまうから。</strong>

ある箇所に変更を加えると、全く無関係（に思える）場所に不具合が発生する可能性がある。

</section>
<section class="text-left">

<strong>理由3. テストと相性が悪いから。</strong>

テスト間で依存関係が生まれてしまう。

</section>
<section class="text-left">
<h3>余談の余談</h3>
そもそも、プロセス内で単一インスタンスにしても意味がない。

ほとんどの場合、我々は単一プロセスに対してプログラミングをしない。

別のコンテナに対するアクセスなども当然のように行っている。

よって、基本的にSingletonを使う必要はありません。

</section>
<section>
では、どうすべきか？
</section>
<section>

<h3>DIを使いましょう！</h3>

</section>

<section class="text-left">

Singletonは、すべてのコードがSingletonインスタンスを探しに行く必要がある。

DIを使えば、「なぜかそこにインスタンスが用意されている」状況を作り出せる。
</section>

<section class="text-left">

<strong>Singleton</strong>

例えば、「クライアントからキャッシュオブジェクトを参照する」という実装。

<strong>昔（Singleton）</strong>

クライアント → キャッシュ

<small>クライアントは、なんとかしてキャッシュオブジェクトを見つけてから使わなくてはならない。</small>
</section>
<section class="text-left">
<strong>現在（DI）</strong>

クライアント <span style="color:red;">←</span> キャッシュ

<small>クライアントは、DIによってキャッシュオブジェクトを渡してもらえる。</small>

<small>テスト時は、同一インターフェースのモックオブジェクトを使用すればよい。</small>
</section>
---
<section>
<h3>結論</h3>
<p class="text-left">現代の開発においては、SingletonよりもDIを使いましょう！</p>
</span>
---
ご静聴ありがとうございました。
