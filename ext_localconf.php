<?php
use Easydb\Typo3Integration\Form\Element\EasidbFileInfo;
use Easydb\Typo3Integration\Hook\FileIndexRepository;
use TYPO3\CMS\Core\Resource\Index\FileIndexRepository as CoreFileIndexRepository;

(static function () {
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][CoreFileIndexRepository::class] = ['className' => FileIndexRepository::class];
    $GLOBALS['TYPO3_CONF_VARS']['BE']['defaultUC']['easydb']['windowSize'] = [
        'width' => '650',
        'height' => '600',
    ];

    // new field types
    $GLOBALS['TYPO3_CONF_VARS']['SYS']['formEngine']['nodeRegistry'][1524490067] = [
        'nodeName' => 'easidbInfo',
        'priority' => 30,
        'class' => EasidbFileInfo::class,
    ];
})();
