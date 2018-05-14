<?php

/**
 * ContaoPrivacy for Contao Open Source CMS
 *
 * @copyright   Friends of Contao 2018
 * @author      Mathias Arzberger <https://pdir.de>
 * @package     ContaoPrivacy
 * @license     LGPL-3.0+
 * @see         https://github.com/friends-of-contao/contao-privacy
 */

$assetsDir = 'bundles/foccontaoprivacy';

array_insert($GLOBALS['BE_MOD']['foc'], 0, array
(
    'focPrivacyOverview' => array
    (
        'callback' => 'Foc\ContaoPrivacyBundle\Module\PrivacyOverview',
        'icon' => $assetsDir . '/img/icon.png',
        // 'javascript'        =>  $assetsDir . '/js/backend.min.js',
        'stylesheet' => $assetsDir . '/css/privacyOverview.css'
    ),
));