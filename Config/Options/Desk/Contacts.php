<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Config\Options\Desk;

use Exception;
use MageMe\WebFormsZoho\Helper\ZohoHelper;
use Magento\Framework\Data\OptionSourceInterface;

class Contacts implements OptionSourceInterface
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
            $contacts = $this->zohoHelper->getApi()->Desk()->getContacts();
            foreach ($contacts as $contact) {
                $label = [];
                $label[] = $contact['lastName'];
                if (!empty($contact['firstName'])) {
                    $label[] = $contact['firstName'];
                }
                if (!empty($contact['email'])) {
                    $label[] = $contact['email'];
                }
                $this->options[] = [
                    'label' => implode(' ', $label),
                    'value' => $contact['id']
                ];
            }
        } catch (Exception $exception) {
            return [];
        }
        return $this->options;

    }
}