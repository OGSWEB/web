<?
$title = "パッケージ作成 - ポリシー";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2008/06/15 05:49:48';
$metatags = '<link rel="contents" href="index.php?phpLang=ja" title="パッケージ作成 Contents"><link rel="next" href="fslayout.php?phpLang=ja" title="ファイルシステムのレイアウト"><link rel="prev" href="format.php?phpLang=ja" title="パッケージ記述">';


include_once "header.ja.inc";
?>
<h1>パッケージ作成 - 3. パッケージ化ポリシー</h1>
		
		
		<h2><a name="licenses">3.1 パッケージのライセンス</a></h2>
			
			<p>
				Fink に含まれるパッケージのライセンスは多岐に渡ります．
				大部分は，ソース全体の再配布と，特に実行可能ファイルの配布に何らかの制限を課します．
				パッケージの中には，ライセンスのために Fink でバイナリ配布を行えないものもあります．
				そのため，パッケージのメンテナがライセンスを注意深くチェックすることが大変に重要です．
			</p>
			<p>
				バイナリ・パッケージとして配布される全てのパッケージは，ライセンスのコピーも含んでいなければいけません．
				ライセンスは doc ディレクトリすなわち <code>%p/share/doc/%n</code> にインストールされます．
				(InstallScript では，当然ながら %p でなく %i を使う必要があります．
				フィールド DocFiles ににより細部は自動的に処理されます．)
				元のソースに明示的なライセンスが存在しない場合，パッケージの状態を記した短いテキストを代わりとします．
				大半のライセンスは，ライセンスが配布物に必ず含まれるよう定めています．
				Finkのポリシーは「ライセンスを含めるよう明示的に要求されなくとも，常にライセンスを含める」ことです．
			</p>
			<p>
				バイナリディストリビューションのメンテナンスを自動化するため，
				配布されるどのパッケージにもフィールド <code>License</code> がなければいけません．
				このフィールドはライセンスの性質に関するもので，
				当該パッケージをバイナリディストリビューションに含めるかどうかを決定する際に参照されます．
				このフィールドは実際のライセンス条項が上記のようにバイナリパッケージに含まれているときのみ存在できます．
			</p>
			<p>
				フィールド License を有効に使用するため，値は以下の既定の選択肢からのみ選べます．
				下記の選択肢に当てはまらないパッケージの場合，開発用メーリングリストへ質問を投げかけて下さい．
			</p>
			<ul>
				<li>
					<code>GPL</code> - GNU General Public License．
					ソースがバイナリと同じ場所から入手できる必要がある．
				</li>
				<li>
					<code>LGPL</code> - GNU Lesser General Public License．
					ソースがバイナリと同じ場所から入手できる必要がある．
				</li>
				<li>
					<code>GPL/LGPL</code> -
					これは特殊な場合で，パッケージの一部 (実行可能プログラムなど) が GPL で，
					別の部分 (ライブラリなど) が LGPL になっているパッケージ．
				</li>
				<li>
					<code>BSD</code>  -
					BSD形式のライセンス．
					これには，いわゆる「オリジナル」 BSD ライセンス，「修正」 BSD ライセンスおよび MIT ライセンスが含まれる．
					The Apache lisence もこの一種とみなす．
					ソースコードを配布することは必須でない．
				</li>
				<li>
					<code>Artistic</code> -
					The Artistic lisence 及びその派生型．
				</li>
				<li>
					<code>Artistic/GPL</code> -
					The Artistic lisence と GPL のデュアルライセンス．
				</li>
				<li>
					<code>GNU Free Documentation License</code> および <code>Linux Documentation Project</code> -
					付属ドキュメントが明示的にこのライセンスのどちらかを採用している場合，
					値に <code>/GFDL</code> と <code>/LDP</code> のいずれか，または両方を後置する．
					結果として以下の組合せが可能: "GFDL", "GPL/GFDL", "LGPL/GFDL", "GPL/LGPL/GFDL",
					"LDP", "GPL/LGPL/LDP".
				</li>
				<li>
					<code>DFSG-Approved</code> - 
					<a href="http://www.debian.org/social_contract.ja.html">Debian 社会契約</a> のガイドラインに沿ったソフトウェア
				</li>
				<li>
					<code>OSI-Approved</code> -
					<a href="http://www.opensource.org/">Open Source Initiative</a> が承認した，その他の Open Source ライセンス．
					OSI はバイナリとソースの自由な配布を許可するよう要求しています．
					デュアルライセンスのパッケージにとりあえずこの選択肢を選ぶこともできます．
				</li>
				<li>
					<code>Restrictive</code> -
					制限付きのライセンス．
					作者からソース形式で free use のために入手できるが，free redistribution は許可されないパッケージに使う．
				</li>
				<li>
					<code>Restrictive/Distributable</code> -
					ソースとバイナリの配布を許可するが制限のあるライセンス．
					当該パッケージが作者からソース形式で入手でき，ソースとバイナリの配布も許可されているが，
					Open Source ライセンスと認められない制限がある場合に使う．
				</li>
				<li>
					<code>Commercial</code> -
					制限付きの商用ライセンス．
					ソースやバイナリの自由な再配布を許可しない商用パッケージ (フリーウェアやシェアウェアなど) に使う．
				</li>
				<li>
					<code>Public Domain</code> -
					パブリックドメインの，すなわち作者がコードに対するコピーライトを放棄したパッケージ．
					この場合，パッケージにはライセンスが存在せず，だれが何をしても良い．
				</li>
			</ul>
		
		<h2><a name="openssl">3.2 GPL と OpenSSL</a></h2>
			<p>
				(2005年４月より施行)
			</p>
			<p>
				OpenSSL ライセンスが GPL と LPGL ライセンスが明らかに整合性を欠いていることから，
				openssl にリンクをしている fink パッケージのうち， GPL または LGPL ライセンスを使用しているものは
				"Restrictive" となります．
				Fink プロジェクトはこれらのパッケージをバイナリ配布しないことになるが，利用者は自己判断でコンパイルすることができます．				
			</p>
			<p>
				パッケージメンテナは，元のパッケージライセンスを <code>DescPackaging</code> に記述してください．
			</p>
		
		<h2><a name="prefix">3.3 基盤システムへの干渉問題</a></h2>
			
			<p>
				Finkは基盤システムから分離したディレクトリにインストールされるアドオン・ディストリビューションです．
				パッケージは Fink のディレクトリ外にファイルをインストールしてはしてはいけません．
			</p>
			<p>
				この決まりを破る他に仕方がないときには例外が設けられます (XFree86 など)．
				この場合，パッケージはインストール前に既存のファイルを調べ，上書きの恐れがある場合はインストールを中止する必要があります．
				そのようなパッケージは， Fink ディレクトリ外にインストールしたファイルはそのパッケージが取り除かれるときに全て削除されること，
				あるいはそのようなファイルは残しても問題がないことを保証しなければいけません
				(すなわち，実行可能ファイルを呼び出す前にそれが存在するかどうか調べるなどする必要があります)．
			</p>
		
		<h2><a name="sharedlibs">3.4 共有ライブラリ</a></h2>
			
			<p>
				Fink は共有ライブラリに関して新しいポリシーを定め， 2002 年 2 月から施行しています．
				以下では Fink 0.5.0 と共に公布された，共有ライブラリについてのポリシー第 4 版

