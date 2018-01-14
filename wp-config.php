<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'lend_db');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'oGU+$0h5k(vS` 2/(42CtlpD5gqYJ6LrAM,O*[zNlF#TJ#_Y!c[ABqG)?HG!q@aj');
define('SECURE_AUTH_KEY',  'n:&Kj/,6>[K^dh4<C$;ob-*Wf&gI~G8D@YI5.R=[q^lTb0^s+>&fXXdiC$5s*7d*');
define('LOGGED_IN_KEY',    '<vAZS1+@:TkJ3 Xm|Yu?-:bXk+,,s{_?.hC/OsF*@[TlI>_k0iH)Nx*,XTKU9W5O');
define('NONCE_KEY',        'orAg_+0=2K`-9UNz{%G8NP[[-BOE1SY`jh.8OsrI>#d.]DH&;4tPPCLJ9)e/LuxM');
define('AUTH_SALT',        '?29h&1ei@q;H,J fuP5$>WegAo>wVrIK6WYdk$39:1s#OYe%KrD4z|fD;qyth`fa');
define('SECURE_AUTH_SALT', 'fkT:2hwsLG)%X)J[X)H,s*OLjjNqtwl{r5b?zyRs^%>e,.h(Z+94vYx[P$u&jXc2');
define('LOGGED_IN_SALT',   'iI^[`tkx7y(*Kv!2vs&Qzi7;<bJ?aUInlhtZz674ad`mq`wtsh5dFE)uNf|YVqdf');
define('NONCE_SALT',       'Z=Lv{/H?T-/O%7C i8AX(J]TwR8`ix29:%uKL:C>|Ic;f6|$~[ hxc:0`6HjM@A%');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
