<?
$title = "Usage";
$cvs_author = '$Author: chrisp $';
$cvs_date = '$Date: 2001/06/05 18:48:49 $';

include "header.inc";
?>


<h1>Fink 0.2.1 Usage</h1>

<h2>Setting The Paths</h2>

<p>To use the software installed in Fink's directory hierarchy, including
the fink command itself, you must set your PATH environment variable
(and some others) accordingly. Shell scripts are provided to do this
for you. If you use tcsh, add the following to your .cshrc:
<pre>  source /sw/bin/init.csh</pre>
Editing .cshrc will only affect new shells (i.e. new Terminal
windows), so you should also run this command in all Terminal windows
that you opened before you edited the file.</p>
<p>If you use a Bourne type shell (e.g. sh, bash, zsh), use
/sw/bin/init.sh instead.</p>
<p>Note that the scripts also add /usr/X11R6/bin and /usr/X11R6/man to
your path so you can use X11 when it is installed.</p>

<h2>Using Fink</h2>
<p>Fink has several commands that work on packages. All of them need at
least one package name, and all can handle several package names at
once. You can specify just the package name (e.g. gimp), or a fully
qualified name with a version number (e.g. gimp-1.2.1 or
gimp-1.2.1-3). Fink will automatically choose the latest available
version and revision when they are not specified.</p>
<p>What follows is a list of commands that Fink understands:</p>

<h2>install</h2>
<p>The install command is used to install packages. It downloads,
configure, builds and installs the packages you name. It will also
install required dependencies automatically, but will ask you for
confirmation before it does so. Example:</p>
<pre>  fink install nedit

  Reading configuration...
  Reading package info...
  Information about 131 packages read.
  The following additional package will be installed:
   lesstif
  Do you want to continue? [Y/n]</pre>
Aliases for the install command: update, enable, activate, use. (Most
of these for historic reasons.)</p>

<h2>remove</h2>
<p>The remove command removes packages from the system by calling 'dpkg
--remove'. The current implementation has several fundamental
flaws. It only works on packages Fink knows about (i.e. .info file is
present). It doesn't check dependencies. It makes one dpkg invocation
per packages, thus not allowing dpkg to reorder according to
dependencies.</p>
<p>The remove command only removes the actual package files, but leaves
the .deb compressed package file intact. This means that you can
re-install the package later without going through the compile process
again. If you need the disk space, you can remove the .deb from the
/sw/fink/dists tree.</p>
<p>Aliases: disable, deactivate, unuse, delete, purge.</p>

<h2>update-all</h2>
<p>This command updates all installed packages to the latest version. It
does not need a package list, so you just type:
<pre>  fink update-all</pre></p>

<h2>fetch</h2>
<p>Downloads the named packages, but does not install it. This command
will download the tarballs even if they were downloaded before.</p>

<h2>fetch-all</h2>
<p>Downloads <u>all</u> package source files. Like fetch, this downloads the
tarballs even when they were downloaded before.</p>

<h2>fetch-missing</h2>
<p>Downloads <u>all</u> package source files. This command will only download
files that are not present on the system.</p>

<h2>build</h2>
<p>Builds a package, but does not install it. As usual, the source
tarballs are downloaded if they can not be found. The result of this
command is an installable .deb package file, which you can quickly
install later with the install command. This command will do nothing
if the .deb already exists. Note that dependencies are still
<u>installed</u>, not just built.</p>

<h2>rebuild</h2>
<p>Builds a package (like the build command), but ignores and overwrites
the existing .deb file. If the package is installed, the newly created
.deb file will also be installed in the system via dpkg. Very useful
during package development.</p>

<h2>reinstall</h2>
<p>Same as install, but will install the package via dpkg even when it is
already installed. You can use this when you accidentally deleted
package files or changed configuration files and want to get the
default settings back.</p>

<h2>configure</h2>
<p>Reruns the configuration process. This will let you change your mirror
sites settings, among others.</p>


<h2>Further Questions</h2>
<p>If your questions are not answered by this document, read the FAQ at
the Fink website: <a href="http://fink.sourceforge.net/faq/">http://fink.sourceforge.net/faq/</a>. If that still
doesn't answer your questions, subscribe to the fink-users mailing
list via <a href="http://lists.sourceforge.net/lists/listinfo/fink-users">http://lists.sourceforge.net/lists/listinfo/fink-users</a> and
ask there.</p>


<?
include "footer.inc";
?>
