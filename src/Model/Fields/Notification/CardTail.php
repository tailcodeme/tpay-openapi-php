<?php

namespace Tpay\OpenApi\Model\Fields\Notification;

use Tpay\OpenApi\Model\Fields\Field;

/**
 * @method getValue(): string
 */
class CardTail extends Field
{
    protected $name = 'card_tail';
    protected $type = self::STRING;
}
