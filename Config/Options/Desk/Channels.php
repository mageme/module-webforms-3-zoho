<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Desk;

use Exception;
use MageMe\WebFormsZoho\Helper\ZohoHelper;
use Magento\Framework\Data\OptionSourceInterface;

class Channels implements OptionSourceInterface
{
    /**
     * @var array
     */
    private $options;
    /**
     * @var ZohoHelper
     */
    private $zohoHelper;

    /**
     * @param ZohoHelper $zohoHelper
     */
    public function __construct(ZohoHelper $zohoHelper)
    {
        $this->zohoHelper = $zohoHelper;
    }

    /**
     * @inheritDoc
     */
    public function toOptionArray(): array
    {
        if ($this->options) {
            return $this->options;
        }
        try {
            $channels = $this->zohoHelper->getApi()->Desk()->getChannels();
            $values = [];
            foreach ($channels as $channel) {
                $values[$channel['name']] = $channel['name'];
            }
            foreach ($values as $value) {
                $this->options[] = [
                    'label' => __($value),
                    'value' => $value
                ];
            }
        } catch (Exception $exception) {
            return [];
        }
        return $this->options;

    }
}