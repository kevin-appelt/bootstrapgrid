<?php
defined('TYPO3_MODE') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['features']['fluidBasedPageModule'] = true;
$GLOBALS['TYPO3_CONF_VARS']['SYS']['features']['nestedContentGrids'] = true;

TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '@import \'EXT:bootstrapgrid/Configuration/TsConfig/Page.tsconfig\''
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptSetup(
    '@import \'EXT:bootstrapgrid/Configuration/TypoScript/setup.typoscript\''
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTypoScriptConstants(
    '@import \'EXT:bootstrapgrid/Configuration/TypoScript/constants.typoscript\''
);

$icons = [
    'content-bootstrapgrid-2columns',
    'content-bootstrapgrid-2columns-5050',
    'content-bootstrapgrid-2columns-6733',
];
$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
foreach ($icons as $icon) {
    $iconRegistry->registerIcon(
        $icon,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => 'EXT:bootstrapgrid/Resources/Public/Icons/' . $icon . '.svg']
    );
}
