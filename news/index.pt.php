<?
$title = "News";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2011/07/27 23:06:25';
$metatags = '';

include_once "header.inc";
?>

<a name="2011-07-20%20Fink%20and%20Lion--updated."><span class="news-date">2011-07-20: </span><span class="news-headline">Fink and Lion--updated.</span></a><?php gray_line(); ?>
      <p>OS X 10.7 "Lion" was released on July 20, 2011.  We want to let Fink
      users know what to expect if updating.</p>
<p>First, the <code>fink</code> 
program itself will not run  on a system which has
been upgraded to Lion.  However, it will be possible to use the
<code>dpkg</code> program to extract a list of the Fink packages
which had been installed under 10.6, so that they can be reinstalled
under 10.7.  Use</p>
<p><code>dpkg --get-selections | cut -f1 &gt; fink_packages.txt</code></p>
<p>to extract the packages, and</p>
<p><code>cat fink_packages.txt | xargs fink install</code></p>
<p>once you have installed Fink for 10.7.</p>
<p>To upgrade Fink after upgrading to Lion, one will have to bootstrap
Fink again, using a tarball for <code>fink-0.31.0</code> or later.</p>
<p>Second, due to lots of changes under the hood, there currently are many fewer
Fink packages which build under 10.7 as opposed to 10.6.
Thus, even if you've extracted a list of Fink packages which had
been installed under 10.6, some of them may not yet be installable under
10.7.  We are currently creating a database showing which packages
can be successfully installed under 10.7, and work is ongoing to add packages.</p>
<p>10.7 introduces several drastic changes to how the system works. While this may
cause a slight delay in full Fink functionality in the short term, it will
make Fink work better in the future.</p>
    <a name="2011-07-16%20Fink%20and%20Lion."><span class="news-date">2011-07-16: </span><span class="news-headline">Fink and Lion.</span></a><?php gray_line(); ?>
      <p>Apple has announced that OS X 10.7 "Lion" will be released 
