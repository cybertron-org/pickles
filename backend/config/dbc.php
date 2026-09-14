<?php
require_once __DIR__ . '/Env.php';

Env::load(dirname(__DIR__, 2) . '/.env');

if (!function_exists('env_config')) {
    function env_config($key, $default = '')
    {
        foreach ([$_ENV[$key] ?? null, $_SERVER[$key] ?? null, getenv($key)] as $value) {
            if ($value !== false && $value !== null && $value !== '') {
                return $value;
            }
        }

        return $default;
    }
}

define('DB_HOST', env_config('DB_HOST', 'localhost'));
define('DB_USER', env_config('DB_USER', 'root'));
define('DB_PASS', env_config('DB_PASS', ''));
define('DB_NAME', env_config('DB_NAME', 'pickles'));

$dbPort = trim((string) env_config('DB_PORT'));
define('DB_PORT', ctype_digit($dbPort) ? (int) $dbPort : null);

$connection = DB_PORT === null
    ? new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME)
    : new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, DB_PORT);
