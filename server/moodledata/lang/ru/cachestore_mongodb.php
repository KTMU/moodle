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
 * Strings for component 'cachestore_mongodb', language 'ru', branch 'MOODLE_25_STABLE'
 *
 * @package   cachestore_mongodb
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['database'] = 'База данных';
$string['database_help'] = 'Используемое имя базы данных';
$string['extendedmode'] = 'Использовать дополнительные ключи';
$string['extendedmode_help'] = 'При включенном параметре при работе с плагином будут использоваться полные наборы ключей. Это не для внутреннего использования, но при желании все же позволит Вам вручную легко искать и исследовать MongoDB плагин. Включение этой опции добавит небольшую нагрузку, поэтому должно быть сделано только при необходимости.';
$string['password'] = 'Пароль';
$string['password_help'] = 'Пароль пользователя, используемый для соединения.';
$string['pluginname'] = 'MongoDB';
$string['replicaset'] = 'Набор реплик';
$string['replicaset_help'] = 'Название набора реплик для подключения. Если это задано, то основной будет определен с использованием команды базы данных ismaster  в источнике, итак драйвер может в конечном итоге подключиться к серверу, которого даже нет в списке.';
$string['server'] = 'Сервер';
$string['server_help'] = 'Это сервер, который Вы хотите использовать. Можно указать несколько серверов, разделяя их запятыми.';
$string['testserver'] = 'Тестовый сервер';
$string['testserver_desc'] = 'Это тестовый сервер, который Вы хотите использовать. Тестовые серверы являются совсем не обязательными,но на указанном тестовом сервере можно запускать  тесты элементов PHPдля этого хранилища и можно запускать исполняемые тесты.';
$string['username'] = 'Имя пользователя';
$string['username_help'] = 'Используемое имя пользователя при создании соединения.';
$string['usesafe'] = 'Использовать безопасные';
$string['usesafe_help'] = 'При включенном параметре опция  будет использоваться во время операций вставки, получения и удаления. Если Вы задали указанный набор реплик, то он будет принудительным в любом случае.';
$string['usesafevalue'] = 'Использовать безопасные значения';
$string['usesafevalue_help'] = 'Вы можете выбрать определенное значение для использования его безопасным. Это определяет количество серверов, чьи операции должны быть завершены, прежде чем они считаются завершенными.';
