<?php

$basicGridSetup = '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        --palette--;;headers,
        --palette--;;frames,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
';

/**
 * 1 column
 */

$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['bootstrapgrid_1column'] = 'content-bootstrapgrid-1column';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:bootstrapgrid/Resources/Private/Language/Backend.xlf:content_element.1column.title',
        'bootstrapgrid_1column',
        'EXT:bootstrapgrid/Resources/Public/Icons/content-bootstrapgrid-1column.svg',
    ],
    'CType',
    'bootstrapgrid'
);

$GLOBALS['TCA']['tt_content']['types']['bootstrapgrid_1column'] = [
    'showitem' => $basicGridSetup,
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'content_grid',
    'bootstrapgrid_1column',
    'before:layout'
);

/**
 * 2 columns
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['bootstrapgrid_2columns'] = 'content-bootstrapgrid-2columns';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:bootstrapgrid/Resources/Private/Language/Backend.xlf:content_element.2columns.title',
        'bootstrapgrid_2columns',
        'EXT:bootstrapgrid/Resources/Public/Icons/content-bootstrapgrid-2columns.svg',
    ],
    'CType',
    'bootstrapgrid'
);

$GLOBALS['TCA']['tt_content']['types']['bootstrapgrid_2columns'] = [
    'showitem' => $basicGridSetup,
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'content_grid',
    'bootstrapgrid_2columns',
    'before:layout'
);

/**
 * 3 columns
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['bootstrapgrid_3columns'] = 'content-bootstrapgrid-3columns';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:bootstrapgrid/Resources/Private/Language/Backend.xlf:content_element.3columns.title',
        'bootstrapgrid_3columns',
        'EXT:bootstrapgrid/Resources/Public/Icons/content-bootstrapgrid-3columns.svg',
    ],
    'CType',
    'bootstrapgrid'
);

$GLOBALS['TCA']['tt_content']['types']['bootstrapgrid_3columns'] = [
    'showitem' => $basicGridSetup,
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'content_grid',
    'bootstrapgrid_3columns',
    'before:layout'
);

/**
 * 4 columns
 */
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['bootstrapgrid_4columns'] = 'content-bootstrapgrid-4columns';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
    [
        'LLL:EXT:bootstrapgrid/Resources/Private/Language/Backend.xlf:content_element.4columns.title',
        'bootstrapgrid_4columns',
        'EXT:bootstrapgrid/Resources/Public/Icons/content-bootstrapgrid-4columns.svg',
    ],
    'CType',
    'bootstrapgrid'
);

$GLOBALS['TCA']['tt_content']['types']['bootstrapgrid_4columns'] = [
    'showitem' => $basicGridSetup,
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
    'tt_content',
    'content_grid',
    'bootstrapgrid_4columns',
    'before:layout'
);
