<?
$title = "KDE Support In Fink";
$cvs_author = '$Author: rangerrick $';
$cvs_date = '$Date: 2002/05/28 19:51:45 $';

include "header.inc";
?>


<h1>KDE Support In Fink</h1>

<p>
 The Fink team is happy to announce preliminary support for KDE on MacOS X.
</p>

<p>
Screenshots:
[<a href="kde3-thesin-gimp.html">#1</a>]
[<a href="kde3-vasi-oroborosx_and_konq.html">#2</a>]
[<a href="kde3-rangerrick-ie_and_konq.html">#3</a>]
[<a href="kde3-rangerrick-koffice.html">#4</a>]
</p>

<p>
 Work has been progressing steadily on getting KDE 3.0.x ported to
 run in XFree86 on MacOS X.  Packages and pre-built binaries are now
 available for users interested in running KDE on MacOS X via Fink.
</p>
<p>
 There are a large number of issues remaining before the port is truly
 complete, but the vast majority of KDE builds and runs just fine.
 The work-in-progress KDE source tree is being graciously hosted by the
 folks at <a href="http://www.opendarwin.org/">OpenDarwin</a>. More info
 on our progress and things that need to be done are regularly updated
 in the <a href="http://www.opendarwin.org/cgi-bin/cvsweb.cgi/proj/KDE-Darwin/README.Darwin?rev=HEAD&auml;content-type=text/x-cvsweb-markup">README.Darwin</a>
 file available at the top of the KDE-Darwin tree.
</p>

<h1>Big Fat Warning!</h1>

<p>
 While a number of us on the Fink team have been running KDE on
 MacOS X for a couple of weeks now, this is still very definitely
 a work-in-progress.  There are no guarantees that it won't
 delete your hard drive, kill your dog, put water in your gas
 tank, or make parts of your body randomly explode.  While we've
 tried to make sure things are at least in a usable state, your
 mileage may vary, doubly so if you're using the pre-built
 binaries.  If you are not comfortable with working with beta
 software, or working in the unstable distribution of Fink,
 you are better off waiting for KDE to move into the stable tree.
 In other words, don't say we didn't warn you!  =)
</p>

<h1>Installing KDE On Fink</h1>

<p>
 First, make sure you are comfortable with the instructions on 
 building and/or installing packages in the <a
 href="http://fink.sourceforge.net/doc/users-guide/index.php">Fink User's Guide</a>.
</p>

<p>
 There are two ways to install the KDE packages via Fink:
</p>
<ul>
 <li>
  <p>
   <strong>
	Install from source packages in the unstable tree.
   </strong>
  </p>
  <p>
   First of all, make sure you have the unstable distribution enabled in your fink
   configuration.  If you used the defaults when installing fink, just:
  </p>
  <p>
   <ol>
	<li> <p><strong> Add the unstable tree(s) to your /sw/etc/fink.conf. </strong></p>
	 <p> Add <b>"unstable/main"</b> (without the quotes) to the "<b>Trees:</b>"
	 line in fink.conf.  If US export laws allow it, you can add
	 <b>"unstable/crypto"</b> as well (required for HTTPS support in the Konqueror
	 browser). </p> </li>
	<li> <p><strong> Update your package index. </strong></p>
	 <p>Run "<b><tt>fink selfupdate-cvs</tt></b>" in a terminal window to get the
	 latest package descriptions from the fink site.  If this is your first time
	 running it, it may ask you some questions.  If you don't know what to answer,
	 the defaults are perfectly safe. </p> </li>
	<li> <p><strong> Install KDE. </strong></p>
	 <p> If you want to install the base KDE system, run "<b><tt>fink install
	 kdebase3</tt></b>" (or, if you have crypto support, "<b><tt>fink install
	 kdebase3-ssl</tt></b>").  If you want to build all of the official KDE
	 distribution that has been ported, there is a convenience package that
	 will build everything for you.  Just run "<b><tt>fink install
	 bundle-kde</tt></b>". </p> </li>
	<li> <p><strong> Wait.  A long, long time. </strong></p>
	 <p> Seriously, building all of bundle-kde from scratch took over 24 hours
	 on a G4/800 with 640MB RAM.  This is not a small project to build -- if
	 you really want to build from source, be prepared to spend some time
	 doing something other than using your computer.  :) </p> </li>
   </ol>
  </p>
 </li>
 <li>
  <p>
   <strong>
	Install from pre-build binary packages with apt or dselect.
   </strong>
  </p>
  <ol>
  <li>
   <p>First add the following line to your <i>/sw/etc/apt/sources.list</i> file:</p>
   <p>
	 <nobr><b><tt>deb http://us.dl.sourceforge.net/fink/direct_download fink-kde main</tt></b></nobr>
   </p>
   <p>If export laws in the US allow exporting strong cryptography to your country,
   you can instead use this line which will allow you (besides other things) to access
   secure web pages in konqueror:
   </p>
   <p>
	 <nobr><b><tt>deb http://us.dl.sourceforge.net/fink/direct_download fink-kde main crypto</tt></b></nobr>
   </p>
  </li>
  <li>
   <p>Next, update your package cache by running <b><tt>apt-get update</tt></b>. This
   will update the local list of all available binary packages.</p>
  </li>
  <li>
   If all went well, you should now be able to install any of the KDE packages. To
   install everything up to the the base set of packages required to run KDE
   apps, run <b><tt>sudo apt-get install kdebase3</tt></b> (or
   <b><tt>sudo apt-get install kdebase3-ssl</tt></b> if you enabled crypto support in step 1).
   If you want to install all of the official KDE packages that have been
   ported so far, run <b><tt>sudo apt-get install bundle-kde</tt></b>.  Alternatively
   you can also select and install individual packages via the <b><tt>dselect</tt></b>
   command in an interactive fashion.
  </li>
  </ol>
 </li>
</ul>

<h1>If You Have Problems...</h1>
<p>
 ...please check the
 <a href="http://fink.sourceforge.net/lists/index.php">list archives</a> and
 <a href="http://sourceforge.net/tracker/?atid=117203&auml;group_id=17203">bug tracker</a>
 before posting questions.  You can also try the
 <b><a href="http://www.aquaflux.org/~fink/">#fink</a></b> channel on
 The <a href="http://www.openprojects.net/">OpenProjects IRC network</a>
 (<b>irc.openprojects.net</b>).  A number of the people involved in the
 KDE port usually hang out there.
</p>

<?
include "footer.inc";
?>
