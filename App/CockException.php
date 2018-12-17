<?php
namespace App;

/**
 * Handles all the cocker exceptions
 *
 * Class CockException
 */
class CockException extends \Exception
{
    public function __construct($message, $code = 0, \Exception $previous = null) {
        //Ignore anything and make it a cock
        $message = $code !== 5 ? 'Because cock..' : 'The cock is strong is this one..';
        parent::__construct($message, $code, $previous);
    }

    public function cockFunction() {
        echo "This cock may be dangerous, but it's not.\n";
    }
}