<?
$title = "Ч.З.В. - Связь с другими проектами";
$cvs_author = 'Author: alexkhansen';
$cvs_date = 'Date: 2008/10/29 00:15:08';
$metatags = '<link rel="contents" href="index.php?phpLang=ru" title="Ч.З.В. Contents"><link rel="next" href="mirrors.php?phpLang=ru" title="Зеркала Fink"><link rel="prev" href="general.php?phpLang=ru" title="Общие вопросы">';


include_once "header.ru.inc";
?>
<h1>Ч.З.В. - 2. Связь с другими проектами</h1>
        
        
        <a name="upstream">
            <div class="question"><p><b><? echo FINK_Q ; ?>2.1: Предоставляете ли вы свои патчи координаторам исходного ПО?</b></p></div>
            <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Мы стараемся это делать. Иногда отправка патчей с нашей стороны несложна
                    и все довольны, когда очередной выпуск версии пакета завершен.
                    К сожалению, дело с большинством пакетов обстоит не так просто.
                    Вот некоторые типичные проблемные ситуации:</p><ul>
                    <li>Координатор пакета Fink очень занят и не имеет времени на
                        отправку патча и сопроводительного объяснения
                        координаторам исходного ПО.</li>
                    <li>Координаторы исходного ПО не утверждают патч. Для этого
                        существует много причин. Большинство из них
                        очень заинтересованы в чистом коде,
                        проверках чистой конфигурации и совместимости с другими платформами. </li>
                    <li>Координаторы исходного ПО утверждают патч, но до того, как они выпустят
                        новую версию своего пакета, проходят недели и
                        месяцы.</li>
                    <li>Первоначальные авторы прекратили работу над пакетом
                        и не будет новых выпусков, в которые можно было бы
                        внести патч.</li>
                </ul></div>
        </a>
        <a name="debian">
            <div class="question"><p><b><? echo FINK_Q ; ?>2.2: Какое отношение вы имеете к проекту Debian? 
                    Переносите ли вы Debian Linux в Mac OS X?</b></p></div>
            <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Официальных отношений между Fink и <a href="http://www.debian.org">Debian</a> нет. Fink
                    <b>не</b> является портом дистрибуции Debian GNU/Linux. Хотя мы
                    перенесли инструменты управления пакетами Debian (dpkg,
                    dselect, apt-get) и используем их бинарный пакетный формат .deb,
                    фактические пакеты сделаны специально для
                    Mac OS X / Darwin и не используют исходный пакетный формат Debian.
                    </p></div>
        </a>
        <a name="apple">
            <div class="question"><p><b><? echo FINK_Q ; ?>2.3: Какое отношение вы имеете к Apple?</b></p></div>
            <div class="answer"><p><b><? echo FINK_A ; ?>:</b> 
                    <a href="http://www.apple.com/">Apple</a> знает о
                    Fink и обеспечил нам определенную поддержку в качестве части
                    своей деятельности по развитию отношений в работе над открытым исходным кодом. Летом и осенью 2001 г.
                    они предоставили нам предварительные начальные числа для новых версий Mac OS X
                    в надежде на то, что пакеты Fink могут быть адаптированы
                    к моменту их выхода.  Цитируем: <b>"Надеемся, это подчеркнет
                        нашу приверженность, потому что многие думают, что мы к этому не стремимся.
                        Со временем наше участие в игре
                    в открытый исходный код станет активнее."</b> Благодарим Apple!</p></div>
        </a>
        <a name="darwinports">
            <div class="question"><p><b><? echo FINK_Q ; ?>2.4: Какое отношение вы имеете к Darwinports?</b></p></div>
            <div class="answer"><p><b><? echo FINK_A ; ?>:</b> Darwinports и Fink являются взаимодополняющими проектами. Они имеют некоторые
                    точки соприкосновения и несколько человек
                    являются участниками обоих проектов - и Fink, и OpenDarwin.
                    Например, Benjamin Reed делает пакеты KDE для обоих проектов.
                    Darwinports/OpenDarwin использует патчи, разработанные проектом Fink, и
                    мы обсуждаем форму сотрудничества на основе новых взаимоотношений.</p><p>OpenDarwin начался с попытки опробовать иной подход
                    к системе пакетирования. См. заявление на сайте <a href="http://www.opendarwin.org/projects/darwinports/en/faq.php">OpenDarwin.org</a>
                    для получения более подробной информации.</p></div>
        </a>
    <p align="right"><? echo FINK_NEXT ; ?>:
<a href="mirrors.php?phpLang=ru">3. Зеркала Fink</a></p>
<? include_once "../footer.inc"; ?>


