# MageMe WebForms 3 — Zoho Integration

Free add-on for [MageMe WebForms for Magento 2](https://mageme.com/magento-2-form-builder.html) that integrates form submissions with Zoho CRM and Zoho Desk.

## Features

- Create leads in Zoho CRM from form submissions with field mapping (sources, owners)
- Create support tickets in Zoho Desk with field mapping (departments, channels, priority, status)
- OAuth token management with built-in refresh token generation
- Send submissions to Zoho manually from the admin panel

## Requirements

- Magento 2.4.x
- [MageMe WebForms 3](https://mageme.com/magento-2-form-builder.html) version 3.5.0 or higher
- PHP `curl` and `json` extensions

## Installation

### Via Composer

```
composer require mageme/module-webforms-3-zoho
bin/magento setup:upgrade
bin/magento cache:flush
```

### Manual Installation

1. Download and extract to `app/code/MageMe/WebFormsZoho/`
2. Run `bin/magento setup:upgrade`
3. Run `bin/magento cache:flush`

## Configuration

1. Navigate to **Stores > Configuration > MageMe > WebForms > Zoho** and configure your Zoho OAuth credentials (Client ID, Client Secret) and generate a refresh token.
2. Enable Zoho CRM and/or Zoho Desk integration as needed.
3. Open a form in the admin panel and configure the Zoho integration tab to map form fields to lead or ticket properties.

## About MageMe WebForms

[MageMe WebForms](https://mageme.com/magento-2-form-builder.html) is a powerful form builder for Magento 2 that allows you to create any type of form — contact forms, surveys, registration forms, order forms, and more — with a drag-and-drop interface, conditional logic, file uploads, and CRM integrations.

[Get MageMe WebForms](https://mageme.com/magento-2-form-builder.html)

## Support

- Documentation: [mageme.com](https://mageme.com)
- Issue Tracker: [GitHub Issues](https://github.com/mageme/module-webforms-3-zoho/issues)

## License

Proprietary. See [License](https://mageme.com/license/) for details.
