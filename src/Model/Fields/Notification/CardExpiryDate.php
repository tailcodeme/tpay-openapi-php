<?php

namespace Tpay\OpenApi\Model\Fields\Notification;

use Tpay\OpenApi\Model\Fields\Field;

/**
 * @method getValue(): string
 */
class CardExpiryDate extends Field
{
    protected $name = 'token_expiry_date';
    protected $type = self::STRING;
}