as modified in December, 2006 to handle 64bit libraries
and from January, 2008 to handle private shared libraries. (In addition,
the discussion was updated in June, 2008 to eliminate obsolete references to a
transitional period for implementing the shared libraries policy.)
We begin with a quick summary, and then discuss things in more detail.

				最初に要点をかいつまんで述べ，後から詳細に移ります．
			</p>
			<p>
				共有ライブラリをビルドするパッケージは，
				Fink ポリシーに従って共有ライブラリを扱う必要があります．
				すなわち以下の約束に従わなければいけません．
			</p>
			<ul>
				<li>
					コマンド <code>otool -L</code> (64bit ライブラリの場合は otool64 -L) を使い，各ライブラリの install_name ，互換性，バージョンが適切か確認する．
				</li>
				<li>
					共有ライブラリを別パッケージとし (例外は libfoo.dylib から install_name へのリンク) ，
					さらに，そうしてできた別パッケージにフィールド <code>Shlibs</code> を設ける．
				</li>
				<li>
					ヘッダと， libfoo.dylib からの最終的リンクを <code>BuildDependsOnly: True</code> となっているパッケージに入れ，
					他のパッケージが一切そのパッケージに依存しないようにする．
				</li>
			</ul>
<p>Note that a package may also install private shared libraries, which
are not intended to be linked from any other package.  In this case, the
libraries need not go into a separate package, but a <code>Shlibs</code>
field must still be part of the package containing shared libraries.  Also,
maintainers should try to avoid storing a final link from libfoo.dylib
in the main library directory <code>%i/lib</code> 
(or its 64-bit equivalent), to prevent
other programs from accidentally linking to this library.
</p>
			<p>
				このポリシーに反し，パッケージを分割しない場合には，フィールド <code>DescPackaging</code> に理由を記述しなければいけません．
			</p>
			<p>
				パッケージによっては，主パッケージと -shlib パッケージを作成するだけで済みます．
				しかしさらに別のパッケージが必要な場合もあります．
				新設されたフィールド <code>SplitOff</code> を使うとこの作業の手間が省けます．
			</p>
			<p>
				3つのパッケージに分ける必要があるとき，それらの命名法は，
				パッケージの実質的な中身がライブラリなのか (選択肢 1) 実行可能プログラムなのか (選択肢 2) によって変わります．
				選択肢 1 では次の構成を使います．
			</p>
			<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Package</th><th align="left">Contents</th></tr><tr valign="top"><td>
						<code>foo-shlibs</code>
					</td><td>
						<p>共有ライブラリ</p>
					</td></tr><tr valign="top"><td>
						<code>foo</code>
					</td><td>
						<p>ヘッダ</p>
					</td></tr><tr valign="top"><td>
						<code>foo-bin</code>
					</td><td>
						<p>実行可能プログラムなど</p>
					</td></tr></table>
			<p>
				選択肢 2 では次の構成を使います．
			</p>
			<table border="0" cellpadding="0" cellspacing="10"><tr valign="bottom"><th align="left">Package</th><th align="left">Contents</th></tr><tr valign="top"><td>
						<code>foo-shlibs</code>
					</td><td>
						<p>共有ライブラリ</p>
					</td></tr><tr valign="top"><td>
						<code>foo-dev</code>
					</td><td>
						<p>ヘッダ</p>
					</td></tr><tr valign="top"><td>
						<code>foo</code>
					</td><td>
						<p>実行可能プログラムなど</p>
					</td></tr></table>
			<p>
				<b>詳細なポリシー</b>
			</p>
			<p>
				以下ではさらに詳しく解説します．
				ポリシーが実際に適用された例としては Fink パッケージ libpng, libjpeg や libtiff を参照して下さい．
			</p>
			<p>
				Darwin にポートされたソフトウェアは可能な限り共有ライブラリをビルドしなければいけません．
				(パッケージメンテナが，必要に応じて共有ライブラリの他に静的ライブラリもビルドすることは自由です．
				または，静的ライブラリのみを含むパッケージを登録することも問題ありません．)
				他のパッケージで使われると想定される共有ライブラリをビルドする場合，<b>ふたつの</b>相互関連する Fink パッケージを作成しなければいけません．
				それらの名称は例えば foo と foo-shlibs となります．
				共有ライブラリは foo-shlibs に，ヘッダは foo に入ります．
				これら 2 つのパッケージを単一の .info ファイルから作れます．
				それには後述のフィールド <code>SplitOff</code> を使います．
				(現実には3つ以上のパッケージに分割する必要がある場合も多いですが，
				この場合は <code>SplitOff2</code>, <code>SplitOff3</code> などを使えばだいじょうぶです．)
			</p>
			<p>
				

