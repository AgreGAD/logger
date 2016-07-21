<?php

use Psr\Log\LogLevel;

return [
    E_ERROR             => LogLevel::ERROR,
    E_WARNING           => LogLevel::ERROR,
    E_PARSE             => LogLevel::ERROR,
    E_NOTICE            => LogLevel::ERROR,
    E_CORE_ERROR        => LogLevel::ERROR,
    E_CORE_WARNING      => LogLevel::ERROR,
    E_COMPILE_ERROR     => LogLevel::ERROR,
    E_COMPILE_WARNING   => LogLevel::ERROR,
    E_USER_ERROR        => LogLevel::ERROR,
    E_USER_WARNING      => LogLevel::ERROR,
    E_USER_NOTICE       => LogLevel::ERROR,
    E_STRICT            => LogLevel::ERROR,
    E_RECOVERABLE_ERROR => LogLevel::ERROR,
    E_DEPRECATED        => LogLevel::ERROR,
    E_USER_DEPRECATED   => LogLevel::ERROR,
];
