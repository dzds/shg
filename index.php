<?php

namespace loggerspace;

spl_autoload_register(function ($class) {
    $filename = str_replace('\\','/',$class) . '.php';
    include $filename;
});

//echo 'namespace is: ' . __NAMESPACE__;

if (isset($_GET['type'])) {
    $type = $_GET['type'];
}

if (isset($_GET['message'])) {
    $message = $_GET['message'];
}

if (isset($message)) {
    $controller = new ctrl();
    if (isset($type)) {
        if ($type=='all') {
            $controller->logToAll();
        } else {
            $controller->logTo($type);
        }
    } else {
        $controller->log();
    }
} else {
    echo 'nothing to log!';
}
