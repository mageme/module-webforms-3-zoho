<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Desk;

use Exception;
use MageMe\WebFormsZoho\Helper\ZohoHelper;
use Magento\Framework\Data\OptionSourceInterface;

class Languages implements OptionSourceInterface
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
            $languages = $this->zohoHelper->getApi()->Desk()->getLanguages();
            foreach ($languages as $key => $value) {
                $this->options[] = [
                    'label' => $key,
                    'value' => $value
                ];
            }
        } catch (Exception $exception) {
            return [];
        }
        return $this->options;

    }
}