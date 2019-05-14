<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'ajaxmap' => 'a:4:{s:13:"includeJQuery";s:1:"1";s:17:"includeGoogleMaps";s:1:"1";s:17:"includeJavaScript";s:1:"1";s:16:"includeFancyTree";s:1:"1";}',
            'backend' => 'a:6:{s:9:"loginLogo";s:0:"";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
            'tt_address' => 'a:6:{s:21:"backwardsCompatFormat";s:9:"%1$s %3$s";s:24:"storeBackwardsCompatName";s:1:"1";s:17:"readOnlyNameField";s:1:"1";s:14:"activatePiBase";s:1:"0";s:32:"telephoneValidationPatternForPhp";s:13:"/[^\\d\\+\\s\\-]/";s:31:"telephoneValidationPatternForJs";s:14:"/[^\\d\\+\\s\\-]/g";}',
        ],
    ],
    'EXTENSIONS' => [
        'ajaxmap' => [
            'includeFancyTree' => '1',
            'includeGoogleMaps' => '1',
            'includeJQuery' => '1',
            'includeJavaScript' => '1',
        ],
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
        'tt_address' => [
            'activatePiBase' => '0',
            'backwardsCompatFormat' => '%1$s %3$s',
            'readOnlyNameField' => '1',
            'storeBackwardsCompatName' => '1',
            'telephoneValidationPatternForJs' => '/[^\\d\\+\\s\\-]/g',
            'telephoneValidationPatternForPhp' => '/[^\\d\\+\\s\\-]/',
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'exceptionalErrors' => 12290,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'DEV ajaxmap',
        'systemLogLevel' => 0,
        'systemMaintainers' => [
            1,
        ],
    ],
];
