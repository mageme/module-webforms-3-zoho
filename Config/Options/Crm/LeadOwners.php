<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Crm;

use Exception;
use MageMe\WebFormsZoho\Helper\ZohoHelper;
use Magento\Framework\Data\OptionSourceInterface;

class LeadOwners implements OptionSourceInterface
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
            $users = $this->zohoHelper->getApi()->CRM()->getUsers();
            foreach ($users as $user) {
                $this->options[] = [
                    'label' => __($user['full_name']),
                    'value' => $user['id']
                ];
            }
        } catch (Exception $exception) {
            return [];
        }
        return $this->options;
    }
}