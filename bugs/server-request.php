<?
$title = "Fink bug system - bug logs by mail server";
$cvs_author = '$Author: beren12 $';
$cvs_date = '$Date: 2005/01/22 23:37:59 $';

include "header.inc";
?>

<h1><a name="introduction">Introduction to the bug system request server</a></h1>

<p>There is a mailserver which can send the bug reports and
indices as plain text on request.

<p>To use it you send a mail message to
<a href="mailto:request@bugs.finkproject.org"><code>request@bugs.finkproject.org</code></a>.
The <code>Subject</code> of the message is ignored, except
for generating the <code>Subject</code> of the reply.

<p>The body you send should be a series of commands, one per line.
You'll receive a reply which looks like a transcript of your message
being interpreted, with a response to each command.  No notifications
are sent to anyone for most commands; however, the messages are logged
and made available in the WWW pages.

<p>Any text on a line starting with a hash sign <code>#</code> is
ignored; the server will stop processing when it finds a line starting
with <code>quit</code>, <code>stop</code>, <code>thank</code> or two
hyphens (to avoid parsing a signature).  It will also stop if it
encounters too many unrecognised or badly-formatted commands.  If no
commands are successfully handled it will send the help text for the
server.

<h1>Commands available</h1>

<dl>
<dt><code>send</code> <var>bugnumber</var>
<dt><code>send-detail</code> <var>bugnumber</var>

  <dd>Requests the transcript for the bug report in question.
  <code>send-detail</code> sends all of the `boring' messages in the
  transcript as well, such as the various auto-acks.

<dt><code>index</code> [<code>full</code>]
<dt><code>index-summary by-package</code>
<dt><code>index-summary by-number</code>

  <dd>Request the full index (with full details, and including done and
  forwarded reports), or the summary sorted by package or by number,
  respectively.

<dt><code>index-maint</code>

  <dd>Requests the index page giving the list of maintainers with bugs
  (open and recently-closed) in the tracking system.

<dt><code>index maint</code> <var>maintainer</var>

  <dd>Requests the index pages of bugs in the system for the maintainer
  <var>maintainer</var>.  The search term is an exact match.
  The bug index will be sent in a separate message.

<dt><code>index-packages</code>

  <dd>Requests the index page giving the list of packages with bugs (open
  and recently-closed) in the tracking system.

<dt><code>index packages</code> <var>package</var>

  <dd>Requests the index pages of bugs in the system for the package
  <var>package</var>.  The search term is an exact match.
  The bug index will be sent in a separate message.

<dt><code>send-unmatched</code> [<code>this</code>|<code>0</code>]
<dt><code>send-unmatched</code> <code>last</code>|<code>-1</code>
<dt><code>send-unmatched</code> <code>old</code>|<code>-2</code>

  <dd>Requests logs of messages not matched to a particular bug report,
  for this week, last week and the week before.  (Each week ends on a
  Wednesday.)

<dt><code>getinfo</code> <var>filename</var>

  <dd>Request a file containing information about package(s) and or
  maintainer(s) - the files available are:

  <dl compact>
  <dt><code>maintainers</code>
    <dd>The unified list of packages' maintainers, as used by the tracking
    system.

    

    <!-- Override file quivilent information -->

  <dt><code>pseudo-packages.description</code>
  <dt><code>pseudo-packages.maintainers</code>
    <dd>List of descriptions and maintainers respectively for
    pseudo-packages.
  </dl>

<dt><code>refcard</code>

  <dd>Requests that the mailservers' reference card be sent in plain ASCII.

<dt><code>help</code>

  <dd>Requests that this help document be sent by email in plain ASCII.

<dt><code>quit</code>
<dt><code>stop</code>
<dt><code>thank</code>...
<dt><code>--</code>...

  <dd>Stops processing at this point of the message.  After this you may
  include any text you like, and it will be ignored.  You can use this
  to include longer comments than are suitable for <code>#</code>, for
  example for the benefit of human readers of your message (reading it
  via the tracking system logs or due to a <code>CC</code> or
  <code>BCC</code>).

<dt><code>#</code>...

  <dd>One-line comment.  The <code>#</code> must be at the start of the
  line.

<dt><code>debug</code> <var>level</var>

  <dd>Sets the debugging level to <var>level</var>, which should be a
  nonnegative integer.  0 is no debugging; 1 is usually sufficient.  The
  debugging output appears in the transcript.  It is not likely to be
  useful to general users of the bug system.

</dl>

<p>There is a <a href="server-refcard.php">reference card</a> for the
mailservers, available via the WWW, in
<code>bug-mailserver-refcard.txt</code> or by email using the
<code>refcard</code> command (see above).

<p>If you wish to manipulate bug reports you should use the
<code>control@gEmailDomain</code> address, which understands a
<a href="server-control.php">superset of the commands listed
above</a>.  This is described in another document, available on the
<a href="server-control.php">WWW</a>, in the file
<code>bug-maint-mailcontrol.txt</code>, or by
sending <code>help</code> to <code>control@bugs.finkproject.org</code>.

<p>In case you are reading this as a plain text file or via email: an
HTML version is available via the bug system main contents page
<code>http://bugs.finkproject.org/bugs/</code>.

<hr>

<p>Other pages:
<ul>
  <li><a href="./">bug tracking system main contents page.</a>
  <li><a href="Reporting.php">Instructions for reporting bugs.</a>
  <li><a href="Access.php">Accessing the bug tracking logs other than by WWW.</a>
  <li><a href="Developer.php">Developers' information regarding the bug processing system.</a>
  <li><a href="server-control.php">Developers' information - bug manipulation using the email control interface.</a>
  <li><a href="server-refcard.php">Mailservers' reference card.</a>
  <li><a href="http://bugs.finkproject.org/db/ix/full.html">Full list of outstanding and recent bug reports.</a>
  <li><a href="http://bugs.finkproject.org/db/ix/packages.html">Packages with bug reports.</a>
  <li><a href="http://bugs.finkproject.org/db/ix/maintainers.html">Maintainers of packages with bug reports.</a>

</ul>

<HR>
 <ADDRESS>Chris Zubrzycki &lt;<A HREF="mailto:beren@mac.com">beren@mac.com</A>&gt;.
 Last modified:
 <!--timestamp-->
 Tue,  7 Sep 2004 17:39:55 UTC
 <!--timestamp-->
	  
 <P>
 <A HREF="http://bugs.finkproject.org/bugs/">Fink bug tracking system</A><BR>
 Copyright (C) 1999 Darren O. Benham,
 1997 nCipher Corporation Ltd,
 1994-97 Ian Jackson.
 </ADDRESS>

<p>
<a href="../index.php">Back Home</a> - <a href="download/index.php">Download</a>
</p>
<?
include "footer.inc";
?>
