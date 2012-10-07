<?php
# dvdisaster: English homepage translation
# Copyright (C) 2004-2012 Carsten Gnörlich
#
# UTF-8 trigger: äöüß 
#
# Include our PHP sub routines, then call begin_page()
# to start the HTML page, insert the header, 
# navigation and news if appropriate.

require("../include/dvdisaster.php");
require("../include/screenshot.php");
begin_page();

howto_headline("Восстановление образов носителей", "Основные параметры", "images/fix-icon.png");
?>

<!-- Insert actual page content below -->

<?php begin_screen_shot("Открывание диалога настроек.","global-prefs-invoke.png"); ?>
<table><tr><td class="valignt"><img src="../images/prefs-icon.png" alt="dvdisaster UI: Preferences (button)" class="valignb"></td>
<td>В диалоге настроек находятся следующие вкладки.
Откройте диалог, выбрав значок, помеченный зеленым на снимке с экрана
(для увеличения нажмите на картинку). Значок может выглядеть по-другому, в зависимости
от используемой темы.</td>
</tr></table>
<?php end_screen_shot(); ?>

Параметры, показанные здесь, настраивают dvdisaster для чтения поврежденного носителя.
Специальных настроек для восстановления образа по данным для исправления ошибок нет.
<pre> </pre>

<?php begin_screen_shot("Вкладка \"Образ\".","fix-prefs-image.png"); ?>
<b>Вкладка "Образ".</b> Сначала выберите тип данных для исправления ошибок.
Выбирайте параметр "ISO/UDF" (отмечено зеленым), если у вас файл для исправления ошибок.
В противном случае выбирайте "ECC/RS02" (помечено голубым) для обработки носителя, дополненного
данными для исправления ошибок.<p>
В адаптивной стратегии чтения используется информация из данных для исправления ошибок,
чтбы сделать эффективность процесса чтения как можно выше. Активируйте ее с помощью кнопки,
отмеченной желтым.<p>
Остальные настройки оставьте так, как показано на снимке с экрана.<p>
<?php end_screen_shot(); ?>

<?php begin_screen_shot("Вкладка \"Привод\".","fix-prefs-drive.png"); ?>
<b>Вкладка "Привод".</b> Пока оставьте параметры на этой вкладке в стандартном состоянии, как  показано на снимке с экрана.
Возможно, некоторые приводы лучше работают с использованием режима низкоуровневого чтения "21h". Дополнительную информацию смотрите в
<a href="howtos43.php#21h">дополнительных настройках</a>.<p>
<?php end_screen_shot(); ?>

<?php begin_screen_shot("Вкладка \"Попытки чтения\".","fix-prefs-read-attempts.png"); ?>
<b>Вкладка "Попытки чтения".</b> Сила адаптивной стратегии чтения состоит в том, чтобы
находить все еще читаемые секторы и избегать затягивания процесса с попытками чтения поврежденных секторов. Следовательно, выбирайте чтение "необработанных" секторов (помечено зеленым), так оно не требует дополнительного процессорного времени, но уменьшает до минимума число попыток чтения (отмечено желтым). Для первой попытки чтения используйте умеренный критерий для прекращения - 128 нечитаемых секторов (отмечено голубым). Пока не активируйте хранение необработанных секторов.
Если окажется, что эти настройки не обеспечивают достаточных данных для успешного восстановления, позже они могут быть 
<a href="howtos43.php">оптимизированы</a>.
<p>
<?php end_screen_shot(); ?>

<?php begin_screen_shot("Вкладка \"Файлы\".","create-prefs-file.png"); ?>
<b>Вкладка "Файлы".</b> 
Если операционная система не может создавать файлы больше 2ГБ, тогда нужно
выбрать параметр "Разбивать файлы" (отмечено зеленым). в этом случае
dvdisaster будет создавать до 100 сегментов с именами "medium00.iso",
"medium01.iso" и так далее вместо одного файла "medium.iso". Использование этого
параметра приводит к небольшой потере в производительности. Этот параметр полезен главным образом под Windows, если все еще используется старая файловая система FAT32. Остальные параметры оставьте в выключенном состоянии, как показано на снимке с экрана.
<?php end_screen_shot(); ?>

<pre> </pre>

<b>Не используемые вкладки</b><p>

Параметры на вкладке "Исправление ошибок" не влияют на процесс чтения.
На вкладке "Разное" сейчас есть только функции для создания журнальных файлов. Это полезно для отправки <a href="feedback.php">отчетов об ошибках</a>,
но во время нормальной работы должно быть выключено.
Вкладка "Внешний вид" дает возможность подобрать цвета вывода по своему вкусу, 
но не имеет никакого другого значения для процесса чтения.

<pre> </pre>


<a href="howtos42.php">Чтение носителя и восстановление его содержимого...</a>

<!-- do not change below -->

<?php
# end_page() adds the footer line and closes the HTML properly.

end_page();
?>
