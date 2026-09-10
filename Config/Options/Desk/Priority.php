<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Desk;

use Magento\Framework\Data\OptionSourceInterface;

class Priority implements OptionSourceInterface
{
    /**
     * @return array
     */
    public function toOptionArray(): array
    {
        return $this->defaultOptions();
    }

    /**
     * @return array
     */
    private function defaultOptions(): array
    {
        return [
            [
                'label' => __('High'),
                'value' => 'High'
            ],
            [
                'label' => __('Medium'),
                'value' => 'Medium'
            ],
            [
                'label' => __('Low'),
                'value' => 'Low'
            ],
        ];
    }
}