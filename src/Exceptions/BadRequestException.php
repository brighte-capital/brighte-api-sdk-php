<?php


namespace BrighteCapital\Api\Exceptions;


class BadRequestException
{
    public $errors = [];

    public function __construct($errors, $message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
        $this->errors = $errors;
    }

    public function getErrors(): array
    {
        return $this->errors;
    }

}
