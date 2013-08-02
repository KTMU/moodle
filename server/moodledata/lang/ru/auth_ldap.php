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
 * Strings for component 'auth_ldap', language 'ru', branch 'MOODLE_25_STABLE'
 *
 * @package   auth_ldap
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['auth_ldap_ad_create_req'] = 'Не удается создать новую учетную запись в Active Directory. Убедитесь, что Вы соответствуете всем требованиям для этой работы (LDAPS соединение, соответствие пользователя с достаточными правами и т.д.)';
$string['auth_ldap_attrcreators'] = 'Список групп или контекстов, членам которых позволено создавать атрибуты. Разделитель для несколько групп - " ; ". Обычно что-то вроде "cn=teachers,ou=staff,o=myorg"';
$string['auth_ldap_attrcreators_key'] = 'Создатели атрибутов';
$string['auth_ldap_auth_user_create_key'] = 'Создание внешних пользователей';
$string['auth_ldap_bind_dn'] = 'Если Вы хотите связанного пользователя для поиска пользователей, укажите это здесь. Например, \'cn=ldapuser,ou=public,o=org\'';
$string['auth_ldap_bind_dn_key'] = 'Отличительное имя';
$string['auth_ldap_bind_pw'] = 'Пароль для связывания пользователя.';
$string['auth_ldap_bind_pw_key'] = 'Пароль';
$string['auth_ldap_bind_settings'] = 'Привязка параметров';
$string['auth_ldap_changepasswordurl_key'] = 'Адрес страницы смены пароля';
$string['auth_ldap_contexts'] = 'Список контекстов, где расположены пользователи . Отделите различные контексты \';\'. Например: \'ou=users,o=org; ou=others,o=org\'';
$string['auth_ldap_contexts_key'] = 'Контексты';
$string['auth_ldap_create_context'] = 'Если Вы разрешили создание пользователей при подтверждении по почте, определите контекст, в который будут заводиться пользователи. Этот контекст должен отличаться от других, чтобы предотвратить проблемы безопасности. Нет необходимости добавлять, название контекста к ldap_context-переменным, система будет искать пользователей от этого контекста автоматически.';
$string['auth_ldap_create_context_key'] = 'Контекст для новых пользователей';
$string['auth_ldap_create_error'] = 'Ошибка при создании пользователя в LDAP.';
$string['auth_ldap_creators'] = 'Список групп, членам которых разрешается создавать новые курсы. Список групп разделяйте с помощью \';\'. Например,\'cn=teachers,ou=staff,o=myorg\'';
$string['auth_ldap_creators_key'] = 'Создатели';
$string['auth_ldapdescription'] = 'Этот метод обеспечивает аутентификацию с помощью LDAP-сервера. Если данный логин и пароль имеют силу, создаётся новая пользовательская учётная запись в базе данных системы. Этот модуль может считывать атрибуты пользователя из LDAP-сервера и заполнять требуемые поля в Moodle. В дальнейшем проверяются только логин и пароль';
$string['auth_ldap_expiration_desc'] = 'Выберите "Нет" для отключения проверки истечения срока действия пароля или "LDAP" для чтения срока действия пароля прямо из LDAP';
$string['auth_ldap_expiration_key'] = 'Окончание';
$string['auth_ldap_expiration_warning_desc'] = 'За сколько дней предупреждать об истечении срока действия пароля.';
$string['auth_ldap_expiration_warning_key'] = 'Предупреждение об окончании';
$string['auth_ldap_expireattr_desc'] = 'Дополнительно: перезапись LDAP-атрибута, в котором хранится время истечения срока действия пароля';
$string['auth_ldap_expireattr_key'] = 'Атрибут окончания';
$string['auth_ldapextrafields'] = 'Эти поля дополнительные. Вы можете выбрать предварительное заполнение некоторых полей пользовательских данных от полей LDAP, указанного здесь. <p>Не заполняйте это поле, для того чтобы не переносить данные с LDAP.</p><p>В любом случае, пользователь сможет редактировать все поля после того, как он зайдет в систему.</p>';
$string['auth_ldap_gracelogin_key'] = 'Атрибут для попыток входа по истёкшим паролям';
$string['auth_ldap_gracelogins_desc'] = 'Включить поддержку попыток входа по истёкшим LDAP паролям. После истечения срока действия пароля пользователь сможет входить до тех пор, пока счётчик попыток не уменьшится до 0. При включенном параметре при истечении срока действия пароля пользователю отображается сообщение.';
$string['auth_ldap_gracelogins_key'] = 'Попытки входа по истёкшим паролям';
$string['auth_ldap_groupecreators'] = 'Список групп или контекстов, членам которых позволено создавать группы. Разделитель для несколько групп - " ; ". Обычно что-то вроде "cn=teachers,ou=staff,o=myorg"';
$string['auth_ldap_groupecreators_key'] = 'Создатели групп';
$string['auth_ldap_host_url'] = 'Укажите сервер LDAP в формате URL, например \'ldap://ldap.myorg.com/\' или \'ldaps://ldap.myorg.com/\'. Для обеспечения бесперебойной работы можно указать несколько серверов, разделив их знаком ";".';
$string['auth_ldap_host_url_key'] = 'URL сервера';
$string['auth_ldap_ldap_encoding'] = 'Укажите кодировку LDAP сервера. Скорее всего это UTF-8, MS AD v2 использует платформенную кодировку по умолчанию, такую как cp1252, cp1250 и т. д.';
$string['auth_ldap_ldap_encoding_key'] = 'Кодировка LDAP';
$string['auth_ldap_login_settings'] = 'Настройки входа';
$string['auth_ldap_memberattribute'] = 'Определите пользовательский атрибут, определяющий принадлежность пользователя к группе. Обычно \'участник\'';
$string['auth_ldap_memberattribute_isdn'] = 'Дополнительно: переопределение управлением значений атрибута члена, либо 0, либо 1.';
$string['auth_ldap_memberattribute_isdn_key'] = 'Член использует атрибут DN';
$string['auth_ldap_memberattribute_key'] = 'Атрибут членства';
$string['auth_ldap_noconnect'] = 'LDAP-модуль не сможет подключиться к серверу: {$a}';
$string['auth_ldap_noconnect_all'] = 'LDAP-модуль не может подключиться ни к одному серверу: {$a}';
$string['auth_ldap_noextension'] = '<em>Модуль PHP LDAP, кажется, отсутствует. Пожалуйста, убедитесь, что он установлен и включен, если Вы хотите использовать этот плагин аутентификации.</em>';
$string['auth_ldap_no_mbstring'] = 'Вам нужно расширение MBstring  для создания пользователей в Active Directory.';
$string['auth_ldapnotinstalled'] = 'Невозможно использовать LDAP-аутентификацию. Модуль PHP LDAP не установлен.';
$string['auth_ldap_objectclass'] = 'Дополнительно: переопределение класса объекта, использующего имя / поиск пользователей на ldap_user_type. В большинстве случаев это не нужно использовать.';
$string['auth_ldap_objectclass_key'] = 'Класс объекта';
$string['auth_ldap_opt_deref'] = 'Определяет, как псевдонимы обрабатываются во время поиска. Выберите одно из следующих значений: «Нет» (LDAP_DEREF_NEVER) или "Да" (LDAP_DEREF_ALWAYS)';
$string['auth_ldap_opt_deref_key'] = 'Разыменовывать псевдонимы';
$string['auth_ldap_passtype'] = 'Укажите формат для новых или измененных паролей на сервере LDAP.';
$string['auth_ldap_passtype_key'] = 'Формат пароля';
$string['auth_ldap_passwdexpire_settings'] = 'Настройки срока действия пароля LDAP.';
$string['auth_ldap_preventpassindb'] = 'Выберите "Да", чтобы предотвратить сохранение паролей в БД Moodle.';
$string['auth_ldap_preventpassindb_key'] = 'Скрытие паролей';
$string['auth_ldap_search_sub'] = 'Укажите значения <> 0 если Вам нравится искать пользователей по субконтекстам.';
$string['auth_ldap_search_sub_key'] = 'Поиск подконтекстов';
$string['auth_ldap_server_settings'] = 'Параметры сервера LDAP';
$string['auth_ldap_unsupportedusertype'] = 'Аутентификация: LDAP user_create () не поддерживает выбранный UserType: {$a}';
$string['auth_ldap_update_userinfo'] = 'Обновляйте пользовательскую информацию (Имя, Фамилию, адрес ..) от LDAP до системы. Смотрите /auth/ldap/attr_mappings.php для того, чтобы отобразить информацию.';
$string['auth_ldap_user_attribute'] = 'Атрибут, используемый для имя/поиск. Обычно, \'cn\'.';
$string['auth_ldap_user_attribute_key'] = 'Атрибут пользователя';
$string['auth_ldap_user_exists'] = 'LDAP имя пользователя уже существует.';
$string['auth_ldap_user_settings'] = 'Настройки поиска пользователя';
$string['auth_ldap_user_type'] = 'Выберите, каким образом пользователи хранятся в LDAP. Этот параметр также определяет, как будут работать механизмы создания пользователей и входа по истёкшим паролям.';
$string['auth_ldap_user_type_key'] = 'Тип пользователя';
$string['auth_ldap_usertypeundefined'] = 'config.user_type не определен или функция ldap_expirationtime2unix не поддерживает выбранный тип!';
$string['auth_ldap_usertypeundefined2'] = 'config.user_type не определен или функция ldap_unixi2expirationtime не поддерживает выбранный тип!';
$string['auth_ldap_version'] = 'Версия LDAP протокола, которую использует Ваш сервер.';
$string['auth_ldap_version_key'] = 'Версия';
$string['auth_ntlmsso'] = 'NTLM SSO';
$string['auth_ntlmsso_enabled'] = 'Выберите "Да" для попытки единой регистрации SSO (Single Sign On) с доменом NTLM. <strong>Примечание:</strong> это требует дополнительной настройки сервера для работы, см. <a href="http://docs.moodle.org/en/NTLM_authentication">http://docs.moodle.org/en/NTLM_authentication</a>';
$string['auth_ntlmsso_enabled_key'] = 'Включить';
$string['auth_ntlmsso_ie_fastpath'] = 'Выберите "Да" для быстрого пути регистрации NTLM SSO  (обходит определенные шаги и работает только если браузером клиента является MS Internet Explorer).';
$string['auth_ntlmsso_ie_fastpath_key'] = 'Быстрый путь MS IE?';
$string['auth_ntlmsso_maybeinvalidformat'] = 'Невозможно определить имя пользователя из заголовка REMOTE_USER. Является ли настроенный формат верным?';
$string['auth_ntlmsso_missing_username'] = 'Необходимо указать по крайней мере %username% в отдаленном формате имени пользователя';
$string['auth_ntlmsso_remoteuserformat'] = 'При выборе типа аутентификации "NTLM" Вы можете здесь указать формат отдаленного имени пользователя. Если оставить это пустым, то будет использоваться формат по умолчанию DOMAINusername. Вы можете использовать (не обязательно)<b>%domain%</b>, где вместо заполнителя можно указать доменное имя и обязательное <b>% имя пользователя%</b>, где вместо заполнителя необходимо указать имя пользователя. <br /><br /> Некоторые широко используемые форматы: <tt>%domain%%username%</tt> (умолчание MS Windows), <tt>%domain%/%username%</tt>, <tt>%domain%+%username%</tt> и просто <tt>%username%</tt> (iесли нет доменной части).';
$string['auth_ntlmsso_remoteuserformat_key'] = 'Формат отдаленного имени пользователя';
$string['auth_ntlmsso_subnet'] = 'При установленном параметре будет предпринята попытка регистрации SSO с клиентами этой подсети. Формат: xxx.xxx.xxx.xxx / маска. Разделитель несколько подсетей - "," (запятая).';
$string['auth_ntlmsso_subnet_key'] = 'Подсеть';
$string['auth_ntlmsso_type'] = 'Метод аутентификации настроен в веб-сервере для аутентификации пользователей (если есть сомнения, то выбрать NTLM)';
$string['auth_ntlmsso_type_key'] = 'Тип аутентификации';
$string['connectingldap'] = 'Подключение к серверу LDAP ...';
$string['creatingtemptable'] = 'Создание временной таблицы {$a}';
$string['didntfindexpiretime'] = 'password_expire() не найден срок действия.';
$string['didntgetusersfromldap'] = 'Ошибка - из LDAP не получено ни одного пользователя - выход.';
$string['gotcountrecordsfromldap'] = 'Получено записей из LDAP - {$a}';
$string['morethanoneuser'] = 'Странно! Более одной записи пользователя найдено в LDAP. Используется только первая из них.';
$string['needbcmath'] = 'Вам нужно расширение BCMath, для использования возможности входа по просроченным паролям при хранении пользователей в Active Directory';
$string['needmbstring'] = 'Вам нужно расширение mbstring, для возможности смены паролей в Active Directory';
$string['nodnforusername'] = 'Ошибка в user_update_password(). Нет DN для: {$a->username}';
$string['noemail'] = 'Отправить вам письмо не удалось!';
$string['noupdatestobedone'] = 'Нет предстоящих обновлений';
$string['nouserentriestoremove'] = 'Нет записей об удаленных пользователях';
$string['nouserentriestorevive'] = 'Нет записей о восстановленных пользователях';
$string['nouserstobeadded'] = 'Нет добавленных пользователей';
$string['ntlmsso_attempting'] = 'Попытка единой регистрации (Single Sign On) через NTLM ...';
$string['ntlmsso_failed'] = 'Автоматический вход не удался, попробуйте использовать обычную страницу входа ...';
$string['ntlmsso_isdisabled'] = 'NTLM SSO отключена.';
$string['ntlmsso_unknowntype'] = 'Неизвестный тип NTLM SSO!';
$string['pagedresultsnotsupp'] = 'Страничные результаты LDAP не поддерживаются (или не поддерживается версия PHP или Вы настроили Moodle на использование протокола LDAP версии 2)';
$string['pagesize'] = 'Убедитесь, что это значение меньше, чем предельный размер результирующего набора сервера LDAP (максимальное количество записей, которые могут быть возвращены в одном запросе).';
$string['pagesize_key'] = 'Размер страницы';
$string['pluginname'] = 'Сервер LDAP';
$string['pluginnotenabled'] = 'Плагин не включен!';
$string['renamingnotallowed'] = 'В LDAP переименования пользователей не допускаются';
$string['rootdseerror'] = 'Ошибка запроса RootDSE для Active Directory';
$string['updatepasserror'] = 'Ошибка в user_update_password(). Код ошибки: {$a->errno}; Описание ошибки: {$a->errstring}';
$string['updatepasserrorexpire'] = 'Ошибка в user_update_password() при чтении срока действия пароля. Код ошибки: {$a->errno}; Описание ошибки: {$a->errstring}';
$string['updatepasserrorexpiregrace'] = 'Ошибка в user_update_password() при изменении срока действия пароля и/или задании возможности входа при просроченном пароле. Код ошибки: {$a->errno}; Описание ошибки: {$a->errstring}';
$string['updateremfail'] = 'Ошибка при обновлении записи LDAP. Код ошибки: {$a->errno}; строка ошибки: {$a->errstring} <br/> Ключ ({$a->key}) - старое значение Moodle : новое значение "{$a->ouvalue}" : "{$a->nuvalue}"';
$string['updateremfailamb'] = 'Не удалось обновить LDAP с неоднозначным полем {$a->key}; старое значение Moodle : "{$a->ouvalue}", новое значение:"{$a->nuvalue}"';
$string['updateusernotfound'] = 'Не удалось найти пользователя при внешнем обновлении. Имеющиеся сведения: база поиска: "{$a->userdn}"; фильтр поиска:"(objectClass=*)"; атрибуты поиска: "{$a->attribs}".';
$string['useracctctrlerror'] = 'Ошибка при получении UserAccountControl для {$a}';
$string['user_activatenotsupportusertype'] = 'Аутентификация: LDAP user_activate () не поддерживает выбранный UserType: {$a}';
$string['user_disablenotsupportusertype'] = 'Аутентификация: LDAP user_disable () не поддерживает выбранный UserType: {$a}';
$string['userentriestoadd'] = 'Записи пользователей, которые будут добавлены: {$a}';
$string['userentriestoremove'] = 'Записи пользователей, которые будут удалены: {$a}';
$string['userentriestorevive'] = 'Записи пользователей, которые будут восстановлены: {$a}';
$string['userentriestoupdate'] = 'Записи пользователей, которые будут обновлены: {$a}';
$string['usernotfound'] = 'Пользователь не найден в LDAP';
