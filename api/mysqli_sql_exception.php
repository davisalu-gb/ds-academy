<?php
/**
 * Exception class that represents an error in the SQL syntax or database operation.
 */
class mysqli_sql_exception extends Exception
{
    /**
     * The error message associated with this exception.
     */
    protected $message = '';

    /**
     * The error code associated with this exception.
     */
    protected $code = 0;

    /**
     * Constructs a new mysqli_sql_exception object.
     * 
     * @param string $message The error message.
     * @param int $code The error code.
     * @param Exception $previous The previous exception used for the exception chaining.
     */
    public function __construct($message = "", $code = 0, Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    /**
     * Returns the message associated with this exception.
     * 
     * @return string The error message.
     */
    public function __toString()
    {
        return __CLASS__ . ": [{$this->code}]: {$this->message}\n";
    }
}
?>
