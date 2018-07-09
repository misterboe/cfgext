<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'cfgext',
    'Configuration/TypoScript',
    'Config'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'cfgext',
    'Configuration/PageTS/pagetsconfig.typoscript',
    'cfgext PageTSConfig'
);
