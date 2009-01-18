<?php
# dvdisaster: Russian homepage translation
# Copyright (C) 2007-2009 Igor Gorbounov
#
# UTF-8 trigger: äöüß 
#
# Include our PHP sub routines, then call begin_page()
# to start the HTML page, insert the header, 
# navigation and news if appropriate.

if($news_flash == 0) 
{  require("../include/dvdisaster.php");
   begin_page();
}

$news_counter = 0;

# The news page is different from the other pages;
# you must only use the news_*() functions below to create content.
# Do not insert plain HTML!

news_headline("Новости dvdisaster");

news_item("18.01.2009", "dvdisaster 0.71.27 released", "
  The documentation is finally complete. Some crashes and incompatibilities
  with uncommon media and drives have been fixed. This version includes
  the last major internal overhaul planned for the 0.71.x series, so if
  all goes well the next version will be a stable release candidate.
");

news_item("30.03.2008", "выпущен dvdisaster 0.71.26", "
  В этой версии содержится новый диалог с информацией о вставленном 
  носителе (меню Инструменты/Информация о носителе);
  кроме того, изменено распознавание типов носителей (CD/DVD/BD). 
  Сообщите, если это нарушает совместимость с ранее работавшими приводами.
  Улучшена поддержка BD-носителей.
");

news_item("05.03.2008", "Исправлена проблема с предыдущей версией для Windows (0.70.6 / 0.71.25)", "
  Сделан откат назад поддержки локализованных имен файлов в версии 0.70.6,
  поскольку она нарушила поддержку больших файлов под Windows. Новый обработчик
  локализованных имен файлов будет сначала тестироваться в экспериментальной версии
  0.71.25.
");

news_item("03.03.2008", "Ой! - образы &gt;2ГБ не работают в 0.70.5 и 0.71.24 под Windows", "
   Исправление для локализованных имен файлов вызвало проблемы при обработке
   образов &gt; 2GB под Windows в только что выпущенных версиях 0.70.5 и 0.71.24.
   Пожалуйста, следите за выходом исправленных версий.
");

news_item("24.02.2008", "dvdisaster 0.70.5 / 0.71.24 - исправление проблем с новыми версиями Linux", "
   Исправлена проблема для новых ядер Linux, которая могла вызвать зависание системы
   в некоторых случаях. Обновите программу на системах 
   с ядрами 2.6.17 и выше; может быть, более ранние ядра тоже подвержены этой проблеме.<p> 

   В версии dvdisaster 0.71.24 начато переписывание 
   онлайновой документации, включая перевод на русский язык, сделанный
   Игорем Горбуновым.
"); # end of news_item

news_item("28.10.2007", "Начата новая документация", "
   В настоящее время документация на dvdisaster перерабатывается для предстоящего
   выхода V0.72. Наберитесь терпения; возможно, новая документация будет более
   полезной, чем старая, но нам требуется несколько недель, чтобы все охватить.
"); # end of news_item

if($news_flash == 0) 
   end_page();
?>
