<?
$title = "Binary Release Download";
$cvs_author = '$Author: nieder $';
$cvs_date = '$Date: 2011/10/26 18:29:04 $';

include "header.inc";
?>

<h1>Download Fink Binary Release</h1>

<p>
The binary release of Fink saves you the burden of compiling the
programs on your local machine.
After installing a base system using the installer package, you can
download pre-compiled binary packages from this site with the dselect
and apt-get tools.
Only a part of the packages are actually available as binary packages;
the others can only be built from source as with the source release.
This is mainly due to legal reasons with the affected (missing) packages.
</p>
<? 
include "../fink_version.inc";
?>
<p>
<b>Status:</b>
A binary installer for Fink <? print $fink_version; ?> (OS X 10.5) has been posted.
</p>
<ul>
<li><a href="http://prdownloads.sourceforge.net/fink/Fink-<? print $fink_version; ?>-PowerPC-Installer.dmg?download">Fink
<? print $fink_version; ?> Binary Installer (PowerPC)</a> - <? print $dmg_size; ?>, compressed .dmg disk image</li>
<li><a href="http://prdownloads.sourceforge.net/fink/Fink-<? print $fink_version; ?>-Intel-Installer.dmg?download">Fink
<? print $fink_version; ?> Binary Installer (Intel)</a> - <? print $intel_dmg_size; ?>, compressed .dmg disk image</li>
<li><a href="http://prdownloads.sourceforge.net/fink/direct_download/">Browse the Distribution Archive</a> - here
you will find the binary packages and the corresponding source.</li>
</ul>
<p>
The installer disk image contains some notes (Fink ReadMe.rtf), plus
a copy of the documents available on this website in the <a
href="../doc/index.php">documentation section</a>.
</p>
<p>
To be informed of new releases, subscribe to the <a
href="../lists/fink-announce.php">fink-announce mailinglist</a>.
</p>


<?
include "footer.inc";
?>
