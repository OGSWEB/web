<?
$title = "Advanced - Binary Distro Server";
$cvs_author = 'Author: alexkhansen';
$cvs_date = 'Date: 2005/01/20 01:33:08';
$metatags = '<link rel="contents" href="index.php?phpLang=en" title="Advanced Contents"><link rel="prev" href="index.php?phpLang=en" title="Advanced Contents">';


include_once "header.en.inc";
?>
<h1>Advanced - 1. Running your own Binary Distribution Server</h1>
    
    
    <h2><a name="intro">1.1 Introduction</a></h2>
      
      <p>
This section describes a method for workgroups of more than one Fink
installation to use a central build server ("master") that distributes binary
packages to all clients in the group.
      </p>
      <p>
(<b>Note:</b>: These instructions assume that you have a fink version &gt;= 0.24.0
on your client machines. Read at the 
<a href="#remarks">remarks below</a> if you are using older fink
versions.)
      </p>
      <p>
The method involves the following steps on the 
<a href="#master">"master" server</a> and on the
<a href="#client">client machines</a>:
      </p>
    
    <h2><a name="master">1.2 On the "master" (build) server</a></h2>
      
      <ol>
        <li>
Install Fink at the <code>/sw</code> (default) prefix (use a symlink if necessary).
        </li>
        <li>
Build packages as usual -- they don't necessarily have to be installed, just
built.
        </li>
        <li>
Run <code>fink scanpackages</code> whenever your set of built
packages has changed. This will make fink generate apt indexes for all of your
enabled trees.
        </li>
        <li>
Start a web server:  E.g. enable "Personal Web Sharing" in the Sharing section
of System Preferences. Then set up httpd to serve your <code>/sw/fink</code>
directory by adding the following lines to your
<code>/etc/httpd/httpd.conf</code> file. 
        </li>
        <li>
          <pre>
Alias /fink /sw/fink
&lt;Directory /sw/fink&gt;
  Options Indexes FollowSymLinks
&lt;/Directory&gt;
          </pre>
        </li>
        <li>
Run <code>sudo /usr/sbin/apachectl graceful</code> to (re)start your
web server.
        </li>
      </ol>
      <p>
Remember to re-run <code>fink scanpackages</code> whenever you
build/update packages on the "master" server to make them available to your
remote machines.
      </p>
      <p>
Notes:
      </p>
      <p>
You could also create a user 'fink' and add the above lines to 
<code>/etc/httpd/users/fink.conf</code>.
      </p>
      <p>
If you use the apache2 package from Fink adjust the paths above accordingly.
      </p>
    
    <h2><a name="client">1.3 On the client machines</a></h2>
      
      <ol>
        <li>
Install Fink at the <code>/sw</code> (default) prefix.
        </li>
        <li>
Run <code>fink configure</code> and enable the option to download
packages from the binary distribution. ("UseBinaryDist: true" in the
<code>/sw/etc/fink.conf</code> file.)
        </li>
        <li>
Edit <code>/sw/etc/apt/sources.list</code>, and add the lines
representing your Fink trees. For example, if the IP address of your build box
is 192.168.42.7, you need to add:
          <pre>
deb http://192.168.42.7/fink stable main crypto
deb http://192.168.42.7/fink unstable main crypto
deb http://192.168.42.7/fink local main
          </pre>
        </li>
        <li>
Run <code>fink selfupdate</code>. You should see something like:
          <pre>
...
Hit http://192.168.42.7 stable/main Packages
Hit http://192.168.42.7 stable/main Release
Hit http://192.168.42.7 stable/crypto Packages
...
          </pre>
towards the end of the update process (if the verbose level is &gt;= 1).
        </li>
      </ol>
      <p>
Running <code>fink update-all</code> or <code>fink install
&lt;package&gt;</code> will now download the necessary packages as
binaries from the "master" server if available.
      </p>
    
    <h2><a name="remarks">1.4 Remarks</a></h2>
      
      <p>
Your "master" server needs to use the lowest version of X11 that you're using
on all of the clients, i.e. if any of the client machines uses Apple's X11, the
"master" server must use it too.
      </p>
      <p>
If you are using a fink version &lt; 0.24.0 on a client machine you need to run
<code>sudo apt-get update</code> instead of <code>fink selfupdate</code>. You
then need to install binary packages with <code>sudo apt-get install
&lt;package&gt;</code>.  
      </p>
      <p>
This documentation is adapted in part from
<a href="http://ranger.befunk.com/blog/archives/000258.html">"Sharing the Fink"</a>
by RangerRick. Thanks!
      </p>
    
  
<? include_once "../../footer.inc"; ?>


