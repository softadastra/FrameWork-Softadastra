<?php
// src/Exceptions/InvalidArticleIdException.php
namespace Softadastra\Exception;

use Exception;

class InvalidArticleIdException extends Exception
{
    public function __construct($message = "Invalid article ID", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}