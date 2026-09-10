<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Desk;

use Exception;
use MageMe\WebFormsZoho\Helper\ZohoHelper;
use Magento\Framework\Data\OptionSourceInterface;

class Owners implements OptionSourceInterface
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
            $agents = $this->zohoHelper->getApi()->Desk()->getAgents();
            foreach ($agents as $agent) {
                $label = [];
                $label[] = $agent['name'];
                if (!empty($agent['emailId'])) {
                    $label[] = $agent['emailId'];
                }
                $this->options[] = [
                    'label' => implode(' ', $label),
                    'value' => $agent['id']
                ];
            }
        } catch (Exception $exception) {
            return [];
        }
        return $this->options;
    }
}