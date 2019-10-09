define('DB_NAME', 'florian');
define('DB_USER', 'flshll');
define('DB_PASSWORD', '{{ password }}');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix  = '';
define('WPLANG', '');
define('WP_DEBUG', 'FALSE');
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

require_once(ABSPATH . 'wp-settings.php');
