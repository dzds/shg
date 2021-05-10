<?php


namespace loggerspace;


class file implements LoggerInterface
{
    public function send(string $message): void
    {
        echo $message . ' was sent!';
    }

    public function sendByLogger(string $message, string $loggerType): void
    {
        $this->setType($loggerType);
        echo $message . ' was sent by ' . $this->getType() . '<br /> <hr />';
    }

    public function getType(): string
    {
        return get_class($this);
    }

    public function setType(string $type): void
    {
        echo 'type of logger was set as ' . $type . '<br />';
    }
}