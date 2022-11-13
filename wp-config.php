<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'frame' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'guJTC3i!_Fy8Nj: tf}#SsXHb{xJ57P@3[n[mi`wK1u^jO!dkKz3B>#QjQa)2|5s' );
define( 'SECURE_AUTH_KEY',  'uAyf9J{Km*q~UshqIf}Eh=*w&5I/l:u[vF:_0![iyck%_V%AFX>s[=Ku%Fnu.z)o' );
define( 'LOGGED_IN_KEY',    'vK,jT-aSqzc8rv4hQee&FZBi1+AiynUd>5H@5Hn[M85KkmME(fU~qPy W7M{+R5g' );
define( 'NONCE_KEY',        'Pv^dy0mCh>C.DJB35!WnpT}V(?!]<sc{,M<qTQnIx~Ou46&gl8TchMb]pSCj}9,M' );
define( 'AUTH_SALT',        ',pTx/?Y]{j/e/TJ_eq#5IZ 3L:]jmzhQR&CFt!dJr$kVGcag}J,4u3DoFSHX[6P1' );
define( 'SECURE_AUTH_SALT', 'ZoxjU]mZaqm3C1>.AJgTgGl0CS1p52F?JSMtYvn2CGeOw+R#wfY1lI[0EOI`G#su' );
define( 'LOGGED_IN_SALT',   'P6a.A&z$Ke |O|r|n8#EDzD07`AorgQc(re/pr</55E%ge,mZCAV^Y7^3z3-9PcJ' );
define( 'NONCE_SALT',       'i5>@z~Q#BU7zu=]n~Lz>%@l<o^f0`-Qa3F1j7?j}j/IW E/Lzgdv,*yjZqHTf|@<' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