Each software package for which public shared libraries are built must have
a <b>major version number</b> N, which is included in the shared
library's filename (for example, <code>libbar.N.dylib</code>).

				「メジャーバージョン」は，ライブラリの API にパッケージ間で非互換な変更が加えられたときのみ変わることになっています．
				Fink では，名称は以下の要領で作成されます．
				すなわち， upstream パッケージ名が bar なら，そのFinkパッケージの名前は barN と barN-shlibs になります．
				(この規則が厳密に適用されるのは新規に作られるパッケージと「メジャーバージョン」が変わったパッケージのみです．)
				例えば既存の Fink パッケージ libpng の「メジャーバージョン」は 2 でしたが，最近， 3 に変わりました．
				そこで当面は libpng に関わる Fink パッケージは4種類あることになります:
				libpng, libpng-shlibs, libpng3, libpng3-shlibs です．
				libpng と libpng3 はどちらか片方しか同時にインストールできませんが，
				libpng-shlibs と libpng3-shlibs は同時にインストールできます．
				(これら 4 つのパッケージのビルドに必要な .info ファイルは 2 つだけであることに注意してください．)
			</p>
			<p>
				共有ライブラリ自身とそれに関わるファイルは，パッケージ barN-shlibs に入ります．
				また「インクルード」ファイルとその他のファイルはパッケージ barN に入ります．
				これら 2 つに重複して含まれるファイルがあってはならず，また barN-shlibs に含まれるどのファイルのパス名にも，
				何らかの形で「メジャーバージョン」 N が含まれなくてはいけません．
				多くの場合，パッケージは，典型的には <code>%i/lib/bar</code> や
				<code>%i/share/bar/</code> にインストールされるようなファイルを実行時に必要とします．
				そのときはインストール先パスを <code>%i/lib/bar/N</code> や
				<code>%i/share/bar/N/</code> に修正しなければいけません．
			</p>
			<p>
				「メジャーバージョン」が N であるようなパッケージ bar に依存するパッケージは，全て次の依存情報を使うことになります．
			</p>
