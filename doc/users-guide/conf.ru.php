<?
$title = "Руководство пользователя - fink.conf";
$cvs_author = 'Author: horsager';
$cvs_date = 'Date: 2005/02/01 02:34:17';
$metatags = '<link rel="contents" href="index.php?phpLang=ru" title="Руководство пользователя Contents"><link rel="next" href="usage.php?phpLang=ru" title="Использование инструмента fink на строке команд"><link rel="prev" href="upgrade.php?phpLang=ru" title="Обновление Fink">';


include_once "header.ru.inc";
?>
<h1>Руководство пользователя - 5. Конфигурационный файл Fink</h1>
        
        
        
            <p> Данная глава объясняет настройки, имеющиеся в конфигурационном файле Fink
                (fink.conf), а также как они влияют на поведение
                Fink, особенно инструмент строки команд <code>fink</code>
                (т.е. работу с дистрибуцией на основе исходного кода).</p>
        
        <h2><a name="about">5.1 Информация о fink.conf</a></h2>
            
            <p> При первоначальной инсталляции Fink появляются вопросы с опциями относительно
               настройки вашего конфигурационного файла, н-р,
                какие <a href="#mirrors">зеркала</a> вы хотите использовать для скачивания
                файлов и как приобрести права суперпользователя.  Вы можете вновь начать этот процесс
                при помощи команды <code>fink configure</code>.
                Возможно, для настройки некоторых опций надо будет сделать ручное редактирование файла
                <b>fink.conf</b>. В целом эти опции предназначены только для
                продвинутых пользователей.</p>
            <p> Файл <b>fink.conf</b> находится на
                <code>/sw/etc/fink.conf</code> и его можно редактировать в своем любимом
                текстовом редакторе. Длят его редактирования вам понадобятся права суперпользователя.</p>
        
        <h2><a name="syntax">5.2 Синтаксис fink.conf</a></h2>
            
            <p> Ваш файл fink.conf состоит из множества строк в формате</p>
            <pre>OptionName: Value</pre>
            <p>Опции представлены по одной на строку, а название опции отделено
                от ее величины двоеточием и одинарным пробелом. Содержание значения
                зависит от опции, но обычно это логическая переменная
                ("правда" или "ложь"), строка или список строк, отделенные
                пробелом. Н-р:</p>
            <pre> BooleanOption: True StringOption: Something ListOption:
                Option1 Option2 Option3</pre>
        
        <h2><a name="required">5.3 Необходимые настройки</a></h2>
            
            <p> Некоторые из настроек в <b>fink.conf</b> обязательны.
               Без них Fink не может работать соответствующим образом. К этой категории относятся следующие настройки:
                </p>
            <ul>
                <li>
                    <p>
                        <b>Basepath:</b> маршрут (path)</p>
                    <p> Собщите Fink, где маршрут инсталлирован.  По умолчанию это
                        <b>/sw</b>, если вы не сделали  изменений в процессе первоначальной
                        инсталляции Fink. Вы <b>не</b> должны менять это значение
                        после инсталляции, иначе Fink запутается.</p>
                </li>
            </ul>
        
        <h2><a name="optional">5.4 Опциональные настройки пользователя</a></h2>
            
            <p> Существуют  различные опциональные настройки пользователя, которые пользователи могут
                варьировать по своему желанию для изменения поведения Fink.</p>
            <ul>
                <li>
                    <p>
                        <b>RootMethod:</b> su / sudo / none</p>
                    <p>Для некоторых операций Fink необходимы права суперпользователя.
                        Признанные значения: <b>sudo</b> или <b>su</b>. Также можно
                        сделать настройку <b>none</b>, в этом случае вам надо будет запускать и
                        выполнять Fink самому в качестве суперпользователя. Значение по умолчанию:
                        <b>sudo</b>, которое в большинстве случаев должно быть неизменным.</p>
                </li>
                <li>
                    <p>
                        <b>Trees:</b> список деревьев</p>
                    <p>Имеющиеся деревья:</p>
                    <pre> local/main - любые локальные пакеты, которые вы хотите
                        инсталлировать local/bootstrap - пакеты, использованные при
                        инсталляции Fink stable/crypto - стабильные
                        криптографические пакеты stable/main - другие стабильные
                        пакеты unstable/crypto - нестабильные криптографические
                        пакеты unstable/main - другие нестабильные пакеты</pre>
                    <p> Также вы можете добавить собственные деревья в каталог
                        <code>/sw/fink/dists</code> для личных целей, но
                        в большинстве случаев это не
                        требуется. Деревьями по умолчанию являются "local/main
                        local/bootstrap stable/main". Это список должен сохраняться
                        в sync вместе с файлом <code>/sw/etc/apt/sources.list</code>.
                        (Начиная с fink 0.21.0, fink делает это за вас автоматически.)</p>
                </li>
                <li>
                    <p>
                        <b>Distribution:</b> 10.1, 10.2, 10.2-gcc3.3 или 10.3</p>
                    <p>Fink нужно знать, какую версию Mac OS X вы
                        используете. Не поддерживаются Mac OS X 10.0 и более ранние версии,
                        а текущая версия fink больше не поддерживает 10.1.
                        Все еще поддерживается только Mac OS X 10.2, если инсталлировано обновление
                        Developer Tools за август 2003 г. Данная область настраивается
                        при помощи скрипта <code>/sw/lib/fink/postinstall.pl</code>.
                        Вам не надо изменять это значение вручную.</p>
                </li>
                <li>
                    <p>
                        <b>FetchAltDir:</b> маршрут (path)</p>
                    <p>обычно fink хранит исходные коды, которые он извлекает, в
                        <code>/sw/src</code>. Вы можете указать альтернативный каталог
                        для поиска скачанного исходного кода при использовании
                        этой опции. Н-р:</p>
                    <pre>FetchAltDir: /usr/src</pre>
                </li>
                <li>
                    <p>
                        <b>Verbose:</b> число от 0 до 3</p>
                    <p> Данная опция устанавливает объем информации, которую Fink вам предоставляет
                        о том, что он делает. Значения:<b>0</b>
                        Quiet (не показывает статус скачивания)<b>1</b>
                        Low (не показывает расширяемые тарболы)<b>2</b>
                        Medium (показывает почти все)<b>3</b>
                        High (показывает все) Значение по умолчанию: 1.</p>
                </li>
                <li>
                    <p>
                        <b>NoAutoIndex:</b> булево значение</p>
                    <p>Fink кэширует свои файлы описания пакетов в
                        /sw/var/db/fink.db для сохранения в целях их чтения и синтаксического анализа
                        при каждом выполнении. Fink проверяет, нуждается ли указатель пакетов в 
                        обновлении, если не выбрана опция "правда"
                        ( "True"). По умолчанию это опция "ложь" ( "False") и не 
                        рекомендуется ее изменять. Если вы это сделаете, может
                        потребоваться ручное выполнение команды <code>fink index</code> для
                        обновления указателя.</p>
                </li>
                <li>
                    <p>
                        <b>SelfUpdateNoCVS:</b> булево значение</p>
                    <p>Команда<code>fink selfupdate</code> обновляет менеджер пакетов Fink
                        до последних версий. Благодаря данной опции
                        CVS для этого не используется при настройке
                        True. Настройка устанавливается автоматически
                        командой <code>fink selfupdate-cvs</code>
                        и вам не надо делать изменение вручную.</p>
                </li>
                <li>
                    <p>
                        <b>Buildpath:</b> маршрут</p>
                    <p>Fink необходимо создать несколько временных каталогов для
                        каждого пакета, который он компилирует от исходного кода. По умолчанию
                        они размещаются в <code>/sw/src</code>, но если вы
                        хотите, чтобы они были где-то в другом месте, укажите маршрут.
                        См. описание областей <code>KeepRootDir</code> и
                        <code>KeepBuildDir</code> далее в данном документе для
                        получения более подробной информации об этих временных каталогах </p>
                </li>
            </ul>
        
        <h2><a name="downloading">5.5 Настройки для скачивания</a></h2>
            
            <p>Есть разные настройки, влияющие на то, как Fink скачивает
                данные по пакетам.</p>
            <ul>
                <li>
                    <p>
                        <b>ProxyPassiveFTP:</b> булево значение</p>
                    <p>При этой опции Fink использует "пассивный" режим для скачивания FTP.
                        Некоторые конфигурации сервера или сети FTP
                        требуют настройки данной опции как True. 
                        Рекомендуем оставлять ее все время активированной, т.к.
                        значение активного FTP уменьшилось.</p>
                </li>
                <li>
                    <p>
                        <b>ProxyFTP:</b> url</p>
                    <p>Если вы используете прокси FTP, в этой области надо указать его адрес,
                        н-р:</p>
                    <pre>ProxyFTP: ftp://yourhost.com:2121/</pre>
                    <p>Если вы не используете прокси FTP, не указывайте ничего.</p>
                </li>
                <li>
                    <p>
                        <b>ProxyHTTP:</b> url</p>
                    <p>Если вы используете прокси HTTP, в этой области надо указать его адрес,
                        н-р:</p>
                    <pre>ProxyHTTP: http://yourhost.com:3128/</pre>
                    <p>Если вы не используете прокси HTTP, не указывайте ничего.</p>
                </li>
                <li>
                    <p>
                        <b>DownloadMethod:</b> wget / curl / axel / axelautomirror</p>
                    <p>Fink может использовать три разные приложения для скачивания
                        файлов из Internet - <b>wget</b>, <b>curl</b>
                        или <b>axel</b>. Значение<b>axelautomirror</b> использует
                        экспериментальный режим приложения <b>axel</b>, который
                        пытается определить ближайший сервер, имеющий определенный файл.
                        В данный момент использование <b>axel</b> и
                        <b>axelautomirror</b> не рекомендуется.
                        Значение по умолчанию: <b>curl</b>.<b>Приложение,
                            выбранное вами в качестве DownloadMethod, ОБЯЗАТЕЛЬНО должно быть инсталлировано!</b>
                    </p>
                </li>
                <li>
                    <p>
                        <b>SelfUpdateMethod:</b> point, rsync или cvs</p>
                    <p> Fink может использовать разные способы  для обновления
                        информационных файлов пакетов.<b>rsync</b> - рекомендуемая настройка,
                        когда rsync используется для скачивания только модифицированных файлов
                        на активированных вами деревьях. Имейте в виду, что если вы
                        изменили или добавили файлы на стабильных или нестабильных деревьях,
                        использование rsync приведет к их удалению. Сначала сделайте резервную копию.
                         <b>cvs</b> произведет скачивание с использованием анонимного доступа или доступа
                        :ext: cvs из хранилища fink. Недостатком при этом является то,
                        что cvs не может переключать зеркала и если
                        сервер недоступен, вы не сможете сделать обновление.
                        <b>point</b> произведет скачивание только последней выпущенной версии
                        пакетов. Мы не рекомендуем это делать, т.к. ваши пакеты могут быть
                        быть устаревшими. </p>
                </li>
                <li>
                    <p>
                        <b>UseBinaryDist:</b> булево значение</p>
                    <p> Инициирует попытку fink скачать предварительно скомпилированные
                        бинарные пакеты из бинарной дистрибуции, если они есть и если
                        бинарного пакета еще нет в системе. Это может
                        сэкономить массу времени при инсталляции и таким образом
                        рекомендуется настройка данной опции. Если передать fink <a href="usage.php?phpLang=ru">--use-binary-dist option</a>, будет такой же эффект,
                        но опция будет работать только при одной активации fink.
                            .<b>Поддерживается только для версий начиная с
                        0.23.0</b>. </p>
                </li>
            </ul>
        
        <h2><a name="mirrors">5.6 Настройки зеркал</a></h2>
            
            <p>Получение ПО из Internet может быть скучным занятием и зачастую
                скачивание происходит не так быстро, как нам хотелось бы. Серверы зеркал
                хранят копии файлов, которые есть на других серверах, но могут быстрее подсоединяться к
                 Internet или быть ближе к вам географически,
                позволяя таким образом быстрее скачивать файлы. Они также
                помогают снизить нагрузку на загруженные основные серверы, н-р
                <b>ftp.gnu.org</b>, и являются альтернативой в случае недосягаемости
                какого-либо сервера.</p>
            <p>Чтобы Fink выбрал наилучшее для вас зеркало, надо ему сообщить,
                на каком континенте и в какой стране вы живете. Если скачивание с одного сервера
                не получится, вам будут предложены опции опять попробовать сделать это через это же зеркало,
                другое зеркало в этой же стране или на континенте, либо
                другое зеркало в мире.</p>
            <p>Файл <b>fink.conf</b> содержит настройки с информацией, какие зеркала вы хотели бы использовать.
                </p>
            <ul>
                <li>
                    <p>
                        <b>MirrorContinent:</b> трехбуквенный код</p>
                    <p>Вы должны изменить это значение при помощи <code>fink
                    configure</code>. Трехбуквенный код -
                        это код, который можной найти в <code>/sw/lib/fink/mirror/_keys</code>.
                        Н-р, если вы живете в Европе:</p>
                    <pre>MirrorContinent: eur</pre>
                </li>
                <li>
                    <p>
                        <b>MirrorCountry:</b> шестибуквенный код</p>
                    <p>Надо изменить это значение при помощи <code>fink
                        configure</code>. Этот код можно
                        найти в <code>/sw/lib/fink/mirror/_keys</code>.
                        Н-р, если вы живете в Австрии:</p>
                    <pre>MirrorCountry: eur-AT</pre>
                </li>
                <li>
                    <p>
                        <b>MirrorOrder:</b> MasterFirst / MasterLast /
                        MasterNever / ClosestFirst</p>
                    <p> Fink поддерживает зеркала 'Master', являющиеся отраженными
                        хранилищами тарболов исходного кода для всех пакетов Fink.
                        Преимущество использования комплекта зеркал Master в том, что
                        URL скачивания исходного кода никогда не прерываются. Пользователи могут
                        выбрать либо использование таких зеркал, поддерживаемых
                        рабочей группой Fink, либо только URL оригинальных исходных кодов
                        и сайты внешних зеркал - gnome, KDE и сайты зеркал
                        debian. Дополнительно пользователи могут выбрать комбинацию двух
                        комплектов, которые впоследствии будут определяться при поиске
                        в порядке приближения, как указано выше. При использовании опций
                        MasterFirst и MasterLast пользователь не может "перепрыгнуть"
                        к комплекту Master (или не Master), если скачивание не
                        получилось. Опции:</p>
                    <pre> MasterFirst - Находит зеркала исходного кода "Master" в первую очередь.
                        first. MasterLast - Находит зеркала исходного кода "Master" в последнюю очередь.
                        MasterNever - Никогда не использует  зеркала исходного кода "Master".
                        ClosestFirst - Находит ближайшие зеркала исходного кода в первую очередь
                        (совмещает все зеркала в одном комплекте).</pre>
                </li>
            </ul>
        
        <h2><a name="developer">5.7 Настройки разработчика</a></h2>
            
            <p>Некоторые опции в <b>fink.conf</b> полезны только для
                разработчиков. Мы не рекомендуем обычным пользователям Fink
                их модифицировать. К данной категории относятся следующие опции.</p>
            <ul>
                <li>
                    <p>
                        <b>KeepRootDir:</b> булево значение</p>
                    <p>Благодая этому значению Fink не удаляет каталог
                        /sw/src/root-[name]-[version]-[revision] после
                        построения пакета. Значение по умолчанию:  false. <b>Будьте осторожны,
                            эта опция может  быстро заполнить ваш жесткий диск!</b>
                        Применение в <b>fink</b> флага <b>-K</b> дает такой же результат,
                        но действиует только для одной активации <b>fink</b>.
                        </p>
                </li>
                <li>
                    <p>
                        <b>KeepBuildDir:</b> булево значение</p>
                    <p>Благодая этому значению Fink не удаляет каталог
                        /sw/src/[name]-[version]-[revision] после
                        построения пакета. Значение по умолчанию:  false. <b>Будьте осторожны,
                            эта опция может  быстро заполнить ваш жесткий диск!</b>
                         Применение в <b>fink</b> флага <b>-k</b> дает такой же результат,
                        но действиует только для одной активации <b>fink</b>.
                         </p>
                </li>
            </ul>
        
        <h2><a name="advanced">5.8 Усовершенствованные настройки</a></h2>
            
            <p>Есть некоторые другие опции, которые могут быть полезны, но они требуют определенных
                знаний.</p>
            <ul>
                <li>
                    <p>
                        <b>MatchPackageRegEx:</b>
                    </p>
                    <p>При применении этого значения fink не спрашивает, какой пакет надо инсталлировать, если один 
                        (только один) из вариантов выбора соответствует указанному здесь perl Regular
                        Expression. Н-р:</p>
                    <pre>MatchPackageRegEx: (.*-ssl$|^xfree86$|^xfree86-shlibs$)</pre>
                    <p>будет соответствовать пакетам, заканчивающимся на '-ssl', и полностью будет соответствовать
                        'xfree86' и 'xfree86-shlibs'.</p>
                </li>
                <li>
                    <p>
                        <b>CCacheDir:</b> маршрут</p>
                    <p>Если инсталлирован пакет Fink ccache-default, кэш-файлы,
                        создаваемые им при построении пакетов Fink, будут размещены здесь.
                        Значение по умолчанию:
                        <code>/sw/var/ccache</code>. При настройке
                        <code>none</code> fink не настраивает переменную величину среды CCACHE_DIR
                        и ccache будет использовать
                        <code>$HOME/.ccache</code>, потенциально размещая
                         файлы суперпользователя в вашем исходном каталоге.<b>Данная опция возможна
                            только в версиях fink, выпущенных после 0.21.0</b>. </p>
                </li>
            </ul>
        
        <h2><a name="sourceslist">5.9 Управление файлом apt's sources.list</a></h2>
            
            <p>Начиная с 0.21.0, fink активно управляет
                файлом<code>/sw/etc/apt/sources.list</code>, который используется apt
                для нахождения бинарных файлов для инсталляции. Файл по умолчанию
                sources.list выглядит примерно так, для соответствия вашей дистрибуции и деревьям:</p>
            <pre># Local modifications should either go above this line,
                or at the end. # # Default APT sources configuration for Fink,
                written by the fink program # Local package trees - packages
                built from source locally # NOTE: this is automatically kept in
                sync with the Trees: line in # /sw/etc/fink.conf # NOTE: run
                'fink scanpackages' to update the corresponding Packages.gz
                files deb file:/sw/fink local main deb file:/sw/fink stable main
                crypto # Official binary distribution: download location for
                packages # from the latest release deb
                http://us.dl.sourceforge.net/fink/direct_download 10.3/release
                main crypto # Official binary distribution: download location
                for updated # packages built between releases deb
                http://us.dl.sourceforge.net/fink/direct_download 10.3/current
                main crypto # Put local modifications to this file below this
                line, or at the top.</pre>
            <p>С этим файлом по умолчанию, apt-get сначала просматривает вашу имеющуюся
                инсталляцию уже скомпилированных бинарных файлов, а затем
                официальную бинарную дистрибуцию. Можно изменить этот порядок путем ввода данных
                в начале файла (поиск будет производиться в первую очередь)
                или в его конце (поиск будет производиться в последнюю очередь).</p>
            <p>Если вы меняете строку ваших деревьев или дистрибуцию, которые используете,
                fink автоматически модифицирует часть файла "по умолчанию" для
                соответствия новым значениям. При этом Fink сохранит
                все ваши модификации, которые вы внесли в файл, при условии, что
                вы ограничите свои модификации верхней частью файла (выше
                первой строки по умолчанию) и его нижней частью (ниже последней строки
                по умолчанию).</p>
            <p> Прим.: Если вы модифицировали <code>/sw/etc/apt/sources.list</code>
                перед обновлением до fink 0.21.0, вы найдете свои предыдущие файлы, сохраненные в
                 <code>/sw/etc/apt/sources.list.finkbak</code> .</p>
        
    <p align="right"><? echo FINK_NEXT ; ?>:
<a href="usage.php?phpLang=ru">6. Использование инструмента fink на строке команд</a></p>
<? include_once "../../footer.inc"; ?>


