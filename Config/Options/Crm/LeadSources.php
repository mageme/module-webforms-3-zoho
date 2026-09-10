<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Crm;

use Exception;
use MageMe\WebFormsZoho\Helper\ZohoHelper;
use Magento\Framework\Data\OptionSourceInterface;

class LeadSources implements OptionSourceInterface
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
            $leadFields = $this->zohoHelper->getApi()->CRM()->getLeadFields();
            foreach ($leadFields as $leadField) {
                if ($leadField['api_name'] == 'Lead_Source') {
                    foreach ($leadField['pick_list_values'] as $value) {
                        $this->options[] = [
                            'label' => __($value['display_value']),
                            'value' => $value['actual_value']
                        ];
                    }
                    break;
                }
            }
        } catch (Exception $exception) {
            return [];
        }
        return $this->options;

    }
}