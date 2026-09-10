<?php
/**
 * Copyright © MageMe. All rights reserved.
 * See LICENSE for license terms, or https://mageme.com/license.
 */

namespace MageMe\WebFormsZoho\Plugin\Model\ResourceModel\Form;

use MageMe\WebForms\Model\ResourceModel\Form;
use MageMe\WebFormsZoho\Api\Data\FormInterface;

class GetSerializableFields
{
    /**
     * @param Form $form
     * @param array $serializableFields
     * @return array
     */
    public function afterGetSerializableFields(Form $form, array $serializableFields): array
    {
        $serializableFields[FormInterface::ZOHO_CRM_MAP_FIELDS] = [
            $form::SERIALIZE_OPTION_SERIALIZED => FormInterface::ZOHO_CRM_MAP_FIELDS_SERIALIZED,
            $form::SERIALIZE_OPTION_DEFAULT_DESERIALIZED => []
        ];
        $serializableFields[FormInterface::ZOHO_DESK_MAP_FIELDS] = [
            $form::SERIALIZE_OPTION_SERIALIZED => FormInterface::ZOHO_DESK_MAP_FIELDS_SERIALIZED,
            $form::SERIALIZE_OPTION_DEFAULT_DESERIALIZED => []
        ];
        return $serializableFields;
    }
}
