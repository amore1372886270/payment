<?php
namespace payment\sfypay\Contracts;
interface YsfWayInterface{
    public function pay($gateway,$params);
}