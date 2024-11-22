<?php

namespace Tpay\OpenApi\Api\Wallet;

use Tpay\OpenApi\Api\ApiAction;
use Tpay\OpenApi\Model\Objects\RequestBody\ApplePayInit;

class WalletApi extends ApiAction
{
    /**
     * @param  array  $fields
     */
    public function initApplePay($fields)
    {
        return $this->run(static::POST, '/wallet/applepay/init', $fields, new ApplePayInit);
    }
}
