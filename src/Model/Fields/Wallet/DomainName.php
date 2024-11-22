<?php

namespace Tpay\OpenApi\Model\Fields\Wallet;

use Tpay\OpenApi\Model\Fields\Field;

/**
 * @method getValue(): string
 */
class DomainName extends Field
{
    protected $name = 'domainName';

    protected $type = self::STRING;
}
