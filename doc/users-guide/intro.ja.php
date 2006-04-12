<?
$title = "ユーザーガイド - はじめに";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2006/04/12 00:08:22';
$metatags = '<link rel="contents" href="index.php?phpLang=ja" title="ユーザーガイド Contents"><link rel="next" href="install.php?phpLang=ja" title="初めてのインストール"><link rel="prev" href="index.php?phpLang=ja" title="ユーザーガイド Contents">';


include_once "header.ja.inc";
?>
<h1>ユーザーガイド - 1. はじめに</h1>


<h2><a name="what">1.1 Fink とは何ですか?</a></h2>

<p>
Fink は Unix オープンソース・ソフトウェアを Mac OS X と Darwin 向けに提供するものです。
Linux や同様のオペレーティングシステム向けに開発された、たくさんのコマンドラインやグラフィカルなフリーソフトウェアを Mac で使えるようにするものです。
</p>

<h2><a name="req">1.2 必要条件</a></h2>

<p>
必須:
</p>
<ul>
<li>
<p>
インストール済みの Mac OS X システム、バージョン 10.2 またはそれ以降、あるいは同等の Darwin リリース。
これより前のバージョンでは<b>動作しなくなります</b>。
サポート対象システムの詳細は、以下を御覧ください。
</p>
</li>
<li>
<p>
インターネット接続。
ソースコードとバイナリの両方とも、インターネットのダウンロードサイトからダウンロードされます。
</p>
</li>
</ul>
<p>
ソースディストリビューション (下記参照) を使用する場合、以下も必要です:
</p>
<ul>
<li>
<p>
Developer tools。
Mac OS X では、Developer Tools (10.3 と 10.4 では XCode) CD 
(10.4 では DVD) から、あるいは
最新版を<a href="http://connect.apple.com">ダウンロード</a>して、 
Developer.pkg をインストールします。
最新版のダウンロードの方が、様々な課題を修正しているので望ましいです
(時々、何かが壊れていることもありますが)。
ツールは、 Mac OS X のバージョンと合ったものを使用してください。
Darwin 場では、デフォルトインストールでツールがインストールされます。
</p>
<p>
ソースからパッケージをビルドする予定がなくても、 Developer Tools をインストールしておくと良いでしょう。
パッケージがインストールするプログラムの中には、一般的なコマンドラインツールもありますし、パッケージによっては必要なこともあります。
</p>
</li>
<li>
<p>
忍耐。
大きなパッケージをコンパイルするのは時間がかかります。
ここでいう時間は、文字通り数時間から数日かかることもあります。
</p>
</li>
</ul>

<h2><a name="supported-os">1.3 サポートされているシステム</a></h2>

<p>
<b>Mac OS X 10.4</b> は、最新のプラットフォームで、<q>完全にサポートとテストされている</q>と考えられますが、
新しいオペレーティングシステムとして課題も残っています。
開発者のほとんどはこれを用い、10.3 を使用している人は 10.4 ユーザーにテストしてもらっています。
</p>
<p>
<b>Mac OS X 10.3</b> は、最新のプラットフォームで、<q>完全にサポートとテストされている</q>と考えられますが、
パッケージに酔ってはコンパイルに問題があるものもあります。
多くの開発者はこれを使用しますが、所有していない場合は 10.3 ユーザーにテストをしてもらっています。
</p>
<p>
<b>Mac OS X 10.2</b> は、現在でも制限付きでサポートされています。
Fink 0.6.4 が使用できる最新バージョンです。
</p>
<p>
<b>Mac OS X 10.1</b> は、現在でも制限付きでサポートされています。
Fink 0.4.1 が使用できる最新バージョンです。
</p>
<p>
<b>Darwin 8.x</b> が Mac OS X 10.4 に、 <b>Darwin 7.x</b> が Mac OS X 10.3 に、 <b>Darwin 6.x</b> が Mac OS X 10.2 相当する Darwin のバージョンです。
基本的には動作するはずですが、ほとんどの人は Mac OS X を使用しているので、テストされていません。
Mac OS X 固有の機能を使っているパッケージでは問題が発生するかも知れません。
影響するパッケージは、 XFree86 と、おそらく esound です。
</p>

<h2><a name="src-vs-bin">1.4 ソース vs. バイナリ</a></h2>

<p>
ソフトウェアは、人間が読めるプログラム言語で書かれて ("開発されて") います。
この形式は "ソースコード" と呼ばれるもので、低レベルの (大抵の人間は読めない) コンピュータが実行するには、これを機械語に変換する必要があります。
このプロセスは "コンパイル" といい、できたものを "実行可能ファイル" や "バイナリ"といいます。
(このプロセスは、コンパイル以外のステップも含むので、ビルドと呼ぶこともあります)
</p>
<p>
商業用ソフトウェアを購入する際はソースコードを見ることはありません。
企業は秘密として扱っています。
入手するのは実行可能ファイルだけですので、プログラムを変更することや、実行時に何が起こっているのか知ることはできません。
</p>
<p>
これは <a href="http://www.opensource.org/">オープンソース</a> の場合は当てはまりません。
名称が示すように、ソースコードは公開されていて、読むことも変更することも可能です。
事実、ほとんどのオープンソース・ソフトウェアは、作者からはソースコードの形式で配布されているだけで、実行するには自分のコンピュータ上でコンパイルする必要があります。
</p>
<p>
Fink では、二つの選択肢があります。
" ソース " ディストリビューションでは元のソースをダウンロードし、 Mac OS X と Fink ポリシーに対応させてコンパイルします。
このプロセスは全て自動的に実行されますが、多少時間がかかります。
他方、 " バイナリ " ディストリビューションでは、コンパイル済みのパッケージを Fink サイトからダウンロードし、インストールします。
コンパイルに要する時間を節約できます。
この二つを組み合わせることも可能です。
このマニュアルでは、両方の使用方法について説明します。
</p>

<p align="right"><? echo FINK_NEXT ; ?>:
<a href="install.php?phpLang=ja">2. 初めてのインストール</a></p>
<? include_once "../../footer.inc"; ?>


