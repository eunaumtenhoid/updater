<?php
/**
*
* @package Upload Extensions Updater
* @copyright (c) 2015 - 2019 Igor Lavrov (https://github.com/LavIgor)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_UPDATER_EXT_TITLE'				=> 'Обновление Загрузки Расширений',
	'ACP_UPDATER_EXT_CONFIG_TITLE'		=> 'Обновление Загрузки Расширений',
	'ACP_UPDATER_EXT_TITLE_EXPLAIN'		=> 'Обновление Загрузки Расширений позволяет вам проверять наличие обновлений для Загрузки Расширений и устанавливать доступные обновления без использования FTP.',

	'EXT_UPLOAD_INIT_FAIL'				=> 'В процессе инициализации загрузки расширения возникла ошибка.',
	'EXT_NOT_WRITABLE'					=> 'Отсутствуют права на запись для папки ext/. Данные права необходимы для правильной загрузки расширений. Пожалуйста, исправьте права доступа или настройки и попробуйте снова.',
	'EXT_UPLOAD_ERROR'					=> 'Расширение не было загружено. Пожалуйста, убедитеть, что вы загружаете правильный ZIP-файл расширения и попробуйте снова.',
	'EXT_TMP_NOT_WRITABLE'				=> 'Отсутствуют права на запись для папки ext/boardtools/updater/tmp. Данные права необходимы для правильной загрузки расширений. Пожалуйста, исправьте права доступа или настройки и попробуйте снова.',
	'EXT_ALLOW_URL_FOPEN_DISABLED'		=> 'Настройка allow_url_fopen должна быть включена, чтобы можно было загружать информацию с удалённого ресурса. Пожалуйста, убедитесь, что настройка allow_url_fopen включена в вашем файле php.ini, и попробуйте снова.',
	'EXT_OPENSSL_DISABLED'				=> 'Расширение openssl должно быть включено, чтобы можно было загружать информацию с ресурса https. Пожалуйста, убедитесь, что расширение openssl включено в вашем файле php.ini, и попробуйте снова.',
	'NO_UPLOAD_FILE'					=> 'Файл не задан или в процессе загрузки произошла ошибка.',
	'NOT_AN_EXTENSION'					=> 'Загруженный ZIP-файл не является расширением phpBB. Файл не был сохранён на сервере.',

	'STATUS'							=> 'Статус',
	'UPLOAD_EXTENSIONS'					=> 'Загрузка Расширений',
	'UPDATER_UPLOAD_NOT_INSTALLED'		=> 'Загрузка Расширений не установлена на вашей конференции.',
	'UPDATER_UPLOAD_NO_NEW_UPDATES'		=> 'В настоящий момент нет доступных обновлений.',
	'UPDATER_UPLOAD_NEW_UPDATES'		=> 'Обновления готовы к установке.',
	'UPDATER_UPLOAD_NO_UPDATES_INFO'	=> 'Не удалось получить информацию о доступных обновлениях.',

	'EXT_UPDATER_STEP_1'				=> '1. Проверьте доступность новой версии.',
	'EXT_UPDATER_STEP_2'				=> '2. Установите обновления.',
	'EXT_UPDATER_STEP_3'				=> '3. Включите расширение.',

	'SOURCE'							=> 'Источник',
	'EXTENSION_UPDATE'					=> 'Обновить расширение',
	'EXTENSION_UPDATE_NO_LINK'			=> 'Ссылка для загрузки расширения отсутствует.',
	'EXTENSION_TO_BE_ENABLED'			=> 'Загрузка Расширений будет отключена во время обновления и будет включена снова после его завершения.',
	'EXT_ACTION_ERROR'					=> 'Запрошенное действие не может быть выполнено.',

	'ACP_UPLOAD_EXT_ERROR_DEST'			=> 'Настройки расширения (имя поставщика и название расширения) некорректно заданы или отсутствуют в загруженном ZIP-файле. Файл не был сохранён на сервере.',
	'ACP_UPLOAD_EXT_ERROR_COMP'			=> 'Файл composer.json не был найден в загруженном ZIP-файле. Файл не был сохранён на сервере.',
	'ACP_UPLOAD_EXT_ERROR_NOT_SAVED'	=> 'Файл не был сохранён на сервере.',
	'ACP_UPLOAD_EXT_WRONG_RESTORE'		=> 'В процессе обновления установленного расширения произошла ошибка. Попробуйте обновить его ещё раз.',
	'ACP_UPLOAD_EXT_NOT_COMPATIBLE'		=> 'Это расширение позволяет вам обновлять только Загрузку Расширений. Похоже, что вы попытались установить обновление для другого расширения. Пожалуйста, используйте Загрузку Расширений для обновления других расширений.',

	'EXT_ENABLE'						=> 'Включить',
	'EXT_ENABLED'						=> 'Расширение было успешно включено.',
	'EXT_ENABLED_LATEST'				=> 'Установлена последняя версия расширения. Расширение было успешно включено.',
	'EXT_UPLOADED'						=> 'Процесс загрузки завершился успешно.',

	'ERROR_COPY_FILE'					=> 'Попытка скопировать файл “%1$s” в директорию “%2$s” завершилась с ошибкой.',
	'ERROR_CREATE_DIRECTORY'			=> 'Попытка создать директорию “%s” завершилась с ошибкой.',
	'ERROR_REMOVE_DIRECTORY'			=> 'Попытка удалить директорию “%s” завершилась с ошибкой.',
));
