<?php

class Env
{
    public static function load($path)
    {
        if (!is_file($path)) {
            return;
        }

        $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        foreach ($lines as $line) {
            $line = trim($line);
            if ($line === '' || str_starts_with($line, '#') || strpos($line, '=') === false) {
                continue;
            }

            [$name, $value] = explode('=', $line, 2);
            $name = trim($name);
            $value = trim($value);

            if (
                strlen($value) >= 2
                && (($value[0] === '"' && substr($value, -1) === '"')
                    || ($value[0] === "'" && substr($value, -1) === "'"))
            ) {
                $value = substr($value, 1, -1);
            }

            if ($name !== '' && !array_key_exists($name, $_ENV) && !array_key_exists($name, $_SERVER)) {
                putenv($name . '=' . $value);
                $_ENV[$name] = $value;
                $_SERVER[$name] = $value;
            }
        }
    }
}
