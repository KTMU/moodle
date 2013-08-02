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
 * Strings for component 'enrol_authorize', language 'ru', branch 'MOODLE_25_STABLE'
 *
 * @package   enrol_authorize
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['adminacceptccs'] = 'Кредитные карты каких типов будут приниматься?';
$string['adminaccepts'] = 'Выберите допустимые способы оплаты и их типы';
$string['adminauthorizeemail'] = 'Параметры отправки e-mail';
$string['adminauthorizesettings'] = 'Настройки учетной записи  Authorize.Net';
$string['adminauthorizewide'] = 'Общие настройки';
$string['adminconfighttps'] = 'Убедитесь, что Вы используете безопасный вход - "<a href="{$a->url}">включен loginhttps</a>" при применении этого плагина <br /> Администрирование >> Безопасность >> Безопасность HTTP .';
$string['adminconfighttpsgo'] = 'Перейти на <a href="{$a->url}">защищенную страницу</a> для настройки этого плагина.';
$string['admincronsetup'] = 'Сценарий обслуживания Cron.php  не запускался по меньшей мере 24 часа. <br /> Cron должен быть включен, если Вы хотите использовать функцию запланированнного приема оплаты. <br /> <b>Включите</b> плагин Authorize.Net  и правильно <b>настройте Cron</b> или снова <b>снимите флажок поля an_review</b>. <br /> Если отключить запланированный прием оплаты, то транзакции будут отменены, если Вы не проверите их в течение 30 дней. <br /> Проверьте <b>an_review</b> и введите <b>" 0 "</b> в поле   <b>an_capture_day</b> <br /> если Вы хотите <b>вручную</b> принять/отклонить платежи в течение 30 дней.';
$string['adminemailexpiredsortsum'] = 'Общая сумма';
$string['adminemailexpsetting'] = '(0 = отключить отправку email, по умолчанию = 2, максимум = 5)<br />(Настройки ручного приема оплаты для отправки email: cron=включено, an_review=отмечено, an_capture_day=0, an_emailexpired=1-5)';
$string['adminhelpcapturetitle'] = 'День запланированного приема оплаты';
$string['adminteachermanagepay'] = 'Преподаватели могут управлять платежами за курс.';
$string['amount'] = 'Количество';
$string['anauthcode'] = 'Получить код авторизации';
$string['anauthcodedesc'] = 'Если кредитная карта пользователя не может быть напрямую принята через Интернет, то получить код авторизации по телефону от клиент-банка.';
$string['anavs'] = 'Система проверка адреса';
$string['anavsdesc'] = 'Проверьте это, если Вы активировали Систему проверки адреса  (AVS) в своем счете Authorize.Net. При заполнении формы оплаты пользователь должен заполнить следующие поля - улица, область, страна и почтовый индекс.';
$string['ancaptureday'] = 'День приема оплаты';
$string['ancapturedaydesc'] = 'Прием оплаты кредитной картой происходит автоматически, если преподаватель или администратор не рассмотрели заказ в течение указанного количества дней. CRON ДОЛЖЕН БЫТЬ ВКЛЮЧЕН. <br /> (0 дней означает, запланированный прием оплаты отключен. При этом преподаватель или администратор вручную принимают/отклоняют заказы. Заказ будет отменен, если запланированный прием оплаты отключен, а Вы не рассмотрели его в течение 30 дней.)';
$string['anemailexpired'] = 'Уведомление об истечении срока';
$string['anemailexpireddesc'] = 'Это полезно для "ручного приема оплаты". Администраторы уведомляются за указанное количество дней об истечении срока рассмотрения заказов.';
$string['anemailexpiredteacherdesc'] = 'Если включена функция ручного приема оплаты (см. выше) и преподаватели могут управлять платежами, то они могут также получать уведомления об истечении не рассмотренных заказов. Уведомление будет отправлено по электронной почте каждому преподавателю курса о количестве не рассмотренных заказов с истекающим сроком.';
$string['anlogin'] = 'Authorize.Net: логин';
$string['anpassword'] = 'Authorize.Net: Пароль';
$string['antestmode'] = 'Тестовый режим';
$string['antestmodedesc'] = 'Выполнить транзакции в тестовом режиме (никакие деньги не используются)';
$string['antrankey'] = 'Authorize.Net: ключ транзакции';
$string['authcaptured'] = 'Утвержденные/Принятые';
$string['authcode'] = 'Код авторизации';
$string['authorize:config'] = 'Настраивать зачисления через Authorize.Net';
$string['authorizedpendingcapture'] = 'Утвержденные/Ожидающие рассмотрения';
$string['authorizeerror'] = 'Ошибка Authorize.Net: {$a}';
$string['authorize:manage'] = 'Управление записанными на курс пользователями';
$string['authorize:managepayments'] = 'Управлять платежами';
$string['authorize:unenrol'] = 'Исключить пользователей из курса';
$string['authorize:unenrolself'] = 'Отчислять себя из курса';
$string['authorize:uploadcsv'] = 'Загружать файл CSV';
$string['avsa'] = 'Адрес (улица) соответствует, почтовый индекс отсутствует';
$string['avsb'] = 'Информация об адресе не представлена';
$string['avse'] = 'Ошибка системы проверки адреса';
$string['avsg'] = 'Карта не американского банка-эмитента';
$string['avsn'] = 'Нет совпадений ни по адресу (улица), ни по почтовому индексу';
$string['avsp'] = 'Система проверки адреса не применяется';
$string['avsr'] = 'Повторить - тайм-аут системы или она недоступна';
$string['avsresult'] = 'Результат AVS: {$a}';
$string['avss'] = 'Служба не поддерживает эмитента';
$string['avsu'] = 'Информация об адресе недоступна';
$string['avsw'] = 'Сопоставление 9-значного почтового индекса без адреса (улицы)';
$string['avsx'] = 'Сопоставление адреса (улицы) и 9-значного почтового индекса';
$string['avsy'] = 'Сопоставление адреса (улицы) и 5-значного почтового индекса';
$string['avsz'] = 'Сопоставление 5-значного почтового индекса без адреса (улицы)';
$string['canbecredit'] = 'Могут быть возвращены в {$a->upto}';
$string['cancelled'] = 'Отменено';
$string['capture'] = 'Принято';
$string['capturedpendingsettle'] = 'Приняты/Ожидают оплаты';
$string['capturedsettled'] = 'Приняты/Оплачены';
$string['captureyes'] = 'Кредитная карта будет принята и студент будут зачислен на курс. Вы уверены?';
$string['cccity'] = 'Город';
$string['ccexpire'] = 'Дата истечения срока';
$string['ccexpired'] = 'Срок действия кредитной карты истек';
$string['ccinvalid'] = 'Неверный номер карты';
$string['cclastfour'] = 'последние четыре';
$string['ccno'] = 'Номер кредитной карты';
$string['ccstate'] = 'Область';
$string['cctype'] = 'Тип кредитной карты';
$string['ccvv'] = 'Проверка карты';
$string['ccvvhelp'] = 'Посмотрите на обратной стороне карты (последние 3 цифры)';
$string['choosemethod'] = 'Если Вы знаете кодовое слово курса, то, пожалуйста, введите его. <br /> В противном случае Вы должны заплатить за этот курс.';
$string['chooseone'] = 'Заполните одно или оба поля. Пароль не отображается.';
$string['cost'] = 'Стоимость';
$string['costdefaultdesc'] = 'В настройках курса  в поле стоимости курса <strong> введите -1</strong> для использования этой стоимости по умолчанию.';
$string['currency'] = 'Валюта';
$string['cutofftime'] = 'Время прерывания';
$string['cutofftimedesc'] = 'Время прерывания транзакции.
Когда последняя транзакция выбрана для оплаты?';
$string['description'] = 'Модуль Authorize.Net позволяет задавать платные курсы при помощи платежных провайдеров. Два способа установки стоимости курса:

