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
 * Strings for component 'cachestore_memcache', language 'ru', branch 'MOODLE_25_STABLE'
 *
 * @package   cachestore_memcache
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Memcache';
$string['prefix'] = 'Префикс ключа';
$string['prefix_help'] = 'Этот префикс используется для всех ключевых имен в кэше сервера.
* Если на этом сервере используется только один экземпляр Moodle , то Вы можете оставить это значение по умолчанию.
* В связи с ограничением длины ключа допускается максимум 5 символов.';
$string['prefixinvalid'] = 'Неверный префикс. Вы можете использовать только a-z A-Z 0-9-_.';
$string['servers'] = 'Серверы';
$string['servers_help'] = 'Это задает серверы, которые могут быть использованы при этом кэше. Серверы должны быть заданы по одному на строке и состоят из адреса сервера, порта и веса. Если порт не задан, то используется порт по умолчанию (11211).

Например:
<pre> server.url.com
ipaddress:port
servername:port:weight
</pre>';
$string['testservers'] = 'Тестовые серверы';
$string['testservers_desc'] = 'Тестовые серверы используются для тестирования элементов и для исполняемого тестирования. Совершенно не обязательно задавать тестовые серверы. Серверы могут быть заданы по одному на строке и состоять из адреса сервера, порта и веса.
Если порт не задан, то используется порт по умолчанию (11211).';
