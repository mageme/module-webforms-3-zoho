<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Desk;

use Magento\Framework\Data\OptionSourceInterface;

class Status implements OptionSourceInterface
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
                'label' => __('Open'),
                'value' => 'Open'
            ],
            [
                'label' => __('On Hold'),
                'value' => 'On Hold'
            ],
            [
                'label' => __('Escalated'),
                'value' => 'Escalated'
            ],
            [
                'label' => __('Closed'),
                'value' => 'Closed'
            ],
        ];
    }
}