<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Block\Adminhtml\System;

use MageMe\WebFormsZoho\Helper\ZohoHelper;
use Magento\Backend\Block\Template\Context;
use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Data\Form\Element\AbstractElement;

abstract class AbstractConfigField extends Field
{
    /**
     * @var array
     */
    protected $fieldConfig = [];

    /**
     * @var ScopeConfigInterface
     */
    protected $scopeConfig;

    /**
     * License constructor.
     *
     * @param ScopeConfigInterface $scopeConfig
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        ScopeConfigInterface $scopeConfig,
        Context             $context,
        array               $data = [])
    {
        parent::__construct($context, $data);
        $this->scopeConfig = $scopeConfig;
    }

    /**
     * @inheritdoc
     */
    public function render(AbstractElement $element): string
    {
        $this->fieldConfig = $element->getData('field_config');
        $this->fieldConfig['html_id'] = $element->getHtmlId();
        return parent::render($element);
    }

    /**
     * @return bool
     */
    public function isConfigured(): bool
    {
        return $this->scopeConfig->getValue(ZohoHelper::CONFIG_CLIENT_ID) &&
            $this->scopeConfig->getValue(ZohoHelper::CONFIG_CLIENT_SECRET) &&
            $this->scopeConfig->getValue(ZohoHelper::CONFIG_CODE);
    }

    /**
     * @return string
     */
    public function getHtmlId(): string
    {
        return $this->fieldConfig['html_id'] ?? '';
    }

    /**
     * @return string
     */
    abstract public function getAjaxUrl(): string;
}