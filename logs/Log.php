<?php
class Log
{
    private $filename;

    public function __construct()
    {
        $this->filename = 'logs/logs.log';
    }

    public function writeError($error_message)
    {
        file_put_contents($this->filename, $error_message . PHP_EOL, FILE_APPEND);
    }
}

?>
