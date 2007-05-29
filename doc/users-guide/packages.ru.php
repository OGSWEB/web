<?
$title = "Руководство пользователя - Пакеты";
$cvs_author = 'Author: babayoshihiko';
$cvs_date = 'Date: 2007/05/29 03:58:51';
$metatags = '<link rel="contents" href="index.php?phpLang=ru" title="Руководство пользователя Contents"><link rel="next" href="upgrade.php?phpLang=ru" title="Обновление Fink"><link rel="prev" href="install.php?phpLang=ru" title="Первоначальная инсталляция">';


include_once "header.ru.inc";
?>
<h1>Руководство пользователя - 3. Инсталляция пакетов</h1>
        
        
        
            <p> Теперь, когда у вас есть то, что можно назвать инсталляцией Fink,
                данный раздел расскажет, как инсталлировать сами пакеты ПО,
                являющиеся вашей главной целью. Перед описанием процедуры
                инсталляции пакетов дистрибутива исходного кода или
                бинарного дистрибутива даются важные сведения, относящиеся к обоим дистрибутивам</p>
        
        <h2><a name="bin-dselect">3.1 Инсталляция бинарных пакетов при помощи dselect</a></h2>
            
            <p>
                <code>dselect</code> - программа, которая позволяет просматривать список
                имеющихся пакетов и выбирать те, которые вы хотите инсталлировать.
                Она запускается в Terminal.app, но занимает весь экран
                и требует простых перемещений при помощи клавиатуры. Как и другие инструменты управления
                пакетами, <code>dselect</code> требует привилегий суперпользователя,
                т.е. вам надо использовать sudo (со счета с привилегиями администратора):</p>
            <pre>sudo dselect</pre>
            <p>
                <b>Прим.:</b>
                У <code>dselect</code> наблюдались проблемы с терминальным приложением Mac OS X.
                Надо применить следующие команды
                перед ее использованием или ввести их в соответствующий файл запуска
                (н-р, <code>.cshrc</code> / <code>.profile</code>):</p>
            <p>для пользователей tcsh:</p>
            <pre>setenv TERM xterm-color</pre>
            <p>для пользователей bash:</p>
            <pre>export TERM=xterm-color</pre>
            <p> Главное меню имеет несколько опций:</p>
            <ul>
                <li>
                    <p>
                        <b>[A]ccess</b> - конфигурирует используемый метод доступа к сети.
                        <b>Не надо ее использовать</b>,
                        т.к. Fink предварительно конфигурирует все за вас. 
                        Вообще надо ее избегать, т.к. она может перезаписать
                        конфигурацию по умолчанию так, что она не будет работать.</p>
                </li>
                <li>
                    <p>
                        <b>[U]pdate</b> - скачивает список имеющихся пакетов
                        с сайта Fink. Данная опция не инсталлирует
                        и не обновляет фактические пакеты, а просто обновляет
                        списки, используемые для браузера пакетов.
                        После инсталляции Fink эту опцию надо применить как минимум однократно.</p>
                </li>
                <li>
                    <p>
                        <b>[S]elect</b> - предоставляет список фактических пакетов,
                        в котором вы можете активировать/дезактивировать пакеты
                        в своей системе. Более подробно об этом см. далее.</p>
                </li>
                <li>
                    <p>
                        <b>[I]nstall</b> - именно здесь происходит действие.
                        Пункты меню, указанные выше, влияют только на списки пакетов dselect
                        и базы данных о статусе. Данная опция скачивает и
                        инсталлирует запрошенные пакеты.
                        Она также удаляет пакеты, которые вы дезактивируете в браузере. </p>
                </li>
                <li>
                    <p>
                        <b>[C]onfig</b> и <b>[R]emove</b> - реликвии,
                        оставшиеся со времен, предшествующих apt. Они не нужны,
                        хотя и безвредны.</p>
                </li>
                <li>
                    <p>
                        <b>[Q]uit</b> - смысл данной опции очевиден.</p>
                </li>
            </ul>
            <p> Вы потратите большую часть времени на dselect в браузере
                пакетов, доступном через "[S]elect". Перед тем, как
                dselect покажет вам список пакетов, вы увидите экран
                вводной помощи. Можно нажать 'k' для получения
                полного списка команд клавиатуры или просто пробел для получения
                списка пакетов.</p>
            <p> Можно передвигаться по списку вверх-вниз, используя клавиши up и down.
                Выбор осуществляется при помощи '+' и '-'. Когда вы выбираете пакет,
                для которого требуются другие пакеты, dselect показывает подсписок
                соответствующих пакетов. В большинстве случаев вы можете нажать
                Return для утверждения опции в dselect. Можно также
                откорректировать подсписок (н-р, для выбора другой альтернативы
                взаимозависимости виртуальных пакетов) или нажать 'R' (н-р, Shift-R)
                для возврата к предыдущему статусу. Для выхода из подсписка и главного списка
                пакетов надо нажать Return. Если выбранный вариант вас устраивает,
                оставьте главный список и используйте "[I]nstall"
                непосредственно для инсталляции пакетов.</p>
        
        <h2><a name="bin-apt">3.2 Инсталляция бинарных пакетов при помощи apt-get</a></h2>
            
            <p>
                <code>dselect</code> сама по себе не скачивает пакеты.
                Вместо этого для грязной работы она использует apt. Если вы
                предпочитаете интерфейс чистой командной строки, можно получить доступ к функциям
                apt напрямую благодаря команде <code>apt-get</code>.</p>
            <p> Как и при работе с dselect, надо сначала скачать текущие списки
                имеющихся пакетов при помощи </p>
            <pre>sudo apt-get update</pre>
            <p> Подобно "[U]pdate" в dselect, эта опция обновляет не
                фактические файлы на вашем компьютере, а только список имеющихся пакетов apt.
                Для инсталляции пакетов просто дайте apt-get  имя,
                н-р:</p>
            <pre>sudo apt-get install lynx</pre>
            <p> Если apt-get определит, что некоторые пакеты требуют инсталляции других пакетов,
                вам будет предоставлен список с просьбой о подтверждении.
                Затем пакеты будут скачаны и инсталлированы.
                Удалить их можно очень просто:</p>
            <pre>sudo apt-get remove lynx</pre>
            <p>
                
            </p>
        
        <h2><a name="bin-exceptions">3.3 Инсталляция зависимых пакетов, недоступных при использовании бинарного
                дистрибутива</a></h2>
            
            <p>Иногда во время бинарной инсталляции вы можете получить сообщение о том, что
                зависимость не может быть инсталлирована. Пример:</p>
            <pre>Sorry, but the following packages have unmet
