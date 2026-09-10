<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Plugin\Helper\Result\PostHelper;

use MageMe\WebForms\Api\Data\FormInterface;
use MageMe\WebForms\Api\Data\ResultInterface;
use MageMe\WebForms\Helper\Result\PostHelper;
use MageMe\WebFormsZoho\Helper\Zoho\Crm\AddLead;
use MageMe\WebFormsZoho\Helper\Zoho\Desk\AddTicket;
use Magento\Framework\Exception\NoSuchEntityException;
use Psr\Log\LoggerInterface;

class PostResult
{
    /**
     * @var AddLead
     */
    private $addLead;
    /**
     * @var AddTicket
     */
    private $addTicket;
    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param AddTicket $addTicket
     * @param AddLead $addLead
     * @param LoggerInterface $logger
     */
    public function __construct(AddTicket $addTicket, AddLead $addLead, LoggerInterface $logger)
    {
        $this->addLead = $addLead;
        $this->addTicket = $addTicket;
        $this->logger = $logger;
    }

    /**
     * @param PostHelper $postHelper
     * @param array $data
     * @param FormInterface|\MageMe\WebFormsZoho\Api\Data\FormInterface $form
     * @param array $config
     * @return array
     * @noinspection PhpUnusedParameterInspection
     * @throws NoSuchEntityException
     */
    public function afterPostResult(PostHelper $postHelper, array $data, FormInterface $form, array $config = []): array
    {
        if (!$data['success'] || !($data['model'] instanceof ResultInterface)) {
            return $data;
        }
        $result = $data['model'];
        try {
            if ($form->getZohoCrmIsLeadEnabled()) {
                $this->addLead->execute($result);
            }
            if ($form->getZohoDeskIsTicketEnabled()) {
                $this->addTicket->execute($result);
            }
        } catch (\Throwable $e) {
            $this->logger->error('WebForms Zoho integration failed for result #' . $result->getId() . ': ' . $e->getMessage());
        }
        return $data;
    }

}