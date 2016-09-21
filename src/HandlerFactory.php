<?php

namespace Agregad\Logger;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

class HandlerFactory
{
    /**
     * @param string $stream
     * @param int $level
     * @param bool $bubble
     * @param int $filePermission
     * @param bool $useLocking
     * @return StreamHandler
     */
    public function createStreamHandler($stream, $level = Logger::DEBUG, $bubble = true, $filePermission = 0600, $useLocking = false)
    {
        return new StreamHandler($stream, $level, $bubble, $filePermission, $useLocking);
    }
}
