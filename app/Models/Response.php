<?php

namespace App\Models;


class Response
{

    public Meta $meta;
    public $data;
    public function __construct($data, $meta = null)
    {
        $this->meta = $meta ?? new Meta();
        $this->data = $data;
    }
}
