<?
$title = "F.A.Q. - Relations";
$cvs_author = 'Author: chrisp';
$cvs_date = 'Date: 2001/10/13 09:09:23';

$metatags = '<link rel="start" href="index.php" title="F.A.Q. Contents"><link rel="contents" href="index.php" title="F.A.Q. Contents"><link rel="next" href="install.php" title="Installation Questions"><link rel="prev" href="general.php" title="General Questions">';

include "header.inc";
?>

<h1>F.A.Q. - Relations with Other Projects</h1>



<a name="upstream"><div class="question"><p><b>Q: Do you contribute your patches
back to the upstream maintainers?</b></p></div>
<div class="answer"><p><b>A:</b> 
We're trying to.
Sometimes sending patches back is easy and everyone is happy once the
next release of the package is out.
Unfortunately with most packages it's not that easy.
Some common problems:
</p><ul>
<li>The Fink package maintaner is very busy and doesn't have the time
to send the patch and accompanying explanations to the upstream
maintainers.</li>
<li>The upstream maintainers reject the patch. There are lots of valid
reasons for this. Most upstream maintainers have a strong interest in
clean code, clean configure checks, and compatibility with other
platforms.</li>
<li>The upstream maintainers accept the patch, but it takes some weeks
or months until they release a new version of their package.</li>
<li>The package has been abhandoned by the original authors and there
will be no new releases into which the patch could be merged.</li>
</ul></div></a>


<a name="debian"><div class="question"><p><b>Q: What is your relation with the
Debian project? Are you porting Debian Linux to Mac OS X?</b></p></div>
<div class="answer"><p><b>A:</b> 
There is no formal relation between Fink and
<a href="http://www.debian.org">Debian</a>.
Fink is <b>not</b> a port of the Debian GNU/Linux distribution.
We have ported Debian's package management tools (dpkg, dselect,
apt-get) though, and use these tools and the .deb binary package
format.
The actual packages are tailor-made for Mac OS X / Darwin and don't
use the Debian source package format.
</p></div></a>


<a name="apple"><div class="question"><p><b>Q: What is your relation with
Apple?</b></p></div>
<div class="answer"><p><b>A:</b> 
<a href="http://www.apple.com/">Apple</a> is aware of Fink and
has started to support us as part of their Open Source relations
efforts.
So far they are providing us with pre-release seeds of new Mac OS X
versions in the hope that Fink packages can be adapted in time for the
release.
Quote:
<i>"Hopefully it underscores the commitment that many suspect we're
not willing to provide.  We'll get better at the open source game over
time."</i>
Thanks Apple!
</p></div></a>


<a name="openosx"><div class="question"><p><b>Q: What is your relation with
OpenOSX.com?</b></p></div>
<div class="answer"><p><b>A:</b> 
Read this <a href="http://fink.sourceforge.net/pr/openosx.php">public
statement</a>.
</p></div></a>


<p align="right">
Next: <a href="install.php">Installation Questions</a></p>


<?
include "footer.inc";
?>
