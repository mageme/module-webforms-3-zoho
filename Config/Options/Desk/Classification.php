<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Desk;

use Magento\Framework\Data\OptionSourceInterface;

class Classification implements OptionSourceInterface
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
                'label' => __('Question'),
                'value' => 'Question'
            ],
            [
                'label' => __('Problem'),
                'value' => 'Problem'
            ],
            [
                'label' => __('Feature'),
                'value' => 'Feature'
            ],
            [
                'label' => __('Others'),
                'value' => 'Others'
            ],
        ];
    }
}