<?
$title = "Ejecutando X11";
$cvs_author = 'Author: michga';
$cvs_date = 'Date: 2004/10/25 10:15:38';
$metatags = '<link rel="contents" href="index.php?phpLang=es" title="Ejecutando X11 Contents"><link rel="next" href="intro.php?phpLang=es" title="Introduction">';


include_once "header.es.inc";
?>
<h1>Ejecutando X11 en Darwin y Mac OS X</h1>
    <p>
Este documento es sobre la ejecución de  X11 / XFree86 / Xtools en los sistemas 
Mac OS X y Darwin de Apple.
Proporciona una introducción y una historia del desarrollo y, a partir de ahí, 
describe el estado actual del arte y las múltiples elecciones disponibles para 
utilizar X11 con/sin  Fink.
</p>
  <h2><? echo FINK_CONTENTS ; ?></h2><ul>
	<li><a href="intro.php?phpLang=es"><b>1 Introduction</b></a><ul><li><a href="intro.php?phpLang=es#def-x11">1.1 ¿Qué es X11?</a></li><li><a href="intro.php?phpLang=es#def-macosx">1.2 ¿Qué es Mac OS X?</a></li><li><a href="intro.php?phpLang=es#def-darwin">1.3 ¿Qué es Darwin?</a></li><li><a href="intro.php?phpLang=es#def-xfree86">1.4 ¿Qué es XFree86?</a></li><li><a href="intro.php?phpLang=es#def-xtools">1.5 ¿Qué es Xtools?</a></li><li><a href="intro.php?phpLang=es#client-server">1.6 Cliente y servidor</a></li><li><a href="intro.php?phpLang=es#rootless">1.7 ¿Qué significa "rootless" (desarraigado)?</a></li><li><a href="intro.php?phpLang=es#wm">1.8 ¿Qué es un gestor de ventanas (window manager)?</a></li><li><a href="intro.php?phpLang=es#desktop">1.9 ¿Qué son Quartz/Aqua, Gnome y KDE?</a></li></ul></li><li><a href="history.php?phpLang=es"><b>2 Historia</b></a><ul><li><a href="history.php?phpLang=es#early">2.1 Los primeros días de la creación</a></li><li><a href="history.php?phpLang=es#xonx-forms">2.2 XonX forms</a></li><li><a href="history.php?phpLang=es#root-or-not">2.3 To root or not to root</a></li></ul></li><li><a href="inst-xfree86.php?phpLang=es"><b>3 Obteniendo e instalando XFree86</b></a><ul><li><a href="inst-xfree86.php?phpLang=es#fink">3.1 Instalando a través de Fink</a></li><li><a href="inst-xfree86.php?phpLang=es#apple-binary">3.2 Binarios de Apple</a></li><li><a href="inst-xfree86.php?phpLang=es#official-binary">3.3 Binarios oficiales</a></li><li><a href="inst-xfree86.php?phpLang=es#official-source">3.4 Fuentes oficiales</a></li><li><a href="inst-xfree86.php?phpLang=es#latest-cvs">3.5 Versión para desarrolladores: lo último</a></li><li><a href="inst-xfree86.php?phpLang=es#macgimp">3.6 MacGimp</a></li><li><a href="inst-xfree86.php?phpLang=es#switching-x11">3.7 Reemplazando X11</a></li><li><a href="inst-xfree86.php?phpLang=es#fink-summary">3.8 Índice de paquetes Fink</a></li></ul></li><li><a href="run-xfree86.php?phpLang=es"><b>4 Arrancando XFree86</b></a><ul><li><a href="run-xfree86.php?phpLang=es#darwin">4.1 Darwin</a></li><li><a href="run-xfree86.php?phpLang=es#macosx-41">4.2 Mac OS X + XFree86 4.x.y</a></li><li><a href="run-xfree86.php?phpLang=es#xinitrc">4.3 El fichero .xinitrc</a></li></ul></li><li><a href="xtools.php?phpLang=es"><b>5 Xtools</b></a><ul><li><a href="xtools.php?phpLang=es#install">5.1 Instalando Xtools</a></li><li><a href="xtools.php?phpLang=es#run">5.2 Ejecutando Xtools</a></li><li><a href="xtools.php?phpLang=es#opengl">5.3 Notas sobre OpenGL</a></li></ul></li><li><a href="other.php?phpLang=es"><b>6 Otras posibilidades X11</b></a><ul><li><a href="other.php?phpLang=es#vnc">6.1 VNC</a></li><li><a href="other.php?phpLang=es#wiredx">6.2 WiredX</a></li><li><a href="other.php?phpLang=es#exodus">6.3 eXodus</a></li></ul></li><li><a href="trouble.php?phpLang=es"><b>7 Resolviendo problemas con XFree86</b></a><ul><li><a href="trouble.php?phpLang=es#immedate-quit">7.1 Cuando lanzo XDarwin, termina o se cuelga inmediatamente.</a></li><li><a href="trouble.php?phpLang=es#black">7.2 Iconos negros en el panel GNOME panel o en el menú de una aplicación GNOME</a></li><li><a href="trouble.php?phpLang=es#keyboard">7.3 El teclado no funciona en XFree86</a></li><li><a href="trouble.php?phpLang=es#delete-key">7.4 La tecla de borrar no funciona</a></li><li><a href="trouble.php?phpLang=es#locale">7.5 "Warning: locale not supported by C library"</a></li></ul></li><li><a href="tips.php?phpLang=es"><b>8 Consejos de uso</b></a><ul><li><a href="tips.php?phpLang=es#terminal-app">8.1 Arrancar aplicaciones X11 desde Terminal.app</a></li><li><a href="tips.php?phpLang=es#open">8.2 Lanzando aplicaciones Aqua desde un xterm</a></li><li><a href="tips.php?phpLang=es#copy-n-paste">8.3 Copiar y Pegar</a></li></ul></li></ul>
<!--Generated from $Fink: x11.es.xml,v 1.1 2004/10/25 10:15:38 michga Exp $-->
<? include_once "../../footer.inc"; ?>


