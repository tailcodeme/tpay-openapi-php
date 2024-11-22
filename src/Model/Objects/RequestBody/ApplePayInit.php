<?php

namespace Tpay\OpenApi\Model\Objects\RequestBody;

use Tpay\OpenApi\Model\Fields\Wallet\DisplayName;
use Tpay\OpenApi\Model\Fields\Wallet\DomainName;
use Tpay\OpenApi\Model\Fields\Wallet\ValidationUrl;
use Tpay\OpenApi\Model\Objects\Objects;

class ApplePayInit extends Objects
{
    const OBJECT_FIELDS = [
        'domainName' => DomainName::class,
        'displayName' => DisplayName::class,
        'validationUrl' => ValidationUrl::class,
    ];

    /** @var DomainName */
    public $domainName;

    /** @var DisplayName */
    public $displayName;

    /** @var ValidationUrl */
    public $validationUrl;

    public function getRequiredFields()
    {
        return [
            $this->domainName,
            $this->validationUrl,
        ];
    }
}
