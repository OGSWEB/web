<?
$title = "自述";
$cvs_author = 'Author: jeff_yecn';
$cvs_date = 'Date: 2004/03/17 20:38:16';
$metatags = '';


include_once "header.inc";
?>
<h1>Fink 自述文件</h1>
<!--Generated from $Fink: readme.zh.xml,v 1.1 2004/03/17 20:38:16 jeff_yecn Exp $-->
<p>
这是 Fink，一个目标是把所有的开放源码软件带到 Darwin 和 Mac OS X 平台上的软件包管理系统。
</p>
<p>
通过 dpkg 的帮助，它可以维护目录的层次关系。
它还可以下载源代码发型板，对它打上必要的补丁，并根据 Darwin 的特点对它进行配置，并编译安装它们。
关于可用的软件包的信息以及所需的补丁（称为“软件包描述”）是单独维护的，不过通常也会包括在本发行版中。
实际的源代码会按需要从互联网上下载。
</p>
<p>
虽然 Fink 还不能称为“成熟”软件，它还有一些不善之处以及没有太多的功能，但是它仍然已经被很多的人所成功使用。
请仔细阅读有关的指南，而且如果有些功能并不完全正常运作的话，也不要太惊讶。那些问题通常都会由详细的解释；如果你需要帮助的话，请查阅网站的内容。</p>
<p>
Fink 是按照《GNU 通用公开授权协议》发布的。请阅读 COPYING 文件获取详细信息。</p>
<h2><a name="req">需求</a></h2>
<p>
你需要：
</p>
<ul>
<li><p>
安装有 Mac OS X 系统，版本 10.0 或更高。
（对 10.1 仍然有一些和连接器有关的个别问题。）
在 Darwin 1.3.1 上应该可以运行，但没有经过测试。
两者的更早版本上<b>不能</b>运行。
</p></li>
<li><p>
开发工具。
在 Mac OS X 上，按照开发工具 CD 上的 Developer.pkg 软件包。
注意你按照的工具需要与你的 Mac OS X 版本相对应。
在 Darwin 上，默认安装应该已经包括所需的工具。
</p></li>
<li><p>
互联网访问。
所有的源代码是从镜像站点上下载的。
</p></li>
<li><p>
耐心。
编译一些大软件包需要时间。
这里我们谈论是按小时甚至是按天计算的时间概念。
</p></li>
</ul>
<h2><a name="install">安装</a></h2>
<p>
安装过程在 INSTALL 文件中叙述。
请先阅读它，这个步骤并非无足轻重的。
它也描述了升级的过程。
</p>
<h2><a name="usage">使用 Fink</a></h2>
<p>
USAGE 文件描述如何设置你的路径以及如何安装和删除软件包。
它同时也包括可用命令的一个完整列表。
</p>
<h2><a name="questions">进一步的问题？</a></h2>
<p>
如何这里包括的文档不足以回答你的问题，
你用可以访问 Fink 的网站：
<a href="http://fink.sourceforge.net/">http://fink.sourceforge.net/</a>
并查阅那里的帮助页：
<a href="http://fink.sourceforge.net/help/">http://fink.sourceforge.net/help/</a>。
它会告诉你有什么其它的文档以及可以在那里获得你需要的支持。
</p>
<p>
如果希望支持 Fink 项目，帮助页也提到你可以做的一些事情，类似测试或创建软件包。
</p>
<h2><a name="uptodate">获取最新信息</a></h2>
<p>
项目的网站在 
<a href="http://fink.sourceforge.net/">http://fink.sourceforge.net/</a>。
</p>
<p>
要获取最新发布版本的通知，可以到
<a href="http://fink.sourceforge.net/lists/fink-announce.php">http://fink.sourceforge.net/lists/fink-announce.php</a>
去订阅 fink-announce 邮件列表。
这个列表是受管的低流量列表。
</p>

<? include_once "../footer.inc"; ?>