in July.  We want to let Fink users know what to expect when Lion is 
released.</p>
<p>First, the <code>fink</code> 
program itself will not run  on a system which has
been upgraded to Lion.  However, it will be possible to use the
<code>dpkg</code> program to extract a list of the Fink packages
which had been installed under 10.6, so that they can be reinstalled
under 10.7.  Use</p>
<p><code>dpkg --get-selections | cut -f1 &gt; fink_packages.txt</code></p>
<p>to extract the packages, and</p>
<p><code>cat fink_packages.txt | xargs fink install</code></p>
<p>once you have installed Fink for 10.7.</p>
<p>(To upgrade fink after upgrading to Lion, one will have to bootstrap
fink again, using a new version of fink which will be released shortly
after Lion has been released.  Watch this space for an announcement.)</p>
<p>Second, due to lots of changes under the hood, there will initially
be many fewer Fink packages which work under 10.7 as opposed to 10.6.
Thus, even if you've extracted a list of Fink packages which had
been installed under 10.6, some of them may not yet be installable under
10.7.  We are currently creating a database showing which packages
can be successfully installed under 10.7, but that database
may not be complete prior to the release of Lion.</p>
<p>10.7 introduces several drastic changes to how the system works. While this may
cause a slight delay in full Fink functionality in the short term, it will
make Fink work better in the future.</p>
    <a name="2011-07-11%20fink-0.30.2%20released."><span class="news-date">2011-07-11: </span><span class="news-headline">fink-0.30.2 released.</span></a><?php gray_line(); ?>
      <p><code>fink-0.30.2</code> was released to the unstable tree on 11 July, 2011.
      It is likely that this will be the last version that supports OS 10.4.</p>
      <p>It is planned to release it to stable soon.</p>
      <p><b>Update, 2011-07-15:</b>   It has been added to stable.</p>
    <a name="2011-06-28%20fink-0.30.1%20released."><span class="news-date">2011-06-28: </span><span class="news-headline">fink-0.30.1 released.</span></a><?php gray_line(); ?>
      <p><code>fink-0.30.1</code> was released to the unstable tree on 28 June, 2011.
      This is a minor update which properly recognizes OS 10.6.8.</p>
      <p>It is planned to release it to stable soon.</p>
      <p><b>Update, 2011-07-02:</b>   It has been added to stable.</p>
    <a name="2011-04-30%20fink-0.30.0%20released."><span class="news-date">2011-04-30: </span><span class="news-headline">fink-0.30.0 released.</span></a><?php gray_line(); ?>
      <p><code>fink-0.30.0</code> was released to the unstable tree on 30 April, 2011.</p>
      <p>The 0.30.x series is intended to be the last to support OS 10.4 (Tiger).</p>
    <a name="2011-03-24%20fink-0.29.21%20released."><span class="news-date">2011-03-24: </span><span class="news-headline">fink-0.29.21 released.</span></a><?php gray_line(); ?>
      <p>Version 0.29.21 of the <code>fink</code> package manager has just been
        released to the unstable tree.  This version of <code>fink</code> 
        properly recognizes OS 10.6.7, and contains a bugfix for a situation 
        where <code>fink</code> can't index.</p>
      <p>It is expected that this version of fink will be added to the stable
        tree shortly.</p>
     <p><b>Update, 2011-03-29:</b>   It has been added to stable.</p>
     <a name="2011-03-09%20fink-0.29.20%20released."><span class="news-date">2011-03-09: </span><span class="news-headline">fink-0.29.20 released.</span></a><?php gray_line(); ?>
      <p>
        Version 0.29.20 of the <code>fink</code> package manager has just been
        released to the unstable tree.  This version of <code>fink</code>         
        fixes an issue with X11 detection against recent versions of
        <a href="http://http://xquartz.macosforge.org/trac/wiki">Xquartz</a>
        on Leopard.
      </p>
      <p>
        Unless other updates are made in the near term, it is expected that this
        version of <code>fink</code> will be added to the stable tree shortly.
      </p>
      <p><b>Update, 2011-03-24:</b>   It has been added to stable.</p>
    <a name="2011-02-10%20CVS%20access%20restored."><span class="news-date">2011-02-10: </span><span class="news-headline">CVS access restored.</span></a><?php gray_line(); ?>
      <p>Checkouts and commits now work again.  Thanks for your patience.</p>
    <a name="2011-01-26%20CVS%20access%20is%20down."><span class="news-date">2011-01-26: </span><span class="news-headline">CVS access is down.</span></a><?php gray_line(); ?>
      <p>Due to an attack, our files are not accessible via CVS from Sourceforge.
      For status updates check out
      <a href="http://sourceforge.net/apps/wordpress/sourceforge/"> the Project
      sourceforge page</a>.</p>
    <a name="2011-01-16%20fink-0.29.19%20released."><span class="news-date">2011-01-16: </span><span class="news-headline">fink-0.29.19 released.</span></a><?php gray_line(); ?>
      <p>Version 0.29.19 of the <code>fink</code> package manager has just been
      released to the unstable tree.  This version of <code>fink</code>         
      features more verbose output from 'fink --version' for debugging purposes,                                                                               
      as well as recognizing OS 10.6.6.  (Version 0.29.17 works fine            
      on 10.6.6, however.)</p>
      <p>It is expected that this version will migrate to the stable tree soon,
      provided that there are no reports of bad behavior from unstable tree     
      users.</p>
      <p><b>Update, 2011-01-22:</b>    <code>fink-0.29.19</code> has been added to stable.</p>
    <a name="2011-01-05%20Temporary%20rysnc%20mirror%20outage."><span class="news-date">2011-01-05: </span><span class="news-headline">Temporary rysnc mirror outage.</span></a><?php gray_line(); ?>
      <p>We are experiencing a temporary failure in some of the rsync mirrors.
      If you have not seen updates in a while, then you may wish to change your
      rsync mirror for the time being by editing <code>/sw/etc/fink.conf</code> as a superuser
      and replacing the line that starts with <code>Mirror-rsync</code> with
        <code>Mirror-rsync: rsync://fink.gecko.ig42.org/finkinfo/</code></p>
        <p>or</p><p>
        <code>Mirror-rsync: rsync://hnd.jp.asi.finkmirrors.net/finkinfo/</code></p>
        <p>or</p><p>
        <code>Mirror-rsync: rsync://ber.de.eu.finkmirrors.net/finkinfo</code></p>
         <p>or</p><p>
        <code>Mirror-rsync: rsync://ams.nl.eu.finkmirrors.net/finkinfo/</code></p>       
      <p>If you prefer, you can select the latter three of the above mirrors via <code>fink configure</code>
      as well:  choose Asia (option 2) as your continent, Japan (10) as your country,
      and rsync://distfiles.hnd.jp.asi.finkmirrors.net/finkinfo/ (2) as the Rsync Selfupdate mirror;
      or choose Europe (4), then Germany (13) and rsync://ber.de.eu.finkmirrors.net/finkinfo/ 
      (3) as the rsync mirror, or Netherlands (27) and
      rsync://distfiles.ams.nl.eu.finkmirrors.net/finkinfo/ (2) as your rsync mirror. </p>
      <p><b>Update, 2011-01-07</b>  The mirrors are updating again.</p>
    <a name="2010-12-31%20Happy%2010th%20Birthday%20to%20Fink!"><span class="news-date">2010-12-31: </span><span class="news-headline">Happy 10th Birthday to Fink!</span></a><?php gray_line(); ?>
      <p>The Fink project was started in the waning days of December 2000 by
