<?
$title = "Paquets";
$cvs_author = 'Author: michga';
$cvs_date = 'Date: 2004/03/19 17:52:07';
$metatags = '<link rel="contents" href="index.php?phpLang=fr" title="Paquets Contents"><link rel="next" href="intro.php?phpLang=fr" title="Introduction">';

include_once "header.inc";
?>

<h1>Création de paquets Fink</h1>
<p>
Ce document explique comment créer des descriptions de paquets pour le gestionnaire de paquets de Fink.
Il fournit aussi des règles et un fil conducteur pour la distribution Fink.
Le format des fichiers de description et les règles de distribution sont en constante évolution. Il faut donc regarder en bas de page la ligne "Last changed..." pour détecter les changements.
Les informations contenues dans ce document correspondent à la description du format et des règles utilisées dans les versions de développement postérieures à la version 0.9.0 du gestionnaire de paquets fink.
</p>
<p>
Si vous créez des paquets pour Fink, vous avez tout intérêt à vous abonner à la liste de diffusion 
<a href="http://lists.sourceforge.net/lists/listinfo/fink-devel">fink-devel</a>.
Si vous cherchez un moyen d'aider Fink et que vous avez des compétences dans ce domaine, vous pouvez aussi adopter un <a href="http://fink.sourceforge.net/pdb/nomaintainer.php">paquet sans mainteneur</a>.
</p>
<h2>Contents</h2><ul>
	<li><a href="intro.php?phpLang=fr"><b>1 Introduction</b></a><ul><li><a href="intro.php?phpLang=fr#def1">1.1 Qu'est-ce qu'un paquet ?</a></li><li><a href="intro.php?phpLang=fr#ident">1.2 Identification d'un paquet</a></li></ul></li><li><a href="format.php?phpLang=fr"><b>2 Descriptions de paquets</b></a><ul><li><a href="format.php?phpLang=fr#trees">2.1 Arborescence</a></li><li><a href="format.php?phpLang=fr#format">2.2 Format de fichier</a></li><li><a href="format.php?phpLang=fr#percent">2.3 Raccourcis %</a></li></ul></li><li><a href="policy.php?phpLang=fr"><b>3 Packaging Policy</b></a><ul><li><a href="policy.php?phpLang=fr#licenses">3.1 Package Licenses</a></li><li><a href="policy.php?phpLang=fr#prefix">3.2 Base System Interference</a></li><li><a href="policy.php?phpLang=fr#sharedlibs">3.3 Shared Libraries</a></li><li><a href="policy.php?phpLang=fr#perlmods">3.4 Perl Modules</a></li><li><a href="policy.php?phpLang=fr#emacs">3.5 Emacs Policy</a></li></ul></li><li><a href="fslayout.php?phpLang=fr"><b>4 Filesystem Layout</b></a><ul><li><a href="fslayout.php?phpLang=fr#fhs">4.1 The Filesystem Hierarchy Standard</a></li><li><a href="fslayout.php?phpLang=fr#dirs">4.2 The Directories</a></li><li><a href="fslayout.php?phpLang=fr#avoid">4.3 Things to Avoid</a></li></ul></li><li><a href="reference.php?phpLang=fr"><b>5 Reference</b></a><ul><li><a href="reference.php?phpLang=fr#build">5.1 The Build Process</a></li><li><a href="reference.php?phpLang=fr#fields">5.2 Fields</a></li><li><a href="reference.php?phpLang=fr#splitoffs">5.3 SplitOffs</a></li><li><a href="reference.php?phpLang=fr#scripts">5.4 Scripts</a></li><li><a href="reference.php?phpLang=fr#patches">5.5 Patches</a></li><li><a href="reference.php?phpLang=fr#profile.d">5.6 Profile.d scripts</a></li></ul></li></ul><!--Generated from $Fink: packaging.fr.xml,v 1.1 2004/03/19 17:52:07 michga Exp $-->

<? include_once "footer.inc"; ?>