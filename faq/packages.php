<?
$title = "F.A.Q. - Packages";
$cvs_author = 'Author: chrisp';
$cvs_date = 'Date: 2001/10/13 09:09:23';

$metatags = '<link rel="start" href="index.php" title="F.A.Q. Contents"><link rel="contents" href="index.php" title="F.A.Q. Contents"><link rel="prev" href="usage.php" title="Usage Questions">';

include "header.inc";
?>

<h1>F.A.Q. - Problems With Certain Packages</h1>



<a name="kde"><div class="question"><p><b>Q: Why are there no packages for
KDE?</b></p></div>
<div class="answer"><p><b>A:</b> 
Because there simply are none.
</p><p>
Seriously, KDE has (or at least had) serious problems that prevent a
port to Mac OS X.
It assumes it can do things with shared libraries that are only
possible on ELF systems like Linux, *BSD and Solaris.
It could very well be that some people are trying to port it
nevertheless, but we haven't heard of any breakthroughs yet.
Note that Qt is a different story, we have a package for it and it
works fine.
</p></div></a>



<a name="nedit"><div class="question"><p><b>Q: nedit is broken.</b></p></div>
<div class="answer"><p><b>A:</b> If you're seeing <tt><nobr>Xm/BulletinB.h: No such file or
directory</nobr></tt> in the error messages, that's because you have Xtools
installed. Xtools includes OpenMotif, but unfortunately Tenon forgot
to include some required header files. There is no workaround yet, and
it is unknown whether this is fixed in recent releases on Xtools.</p></div></a>

<a name="gnome-panel"><div class="question"><p><b>Q: The GNOME panel displays
black icons only. What's wrong?</b></p></div>
<div class="answer"><p><b>A:</b> 
This is caused by limitations in the operating system kernel.
The only solution so far is to turn off shared memory.
The Running X11 document has <a href="http://fink.sourceforge.net/doc/x11/trouble.php#black">details</a>.
</p></div></a>

<a name="gnome-libs-db"><div class="question"><p><b>Q: gnome-libs complains about
dbopen and lots of other stuff.</b></p></div>
<div class="answer"><p><b>A:</b> 
This can happen when you manually installed Berkeley DB 3 without
backward compatibility.
gnome-libs expects to find a DB 1.86 compatible interface.
Remove the DB 3 installation from /usr/local or replace it with one
that has DB 1.86 compatibility.
</p></div></a>

<a name="libiconv"><div class="question"><p><b>Q: libiconv fails with errors that
mention ANSI C++.</b></p></div>
<div class="answer"><p><b>A:</b> 
This happens when you link <tt><nobr>gcc</nobr></tt> to <tt><nobr>c++</nobr></tt>.
That causes all C code to be compiled as C++ code.
Unfortunately, C allows some things that C++ doesn't allow.
You should remove the symlink you created, or at least link it to
<tt><nobr>cc</nobr></tt> instead.
</p></div></a>

<a name="xlocale"><div class="question"><p><b>Q: I'm getting lots of messages
like "locale not supported by C library". Is that bad?</b></p></div>
<div class="answer"><p><b>A:</b> 
It's not bad, it just means that the program will use the default
English messages, date formats, etc.
The program will function normally otherwise.
The Running X11 document has <a href="http://fink.sourceforge.net/doc/x11/trouble.php#locale">details</a>.
</p></div></a>

<a name="xmms-quiet"><div class="question"><p><b>Q: I get no sound from
XMMS</b></p></div>
<div class="answer"><p><b>A:</b> 
Make sure you have the "eSound Output Plugin" selected in the XMMS
preferences.
For some strange reason, it selects the disk writer plugin as the
default.
</p><p>
If you still get no sound output or XMMS complains that it can't find
your sound card try this:
</p><ul>
<li>Make sure you haven't muted sound output in Mac OS X.</li>
<li>Run <tt><nobr>esdcat /usr/libexec/config.guess</nobr></tt> (or any other
file of a decent size).
If you hear a short noise, esound works and XMMS should work too if
it's configured correctly.
If you don't hear anything, esd isn't working for some reason.
You can try to start it up manually with <tt><nobr>esd &amp;</nobr></tt> and watch
the messages.
</li>
<li>
If it still doesn't work, check the permissions on
<tt><nobr>/tmp/.esd</nobr></tt> and <tt><nobr>/tmp/.esd/socket</nobr></tt>.
Those should have your normal user account as the owner.
If they aren't owned by you, kill esd if it's running, remove the
directory as root (<tt><nobr>sudo rm -rf /tmp/.esd</nobr></tt>), then start esd
again (as a normal user, not as root).
</li>
</ul><p>
Note that esd is designed to be run by a normal user, not by root.
It usually communicates via the file system socket
<tt><nobr>/tmp/.esd/socket</nobr></tt>.
You only need the <tt><nobr>-tcp</nobr></tt> and <tt><nobr>-port</nobr></tt> switches if
you want to run esd clients on another machine over the network.
</p></div></a>

<a name="gnome-terminal"><div class="question"><p><b>Q: Why won't gnome-terminal
start up?</b></p></div>
<div class="answer"><p><b>A:</b> 
There is a bug in Mac OS X 10.0.x that keeps gnome-terminal from
working.
The actual bug (file descriptior passing doesn't work) is masked by
another issue (ununual stack size limit), which was left as is to
produce an error message when gnome-terminal is started (thus
preventing even more confusion).
It is expected that this will be fixed in Mac OS X 10.1.
</p></div></a>

<a name="xfree-keymapping"><div class="question"><p><b>Q: I just upgraded to Mac
OS X 10.1 and now XFree86 always quits immediately. In the messages it
says "assert failed on line 454 of darwinKeyboard.c!". What's
wrong?</b></p></div> 
<div class="answer"><p><b>A:</b> 
This is a known problem on 10.1.
You must use the "Load from file" keymapping option since the default
option (loading it from the kernel) doesn't work anymore.
The setting is in the XDarwin Preferences dialog.
Be sure that a file is selected (e.g. USA.keymapping) - simply
activating the check box may not be sufficient with some versions.
If you can't get to the Preferences dialog because you disabled all
splash screens, you can delete
<tt><nobr>~/Library/Preferences/org.xfree86.XDarwin.plist</nobr></tt> to get it
back, then start XDarwin and go to the Preferences dialog while the
splash screen is displayed.
Alternatively, you can edit that file manually in a text editor to
enable the keymapping option (the UseKeymappingFile and KeymappingFile
bits).
</p><p>
As a last resort, you can run <tt><nobr>startx -- -quartz -keymap
USA.keymapping</nobr></tt> from Terminal.app.
If this still doesn't work, you have another problem in addition to
the keymapping problem that prevents XDarwin from starting.
You'll get a bunch of diagnostic messages in Terminal.app to help you
sort this out.
</p></div></a>





<?
include "footer.inc";
?>