Christoph Pfisterer, using the "public beta" release of Mac OS X.
Within a year, versions 10.0 and 10.1 of OS X had been released, and
Fink usage took off.  Our founder chrisp stepped away from the project
in November 2001, and the community took over.</p>
<p>The Fink community is the heart of Fink, involving both package maintainers
and Fink users, as well as the small core team which tries to keep the
overall system in good shape.  The success of this community in keeping
Fink viable and active over ten years is really quite remarkable!  Let's
all join together to keep Fink going for a long time to come.</p>
<p>How long?  In the memorable words of Buzz Lightyear: <code>To Infinity
and Beyond!</code></p>
     <a name="2010-11-09%20fink-0.29.16%20released."><span class="news-date">2010-11-09: </span><span class="news-headline">fink-0.29.16 released.</span></a><?php gray_line(); ?>
      <p><code>fink-0.29.16</code> has been released to the unstable tree.
      This version of <code>fink</code> updates the versions of packages used for bootstrapping.</p>
      <p>It is planned to add this version of <code>fink</code> to the stable tree shortly.</p>
     <a name="2010-11-02%20Libtool%20archive%20file%20cleaning%20now%20in%20stable."><span class="news-date">2010-11-02: </span><span class="news-headline">Libtool archive file cleaning now in stable.</span></a><?php gray_line(); ?>
      <p><code>dpkg-1.10.21-1229</code> has been added to stable.  This
      revision automatically cleans up libtool archive (<code>.la</code>)
      files, which have historically caused problems for folks upgrading from 10.5
      to 10.6.</p>  
    <a name="2010-11-02%20KDE3%20and%20GNOME%20updated%20in%20stable."><span class="news-date">2010-11-02: </span><span class="news-headline">KDE3 and GNOME updated in stable.</span></a><?php gray_line(); ?>
      <p><code>KDE-3.5.10</code> and <code>GNOME-2.28</code>
      have been added to the stable tree, along with updates to some important
      dependencies.</p>
    <a name="2010-10-23%20fink-0.29.15%20released."><span class="news-date">2010-10-23: </span><span class="news-headline">fink-0.29.15 released.</span></a><?php gray_line(); ?>
      <p><code>fink-0.29.15</code> has been released to the unstable tree.
      This version of <code>fink</code> contains fixes to the <code>system-java-dev</code>
      virtual package generation.</p>
      <p>Users will also need to download an appropriate version of the Java Developer Package
      from <a href="http://connect.apple.com/">The Apple Developer Connection site</a>
      for all of the the <code>system-java-dev</code> packages to show up on 10.5 and 10.6.</p>
      <p>It is planned to add this version of <code>fink</code> to the stable tree shortly.</p>
      <p><b>Update, 2010-11-01:</b>  <code>fink-0.29.15</code> has
      been added to the stable tree.</p>
    <a name="2010-10-20%20Java%20update%20breaks%20system-java-dev%20virtual%20package%20generation."><span class="news-date">2010-10-20: </span><span class="news-headline">Java update breaks system-java-dev virtual package generation.</span></a><?php gray_line(); ?>
      <p>The recent 10.5 and 10.6 Java updates (APPLE-SA-2010-10-20-1 Java for Mac OS X 10.6 Update 3
      and APPLE-SA-2010-10-20-2 Java for Mac OS X 10.5 Update 8 )
      change the Java file configuration in such a manner that <code>fink</code>
      no longer generates the <code>system-java16-dev</code> package on 10.5 and
      all of the <code>system-java-dev</code> packages on 10.6.</p>
      <p>Users may wish to hold off on applying this update until
      a version of <code>fink</code> which addresses this issue is released.
      The issue does <b>not</b> affect packages which are currently installed, but will
      prevent java-dependent packages from building.</p>
      <p>Users will want to download an appropriate version of the Java Developer Package
      from <a href="http://connect.apple.com/">The Apple Developer Connection site</a>.</p>
      <p><b>Update, 2010-10-23:</b>  The issue has been addressed in <code>fink-0.29.15</code>.</p>
    <a name="2010-10-19%20fink-0.29.14%20released."><span class="news-date">2010-10-19: </span><span class="news-headline">fink-0.29.14 released.</span></a><?php gray_line(); ?>
      <p><code>fink-0.29.14</code> has been released to the unstable tree.
      This version of <code>fink</code>contains, among
      other new features, an <code>aria2</code> option for <code>DownloadMethod</code>,
      to allow the use of the <code>aria2</code> download accelerator
      (available via Fink), and a fix for the infamous "node exists" error.  
      </p>
      <p>It is planned to add this version to the stable tree shortly.</p>
      <p><b>Addendum, 2010-10-19:</b>  because of the Java update (2010-10-20),
      <code>fink-0.29.15</code> is now slated to be the version next to go to stable.</p>
    <a name="2009-10-30%20Servidor%20novamente%20em%20opera%C3%A7%C3%A3o."><span class="news-date">2009-10-30: </span><span class="news-headline">Servidor novamente em operação.</span></a><?php gray_line(); ?>
	  <p>Nossos serviços ao usuário foram restaurados. Em 28 de outubro o site
	  e alguns dos espelhos (rsync, arquivos fontes, distribuição de binários)
	  foram resturandos e em 30 de outubro todos os principais espelhos rsync
	  estavam operacionais. Uma vez mais, pedimos desculpas pela
	  inconveniência. Agradecemos sua paciência e colaboração.</p>

      <p>Our user services have been restored. On Oct 28th the Web site and
      some of the mirrors (rsync, source files, binary distribution) were
      restored, and on Oct 30th all of our main rsync mirrors were operational.
      Once again, we apologise for the inconvenience. Thanks for your patience
      and support.</p>
    <a name="2009-10-24%20Problemas%20com%20o%20servidor."><span class="news-date">2009-10-24: </span><span class="news-headline">Problemas com o servidor.</span></a><?php gray_line(); ?>
	  <p>Estamos com problemas no servidor e por conseguinte o site e a
	  distribuição oficial de binários estão fora do ar, e os servidores rsync
	  não estão atualizando. Enquanto resolvemos os problemas, você pode:</p>
	  <ul>
		<li>(Web site) Usar o <a href="http://fink.thetis.ig42.org">http://fink.thetis.ig42.org</a>
		caso necessite das informações do site;</li>

		<li>(selfupdate) Se você usa rsync como seu método de selfupdate então
		edite o arquivo <code>/sw/etc/fink.conf</code> e substitua a linha que
		começa com <code>Mirror-rsync</code> por <code>Mirror-rsync:
		rsync://fink.gecko.ig42.org/finkinfo/</code></li>

		<li>(arquivos fontes) Edite o arquivo <code>/sw/etc/fink.conf</code> e
		substitua a linha que começa com <code>Mirror-master</code> por
		<code>Mirror-master: http://fink-dist.gecko.ig42.org</code></li>

		<li>(bindist) Edite o arquivo <code>/sw/etc/fink.conf</code> e
		substitua a linha que começa com <code>Mirror-apt:</code> por
		<code>Mirror-apt: http://fink-bindist.gecko.ig42.org</code></li>

		<li>(bindist) Edite o arquivo <code>/sw/etc/apt/sources.list</code> e
		substitua <code>http://bindist.finkmirrors.net/bindist</code> por
		<code>http://fink-bindist.gecko.ig42.org</code></li>

		<li>Execute o comando <code>fink scanpackages</code></li>
	  </ul>
      <p>Pedimos desculpas pela inconveniência.</p>
	<a name="2009-08-28%20Fink%20no%20OS%20X%2010.6"><span class="news-date">2009-08-28: </span><span class="news-headline">Fink no OS X 10.6</span></a><?php gray_line(); ?>
      <p>O Fink está pronto para ser usado no Snow Leopard (OS X 10.6). Os
      usuários precisam escolher dentre a versão do Fink de 32 bits e a de 64
      bits para o 10.6. A versão de 32 bits possui mais pacotes disponíveis no
      momento mas a versão de 64 bits representa a direção futura tanto do OS X
      quanto do Fink; os usuários precisam fazer a escolha por conta própria.
      <b>Não</b> será possível fazer uma atualização de 32 bits para 64 bits
      (ou vice-versa) sem que o Fink seja completamente reinstalado.</p>
      <p>No presente momento, dois métodos estão disponíveis para instalar o
      Fink no Snow Leopard. Um instalador binário não está disponível,
      portanto é importante <b>instalar primeiro o Xcode da pasta Optional
      Installs no disco do Snow Leopard.</b> Usuários que queiram a versão de
      64 bits ou que estejam atualizando diretamente do OS X 10.4 ou anteriores
      devem instalar o Fink do zero a partir da tarball de distribuição (versão
      0.29.9 ou posteriores) disponível no <a href="http://sourceforge.net/projects/fink/files/fink/0.29.9/fink-0.29.9.tar.gz/download">sourceforge.net</a>;
      as instruções de instalação estão <a href="<?php print $root; ?>download/srcdist.php">aqui</a>. Por outro lado, os usuários
      podem atualizar diretamente do OS X 10.5 para a versão de 32 bits
      seguindo as instruções abaixo. (Aviso: usuários que tenham instalado uma
      versão de desenvolvimento do Fink a partir do CVS no lugar de uma versão
      efetivamente lançada podem encontrar problemas; por favor, antes de
      começar, mude para uma versão oficialmente lançada e remova os arquivos
      .deb que possuam versões maiores.)</p>
      <p>Para fazer a atualização, siga os quatro passos a seguir. <b>Passo
      1:</b> edite o arquivo <code>/sw/etc/fink.conf</code> e adicione uma
      linha contendo <code>NoAutoIndex: true</code> (talvez você tenha que usar
      o <code>sudo</code> para obter as permissões corretas para editar o
      arquivo.) <b>Passo 2:</b> execute o comando <code>fink reinstall
      fink</code> para dizer ao Fink que agora você está no OS X 10.6.
      (Caso encontre uma mensagem sobre corrupção do banco de dados de pacotes,
      execute o comando <code>fink index -f</code> e tente este passo
      novamente.) <b>Passo 3:</b> execute o comando <code>fink update
      fink</code> para obter a última versão do Fink para o OS X 10.6.
      <b>Passo 4:</b> execute o comando <code>fink install
      perl588-core</code> para substituir a versão do Perl que foi alterada
      pela Apple durante a atualização do OS X caso você possua pacotes que
      dependam dele.</p>
      <p>Depois da atualização, talvez você queira executar o comando
      <code>fink configure</code> para fazer uma limpeza.</p>
      <p>Quase todos os pacotes do Fink na árvore stable vão compilar no OS X
      10.6 mas esteja ciente de que apenas uma fração dos pacotes do 10.5 estão
      disponíveis para o 10.6. Em um futuro próximo, o banco de dados de
      pacotes do Fink será atualizado para que inclua informações sobre pacotes
      para o 10.6; você poderá consultá-lo para verificar se seus pacotes
      prediletos estão disponíveis.</p>
    <a name="2009-07-25%20Mudan%C3%A7as%20no%20Grupo%20Central"><span class="news-date">2009-07-25: </span><span class="news-headline">Mudanças no Grupo Central</span></a><?php gray_line(); ?>
      <p>O Grupo Central do Fink anuncia dois novos membros: Alexander Hansen
      (<b>akh</b>) e Augusto Devegili (<b>monipol</b>), tendo ambos estado
      bastante ativos no projeto. Una-se a nós e dê as boas-vindas aos novos
      membros!</p>
      <p>A equipe também anuncia que Christian Schaeffner retirou-se do grupo,
      voltando ao status de colaborador regular. Agradecemos ao Christian por
      sua ajuda na equipe nos últimos anos.</p>
      <p>Membros do projeto Fink estão trabalhando arduamente para prover
      suporte ao usuário, manter o Fink atualizado, e preparar para o futuro
      lançamento do Snow Leopard. Sempre precisamos de mais voluntários,
      portanto cogite contribuir de alguma forma!</p>
    <a name="2008-07-23%20Fim%20do%20suporte%20ao%2010.3."><span class="news-date">2008-07-23: </span><span class="news-headline">Fim do suporte ao 10.3.</span></a><?php gray_line(); ?>
      <p>O projeto Fink não pode mais oferecer suporte a usuários do Fink no
      Mac OS X 10.3. Na verdade tem havido pouco suporte por algum tempo então
      este anúncio simplesmente formaliza esse fato.</p>
      <p>Isto significa que não haverá atualizações futuras, nem mesmo de
      segurança, para usuários do Mac OS X 10.3. Suas instalações atuais
      continuarão a funcionar mas o software que estiver instalado não será
      atualizado.</p>
      <p>Acreditamos que a maioria dos nossos usuários estejam usando Mac OS X
      10.4 ou 10.5 e esperiamos que esta decisão não seja inconveniente a
      muitas pessoas.</p>
    <a name="2008-07-17%20Migra%C3%A7%C3%A3o%20em%20passa%20de%20pacotes."><span class="news-date">2008-07-17: </span><span class="news-headline">Migração em passa de pacotes.</span></a><?php gray_line(); ?>
      <p>A atualização massiva do GNOME que esteve em andamento por várias
      meses foi incorporada à árvore unstable. Os pacotes foram bem testados e
      as atualizações feitas por usuários aparentam estar ocorrendo
      tranquilamente.</p>
      <p>Estamos agora incorporando a atualização do GNOME à árvore stable.
      Devido ao fato de não termos podido testar antecipadamente as
      dependências desses novos pacotes, os usuários podem esperar que a árvore
      stable não esteja tão estável durante as próximas semanas, enquanto os
      erros serão corrigidos.</p>
      <p>Se você está ansioso para usar imediatamente essa atualização massiva
      do GNOME, sugerimos que mude para a árvore unstable. Caso não queira,
      sugerimos que suspenda a execução de "fink selfupdate" por algum tempo
      (talvez uma semana ou duas) até que tudo esteja estabilizado
      novamente.</p>
    <a name="2008-06-26%20Nova%20vers%C3%A3o%20do%20Fink."><span class="news-date">2008-06-26: </span><span class="news-headline">Nova versão do Fink.</span></a><?php gray_line(); ?>
      <p>Uma nova versão (binária) do Fink para o OS X 10.5 (Leopard) está
      <a href="<?php print $root; ?>download/index.php">disponível</a> a partir de hoje:
      versão 0.9.0, a qual pode ser instalada em hardware Intel ou PowerPC.
      Esta versão inclui códigos fontes, pacotes de binários e instaladores do
      Fink para ambos os tipos de hardware.</p>
      <p>Usuários que já tenham instalado o Fink no Leopard a partir do código
      fonte e que queiram mudar para a distribuição de binários podem fazer o
      seguinte. Em primeiro lugar, execute <code>fink selfupdate</code> para
      atualizar para a última versão do gerenciador de pacotes fink. Em
      seguida, execute <code>fink configure</code> e assegure-se de
      <b>mudar</b> sua escolha sobre usar a distribuição de binários de Não
      para Sim. Finalmente, execute <code>fink scanpackages</code> para ativar
      a distribuição de binários.</p>
      <p><b>Atualização, 2008-07-11:</b> se você usa o instalador binário,
      você precisa executar <code>fink selfupdate</code> após a instalação.</p>
    

<? include_once "footer.inc"; ?>