dependencies:
foo: Depends: bar (&gt;= version) but it is
not installable
E: Sorry, broken packages</pre>
            <p>Дело в том, что пакет, который вы пытаетесь инсталлировать,
                зависит от другого пакета, который не входит в бинарный дистрибутив из-за
                лицензионных требований. Вам надо инсталлировать зависимость от исходного кода
                (см. следующий раздел).</p>
        
        <h2><a name="src">3.4 Инсталляция бинарных пакетов и пакетов исходного кода при помощи инструмента fink</a></h2>
            
            <p> Инструмент <code>fink</code> позволяет инсталлировать пакеты, которые
                пока недоступны для <a href="intro.php?phpLang=ru#src-vs-bin">бинарного дистрибутива</a>. </p>
            <p>Прежде всего вам нужна соответствующая версия инструментов разработки
                (Development Tools) для вашей системы. Их можно бесплатно скачать после регистрации
                на сайте <a href="http://connect.apple.com">http://connect.apple.com</a>.</p>
            <p> Для получения списка пакетов, имеющихся для инсталляции от исходного кода,
                надо сделать следующий запрос инструменту <code>fink</code>:</p>
            <pre>fink list</pre>
            <p> Первая колонка отражает в списке статус инсталляции (пустая в случае
                неинсталлированной версии, <code>i</code> при инсталлированной версии и <code>(i)</code> при
                инсталлированной, но не последней версии), после чего указывается
                имя пакета, его последняя версия и краткое описание. Можно
                запросить больше информации об отдельном пакете при помощи команды describe ("info" является для этого алиасом):
            </p>
            <pre>fink describe xmms</pre>
            <p> После нахождения пакета, который вы хотите инсталлировать, примените команду
                "install":</p>
            <pre>fink install wget-ssl</pre>
            <p> Команда <code>fink</code> сначала проверит наличие всех необходимых
                предварительных условий ("зависимостей") и спросит, можно ли инсталлировать пакеты в том случае,
                если некоторые из них отсутствуют. Затем
                продолжит выполнение действий и скачает исходный код, распакует его, сделает патчи,
                компиляцию и инсталлирует результаты в вашей системе. Это может
                занять много времени. Если в течение этого процесса возникнут ошибки,
                сначала обратитесь к <a href="http://www.finkproject.org/faq/">Ч.З.В.</a>. </p>
            <p> Для версий <code>fink</code> начиная с 0.23.0 можно попытаться
                скачать имеющиеся предварительно скомпилированные бинарные пакеты,
                вместо того чтобы создавать их. Просто перенесите опцию <a href="usage.php?phpLang=ru#options">--use-binary-dist (или -b)</a> в
                <code>fink</code>. Это поможет сэкономить массу времени. Н-р, при использовании </p>
            <pre>fink --use-binary-dist install wget-ssl</pre>
            <p>или</p>
            <pre>fink -b install wget-ssl</pre>
            <p> сначала скачиваются все зависимости для wget-ssl, которые
                обеспечиваются бинарным дистрибутивом, и только
                остальное строится на основе исходного кода. Данная опция также может быть постоянно активирована
                в <a href="conf.php?phpLang=ru">конфигурационном файле  Fink
                </a> (fink.conf) или командой <code>fink
                configure</code>. </p>
            <p> Более подробную информацию об инструменте <code>fink</code> см. в
                разделе <a href="usage.php?phpLang=ru">"Использование инструмента fink в командной
                    строке"</a>. </p>
        
        <h2><a name="fink-commander">3.5 Fink Commander</a></h2>
            
            <p>Fink Commander является интерфейсом Aqua как для <code>apt-get</code>,
                так и для инструмента <code>fink</code>. Бинарное меню позволяет осуществлять
                операции бинарного дистрибутива, а меню исходного кода -
                операции дистрибутива исходного кода.</p>
            <p>Fink Commander входит в бинарный инсталлятор Fink. Если вы хотите скачать его
                отдельно (н-р, если вы выполнили начальную загрузку Fink от
                исходного кода) или получить дополнительные сведения, посетите сайт<a href="http://finkcommander.sourceforge.net">Fink Commander</a>.</p>
        
        <h2><a name="available-versions">3.6 Имеющиеся версии</a></h2>
            
            <p>Если вы хотите инсталлировать пакет, сначала надо проверить
                    <a href="http://pdb.finkproject.org/pdb/index.php">базу данных
                по пакетам</a> и посмотреть, можно ли это сделать через Fink.
                Имеющиеся версии пакета отражены в нескольких
                строках таблицы. А именно:</p>
            <ul>
              <li>Binary Distribution
		  
		  <ol>
            <li><p>
            <b>0.4.1:</b> версия, которую можно инсталлировать
                        на основе бинарных пакетов для OS 10.1.</p></li>
            <li><p><b>0.6.4:</b> версия, которую можно инсталлировать
                    на основе бинарных пакетов для OS 10.2.</p></li>
            <li><p><b>0.7.2</b>
  This is the base version that can be installed from binaries for OS 10.3.  If you <a href="install.php?phpLang=ru#bin">update</a> Fink, later versions of some packages may be available.</p> 
        </li>
            <li><p><b>0.8.1:</b>  This is the base version that can be installed from binaries for OS 10.4.  If you <a href="install.php?phpLang=ru#bin">update</a> Fink, later versions of some packages may be available.</p></li>
          </ol>
          
                </li>
                <li>CVS/rsync Distributions
