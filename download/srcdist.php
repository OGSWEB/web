<?
$title = "Source Release Download";
$cvs_author = '$Author: dmrrsn $';
$cvs_date = '$Date: 2002/06/08 22:08:49 $';

include "header.inc";
?>


<h1>Download Fink Source Release</h1>

<p>
The source release contains the fink package manager plus package
descriptions and patches.
It will download the source code from the original distribution sites
and build them on your local machine.
</p>

<p>
Fink 0.4.0 was released on 18 April 2002.
A minor update, Fink 0.4.0a, changed the download URLs to be compatible
with sourceforge's new mirroring setup.

</p>
<ul>
<li><a
href="http://us.dl.sourceforge.net/fink/fink-0.4.0a-full.tar.gz">Fink
0.4.0a</a> - 2222K, .tar.gz format</li>
</ul>

<p>
<b>Important:</b>
Don't extract the archive with StuffIt, it will corrupt some file
names.
Use the command line <tt>tar</tt> utility instead.
Instructions are in the Installation document.
</p>

<p>
Installation and usage instructions are inside the distribution
tarball.
Please read them - Fink is not a one-click-and-done thing.
The documents README, INSTALL and USAGE are provided as pure text (for
reading from the command line) and as HTML (for reading in a browser
and for printing).
They are also available online in the <a
href="../doc/index.php">documentation section</a>.
</p>
<p>
To be informed of new releases, subscribe to the <a
href="../lists/fink-announce.php">fink-announce mailinglist</a>.
</p>


<?
include "footer.inc";
?>
