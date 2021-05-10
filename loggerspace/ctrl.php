<?php

namespace loggerspace;

class ctrl
{
    /**
     * Sends a log message to the default logger.
     */
    public function log()
    {
        $config = new conf;
        $logger = LoggerFactory::Logging ($config->default_type);
        $logger->send($_GET['message']);
    }
    /**
     * Sends a log message to a special logger.
     *
     * @param string $type
     */
    public function logTo(string $type)
    {
        $logger = LoggerFactory::Logging ($type);
        $logger->sendByLogger($_GET['message'],$type);
    }
    /**
     * Sends a log message to all loggers.
     */
    public function logToAll()
    {
        $config = new conf;
        foreach ($config->types as $type) {
            $logger = LoggerFactory::Logging ($type);
            $logger->sendByLogger($_GET['message'],$type);
        }

    }
}