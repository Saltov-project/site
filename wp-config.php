<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи, язык WordPress и ABSPATH. Дополнительную информацию можно найти
 * на странице {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется сценарием создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'Linux');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется снова авторизоваться.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Cb24l&~?R%3C-z(1sX<-FbSCA$J(p}JfW?`C/<@0{9@,u`M?!+*8P-yhH@HILd)%');
define('SECURE_AUTH_KEY',  'da vt/plXLp[(/XL;ieUS_xob+s>;lc^0-!u?Ip>xUL)Oz+9{S2$dQMxUxk2Qii-');
define('LOGGED_IN_KEY',    'hZ^]>.QQTQOiw5O&z;HkAP*B-Bpm+b8;x}/-KHT-d(2}N*nnVX<;(Miz{sQot+!_');
define('NONCE_KEY',        'N=@V5 +u:XR$ov)P(/f=.n8oAeY>|k>gz+^9yKZW>];M(p|leq8-%,Nt+()ltqxw');
define('AUTH_SALT',        'ua%#!B)B&ou@=>W[&*kc^5d&>xW=a<FsU<X-H0/Su_^m,B(/uBa-or6%Y:% ];F7');
define('SECURE_AUTH_SALT', 'lrFqQkyKi&>zIerq0+OAM4OZ_;/5d+{S0i$+G[S G4A?7pRC3@0VW<qQ.arHMW6H');
define('LOGGED_IN_SALT',   'T??52Z)?txhA<*+B _>QAI]oT2b!W>cbW*Ut/g2h@[k+9Y.pZi-`AKt%9|8Bn:XZ');
define('NONCE_SALT',       '!$-x:X^4w(1wH|W2(!8XjAL#k+=>DPE@ez?d``Ux4[pB{pW]NMrqJifn|zO+Z>ca');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько блогов в одну базу данных, если вы будете использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Настоятельно рекомендуется, чтобы разработчики плагинов и тем использовали WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');

