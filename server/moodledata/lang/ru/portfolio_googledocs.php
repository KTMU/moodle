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
 * Strings for component 'portfolio_googledocs', language 'ru', branch 'MOODLE_25_STABLE'
 *
 * @package   portfolio_googledocs
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['clientid'] = 'ID клиента';
$string['noauthtoken'] = 'От Google не получен ключ аутентификации. Пожалуйста, убедитесь, что Вы разрешили Moodle получить доступ к Вашей учетной записи Google.';
$string['oauth2upgrade_message_content'] = 'При  обновлении до Moodle 2.3, плагин Google Docs был отключен. Чтобы снова включить его, Ваш сайт Moodle должен быть зарегистрирован в Google с получением ID клиента и секрета. Описание см. в документации {$a->docsurl}. ID клиента и секрет могут быть использованы для настройки всех плагинов Google Docs и Picasa.';
$string['oauth2upgrade_message_small'] = 'Этот плагин был отключен, так как он требует настройки. См. описание в документации установки Google OAuth 2.0.';
$string['pluginname'] = 'Документы Google';
$string['secret'] = 'Секрет';
$string['sendfailed'] = 'Не удалось файл {$a}  передать Google';
