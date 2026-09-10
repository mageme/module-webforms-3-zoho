<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options;

use Magento\Framework\Data\OptionSourceInterface;

class ZohoDomain implements OptionSourceInterface
{
    /**
     * @inheritDoc
     */
    public function toOptionArray(): array {
        return [
            [
                'label' => 'US: https://accounts.zoho.com',
                'value' => 'https://accounts.zoho.com'
            ],
            [
                'label' => 'AU: https://accounts.zoho.com.au',
                'value' => 'https://accounts.zoho.com.au'
            ],
            [
                'label' => 'EU: https://accounts.zoho.eu',
                'value' => 'https://accounts.zoho.eu'
            ],
            [
                'label' => 'IN: https://accounts.zoho.in',
                'value' => 'https://accounts.zoho.in'
            ],
            [
                'label' => 'CN: https://accounts.zoho.com.cn',
                'value' => 'https://accounts.zoho.com.cn'
            ],
            [
                'label' => 'JP: https://accounts.zoho.jp',
                'value' => 'https://accounts.zoho.jp'
            ],
        ];
    }
}