<?php
namespace payment\sfypay;
use payment\sfypay\Contracts\YsfWayInterface;
/**
 * Class YsfPay
 * @package payment\sfypay
 * 云闪付
 */
class YsfPay{

    protected $config;

    public function __construct(array $config) {

        $this->config = $config;
    }

    public static function __callStatic($method, $params):YsfWayInterface
    {

        $app = new self(...$params);

        return $app->creaet($method);
    }

    public function create($method):YsfWayInterface
    {
        $ysfWay =__NAMESPACE__.'\\Ways\\'.$method;

        if(class_exists($ysfWay)) {

            return self::make($ysfWay);
        }

    }


}