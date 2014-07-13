<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1';

// Database
$Configuration['Database']['Name'] = getenv('RDS_DB_NAME');
$Configuration['Database']['Host'] = getenv('RDS_HOSTNAME');
$Configuration['Database']['User'] = getenv('RDS_USERNAME');
$Configuration['Database']['Password'] = getenv('RDS_PASSWORD');

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['ButtonBar'] = TRUE;
$Configuration['EnabledPlugins']['VanillaStats'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'GATOR';
$Configuration['Garden']['Cookie']['Salt'] = 'LTQXK4FMM2';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = FALSE;
$Configuration['Garden']['Registration']['ApplicantRoleID'] = 0;
$Configuration['Garden']['Registration']['DefaultRoles'] = array('2');
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '';
$Configuration['Garden']['Email']['SupportName'] = 'GATOR';
$Configuration['Garden']['Email']['SupportAddress'] = getenv('SMTP_USER');
$Configuration['Garden']['Email']['UseSmtp'] = '1';
$Configuration['Garden']['Email']['SmtpHost'] = getenv('SMTP_HOST');
$Configuration['Garden']['Email']['SmtpUser'] = getenv('SMTP_USER');
$Configuration['Garden']['Email']['SmtpPassword'] = getenv('SMTP_PASSWORD');
$Configuration['Garden']['Email']['SmtpPort'] = getenv('SMTP_PORT');
$Configuration['Garden']['Email']['SmtpSecurity'] = getenv('SMTP_SECURITY');
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Version'] = '2.1';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '2';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['InstallationID'] = getenv('INSTALLATION_ID');
$Configuration['Garden']['InstallationSecret'] = getenv('INSTALLATION_SECRET');

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1';

// Last edited by pib (24.27.61.241)2014-07-13 22:30:22