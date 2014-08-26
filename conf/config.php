<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.1';

// Database
$Configuration['Database']['Name'] = 'gator';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'gator';
$Configuration['Database']['Password'] = '123';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['ButtonBar'] = TRUE;
$Configuration['EnabledPlugins']['VanillaStats'] = TRUE;
$Configuration['EnabledPlugins']['FileUpload'] = TRUE;
$Configuration['EnabledPlugins']['ProfileExtender'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = 'GATOR';
$Configuration['Garden']['Cookie']['Salt'] = 'LTQXK4FMM2';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = FALSE;
$Configuration['Garden']['Registration']['ApplicantRoleID'] = 0;
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '';
$Configuration['Garden']['Registration']['DefaultRoles'] = array('2');
$Configuration['Garden']['Email']['SupportName'] = 'GATOR';
$Configuration['Garden']['Email']['SupportAddress'] = FALSE;
$Configuration['Garden']['Email']['UseSmtp'] = '1';
$Configuration['Garden']['Email']['SmtpHost'] = FALSE;
$Configuration['Garden']['Email']['SmtpUser'] = FALSE;
$Configuration['Garden']['Email']['SmtpPassword'] = FALSE;
$Configuration['Garden']['Email']['SmtpPort'] = FALSE;
$Configuration['Garden']['Email']['SmtpSecurity'] = FALSE;
$Configuration['Garden']['InputFormatter'] = 'Html';
$Configuration['Garden']['Version'] = '2.1';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['Cdns']['Disable'] = FALSE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['InstallationID'] = FALSE;
$Configuration['Garden']['InstallationSecret'] = FALSE;
$Configuration['Garden']['Analytics']['AllowLocal'] = TRUE;
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['ThemeOptions']['Name'] = 'Bootstrap';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Readable';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_readable';

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['FileUpload']['Enabled'] = TRUE;
$Configuration['Plugins']['ProfileExtender']['ProfileFields'] = 'Location,Facebook,Twitter,Website';
$Configuration['Plugins']['ProfileExtender']['RegistrationFields'] = 'Location';
$Configuration['Plugins']['ProfileExtender']['TextMaxLength'] = 140;

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.1';
$Configuration['Vanilla']['Discussions']['Layout'] = 'table';
$Configuration['Vanilla']['Categories']['Layout'] = 'table';
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Categories']['DoHeadings'] = '1';
$Configuration['Vanilla']['Categories']['HideModule'] = FALSE;

// Last edited by pib (10.0.2.2)2014-07-27 02:48:13