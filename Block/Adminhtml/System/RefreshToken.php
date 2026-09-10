<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Block\Adminhtml\System;

use Magento\Framework\Data\Form\Element\AbstractElement;

class RefreshToken extends AbstractConfigField
{
    protected $_template = 'MageMe_WebFormsZoho::system/refresh_token.phtml';

    /**
     * @return string
     */
    public function getAjaxUrl(): string
    {
        return $this->getUrl('webformszoho/system/generaterefreshtoken');
    }

    /**
     * @inheritdoc
     */
    protected function _getElementHtml(AbstractElement $element): string
    {
        return $this->isConfigured() ? parent::_getElementHtml($element) . $this->_toHtml() : __('Fill data and save');
    }
}