<?php
namespace tpaySDK\Model\Objects\RequestBody;

use tpaySDK\Model\Fields\Pay\Method;
use tpaySDK\Model\Identifiers\GroupId;
use tpaySDK\Model\Objects\ObjectHelper;
use tpaySDK\Model\Objects\Objects;
use tpaySDK\Model\Objects\Transactions\BlikPaymentData;
use tpaySDK\Model\Objects\Transactions\CardPaymentData;
use tpaySDK\Model\Objects\Transactions\Recursive;

class Pay extends Objects
{
    use ObjectHelper;

    const OBJECT_FIELDS = [
        'groupId' => GroupId::class,
        'method' => Method::class,
        'blikPaymentData' => BlikPaymentData::class,
        'cardPaymentData' => CardPaymentData::class,
        'recursive' => Recursive::class,
    ];

    /**
     * @var GroupId
     */
    public $groupId;

    /**
     * @var Method
     */
    public $method;

    /**
     * @var BlikPaymentData
     */
    public $blikPaymentData;

    /**
     * @var CardPaymentData
     */
    public $cardPaymentData;

    /**
     * @var Recursive
     */
    public $recursive;

    public function getRequiredFields()
    {
        return [
            $this->groupId,
        ];
    }

}
