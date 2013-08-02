<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'cachestore_file', language 'ru', branch 'MOODLE_25_STABLE'
 *
 * @package   cachestore_file
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['autocreate'] = 'Автосоздание каталога';
$string['autocreate_help'] = 'При включенном параметре  по указанному пути будет автоматически создан каталог, если он еще не существует.';
$string['path'] = 'Путь к кэшу';
$string['path_help'] = 'Каталог, который будет использоваться для хранения файлов этого кэша. Это может быть использовано, чтобы указать каталог хранилища файлов на более эффективном диске (например, один в памяти). Если оставить пустым (по умолчанию), то каталог будет автоматически создан в директории moodledata.';
$string['pluginname'] = 'Файл кэша';
$string['prescan'] = 'Предварительное сканирование каталога';
$string['prescan_help'] = 'Если параметр включен, то каталог сканируется при первом использовании кэша и запрашиваемые файлы сначала проверяются на соответствие данным сканирования. Это может помочь, если у вас медленная файловая система и операции с обнаружением файлов являются узким местом.';
$string['singledirectory'] = 'Хранить в одном каталоге';
$string['singledirectory_help'] = 'При включенном параметре файлы (кэшированные элементы) будут храниться в одном каталоге, а не будут разбиты на несколько каталогов. <br /> Это ускорит файловое взаимодействие, но повысит риск повреждения файла  из-за ограничений системы. <br /> Желательно включать параметр только при соблюдении следующих условий: <br /> - Если Вы знаете, что количество элементов в кэше будет достаточно мало и это не приведет к проблемам в файловой системе. <br /> - Данные в кэше не сложно сгенерировать. При этом придерживаться значений по умолчанию все еще может быть лучшим вариантом, так как это снижает вероятность проблем.';
