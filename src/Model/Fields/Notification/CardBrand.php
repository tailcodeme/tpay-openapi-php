<?php

namespace Tpay\OpenApi\Model\Fields\Notification;

use Tpay\OpenApi\Model\Fields\Field;

/**
 * @method getValue(): string
 */
class CardBrand extends Field
{
    protected $name = 'card_brand';
    protected $type = self::STRING;
}
