<?php

namespace App\Exceptions;

use Exception;

class CustomException extends Exception
{
    protected $details;

    public function __construct($details) {
        // dd($details);
        $this->details = $details;
        parent::__construct(['detail' => $details]);
    }

    public function __toString() {
        return 'yes to stripcslashes(str)';
    }

    // public function errorMessage() {
    //     return 'custom errorMessage';
    //     //error message
    //     $errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
    //     .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
    //     return $errorMsg;
    // }
}
