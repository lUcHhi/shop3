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
define( 'DB_NAME', 'mysite1' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin1' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'TA8*fcW0EdO[vb&iu;i36FB|7a8!KRu6o$`!&w:[ta=maN(,:zZ8GU5aOb#d0nkf' );
define( 'SECURE_AUTH_KEY',  '?1H)jBFg=1FKgu<ZbMU3;h!H{TA~Glg3g:Q?,bA7er`x+{>3iX gcq(^6lfj}gpw' );
define( 'LOGGED_IN_KEY',    'i,B1`W8$|78G|?))FdO8b[GSm1z% 3p)]D9O-z0Qa0[m>n2/Da:WdA+-],zl6VD*' );
define( 'NONCE_KEY',        'yWgqE4-oKt.2Jn+#0*gnw2$4`rD=4C<+)t/r>&~lR^7Ex1bRl^IW-:1>p.#*X^lc' );
define( 'AUTH_SALT',        ']~][-9)Mb~ Mnp`O|g4)GA4,h?TkCpz%D:,Pg:]^:NzV3p)+Ay8nx7]uM>Qs&AaE' );
define( 'SECURE_AUTH_SALT', 'I+C`iFM)T$TS,{58,oBmL}|x`*eJR5^B)9OLB^5ABxPU9Na{2v8>@ ?DA)M&!X2,' );
define( 'LOGGED_IN_SALT',   'U,SdvD*,qwg9?l.Iv3c3:6r((Rgoluq9Ge,+%:N)NM`$vY3tXe-U=^o~lVmjhvDa' );
define( 'NONCE_SALT',       'OiM`t!9QgGv08Bf[4entVFF2uLKQ-zBqoZ]]+MQ13UY[Kq&^<=%<vql^Uj)aW4$B' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 *
 * В процессе установки указанный префикс добавляется к именам таблиц базы данных.
 * Если изменить это значение после установки WordPress, то сайт снова перейдёт
 * в режим установки.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
