<?php

namespace Tpay\OpenApi\Api\Tokens;

use Tpay\OpenApi\Api\ApiAction;
use Tpay\OpenApi\Model\Objects\RequestBody\Pay;
use Tpay\OpenApi\Model\Objects\RequestBody\PayWithInstantRedirection;
use Tpay\OpenApi\Model\Objects\RequestBody\Refund;
use Tpay\OpenApi\Model\Objects\RequestBody\Token;
use Tpay\OpenApi\Model\Objects\RequestBody\Transaction;
use Tpay\OpenApi\Model\Objects\RequestBody\TransactionWithInstantRedirection;

class TokensApi extends ApiAction
{
    /**
     * @param array  $fields
     */
    public function createToken($fields)
    {
        return $this->run(static::POST, '/tokens', $fields, new Token());
    }
}
