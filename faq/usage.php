<?
$title = "F.A.Q. - Usage";
$cvs_author = '$Author: chrisp $';
$cvs_date = '$Date: 2001/06/11 08:09:10 $';

$metatags = '<link rel="start" href="index.php" title="F.A.Q. Contents"><link rel="contents" href="index.php" title="F.A.Q. Contents"><link rel="next" href="packages.php" title="Problems With Certain Packages"><link rel="prev" href="install.php" title="Installation Questions">
';

include "header.inc";
?>

<h1>F.A.Q. - Usage Questions</h1>



<a name="what-packages"><div class="question"><p><b>Q: How can I find out what packages Fink supports?</b></p></div>
<div class="answer"><p><b>A:</b> For Fink 0.1.x, look in the fink/info directory, e.g.:</p><pre>ls /sw/fink/info</pre><p>For Fink 0.2.x, you may want to try this:</p><pre>find /sw/fink -name '*.info'</pre></div></a>

<a name="unstable"><div class="question"><p><b>Q: There's this package in unstable that I want
to install, but Fink just says 'no package found'. How can I install
it?</b></p></div>
<div class="answer"><p><b>A:</b> First make sure you understand what 'unstable' means. Packages
in there usually have not been tested at all, many have problems or
just won't compile. That is why Fink doesn't search the unstable
tree by default.</p><p>If you only want one or two specific packages, it is safer
to copy those .info files (and their associated .patch files, if there
are any) from <tt><nobr>/sw/fink/dists/unstable/main/finkinfo</nobr></tt> to
<tt><nobr>/sw/fink/dists/local/main/finkinfo</nobr></tt>. If you want Fink to use all of
unstable, edit <tt><nobr>/sw/etc/fink.conf</nobr></tt> and add <tt><nobr>unstable/main</nobr></tt> to the
<tt><nobr>Trees:</nobr></tt> line.</p></div></a>

<a name="sudo"><div class="question"><p><b>Q: I'm tired of typing my password into sudo again
and again. Is there a way around this?</b></p></div>
<div class="answer"><p><b>A:</b> If you're not paranoid, you can configure sudo to not ask you for a
password. To do this, edit <tt><nobr>/etc/sudoers</nobr></tt> as root
and add a line like this:</p><pre>username  ALL = NOPASSWD: ALL</pre><p>Replace <tt><nobr>username</nobr></tt> with your actual username, of course. This
line allows you to run any command via sudo without typing your
password.</p></div></a>




<?
include "footer.inc";
?>
