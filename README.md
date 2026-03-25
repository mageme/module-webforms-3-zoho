# Magento 2 Zoho CRM & Desk Integration — MageMe WebForms

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mageme/module-webforms-3-zoho.svg)](https://packagist.org/packages/mageme/module-webforms-3-zoho)
[![Packagist Downloads](https://img.shields.io/packagist/dt/mageme/module-webforms-3-zoho.svg)](https://packagist.org/packages/mageme/module-webforms-3-zoho)
[![License: Proprietary](https://img.shields.io/badge/license-proprietary-blue.svg)](https://mageme.com/license/)

Push Magento 2 form data to Zoho CRM and Zoho Desk from a single module. This free add-on for [MageMe WebForms](https://mageme.com/magento-2-form-builder.html) creates CRM leads and helpdesk tickets through Zoho's REST APIs with OAuth 2.0 authentication and automatic token management.

## Features

- **Zoho CRM**: create leads with owner assignment and lead source tracking
- **Zoho Desk**: create tickets with department, channel, priority, and status mapping
- Dual integration — use CRM, Desk, or both from the same form
- OAuth 2.0 authentication with built-in refresh token generation from the admin panel
- Automatic access token refresh with database persistence
- Attach files and photos to CRM leads and Desk tickets
- Auto-create Desk contacts when a matching contact does not exist
- Map form fields to Zoho custom fields (cf_ prefix for Desk)
- Resend submissions to Zoho manually from the Magento admin panel

## Requirements

- Magento 2.4.x
- [MageMe WebForms 3](https://mageme.com/magento-2-form-builder.html) version 3.5.0 or higher
- PHP `curl` and `json` extensions
- Zoho CRM and/or Zoho Desk account with API access

## Installation

```
composer require mageme/module-webforms-3-zoho
bin/magento setup:upgrade
bin/magento cache:flush
```

## Configuration

1. Go to **Stores > Configuration > MageMe > WebForms > Zoho** and enter your Zoho OAuth credentials (Client ID, Client Secret). Use the built-in tool to generate a refresh token.
2. Enable Zoho CRM and/or Zoho Desk integration.
3. Open any form in the admin panel and configure the Zoho integration tab to map form fields to lead or ticket properties.

## Other MageMe WebForms Integrations

Complete your Magento 2 form integration stack:

- [Salesforce](https://github.com/mageme/module-webforms-3-salesforce) — create Salesforce leads with campaign tracking
- [HubSpot](https://github.com/mageme/module-webforms-3-hubspot) — sync contacts, companies, and tickets
- [Freshdesk](https://github.com/mageme/module-webforms-3-freshdesk) — create support tickets with agent routing
- [Zendesk](https://github.com/mageme/module-webforms-3-zendesk) — create tickets with custom field types
- [Klaviyo](https://github.com/mageme/module-webforms-3-klaviyo) — build profiles and grow your email lists
- [Mailchimp](https://github.com/mageme/module-webforms-3-mailchimp) — subscribe customers to audiences
- [Zapier](https://github.com/mageme/module-webforms-3-zapier) — connect forms to 7000+ apps

## About MageMe WebForms

[MageMe WebForms](https://mageme.com/magento-2-form-builder.html) is a professional form builder for Magento 2 that saves development time. Create any form your store needs — contact forms, quote requests, job applications, customer surveys — with conditional fields, multi-step layouts, file uploads, approval workflows, and native integrations with leading CRM and helpdesk platforms.

[Get MageMe WebForms for Magento 2](https://mageme.com/magento-2-form-builder.html)

## Support

- Documentation: [docs.mageme.com](https://docs.mageme.com)
- Issue Tracker: [GitHub Issues](https://github.com/mageme/module-webforms-3-zoho/issues)

## License

Proprietary. See [License](https://mageme.com/license/) for details.
