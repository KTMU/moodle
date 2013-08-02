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
 * Strings for component 'cachestore_memcached', language 'ru', branch 'MOODLE_25_STABLE'
 *
 * @package   cachestore_memcached
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['bufferwrites'] = 'Записи в буфере';
$string['bufferwrites_help'] = 'Включает или отключает буферизацию ввода/вывода Включение буферизации ввода/вывода вызывает хранение команд в «буфере» вместо их  отправки. Любое действие, которое  извлекает данные, вызывает отправку этого буфера к удаленному подключению. Завершение соединения или полное закрытие соединения также вызовет передачу данных буфера к удаленному подключению.';
$string['hash_fnv1_32'] = 'FNV1_32';
$string['hash_fnv1_64'] = 'FNV1_64';
$string['hash_fnv1a_32'] = 'FNV1A_32';
$string['hash_fnv1a_64'] = 'FNV1A_64';
$string['hash_help'] = 'Задает алгоритм хэширования, используемый для ключей элементов. Каждый алгоритм хэширования имеет свои преимущества и свои недостатки. Используйте значение по умолчанию, если Вы не знаете, что выбрать или не озабочены этим.';
$string['pluginname'] = 'Кэширование в памяти';
$string['prefix'] = 'Префикс ключа';
$string['prefix_help'] = 'Он может быть использован для создания "домена" для ключей элементов, позволяющего создавать несколько кэшированных хранилищ в одной инсталляции. Он не может быть длиннее 16 символов.';
$string['prefixinvalid'] = 'Неверный префикс. Вы можете использовать только a-z A-Z 0-9-_.';
$string['servers'] = 'Серверы';
$string['servers_help'] = 'Перечень серверов, которые  будут использованы как устройства кэширования в памяти. Серверы должны быть перечислены по одному на строке и состоять из адреса сервера, порта и веса. Если порт не представлен, то используется порт по умолчаниют (11211) . Например: <pre> server.url.com
IP-адрес:порт
имя_сервера:порт:вес </pre>';
$string['testservers'] = 'Тестовые серверы';
$string['testservers_desc'] = 'Тестовые серверы могут использоваться для тестирования элементов и рабочего тестирования. Серверы должны быть перечислены по одному на строке и состоять из адреса сервера, порта и веса. Если порт не представлен, то используется порт по умолчаниют (11211).

Но совершенно не обязательно настраивать тестовые серверы.';
$string['usecompression'] = 'Использовать сжатие';
$string['usecompression_help'] = 'Включение или выключение полезного  сжатия. При включенной функции  значения элементов больше некоторого порога (в настоящее время 100 байт) будут сжиматься при хранении и самостоятельно распаковываться при извлечении.';
