<?
$title = "User's Guide";
$cvs_author = 'Author: chrisp';
$cvs_date = 'Date: 2001/11/04 18:55:08';

$metatags = '<link rel="contents" href="index.php" title="User\'s Guide Contents"><link rel="next" href="intro.php" title="Introduction">';

include "header.inc";
?>

<h1>Fink User's Guide</h1>
<p>
<b>This document is a work in progress.</b>
The following older documents may offer a broader view:
<a href="http://fink.sourceforge.net/doc/bundled/install.php">Installation</a>,
<a href="http://fink.sourceforge.net/doc/bundled/usage.php">Usage</a>
and the ReadMe.rtf included in the binary distribution disk image.
Also check out the
<a href="http://fink.sourceforge.net/doc/">documentation
section</a> of the web site, it has some other useful documents
beyond that.
</p>

<p>
Welcome to the Fink User's Guide.
This guide covers first time installation and upgrade procedures for
both the source and the binary distribution.
Package installation and maintenance is covered as well.
</p>
<h2>Contents</h2><ul>
<li><a href="intro.php"><b>Introduction</b></a></li>
<ul>
<li><a href="intro.php#what">What is Fink?</a></li>
<li><a href="intro.php#req">Requirements</a></li>
<li><a href="intro.php#supported-os">Supported Systems</a></li>
<li><a href="intro.php#src-vs-bin">Source vs. Binary</a></li>
</ul>
<li><a href="install.php"><b>First Time Installation</b></a></li>
<ul>
<li><a href="install.php#bin">Installing the Binary Distribution</a></li>
<li><a href="install.php#src">Installing the Source Distribution</a></li>
<li><a href="install.php#setup">Setting Up Your Environment</a></li>
</ul>
<li><a href="packages.php"><b>Installing Packages</b></a></li>
<ul>
<li><a href="packages.php#x11">Getting X11 Sorted Out</a></li>
<li><a href="packages.php#bin-dselect">Installing Binary Packages with
dselect</a></li>
<li><a href="packages.php#bin-apt">Installing Binary Packages with
apt-get</a></li>
<li><a href="packages.php#src">Installing Packages from Source</a></li>
</ul>
<li><a href="upgrade.php"><b>Upgrading Fink</b></a></li>
<ul>
<li><a href="upgrade.php#bin">Upgrading using Binary Packages</a></li>
<li><a href="upgrade.php#src">Upgrading the Source Distribution</a></li>
<li><a href="upgrade.php#mix">Mixing Binaries and Source</a></li>
</ul>
</ul><p>Generated from <i>$Fink: uguide.xml,v 1.9 2001/11/04 18:55:08 chrisp Exp $</i></p>


<?
include "footer.inc";
?>
