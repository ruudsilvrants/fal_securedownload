<?php

$folder = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('folder');
if (!empty($folder)) {
	$open = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('open') ? TRUE : FALSE;

	/** @var $leafStateService \BeechIt\FalSecuredownload\Service\LeafStateService */
	$leafStateService = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('BeechIt\\FalSecuredownload\\Service\\LeafStateService');
	$leafStateService->saveLeafStateForUser(\TYPO3\CMS\Frontend\Utility\EidUtility::initFeUser(), $folder, $open);
}