<ol>
            <li>
                    <p>
                        <b>10.2-gcc3.3 stable:</b> последняя
                        стабильная версия, инсталлируемая от
                        исходного кода для OS 10.2 с обновлением <code>gcc 3.3</code> для
                        Developer Tools. Для инсталляции этой версии вам
                        может понадобиться активация доступа через <a href="http://www.finkproject.org/doc/cvsaccess/index.php">CVS</a>
                        или rsync. Если вы не сделали обновление <code>gcc
                        3.3</code>, то можете не увидеть эту версию (или
                        даже сам пакет).</p>
                    <p>Прим.: В отличие от других проектов, Fink
                        распространяет как последние стабильные версии пакетов
                        через CVS, так и версии, нуждающиеся в тестировании (см.
                        далее раздел о нестабильных пакетах). Активация опции обновления через CVS или rsync
                        предоставляет доступ к новым стабильным версиям пакетов еще до того,
                        как обновляется бинарный дистрибутив.</p>
                </li>
                <li>
                    <p>
                        <b>10.3 stable:</b> последняя версия,
                        инсталлируемая от исходного кода в OS 10.3.</p>
                </li>

            <li><p><b>10.4/powerpc stable:</b>  This is the most recent version that can be installed from the stable source tree for OS 10.4 users 
