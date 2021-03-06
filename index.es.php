<?php
$title      = "Home";
$cvs_author = '$Author: gecko2 $';
$cvs_date   = '$Date: 2012/11/11 14:54:25 $';
$is_home    = 1;

$metatags = '<meta name="description" content="Fink, una distribución de software de Unix para Mac OS X y Darwin">
<meta name="keywords" content="Mac OS X, Darwin, GNU, Unix, GNOME, KDE, software, distribution, Fink">
';

require dirname(__FILE__) . "/header.inc";
?>


<p>
El proyecto de Fink desea traer el gran mundo del software de Unix de <a href="http://www.opensource.org/">Código Abierto</a> a
<a href="http://www.opensource.apple.com/">Darwin</a> y al 
<a href="http://www.apple.com/macosx/">Mac OS X</a>.
Nosotros modificamos el software de UNIX de manera que pueda ser compilado
 y ejecutado en Mac OS X (lo "portamos") y lo hacemos disponible
 como una distribución coherente que se pueda descargar.
 Fink usa herramientas de  <a href="http://www.debian.org/">Debian</a>
 tales como dpkg y apt-get para proveer un poderoso manejo de paquetes.
Usted puede escoger entre la descarga de un binario precompilado o todo
desde código fuente. 
<a href="about.php">Más información...</a>
</p>


<table border="0" cellpadding="0" cellspacing="0" width="100%">
<tr valign="top"><td width="50%">

<h1><a href="<?php print $rdf_file; ?>" title="Noticias del Proyecto Fink" rel="alternate" type="application/rss+xml"><img src="img/feed-icon16x16.png"
alt="" style="border: 0"></a>&nbsp;Noticias</h1>
<?php
// Include news items
require dirname(__FILE__) . "/news/news.es.inc";
?>
<div align="right"><a href="<?php print $root; ?>news/index.php?phpLang=es">Noticias Antiguas...</a></div>


</td><td>&nbsp;&nbsp;&nbsp;</td><td width="50%">

<h1><a href="http://feeds2.feedburner.com/FinkProjectNews-stable" title="Actualizacions de paquetes en Fink (Stable)" rel="alternate" type="application/rss+xml"><img src="img/feed-icon16x16.png" alt=""
style="border:0"></a>&nbsp;Actualizaciones recientes de paquetes</h1>

<?php require "package-updates.inc" ?>

<a href="package-updates.php">más...</a>
</tr><tr valign="top"><td width="50%">
<h1>Estado de Fink</h1>
<?php 
require dirname(__FILE__) . "/fink_version.inc";
?>

<p>
Fink currently supports OS X 10.7 (Lion), 10.6 (SnowLeopard), and 10.5 
(Leopard), and continues to run on older versions of OS X, although
official updates are no longer available for the older versions.
Installation instructions can be found  on our <a href="download/srcdist.php">source
release page</a>.
</p>
<p>XCode must be installed before Fink.</p>
<strong>10.7 Support:</strong>
10.7 users must install or update XCode to version 4.1 or later
(via a free download from the AppStore).  Note that if you installed an
earlier version of XCode prior to updating, you need to <b>uninstall</b>
the old version first, by running
<i>/Developer/Library/uninstall-devtools</i> .
You can determine your current version of XCode by running
<i>xcodebuild -version</i> .</p>
<strong>10.6 Support:</strong>  For best results, 10.6 users are
encouraged to upgrade XCode to version 3.2.6, or to version 4.2.1 if you
paid for a 4.x Developer preview.  Version 4.0.2 is known to have some
bugs in its linker that prevent certain packages from building.  Follow
the instructions in the 10.7 section above regarding how to check your
version and uninstall it, if needed.</p>
<p>
<strong>10.5 Support:</strong>
Users are encouraged to update to OS 10.5.2 or later, via Software Update,
in order to get bugfixes and enhancements for X11.  Further unofficial updates
continue to be made available on the
<a href="http://trac.macosforge.org/projects/xquartz/wiki/Releases">XQuartz Update Page.</a>
We are not currently supporting Xquartz on 10.6 or 10.7.<br>
Users should also install Xcode 3.1 or later, preferably 3.1.4, to fix some
known problems in building packages.
</p>
</td><td>&nbsp;&nbsp;&nbsp;</td><td width="50%">
<h1>Recursos</h1>

<p>
Si estas buscando soporte, revisa la <a
href="help/index.php">página de ayuda</a>.
Esta página también lista varias opciones para ayudar al proyecto y
proporcionar retroalimentación.
</p>
<p>
If you are looking for the source files which correspond to
binaries distributed by the Fink project, please consult
<a href="download/sources_for_binaries.php">this page</a> for
instructions.
</p>
<p>
El proyecto Fink es albergado por
<a href="http://sourceforge.net/">SourceForge</a>.
Además de albergar el sitio y las descargas, SourceForge
provee los siguientes recursos al proyecto:
</p>
<ul>
<li><a href="http://sourceforge.net/projects/fink/">página de SourceForge del resúmen del proyecto </a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=117203&amp;group_id=17203">Reporte o revisión de bugs</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=371315&amp;group_id=17203">Solicitudes de un paquete que no esta en Fink</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=367203&amp;group_id=17203">Solicitar una caracteristica que no tenga Fink (el programa en sí)</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=414256&amp;group_id=17203">Someter un nuevo paquete a Fink (desarrolladores non-core)</a></li>
<li><a
href="http://sourceforge.net/tracker/?atid=317203&amp;group_id=17203">Someter un patch para fink (el programa)</a></li>
<li><a href="lists/index.php">Listas de Correo</a></li>
<li>CVS (<a href="http://fink.cvs.sourceforge.net/fink/">de
navegación en línea</a>, <a href="doc/cvsaccess/index.php">Instrucciones de acceso</a>)</li>
</ul>
<p>
Por favor, note que para hacer uso de algunos de estos recursos (ie. para
reportar un bug o solicitar un nuevo paquete de Fink), usted deberá estar
logeado en una cuenta del SourceForge.  Si no tiene dicha cuenta, deberá obtener una en el <a href="http://sourceforge.net/">sitio web del SourceForge</a>.
</p>
<p>Additional resources hosted outside SourceForge include:</p>
<ul>
    <li><a href="http://wiki.finkproject.org/">The Fink developer wiki</a> (now at a new location).</li>
    <li>
        <a href="https://github.com/fink/fink">
            New github repository for the source code of the <code>fink</code> package manager.
        </a>
    </li>
    <li>
        <a href="https://github.com/fink/fink-mirrors">
            New github repository for the <code>fink-mirrors</code> package.
        </a>
    </li>
</ul>

</td></tr></table>

<script type="text/javascript" language="JavaScript" src="http://db3.net-filter.com/script/13500.js"></script>
<noscript><img src="http://db3.net-filter.com/db.php?id=13500&amp;page=unknown" alt=""></noscript>

<?php
require dirname(__FILE__) . "/footer.inc";
?>
