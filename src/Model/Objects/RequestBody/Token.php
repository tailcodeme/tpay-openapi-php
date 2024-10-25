<?php

namespace Tpay\OpenApi\Model\Objects\RequestBody;

use Tpay\OpenApi\Model\Fields\CardPaymentData\Card;
use Tpay\OpenApi\Model\Fields\PointOfSale\Url;
use Tpay\OpenApi\Model\Objects\Objects;
use Tpay\OpenApi\Model\Objects\Transactions\CallbacksPayerUrls;
use Tpay\OpenApi\Model\Objects\Transactions\Payer;

class Token extends Objects
{
    const OBJECT_FIELDS = [
        'payer' => Payer::class,
        'callbackUrl' => Url::class,
        'redirectUrl' => CallbacksPayerUrls::class,
        'card' => Card::class,
    ];

    /** @var Payer */
    public $payer;

    /** @var Url */
    public $callbackUrl;

    /** @var \Tpay\OpenApi\Model\Objects\Transactions\CallbacksPayerUrls */
    public $redirectUrl;

    /** @var Card */
    public $card;
}
