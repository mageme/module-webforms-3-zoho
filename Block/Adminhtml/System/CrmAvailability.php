<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Block\Adminhtml\System;

use Magento\Framework\Data\Form\Element\AbstractElement;

class CrmAvailability extends AbstractConfigField
{
    const SCOPES = '<div>ZohoCRM.modules.ALL,ZohoCRM.settings.ALL,ZohoCRM.Files.CREATE,ZohoCRM.users.READ</div>';

    protected $_template = 'MageMe_WebFormsZoho::system/availability.phtml';

    /**
     * @return string
     */
    public function getAjaxUrl(): string
    {
        return $this->getUrl('webformszoho/system/crmscopecheck');
    }

    /**
     * @inheritdoc
     */
    protected function _getElementHtml(AbstractElement $element): string
    {
        return $this->isConfigured() ?  $this->_toHtml() : __('Please configure Zoho with scopes:') . self::SCOPES;
    }
}