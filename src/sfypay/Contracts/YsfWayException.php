<?php
namespace payment\sfypay\Contracts;
class YsfWayException extends \Exception {

    public function __construct($message)
    {
        parent::construct($message);
    }
}