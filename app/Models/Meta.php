<?php

namespace App\Models;


class Meta
{



    public function __construct($code = 200, $message = "Ok", $messageSpanish = "Ok")
    {
        $this->code = $code;
        $this->message = $message;
        $this->messageSpanish = $messageSpanish;
    }
    public  $code = 200;
    public  $message = "Ok";
    public  $messageSpanish = "Ok";
}
