<?php

class EnvGlobal
{
    public function __construct()
    {
        // Load the .env file
        $envFile = __DIR__ . '/.env';

        if (file_exists($envFile)) {
            $lines = file($envFile, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
            foreach ($lines as $line) {
                // Split each line into key and value
                list($key, $value) = explode('=', $line, 2);
                // Set the environment variable
                putenv("$key=$value");
            }
        }
    }
}