1. стоимость на сайте - по умолчанию стоимость курса на всем сайте

2. в настройках курса, где Вы можете установить стоимость для каждого курса в отдельности. Стоимость конкретного курса перекрывает стоимость курса на всем сайте.';
$string['echeckaccnum'] = 'Номер банковского счета';
$string['echeckacctype'] = 'Тип банковского счета';
$string['echeckbankname'] = 'Название банка';
$string['echeckfirslasttname'] = 'Владелец банковского счета';
$string['enrolenddate'] = 'Дата окончания';
$string['enrolenddaterror'] = 'Конечная дата зачисления не может быть установлена ранее даты начала';
$string['enrolstartdate'] = 'Дата начала';
$string['expiremonth'] = 'Месяц срока действия';
$string['expireyear'] = 'Год срока действия';
$string['firstnameoncard'] = 'Имя на карте';
$string['haveauthcode'] = 'У меня уже есть код авторизации';
$string['howmuch'] = 'Сколько?';
$string['httpsrequired'] = 'К сожалению, Ваш запрос не может быть обработан в данный момент - конфигурация сайта может быть настроена неправильно. <br /><br /> Не вводите номер своей кредитной карты, пока Вы не увидите желтый замок в нижней части браузера. Присутствие такого символа означает, что шифруются все данные, передаваемые между клиентом и сервером. Таким образом, во время сделки информация, передаваемая между двумя компьютерами защищена, следовательно, номер Вашей кредитной карты не может быть перехвачен через Интернет.';
$string['invalidaccnum'] = 'Неверный номер счета';
$string['invalidacctype'] = 'Неверный тип учетной записи';
$string['lastnameoncard'] = 'Фамилия на карте';
$string['logindesc'] = 'Это параметр должен быть ВКЛЮЧЕН. <br /><br /> Убедитесь, что Вы включили параметр <a href="{$a->url}">loginhttps</a>. Он находится: Администрирование >> Безопасность >> Безопасность HTTP. <br /><br /> Включение этого параметра заставит Moodle использовать защищенное соединение HTTPS для входа в систему и для страниц оплаты.';
$string['logininfo'] = 'При настройке аккаунта Authorize.Net имя пользователя не требуется. Вы должны ввести в соответствующее поле <strong>одно из двух</strong>: ключ транзакции <strong>или</strong> пароль. Рекомендуется вводить ключ транзакции из-за большей безопасности.';
$string['methodcc'] = 'Кредитная карта';
$string['methodccdesc'] = 'Выберите ниже кредитную карту и принимаемые типы';
$string['missingaddress'] = 'Отсутствует адрес';
$string['missingbankname'] = 'Отсутствует название банка';
$string['missingcc'] = 'Отсутствует номер карты';
$string['missingccauthcode'] = 'Отсутствует код авторизации';
$string['missingccexpiremonth'] = 'Отсутствует месяц срока действия';
$string['missingccexpireyear'] = 'Отсутствует год срока действия';
$string['missingcctype'] = 'Отсутствует тип карты';
$string['missingcvv'] = 'Отсутствует код подтверждения';
$string['missingzip'] = 'Отсутствует почтовый индекс';
$string['mypaymentsonly'] = 'Показать только мои платежи';
$string['nameoncard'] = 'Имя на карте';
$string['paymentmanagement'] = 'Управление оплатой';
$string['paymentmethod'] = 'Способ оплаты';
$string['pendingorderssubject'] = 'ПРЕДУПРЕЖДЕНИЕ: {$a->course}, {$a->pending} заказ(ы) истекает(ют) в течение {$a->days} дн.';
$string['pluginname'] = 'Authorize.Net';
$string['reason16'] = 'Транзакция не найдена.';
$string['reason17'] = 'Этот тип кредитной карты не принимается.';
$string['reason28'] = 'Этот тип кредитной карты не принимается.';
$string['reason44'] = 'Эта транзакция была отклонена. Ошибка кода карты!';
$string['reason51'] = 'Сумма всех кредитов у этой транзакции больше величины первоначальной транзакции.';
$string['reason54'] = 'Указанная транзакция не соответствует критериям для выдачи кредита.';
$string['reason55'] = 'Сумма кредитов по указанной транзакции будет превышать величину первоначального дебета.';
$string['reason56'] = 'Принимаются только операции с чеком (ACH), никакие с кредитные карты не принимаются.';
$string['reviewnotify'] = 'Ваш платеж будет рассмотрен. В течение нескольких дней ожидайте сообщения по электронной почте от Вашего преподавателя.';
$string['sendpaymentbutton'] = 'Отправить платеж';
$string['shopper'] = 'Покупатель';
$string['status'] = 'Разрешить запись из Autorize.Net';
$string['subvoidyes'] = 'Операция ({$a->transid}) будет отменена, и это приведет к возврату средств {$a->amount} на Ваш счет. Вы согласны?';
$string['tested'] = 'Проверено';
$string['testmode'] = '[ТЕСТОВЫЙ РЕЖИМ]';
$string['unenrolselfconfirm'] = 'Вы действительно хотите исключить себя из курса "{$a}"?';
$string['unenrolstudent'] = 'Отчислить студента?';
$string['uploadcsv'] = 'Загрузить файл CSV';
$string['usingccmethod'] = 'Записаться с использованием <strong><a href="{$a->url}">кредитной карты</a></strong>';
$string['usingecheckmethod'] = 'Записаться с использованием <strong><a href="{$a->url}">чека</a></strong>';
$string['verifyaccountresult'] = '<b>Результат подтверждения:</b> {$a}';
$string['voidyes'] = 'Транзакция будет отменена. Вы уверены?';
$string['welcometocoursesemail'] = 'Уважаемый $a->name}! Спасибо за Ваши платежи. Вы  записались на эти курсы: {$a->courses} Вы можете просмотреть информацию о своих платежах или отредактировать личный профиль: {$a->paymenturl} {$a->profileurl}';
$string['youcantdo'] = 'Вы не можете сделать это действие: {$a->action}';
$string['zipcode'] = 'Почтовый индекс';
