<?php

namespace Tpay\OpenApi\Model\Fields\Wallet;

use Tpay\OpenApi\Model\Fields\Field;

/**
 * @method getValue(): string
 */
class DisplayName extends Field
{
    protected $name = 'displayName';

    protected $type = self::STRING;

    protected $minLength = 1;

    protected $maxLength = 64;
}
