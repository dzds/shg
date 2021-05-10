<?php

namespace loggerspace;

class conf
{
    public $default_type = 'db';

    public $dbhost = 'localhost';
    public $dbname = 'dbname';
    public $dbuser = 'root';
    public $dbpass = '';

    public $email = 'mail@gmail.com';
    public $emailpass = 'password';

    public $filename = 'logger.log';

    public $types = array('db', 'email', 'file');
}



