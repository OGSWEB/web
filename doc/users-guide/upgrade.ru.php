<?
$title = "Руководство пользователя - Обновление";
$cvs_author = 'Author: rangerrick';
$cvs_date = 'Date: 2007/02/23 22:04:56';
$metatags = '<link rel="contents" href="index.php?phpLang=ru" title="Руководство пользователя Contents"><link rel="next" href="conf.php?phpLang=ru" title="Конфигурационный файл Fink"><link rel="prev" href="packages.php?phpLang=ru" title="Инсталляция пакетов">';


include_once "header.ru.inc";
?>
<h1>Руководство пользователя - 4. Обновление Fink</h1>
        
        
        
            <p> Данный раздел отражает процедуры обновления вашей инсталляции Fink
                до последних улучшенных версий.</p>
        
        <h2><a name="bin">4.1 Обновление на основе бинарных пакетов</a></h2>
            
            <p> Если вы используете только бинарный дистрибутив, нет
                отдельной процедуры обновления. Надо просто обратиться к выбранному вами инструменту для
                получения списка последних пакетов с сервера и позволить ему обновить
                все пакеты.</p>
            <p> При использовании dselect достаточно применить "[U]pdate", затем
                "[I]nstall". Конечно, можно выполнить между ними "[S]elect"
                для проверки выбранного и получения информации о новых
                пакетах.</p>
            <p> При использовании apt выберите <code>apt-get update</code>, чтобы получить список
                последних пакетов, а затем <code>apt-get upgrade</code>, чтобы обновить все пакеты,
                новые версии которых появились .</p>
            <p>При использовании Fink Commander выберите Binary-&gt;Update descriptions для обновления
                списка пакетов, а затем Binary-&gt;Dist-Upgrade packages
                для обновления до новых версий.</p>
            <p> Для получения более подробной информации, особенно об обновлении версий Fink,
                  предшествующих 0.3.0, см. <a href="http://www.finkproject.org/download/upgrade.php">Матрицу обновления</a>.</p>
        
        <h2><a name="src">4.2 Обновление дистрибутива исходного кода</a></h2>
            
            <p> Если вы используете дистрибутив исходного кода, процедура
                включает два действия. Первое: вы скачиваете описание последних
                пакетов на свой компьютер. Второе: вы используете описание
                пакетов для компиляции новых пакетов; в случае необходимости скачивается
                фактический исходный код.</p>
            <p> Если у вас Fink 0.2.5 или более поздняя версия, первое действие может быть
                выполнено при помощи <code>fink selfupdate</code>. Эта
                команда запустит проверку веб-сайта Fink, чтобы выявить наличие нового
                выпуска версии, и в случае его наличия автоматически скачает и инсталлирует
                описание пакетов. В последних версиях команды
                 <code>fink</code> есть опция получения описания
                пакетов непосредственно из CVS или через rsync. CVS является хранилищем,
                управляемым версией, в котором осуществляется хранение описания пакетов
                и управление ими. Преимущество использования CVS в постоянном
                обновлении, но недостаток в том, что имеется единственный сервер
                CVS для Fink, который может быть ненадежен в случае
                большого трафика. По этой причине обычным пользователям рекомендуется
                использовать rsync. Для rsync имеется много зеркал;
                единственный минус в том, что описанию пакетов
                требуется час или около того для миграции к зеркалам rsync после
                его добавления в CVS.</p>
            <p>(Если у вас возникли проблемы при обновлении инсталляции
                    исходного кода, см. <a href="http://www.finkproject.org/download/fix-upgrade.php">Особые инструкции
                    </a>.)</p>
            <p> Если у вас более ранняя версия Fink, чем 0.2.5, надо скачать
                описание пакетов вручную. Посетите <a href="http://sourceforge.net/project/showfiles.php?group_id=17203">зону скачивания
                </a> и найдите тарбол последних пакетов - 0.x.x.tar.gz
                в модуле "distribution". Скачайте его, затем инсталлируйте следующим образом:
                </p>
            <pre>tar -xzf packages-0.x.x.tar.gz cd packages-0.x.x ./inject.pl</pre>
            <p> После обновления всего описания пакетов (при использовании любого способа)
                надо обновить все пакеты одновременно при помощи
                    <code>fink update-all</code>.</p>
            <p>Для обновления дистрибутива исходного кода при помощи Fink Commander выберите опцию
                Source-&gt;Selfupdate для скачивания информационных файлов
                новых пакетов и примените Source-&gt;Update-all для обновления всех
                устаревших пакетов.</p>
        
        <h2><a name="mix">4.3 Комбинирование бинарных пакетов и пакетов исходного кода</a></h2>
            
            <p> Если для создания некоторых пакетов вы используете предварительно скомпилированные бинарные пакеты, а
                другие строите на основе исходного кода, для обновления инсталляции Fink надо следовать обоим видам инструкций,
                изложенных выше. Т.е. сначала надо использовать
                <code>dselect</code> или <code>apt-get</code> для получения
                последних версий пакетов в бинарном виде, а затем
                <code>fink selfupdate</code> и <code>fink
                update-all</code> для получения описания текущих пакетов и обновления
                остальных пакетов. </p>
            <p> Начиная с fink 0.23.0, использование опции UseBinaryDist
                (настраиваемой через <a href="usage.php?phpLang=ru#options">--use-binary-dist (или -b) </a> или
                в <a href="conf.php?phpLang=ru">конфигурационном файле Fink</a>) позволяет обновить описание как
                исходного кода, так и бинарных  пакетов, если применить
                    <code>fink selfupdate</code>. В данном случае вам уже не нужно 
                использовать отдельно <code>apt-get</code>. </p>
            <p> Если вы используете Fink Commander, выберите опцию Binary-&gt;Update
                descriptions для обновления списка пакетов и затем
                Binary-&gt;Dist-Upgrade packages для обновления до новых версий.
                После этого примените Source-&gt;Selfupdate для скачивания информационных файлов
                новых пакетов, а затем Source-&gt;Update-all (см.
                предыдущий раздел с более подробной информацией). </p>
        
    <p align="right"><? echo FINK_NEXT ; ?>:
<a href="conf.php?phpLang=ru">5. Конфигурационный файл Fink</a></p>
<? include_once "../../footer.inc"; ?>


