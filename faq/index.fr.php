<?
$title = "Q.F.P.";
$cvs_author = 'Author: michga';
$cvs_date = 'Date: 2004/04/13 22:31:06';
$metatags = '<link rel="contents" href="index.php?phpLang=fr" title="Q.F.P. Contents"><link rel="next" href="general.php?phpLang=fr" title="Questions générales">';

include_once "header.inc";
?>

<h1>Fink - Q.F.P.</h1>
<p><b>En cours de traduction</b></p>
<p>Voici la liste des questions fréquemment posées sur Fink. Comme la plupart des QFP, une partie correspond à des questions réelles, d'autres ont été élaborées spécialement pour ces QFP. Il s'agit en fait d'un document écrit dans le style question-réponse.</p>
<p>Ces QFP comprennent plusieurs pages, une par chapitre. Le sommaire ci-dessous donne la liste de toutes les questions ainsi qu'un lien pour chacune d'elles.</p>
<h2>Contents</h2><ul>
	<li><a href="general.php?phpLang=fr"><b>1 Questions générales</b></a><ul><li><a href="general.php?phpLang=fr#what">1.1 Qu'est-ce que Fink ?</a></li><li><a href="general.php?phpLang=fr#naming">1.2 Que signifie Fink ?</a></li><li><a href="general.php?phpLang=fr#bsd-ports">1.3 En quoi Fink se différencie-t-il du mécanisme de portage BSD (qui comprend OpenPackages et GNU-Darwin) ?</a></li><li><a href="general.php?phpLang=fr#usr-local">1.4 Pourquoi Fink n'installe rien dans /usr/local ?</a></li><li><a href="general.php?phpLang=fr#why-sw">1.5 Pourquoi avoir choisi /sw ?</a></li></ul></li><li><a href="relations.php?phpLang=fr"><b>2 Relations avec d'autres projets</b></a><ul><li><a href="relations.php?phpLang=fr#upstream">2.1 Envoyez-vous aux mainteneurs situés en amont de vous les rustines que vous faites ?</a></li><li><a href="relations.php?phpLang=fr#debian">2.2 Quelles sont vos relations avec le projet Debian ? Portez-vous Debian Linux sur Mac OS X ?</a></li><li><a href="relations.php?phpLang=fr#apple">2.3 Quelles sont vos relations avec Apple ?</a></li><li><a href="relations.php?phpLang=fr#openosx">2.4 Quelles sont vos relations avec OpenOSX.com ?</a></li><li><a href="relations.php?phpLang=fr#forked">2.5 Quelles sont vos relations avec macosx.forked.net ?</a></li><li><a href="relations.php?phpLang=fr#darwinports">2.6 Quelles sont vos relations avec Darwinports ?</a></li></ul></li><li><a href="mirrors.php?phpLang=fr"><b>3 Miroirs de Fink</b></a><ul><li><a href="mirrors.php?phpLang=fr#when-use">3.1 Qu'est-ce qu'un miroir Fink ?</a></li><li><a href="mirrors.php?phpLang=fr#why">3.2 Pourquoi utiliser des miroirs rsync ?</a></li><li><a href="mirrors.php?phpLang=fr#where">3.3 Où trouver de plus amples informations sur les miroirs Fink ?</a></li><li><a href="mirrors.php?phpLang=fr#when-not">3.4 Impossible de se connecter au serveur rsync. Que faire ?</a></li><li><a href="mirrors.php?phpLang=fr#otherinfogone">3.5 Après passage à la méthode rsync, tous les fichiers info des arborescences inutilisées ont disparu.</a></li><li><a href="mirrors.php?phpLang=fr#howswitch">3.6 Comment passer d'une méthode à une autre à volonté ?</a></li><li><a href="mirrors.php?phpLang=fr#status">3.7 Comment connaître l'état actuel des miroirs rsync ?</a></li><li><a href="mirrors.php?phpLang=fr#Master">3.8 Qu'est-ce qu'un miroir Distfiles ?</a></li></ul></li><li><a href="upgrade-fink.php?phpLang=fr"><b>4 Mise à jour de Fink (Résolution de problèmes spécifiques à une version donnée)</b></a><ul><li><a href="upgrade-fink.php?phpLang=fr#gcc-0.16.0">4.1 Après passage à la version 0.16.0, fink considère la version du compilateur gcc 3.3 installée sur le système comme obsolète. Que faire ?</a></li></ul></li><li><a href="usage-fink.php?phpLang=fr"><b>5 Installer, Utiliser et Entretenir Fink</b></a><ul><li><a href="usage-fink.php?phpLang=fr#what-packages">5.1 Comment savoir quels sont les paquets gérés par Fink ?</a></li><li><a href="usage-fink.php?phpLang=fr#proxy">5.2 Comment configurer fink pour utiliser un proxy HTTP quand on est derrière un mur pare-feu ?</a></li><li><a href="usage-fink.php?phpLang=fr#firewalled-cvs">5.3 Comment mettre à jour les paquets disponibles sur CVS lorsqu'on utilise un firewall ?</a></li><li><a href="usage-fink.php?phpLang=fr#moving">5.4 Est-il possible de déplacer Fink vers un autre dossier après
	l'installation ?</a></li><li><a href="usage-fink.php?phpLang=fr#moving-symlink">5.5 Est-ce que Fink fonctionnera correctement si on le déplace après installation et que l'on crée un lien symbolique vers l'ancien emplacement ?</a></li><li><a href="usage-fink.php?phpLang=fr#removing">5.6 Comment désinstaller la totalité de Fink ?</a></li><li><a href="usage-fink.php?phpLang=fr#bindist">5.7 La base de données des paquets sur le site web mentionne le paquet xxx, mais apt-get ou dselect eux ne le mentionnent pas. Qui a raison ?</a></li><li><a href="usage-fink.php?phpLang=fr#unstable">5.8 Comment installer un paquet instable quand la commande fink ne le trouve pas ('no package found') ?</a></li><li><a href="usage-fink.php?phpLang=fr#sudo">5.9 Comment ne plus avoir à saisir son mot de passe après la
	commande sudo ?</a></li><li><a href="usage-fink.php?phpLang=fr#exec-init-csh">5.10 À l'exécution de init.csh ou init.sh, un message d'erreur "Permission denied" apparaît. Que se passe-t-il ?</a></li><li><a href="usage-fink.php?phpLang=fr#dselect-access">5.11 Pourquoi est-il impossible de télécharger des paquets après avoir utilisé le menu "[A]ccess" dans dselect ?</a></li><li><a href="usage-fink.php?phpLang=fr#cvs-busy">5.12 Lors de l'exécution de <q>fink selfupdate</q> ou "fink
        selfupdate-cvs", le message "<code>Updating using CVS failed.
        Check the error messages above.</code>" apparaît.</a></li><li><a href="usage-fink.php?phpLang=fr#kernel-panics">5.13 Lors de l'utilisation de Fink, ma machine se fige, entre en kernel panic ou bien
	plante. À l'aide !</a></li><li><a href="usage-fink.php?phpLang=fr#not-found">5.14 Lors de l'installation d'un paquet, Fink ne peut le télécharger. Le site de téléchargement indique une version du paquet plus récente que celle de Fink. Que faire ?</a></li><li><a href="usage-fink.php?phpLang=fr#fink-not-found">5.15 Le message "command not found" apparaît au lancement de Fink ou de tout autre paquet installé via Fink.</a></li><li><a href="usage-fink.php?phpLang=fr#invisible-sw">5.16 Est-il possible de masquer le répertoire /sw dans le Finder pour éviter que les utilisateurs ne modifient les réglages de Fink ?</a></li><li><a href="usage-fink.php?phpLang=fr#install-info-bad">5.17 Impossible d'installer quoi que ce soit. Le message d'erreur suivant : "install-info: unrecognized option `--infodir=/sw/share/info'" apparaît.</a></li><li><a href="usage-fink.php?phpLang=fr#bad-list-file">5.18 Impossible de d'installer ou de supprimer quoi que ce soit à cause d'un problème "files list file".</a></li><li><a href="usage-fink.php?phpLang=fr#error-nineteen">5.19 Lors de l'utilisation du paquet d'installation binaire de Fink, un gros "19" apparaît dans la fenêtre et plus il n'est plus possible d'installer quoi que ce soit.</a></li><li><a href="usage-fink.php?phpLang=fr#dselect-garbage">5.20 La commande <code>dselect</code> produit un tas de lignes incompréhensibles. Comment éviter cela ?</a></li><li><a href="usage-fink.php?phpLang=fr#perl-undefined-symbol">5.21 Pourquoi des erreurs "dyld: perl undefined symbols" apparaissent à l'utilisation de commandes de Fink ?</a></li><li><a href="usage-fink.php?phpLang=fr#cant-upgrade">5.22 Impossible de mettre à jour Fink.</a></li><li><a href="usage-fink.php?phpLang=fr#spaces-in-directory">5.23 Est-il possible d'installer Fink sur un volume ou dans un répertoire contenant un espace dans le nom?</a></li><li><a href="usage-fink.php?phpLang=fr#packages-gz">5.24 Lors de la mise à jour binaire, de nombreux messages "File not found" apparaissent.</a></li><li><a href="usage-fink.php?phpLang=fr#wrong-tree">5.25 Après mise à jour du système ou des Developer Tools, Fink ne reconnaît pas le changement.</a></li><li><a href="usage-fink.php?phpLang=fr#seg-fault">5.26 Des erreurs apparaissent lors de l'utilisation de <code>gzip</code> ou <code>dpkg-deb</code> inclus dans le paquet <code>fileutils</code>.</a></li><li><a href="usage-fink.php?phpLang=fr#pathsetup-keeps-running">5.27 À l'ouverture d'une fenêtre de Terminal, le message "Your environment seems to be set up for Fink already" apparaît, puis le Terminal se déconnecte.</a></li></ul></li><li><a href="comp-general.php?phpLang=fr"><b>6 Problèmes de compilation généraux</b></a><ul><li><a href="comp-general.php?phpLang=fr#compiler">6.1 Un script configure signale qu'il ne peut trouver un "acceptable cc". De quoi s'agit-il ?</a></li><li><a href="comp-general.php?phpLang=fr#cvs">6.2 Lors de l'exécution de "fink selfupdate-cvs", le message : "cvs: Command not found." apparaît.</a></li><li><a href="comp-general.php?phpLang=fr#missing-make">6.3 Un message d'erreur relatif à <code>make</code> apparaît.</a></li><li><a href="comp-general.php?phpLang=fr#head">6.4 I'm getting a strange usage message from the head command. What's
        broken?</a></li><li><a href="comp-general.php?phpLang=fr#also_in">6.5 When I try to install a package I get an error message about trying
        to overwrite a file that is in another package.</a></li><li><a href="comp-general.php?phpLang=fr#weak_lib">6.6 After I installed the December 2002 Development Tools I get
        messages about "weak libraries".</a></li><li><a href="comp-general.php?phpLang=fr#mv-failed">6.7 What does "execution of mv failed, exit code 1" mean when I try to
        build a package?</a></li><li><a href="comp-general.php?phpLang=fr#node-exists">6.8 I can't install a package | update because I get a message that a
        "node" already exists.</a></li><li><a href="comp-general.php?phpLang=fr#usr-local-libs">6.9 I've heard that libraries installed in /usr/local/lib sometimes
        cause build problems for Fink. Is this true?</a></li><li><a href="comp-general.php?phpLang=fr#toc-out-of-date">6.10 When I try to build a package, I get a message that a "table of
        contents" is out of date. What do I need to do?</a></li><li><a href="comp-general.php?phpLang=fr#fc-atlas">6.11 Fink Commander hangs when I try to install atlas.</a></li><li><a href="comp-general.php?phpLang=fr#basic-headers">6.12 I get messages saying that I'm missing stddef.h. Where do I find
        it?</a></li><li><a href="comp-general.php?phpLang=fr#multiple-dependencies">6.13 I can't update, because Fink is "unable to resolve version conflict
        on multiple dependencies".</a></li><li><a href="comp-general.php?phpLang=fr#dpkg-parse-error">6.14 I can't install anything because I get "dpkg: parse error, in file
        `/sw/var/lib/dpkg/status'"!</a></li><li><a href="comp-general.php?phpLang=fr#freetype-problems">6.15 I get errors involving freetype.</a></li><li><a href="comp-general.php?phpLang=fr#dlfcn-from-oo">6.16 I get build errors involving `Dl_info'.</a></li><li><a href="comp-general.php?phpLang=fr#gcc2">6.17 Fink says I'm missing <code>gcc2</code> but I can't seem to
        install it.</a></li><li><a href="comp-general.php?phpLang=fr#system-java">6.18 Fink says <code>Failed: Can't resolve dependency "system-java14-dev"</code>, but there's no such package.</a></li><li><a href="comp-general.php?phpLang=fr#dpkg-split">6.19 When I try to install anything, I get <q>dpkg (subprocess): failed to exec dpkg-split to see if it's part of a multiparter: No such file or directory</q>.  How do I fix this?</a></li></ul></li><li><a href="comp-packages.php?phpLang=fr"><b>7 Compile Problems - Specific Packages</b></a><ul><li><a href="comp-packages.php?phpLang=fr#libgtop">7.1 A package fails to build with errors involving
        <code>sed</code>.</a></li><li><a href="comp-packages.php?phpLang=fr#cant-install-xfree">7.2 I want to switch to Fink's XFree86 packages, but I can't install
        <code>xfree86-base</code> | <code>xfree86</code>, because it conflicts
        with <code>system-xfree86</code>.</a></li><li><a href="comp-packages.php?phpLang=fr#change-thread-nothread">7.3 How do I change from the non-threaded version of Fink's XFree86
        packages to the threaded version (or vice-versa)?</a></li><li><a href="comp-packages.php?phpLang=fr#cctools">7.4 "When I try to install KDE, I get the following message: 'Can't
        resolve dependency "cctools (&gt;= 446-1)"'</a></li></ul></li><li><a href="usage-general.php?phpLang=fr"><b>8 Package Usage Problems - General</b></a><ul><li><a href="usage-general.php?phpLang=fr#xlocale">8.1 I'm getting lots of messages like "locale not supported by C
        library". Is that bad?</a></li><li><a href="usage-general.php?phpLang=fr#passwd">8.2 There are suddenly a number of strange users on my system, with
        names like "mysql", "pgsql", and "games". Where did they come
        from?</a></li><li><a href="usage-general.php?phpLang=fr#compile-myself">8.3 How do I compile something myself using Fink-installed
        software?</a></li><li><a href="usage-general.php?phpLang=fr#apple-x11-applications-menu">8.4 I can't run any of my Fink-installed applications using the
        Applications menu in Apple X11.</a></li><li><a href="usage-general.php?phpLang=fr#x-options">8.5 I'm bewildered by the X11 options: Apple X11, XFree86, etc. What
        should I install?</a></li><li><a href="usage-general.php?phpLang=fr#no-display">8.6 When I try to run an application, I get a message that says "cannot
        open display:". What do I need to do?</a></li><li><a href="usage-general.php?phpLang=fr#suggest-package">8.7 I don't see my favorite program in Fink. How do I suggest a new
        package for inclusion in Fink?</a></li><li><a href="usage-general.php?phpLang=fr#virtpackage">8.8 What are all these <code>system-*</code> "virtual
	  packages" that are sometimes present, but that I can't
	  seem to install or remove myself?</a></li></ul></li><li><a href="usage-packages.php?phpLang=fr"><b>9 Package Usage Problems - Specific Packages</b></a><ul><li><a href="usage-packages.php?phpLang=fr#xmms-quiet">9.1 I get no sound from XMMS</a></li><li><a href="usage-packages.php?phpLang=fr#nedit-window-locks">9.2 If I am editing a file in nedit, when I open another file its
        window pops up but is unresponsive.</a></li><li><a href="usage-packages.php?phpLang=fr#xdarwin-start">9.3 Help! When I start XDarwin, it immediately quits!</a></li><li><a href="usage-packages.php?phpLang=fr#no-server">9.4 When I try to start XDarwin I get the message "xinit: No such file
        or directory (errno 2): no server "/usr/X11R6/bin/X" in PATH".</a></li><li><a href="usage-packages.php?phpLang=fr#xterm-error">9.5 xterm fails with "dyld: xterm Undefined symbols: xterm undefined
        reference to _tgetent expected to be defined in
        /usr/lib/libSystem.B.dylib".</a></li><li><a href="usage-packages.php?phpLang=fr#libXmuu">9.6 When I try to start XFree86 I get one of the following errors:
        "dyld: xinit can't open library: /usr/X11R6/lib/libXmuu.1.dylib" or
        "dyld: xinit can't open library: /usr/X11R6/lib/libXext.6.dylib"</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x-bugs">9.7 I had Fink's XFree86 installed, and I've replaced it with Apple's
        X11, and now everything's crashing!</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x-delete">9.8 I want the delete key in Apple's X11.app to behave like that in
        XDarwin.</a></li><li><a href="usage-packages.php?phpLang=fr#gnome-two">9.9 I upgraded from GNOME 1.x to GNOME 2.x and now
        <code>gnome-session</code> won't open a window manager.</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x11-no-windowbar">9.10 I upgraded to Apple's X11 in Panther and now my window title bars
        are missing.</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x11-wants-xfree86">9.11 I installed Apple's X11 in Panther but Fink keeps asking to install
        xfree86.</a></li><li><a href="usage-packages.php?phpLang=fr#apple-x11-beta-wants-xfree86">9.12 I installed Apple's X11 with the 10.2-gcc3.3 version of Fink but
        Fink keeps asking to install xfree86.</a></li><li><a href="usage-packages.php?phpLang=fr#wants-xfree86-on-upgrade">9.13 I switched from the 10.2 Fink version to 10.2-gcc3.3 or 10.3, I have Apple's X11, and Fink asks me to install XFree86.</a></li></ul></li></ul><!--Generated from $Fink: faq.fr.xml,v 1.18 2004/04/13 22:31:06 michga Exp $-->

<? include_once "footer.inc"; ?>
