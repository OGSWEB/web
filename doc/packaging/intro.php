<?
$title = "Packaging - Intro";
$cvs_author = '$Author: chrisp $';
$cvs_date = '$Date: 2001/07/08 18:07:25 $';

$metatags = '<link rel="start" href="index.php" title="Packaging Contents"><link rel="contents" href="index.php" title="Packaging Contents"><link rel="next" href="format.php" title="Package Descriptions"><link rel="prev" href="index.php" title="Packaging Contents">';

include "header.inc";
?>

<h1>Packaging - Introduction</h1>




<h2>What is a Package?</h2>
<p>
Conceptually, a package is an atomic piece of software.
It consists of a set of files that form one unit.
In Fink, packages can exist in two forms: the package description
and the ready-to-install binary package file.
</p>
<p>
The package description is a human readable text file that contains
everything needed to build a package, i.e. to create the binary
package file.
The information includes meta-data (like the package's name and a prose
description of its purpose), the URL of the source code and the
instructions necessary to configure, compile and wrap up the package.
The description may be accompanied by a patch file.
</p>
<p>
A binary package file is a file archive that contains the actual files
that make up the package,
i.e. executables, data files, message catalogs, libraries, include
files, etc.
The package file also contains some meta-data for the package.
Installing a binary package mainly consists of unpacking its contents
as it is already in an ready-to-use form.
Since Fink builds on the dpkg package manager, the binary package
files are in the dpkg format and have the extension .deb.
</p>



<h2>Identifying a Package</h2>
<p>
A package is identified by three strings: the package name, the
version and the revision.
All of these may contain lower-case letters (a-z), numbers (0-9),
dashes (-) and dots (.).
Other characters are not allowed.
In particular, capital letters and underscores are not allowed.
</p>
<p>
The package name is simply the name of the software, e.g. openssh.
The version, also called the upstream version, is the version
identifier of the original software package.
It is okay to use letters in the version, e.g. 2.9p1.
Both fink and dpkg know how to sort these correctly.
The revision is a counter that is increased when the package
description changes.
It starts at 1 and should be reset to 1 when the upstream version
changes.
The full name of a package is all three items concatenated, with
dashes in between, e.g. openssh-2.9p1-2.
</p>





<?
include "footer.inc";
?>
