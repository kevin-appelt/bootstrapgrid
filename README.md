# Kevin Appelt | Bootstap Grid

## Important note before starting

**This extension is for testing purposes and should not be used in production use.**

## Prologue

The goal of this extension is to allow you to test the new feature "Nested content grids" without having to do a setup.\
Currently the feature is not merged. We hope to finish it before the feature freeze (TYPO3 v10.3).\
To do this we need your help: code reviews and verifications are highly appreciated.\
* [TYPO3 Contribution Guide](https://docs.typo3.org/m/typo3/guide-contributionworkflow/master/en-us/)
* [Review of this feature](https://review.typo3.org/c/Packages/TYPO3.CMS/+/63354/)

## Conditions

1. TYPO3 version: dev-master with Cherry Pick from https://review.typo3.org/c/Packages/TYPO3.CMS/+/63354
1. The feature toggles "fluidBasedPageModule" and "nestedContentGrids" will become activated by the extension
1. The PageTsConfig and TypoScript constants and setup are added automatically by the extension

## Installation

1. [Install and setup a TYPO3 according to the Contribution Guide](https://docs.typo3.org/m/typo3/guide-contributionworkflow/master/en-us/Setup/SetupTypo3.html)
1. [Get the feature again according to the Contribution Guide](https://docs.typo3.org/m/typo3/guide-contributionworkflow/master/en-us/HandlingAPatch/CherryPick.html)
1. [Download this extension](https://github.com/kevin-appelt/bootstrapgrid/archive/master.zip)
1. Extract the downloaded archive and place it in `typo3conf/ext`
1. Open the extension manager in TYPO3 Backend and install the extension

## Special Thanks

* Special thanks go to Claus Due (@namelesscoder) who developed the feature "Nested content grids".
* Many thanks also to Jo Hasenau (@bunnyfield) who has provided this (and several other) features with grid elements so far.