on PowerPC hardware.</p></li>
            <li><p><b>10.4/intel stable:</b>  This is the most recent version that can be installed from the stable source tree for OS 10.4 users
on intel hardware.</p></li>

                <li>
                    <p>
                        <b>10.2-gcc3.3 unstable:</b> последняя
                        нестабильная версия, которую можно инсталлировать от
                        исходного кода в OS 10.2 с <code>gcc 3.3</code>. Для ее инсталляции
                        следуйте <a href="http://www.finkproject.org/faq/usage-fink.php#unstable">инструкциям</a>
                        по инсталляции нестабильных пакетов.</p>
                    <p>Прим.: <b>unstable</b> не обязательно <b>значит</b>, что их нельзя использовать, просто
                        инсталляция таких пакетов будет на ваш риск.</p>
                </li>
                <li>
                    <b>10.3 unstable:</b> последняя нестабильная версия,
                    которую можно инсталлировать от исходного кода в OS 10.3.
                    Надо активировать нестабильное дерево вышеуказанным образом.</li>

            <li><p><b>10.4/powerpc unstable:</b>  This is the most recent version that can be installed from the unstable source tree for OS 10.4 users
on PowerPC hardware.</p></li>
            <li><p><b>10.4/intel unstable:</b>  This is the most recent version that can be installed from the unstable source tree for OS 10.4 users
on intel hardware.</p></li>

          </ol></li>
            </ul>
        
        <h2><a name="x11">3.7 Выбор вида реализации X11</a></h2>
            
            <p>Многие пакеты, доступные через Fink, требуют инсталляции
                определенного вида X11. По этой причине одно из первых действий,
                которое обычно выполняется - это выбор вида реализации X11.</p>
            <p> Для нескольких видов реализации X11 в Mac OS
                X (Apple X11, XFree86, Tenon Xtools, eXodus) и способов их инсталляции
                (вручную или через Fink) имеется несколько альтернативных пакетов -
                по одному для каждого вида.
                Далее приведен список
                имеющихся пакетов и способов инсталляции X11:</p>
      
      <ul>
        <li>
          <p>
            <b>xfree86, xfree86-shlibs:</b>
Install both of these packages for XFree86 4.3.0 (OS 10.2 only), 4.4.0 (10.2 or 10.3), or 4.5.0 (10.3 or 10.4).  
</p>
        </li>
        <li><p><b>xorg, xorg-shlibs</b>(10.3 or 10.4)  Install these packages to get the 6.8.2 release of the X.org X11 distribution.</p></li>
        <li>
          <p>
<b>system-xfree86 + -shlibs, -dev:</b>
These packages are automatically generated (for Fink 0.6.2 or later) if you install Apple's X11, or manually installed XFree86 or X.org.  
They will then act as
dependency placeholders.
</p>
        </li>
        <li>
          <p>
            <b>xfree86-base, xfree86-rootless [-threaded] + -shlibs, -dev</b>
(10.1 or 10.2 only) These packages install all of XFree86 4.2.1.1 (4.2.0 on 10.1).  The <code>-threaded</code> variant was provided for applications that required it, and this functionality is standard in later XFree86 versions.  The <code>-rootless</code> packages include the XDarwin display server--the name is historical.
</p><p>You must install all six packages to build X11-based packages from source.
</p>
        </li>
      </ul>
      
            <p> Для получения более подробной информации об инсталляции и использовании X11 см.
                    документ <a href="http://www.finkproject.org/doc/x11/">X11 в
                    Darwin и Mac OS X</a>.</p>
        
    <p align="right"><? echo FINK_NEXT ; ?>:
<a href="upgrade.php?phpLang=ru">4. Обновление Fink</a></p>
<? include_once "../../footer.inc"; ?>


