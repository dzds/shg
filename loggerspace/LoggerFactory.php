<?php


namespace loggerspace;


class LoggerFactory
{
public static function Logging ($type)
    {
        $logname = __NAMESPACE__ . '\\'. $type;
        $logObj = new  $logname;
        return $logObj;
    }
}