<pre>
Depends: barN-shlibs
BuildDepends: barN
</pre>
<p>
It is not be permitted for 
another package to depend on barN itself.  (Although there may still be
a few such dependencies involving packages which were in place prior to 
February, 2002.)  This is
signaled to other developers by a boolean field
</p>
<pre>
BuildDependsOnly: True
</pre>
			<p>
				共有ライブラリと実行可能プログラムの両方を含むパッケージの場合，実行可能プログラムが (ビルド時だけでなく) 実行時に必要であれば，
				それらの実行可能プログラムは barN-bin という名の第 3 のパッケージに分離されます．
				他のパッケージが barN-shlibs の他に barN-bin に依存しても構いません．
			</p>
			<p>
				「メジャーバージョン」が N の共有ライブラリをビルドするとき，その共有ライブラリの "install_name" が
				<code>%p/lib/libbar.N.dylib</code> になることが重要です．
				(install_name は，ライブラリに対し <code>otool -L</code>，64bit ライブラリの場合は <code>otool64 -L</code> を実行すれば分かります．)
				実際のライブラリファイルのインストール先は，
			</p>
<pre>
%i/lib/libbar.N.x.y.dylib
</pre>
			<p>
				でなければならず，パッケージ側では次のようにシンボリックリンクを貼らなければいけません．
			</p>
<pre>
%i/lib/libbar.N.dylib -&gt; %p/lib/libbar.N.x.y.dylib
%i/lib/libbar.dylib -&gt; %p/lib/libbar.N.x.y.dylib
</pre>
<p>from the install_name path and from the linking path to the actual
library.  (The first will not be needed if the library is in fact
installed at the install_name path, which is becoming more common.)
</p>
			<p>
				静的ライブラリもビルドする場合，次の場所にインストールされることになります．
			</p>
<pre>
%i/lib/libbar.a
</pre>
			<p>
				パッケージが libtool を利用する場合，上記のことはほぼ自動的に処理されますが，
				どの段階でも処理が適切に行われたか確認する必要があります．
				また，共有ライブラリの current_version と compatibility_version が適切に定義されているかどうかも確認して下さい．
				(これらも <code>otool -L</code> または 64bit ライブラリの場合 <code>otool64 -L</code> で表示されます．)
			</p>
			<p>
				次に，ファイルを以下のように 2 つのパッケージに分類します．
			</p>
			<ul>
				<li>パッケージ barN-shlibs:
<pre>
%i/lib/libbar.N.x.y.dylib
%i/lib/libbar.N.dylib -&gt; %p/lib/libbar.N.x.y.dylib
%i/lib/bar/N/*
%i/share/bar/N/*
%i/share/doc/barN-shlibs/*
</pre>
				</li>
				<li>パッケージ barN:
<pre>
%i/include/*
%i/lib/libbar.dylib -&gt; %p/lib/libbar.N.x.y.dylib
%i/lib/libbar.a
%i/share/doc/barN/*
必要に応じて，他のファイルも含める
</pre>
				</li>
			</ul>
			<p>
				どちらのパッケージにもライセンスに関する何らかの文書が必要ですが，それらを格納するディレクトリは異なることに注意して下さい．
			</p>
			<p>
				このことはフィールド <code>SplitOff</code> を使えば実際には非常に簡単です．
				以下に上の例を実現するためにどのように記述するか (の一部) を示します．
			</p>
<pre>
Package: barN
Version: N.x.y
Revision: 1
License: GPL
Depends: barN-shlibs (= %v-%r)
BuildDependsOnly: True
DocFiles: COPYING
SplitOff: &lt;&lt;
  Package: barN-shlibs
  Files: lib/libbar.N.x.y.dylib lib/libbar.N.dylib lib/bar/N
  DocFiles: COPYING
&lt;&lt;
</pre>
			<p>
				フィールド <code>SplitOff</code> の処理により，指定されたファイルとディレクトリが，
				メインパッケージのインストールディレクトリ %I から splitoff パッケージのインストールディレクトリ %i に移動します．
				(これは命名法とも似ています．
				すなわち，%N がメインパッケージの「パッケージ名」で，%n が splitoff パッケージの「パッケージ名」でしたね．)
				次に <code>DocFiles</code> によりドキュメントファイルが <code>%i/share/doc/barN-shlibs</code> にコピーされます．
			</p>
			<p>
				barN-shlibs の正確な「バージョン」 (これは "%N-shlibs (= %v-%r)" と略記できます)
				を親パッケージ barN の依存情報に含めたことに注意して下さい．
				これにより「バージョン」が確かに適合するようになり，
				さらにパッケージ barN がパッケージ barN-shlibs の依存情報を自動的に「継承する」ことを保証します．
			</p>
			<p><b>フィールド BuildDependsOnly:</b></p>
			<p>
				ライブラリがアップグレードされる場合，移行期に二つのバージョンのヘッダファイルが必要になる時もあるでしょう．
				一つのバージョンはコンパイル時に使われ，もう一つは他のコンパイルに使われるような場合です．
				このため，ヘッダファイルを含むパッケージの作成には注意が必要となります．
				foo-dev と bar-dev が重複するヘッダを含む場合， foo-dev で，
			</p>
<pre>
   Conflicts: bar-dev
   Replaces: bar-dev
</pre>
			<p>
				と宣言し，同様に bar-dev では foo-dev を Conflicts/Replaces として宣言します．
			</p>
			<p>
				さらに，両方のパッケージで
			</p>
<pre>
   BuildDependsOnly: True 
</pre>
			<p>
				を宣言します．
				これにより，foo-dev または bar-dev に依存してパッケージを記述することを防ぐことができます．
				このような依存性が Conflicts/Replaces 手段を実行することを防ぐためです．
			</p>
			<p>
				ヘッダファイル付きのパッケージで， BuildDependsOnly を True にするのが適切ではないものもあります．
				この場合，そのパッケージでは
			</p>
<pre>
   BuildDependsOnly: False
</pre>
			<p>と宣言し，その理由を DescPackaging に記述します．</p>
			<p>
				BuildDependsOnly フィールドは，パッケージがヘッダファイルを含み /sw/include にインストールされる場合，
				パッケージの .info ファイルに記述されていなければなりません．
			</p>
			<p>
				fink 0.20.5 の時点で， "fink validate" とすることで，
				ヘッダファイルと，最低一つの dylib を含み， BuildDependsOnly 値で真偽を宣言していない .deb ファイルに警告を出します．
				(将来のバージョンでは，この機能をヘッダファイルと静的ライブラリに対応するように拡張する可能性もある．)
			</p>
<p>
  The goal of the Shared Library Policy is to allow assure
  compatibility between libraries supplied by one package and
  libraries or programs that use them in a different package. Some
  packages may have shared libraries that are not designed to be used
  by other packages. Common situations include a suite of programs
  that come with a back-end library of utility functions or a program
  that comes with plugins to handle various features. Because these
  libraries are "private" to the package that has them, they do not
  require being packaged with separate -shlibs
  or <code>BuildDependsOnly</code> SplitOffs.
</p>
			<p><b>フィールド Shlibs:</b></p>
			<p>
共有ライブラリを適切なパッケージに分類する他にも， Fink ポリシー第 4版では，
共有ライブラリ全てをフィールド <code>Shlibs</code> を使って宣言することが求められています．

このフィールドでは，各共有ライブラリに対して 1 行ずつ，
ライブラリの <code>-install_name</code>， 
ライブラリがパブリックである場合、その  <code>Shlibs</code> には <code>-compatibility_version</code> のリスト，
そのライブラリを提供する Fink パッケージを指定するバージョン付き依存性情報
(ただし -compatibility_version が同じでなければならない)，

そしてライブラリのアーキテクチャ (値は "32", "64", または
"32-64", あるいは空欄; 空欄時の既定値は "32" ．) 

を記します．
依存性情報は <code>foo (&gt;= バージョン-版)</code> という形式で示します．
ここで <code>バージョン-版</code> にはこの (-compatibility_version が同じ) ライブラリを利用可能にしてくれる
Fink パッケージの<b>最初</b>の「バージョン」を使います．
例えば次の宣言は，
			</p>
<pre>
Shlibs: &lt;&lt;
%p/lib/libbar.1.dylib 2.1.0 bar1 (&gt;= 1.1-2) 32
&lt;&lt;
</pre>
			<p>
				<code>-install_name</code> が %p/lib/libbar.1.dylib で <code>-compatibility_version</code> が 2.1.0 の (32bit) ライブラリが，
				Fink パッケージ <b>bar1</b> の「バージョン」1.1-2 以降でインストールされることを示します．
				それに加え，この宣言は「この名前がついていて compatibility_version が少なくとも 2.1.0 のライブラリは，
				Fink パッケージ bar1 の今後のバージョンには必ず含まれている」というメンテナからの保証にも相当します．
			</p>
			<p>
				ライブラリの名称には %p を使用するよう注意して下さい．
				これによって， Fink ユーザはインストールディレクトリに関係なく，正しい <code>-install_name</code> を検索できます．
			</p>
			<p>
				パッケージが更新されたとき，
				普通は次の「バージョン」または「版」のパッケージ記述にフィールド <code>Shlibs</code> をコピーするだけで構いません．
				例外は <code>-compatibility_version</code> が増加したときです．
				その場合，依存性情報の中の「バージョン-版」は新しい「バージョン」または「版」に従って更新されなければいけません．
				(新しい「バージョン」または「版」とは，
				新しい compatibility_version のライブラリを提供する最初の「バージョン」または「版」のことです．)
			</p>

<p>
The <code>Shlibs</code>
entry for a private library uses a different syntax:
</p>
<pre>
  Shlibs: &lt;&lt;
    !%p/lib/%N/libbar.1.dylib
  &lt;&lt;
</pre>
<p>The leading exclamation point indicates that this is a private library,
and since the other information is not relevant in this case, it is 
not included.</p>
<p>Note that in this example, the private shared library has been placed
in its own subdirectory <code>%N</code> of the 
<code>%i/lib</code> directory (which was named after the
package).  This is a recommended procedure for private libraries,
as an additional safety measure, to prevent other packages from accidentally
linking to this library.
</p>

			<p>
				<b>メジャーバージョン番号が変わるとき:</b>
			</p>
			<p>
				「メジャーバージョン」が N から M に変化したときは， 2 つの新しいパッケージ barM と barM-shlibs を作ることになります．
				パッケージ barM-shlibs と barN-shlibs に重複するファイルがあってはいけません．
				これは，多くのユーザにとって両方を同時にインストールする必要があるからです．
				パッケージ barM には以下の依存性情報を指定しなければいけません．
			</p>
<pre>
Conflicts: barN
Replaces: barN
</pre>
			<p>
				同様に barN の方も次の依存性情報を含むように改訂しなければいけません．
			</p>
<pre>
Conflicts: barM
Replaces: barM
</pre>
			<p>
				これにより，問題の共有ライブラリの片方のバージョンに依存する他の様々なパッケージがビルドされるときに
				barN と barM が入れ替わり入ってくるのを目にするでしょうが，
				barN-shlibs と barM-shlibs はいつまでもインストールしたままでいられます．
			</p>
			<p>
				<b>実行可能プログラムとライブラリの両方を含むパッケージ:</b>
			</p>
			<p>
				upstream パッケージが実行可能プログラムとパブリックライブラリの両方を含む場合，
				Fink パッケージを作成する際にいくつかの注意が必要です．
				唯一の実行可能プログラムが (恐らくビルド時のみに使われ，普段は使われない) foo-config のようなものという場合もあります．
				その場合，実行可能プログラムはヘッダファイルと共にパッケージ <code>foo</code> に入れて構いません．
			</p>
			<p>
				そうでない場合，実行可能プログラムは実行時に他の Fink パッケージから必要とされることになりますが，
				それらは <code>foo-bin</code> などの名前の個別の Fink パッケージに split off しなければいけません．
				パッケージ <code>foo-bin</code> はパッケージ <code>foo-shlibs</code> に依存しなければいけません．
				他パッケージのメンテナは，次のようにすることで
			</p>
<pre>
Depends: foo-bin
BuildDepends: foo
</pre>
			<p>
				明示せずに <code>foo-shlibs</code> を処理します．
			</p>
			<p>
				しかしこの場合，アップグレードは問題を起こします．
				ユーザは <code>foo-bin</code> をインストールするよう指示されないからです．
				この問題の回避のため，パッケージ <code>foo</code> に依存している全てのパッケージのメンテナがパッケージを上記のように改訂するまで，
				<code>foo</code> で次のようにして構いません．
			</p>
<pre>
Depends: foo-shlibs (= 正確な.バージョン), foo-bin
</pre>
			<p>
				こうすると， <code>foo</code> に依存する他のパッケージのメンテナが改訂を済ませるまで，
				ユーザのシステムでは大抵 <code>foo-bin</code> のインストールが要求されます．
			</p>

<p>
  As of fink-0.28.0 (released in January 2008), the format of
  the <code>Shlibs</code> entry for a "private" shared library has
  changed (see earlier discussion of the difference between a public
  and a private shared library). Note that the Shared Library Policy
  has always required all shared libraries to be listed; the change
  here is only in the syntax of the <code>Shlibs</code> field. Because
  this type of shared library is not designed to be used by external
  packages, there is no need to document its compatilibity or other
  versioning. Instead, an exclamation-mark is used.  For example,
  if <code>libquux.3.dylib</code> is
  the <code>install_name</code> of a private shared library, it would
  be listed as follows:
</p>
<pre>
  Shlibs: &lt;&lt;
    !%p/lib/libquux.3.dylib
  &lt;&lt;
</pre>

		
		<h2><a name="perlmods">3.5 Perl モジュール</a></h2>
			
			<p>
				2003 年 5 月以来， Fink には Perl モジュールに対する新しいポリシーがあります．
				これは 2004 年 4 月に見直されました．
			</p>
			<p>
				伝統的に，perl モジュールの Fink パッケージには <code>-pm</code> が後置され，
				ディレクティブ <code>Type: perl</code> を使ってビルドされていました．
				このディレクティブは Perl モジュールのファイルを
				<code>/sw/lib/perl5</code> 及び/または <code>/sw/lib/perl5/darwin</code> に格納していました．
				現在のポリシーでは，それらのディレクトリには，コンパイルに使われる Perl のバージョンに依存しない 
				(また，このバージョン非依存性を欠いた Perl モジュールに依存しない)
				Perl モジュールのみを格納します．
			</p>
			<p>
				バージョンに依存する Perl モジュールはいわゆる XS モジュールであり，
				しばしば純粋な Perl コードの他に C コードからコンパイルされたファイルを含みます．
				このことを区別する方法はいくつもありますが，例えば拡張子 <code>.bundle</code> を持つファイルがあるかどうか調べる方法があります．
			</p>
			<p>
				Perl のバージョンに依存する Perl モジュールは該当バージョンの付いた Perl の実行可能プログラム (perl5.6.0 など)
				を使ってビルドされなければいけません．
				また，モジュールの含むファイルは，標準の Perl のディレクトリ内の，バージョンの付いたサブディレクトリ
				(<code>/sw/lib/perl5/5.6.0</code> や <code>/sw/lib/perl5/5.6.0/darwin</code> など) に格納しなければいけません．
				命名規約により，バージョン 5.6.0 に依存する Perl モジュールに <code>-pm560</code> を後置します．
				格納場所と命名方法に関する同様の規約が他のバージョンの Perl に対しても有効で，
				perl 5.6.1 (10.2 ツリー), perl 5.8.0 (10.3 ツリー), perl 5.8.1， perl 5.8.4 または perl 5.8.6 でもそのように対応されます．
			</p>
			<p>
				ディレクティブ <code>Type: perl 5.6.0</code> は自動的にバージョンの付いた Perl の実行可能ファイルを使い，
				できたファイルを適切なサブディレクトリに格納します．
				(このディレクティブは Fink 0.13.0 で導入されました．)
			</p>
			<p>
				<code>-pm</code> の付くパッケージも作成できます．
				これは本質的には「バンドル」パッケージで， <code>-pm560</code> 
				などの付く同等なパッケージなどをロードします．
				2004 年 4 月より，この方式は順次廃止されていきます
				(bootstrap に必要な <code>storable-pm</code> は例外です)．
			</p>
			<p>
				fink 0.20.2 の時点で， system-perl バーチャルパッケージは，
				システムに 5.8.0 以降の Perl がある場合，自動的に Perl モジュールを提供します．
				system-perl-5.8.1-1 の場合，
				<b>attribute-handlers-pm581, cgi-pm581, digest-md5-pm581, file-spec-pm581,
			 file-temp-pm581, filter-simple-pm581, filter-util-pm581, getopt-long-pm581,
			 i18n-langtags-pm581, libnet-pm581, locale-maketext-pm581, memoize-pm581,
			 mime-base64-pm581, scalar-list-utils-pm581, test-harness-pm581,
			 test-simple-pm581, time-hires-pm581.</b>
				です．
				(この一覧は 0.20.1 から若干変更されています．
				パッケージメンテナは正しい一覧を使用しているか必ず確認してください．)
			</p>
			<p>
				Fink 0.13.0 から利用可能になったコマンド <code>fink validate</code> を .deb ファイルに適用すると，
				その Fink パッケージが XS モジュールで，バージョンの付かないディレクトリにインストールされるかチェックし，そうなら警告を発します．
			</p>
<p>
ユーザーは，同時に複数のバージョンの perl をインストールしておくことができます．
このため， perl バージョン番号の指定されたモジュールは，複数のバージョンが共存できるようにインストールされなければなりません．
manpage やバイナリ，その他のスクリプトなど，これらのパッケージでのファイル名の重複を避けるよう，
注意を払わねばなりません．
-pm<b>XYZ</b> で終わるパッケージのどのファイルも，<b>XYZ</b> 値のことなる他のパッケージと同じパスを使用してはいけません．
<code>Replaces</code> を用いることで，同名のファイルがあっても異なる perl バージョンの perl モジュールは，以前は許可されていましたが，今後は許可されません．
manpage に関する解決として，2005年3月より，それぞれの perl-X.Y.Z に <code>%p/lib/perl5/X.Y.Z/man</code> という MANPATH を定義しました．
このため，-man や -doc といった SplitOff を作って対処する必要はなくなりました．
例えば， uri-pm581 と uri-586 のコンフリクトの場合，どちらにもある <code>URI.3pm</code> という manpage は，それぞれ <code>%p/lib/perl5/5.8.1/man/man3/URI.3pm</code> と <code>%p/lib/perl5/5.8.6/man/man3/URI.3pm</code> にインストールされます．
ただし，<code>Type: perl X.Y.Z</code> によるスクリプトは変更されていないので， <code>InstallScript</code> にてどこに mapnage をインストールするのかを記述する必要があります．
もし複雑なスクリプトを記述していないのであれば，既存のものを用い，ファイルを移動させるだけで済みます．
</p>
<pre>
%{default_script}
mv %i/share/man %i/lib/perl5/5.8.1
</pre>
<p>
これにより，全ての manpage が移動します．
もし manpage のうち一つのセクションを以上させたい場合 (例えばセクション3とモジュールの manpage を移し，セクション1のスクリプト manpage は移さない)，同様に:
</p>
<pre>
%{default_script}
mkdir -p %i/lib/perl5/5.8.1/man
mv %i/share/man/man3 %i/lib/perl5/5.8.1/man
</pre>
<p>
デモ用やユーティリティ的なスクリプトなどが <code>%p/bin</code> にある場合は，いくつかの解決方法があります．
一つ目の例は，これらのファイル (およびその manpage や 関連ファイル) を %N-bin という Splitoff とします．
<code>Conflicts</code> と <code>Replaces</code> のフィールドを用いることで，perl バージョンの異なる，同じファイルを含んでいる複数のパッケージが，相互に排他的になります．
利用者は，異なる perl バージョンのモジュールを複数インストールしておき，スクリプトに関しては一つの perl バージョンのものだけを選択することになります．
例えば，Tk.pm は <code>ptksh</code> と共に来ますが，tk-pm* パッケージは以下のように作られます:
</p>
<pre>
Info2: &lt;&lt;
Package: tk-pm%type_pkg[perl]
Type: perl (5.8.1 5.8.4 5.8.6)
InstallScript: &lt;&lt;
  %{default_script}
  mkdir -p %i/lib/perl5/%type_raw[perl]/man
  mv %i/share/man/man3 %i/lib/perl5/%type_raw[perl]/man
&lt;&lt;
SplitOff: &lt;&lt;
  Package: %N-bin
  Depends: %N
  Conflicts: %{Ni}5.8.1, %{Ni}5.8.4, %{Ni}5.8.6
  Replaces: %{Ni}5.8.1, %{Ni}5.8.4, %{Ni}5.8.6
  Files: bin share/man/man1
&lt;&lt;
&lt;&lt;
</pre>
<p>
この他の方法としては，スクリプトの名称と，関連する manpage を，perl バージョン番号を示すように変更することがあります．
これでコンフリクトを回避できるので，相互排他的な %N-bin の Splitoff を作る必要はありません:
</p>
<pre>
Info2: &lt;&lt;
Package: tk-pm%type_pkg[perl]
Type: perl (5.8.1 5.8.4 5.8.6)
InstallScript: &lt;&lt;
  %{default_script}
  mkdir -p %i/lib/perl5/%type_raw[perl]/man
  mv %i/share/man/man3 %i/lib/perl5/%type_raw[perl]/man
  mv %i/bin/ptksh %i/bin/ptksh%type_raw[perl]
  mv %i/share/man/man1/ptksh.1 %i/share/man/man1/ptksh%type_raw[perl].1
&lt;&lt;
&lt;&lt;
</pre>
<p>
利用者は，どのバージョンの perl 用の ptksh も持っておくことができます．
<code>update-alternatives</code> を使用すると，利用者は一般的な (perl バージョンのない) 名前でもアクセスすることができ，便利です．
</p>
<p>
2005年3月の時点で，fink パッケージの perl 自体 (Apple が提供する perl バージョン以外の perlXYZ や perlXYZ-core) としては，manpage とモジュールの位置が変わりました．
このため，上位バージョンのコア perl モジュールを提供するパッケージは，perlXYZ や perlXYZ-core パッケージを <code>Replaces</code> フィールドに記述しないでください．
</p>
		
		<h2><a name="emacs">3.6 Emacs ポリシー</a></h2>
			
			<p>
				Fink プロジェクトでは Emacs について Debian プロジェクトのポリシーに従うことに決定しましたが，小さな違いもあります．
				(Debian プロジェクトのポリシーについては
				<a href="http://www.debian.org/doc/packaging-manuals/debian-emacs-policy">
					http://www.debian.org/doc/packaging-manuals/debian-emacs-policy
				</a>
				を参照)
				Fink ポリシーとの違いは 2 点です．
				まず，このポリシーは Fink では現在のところパッケージ emacs20 と emacs21 にのみ適用され，パッケージ xemacs には適用されません．
				(この点は将来変わるかも知れません．)
				次に Debian のポリシーと異なり， Fink パッケージはどれもファイルを直接
				<code>/sw/share/emacs/site-lisp</code> にインストールして構いません．
			</p>
		
	<p align="right"><? echo FINK_NEXT ; ?>:
<a href="fslayout.php?phpLang=ja">4. ファイルシステムのレイアウト</a></p>
<? include_once "../../footer.inc"; ?>


