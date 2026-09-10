<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Block\Adminhtml\System;

use Magento\Framework\Data\Form\Element\AbstractElement;

class DeskAvailability extends AbstractConfigField
{
    const SCOPES = '<div>Desk.basic.READ,Desk.settings.READ,Desk.tickets.CREATE,Desk.tickets.UPDATE,Desk.contacts.READ,Desk.contacts.CREATE</div>';

    protected $_template = 'MageMe_WebFormsZoho::system/availability.phtml';

    /**
     * @return string
     */
    public function getAjaxUrl(): string
    {
        return $this->getUrl('webformszoho/system/deskscopecheck');
    }

    /**
     * @inheritdoc
     */
    protected function _getElementHtml(AbstractElement $element): string
    {
        return $this->isConfigured() ?  $this->_toHtml() : __('Please configure Zoho with scopes:') . self::SCOPES;
    }
}