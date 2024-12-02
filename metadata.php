<?php

/**
 * Passwortstärke per JavaScript prüfen und farblich visualisieren
 *
 * @link      http://www.mediaclick.de
 * @package   main
 * @copyright (C) MediaClick! Kommunikation und Software GmbH
 * @version   OXID eShop CE/PE/EE
 * Language-Datei siehe: https://docs.oxid-esales.com/developer/en/6.4/development/modules_components_themes/module/skeleton/structure.html?highlight=naming%20convention
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'oxid_pwconditions',
    'title'        => '<strong style="color:#0668AE;">MediaClick!</strong> JavaScript-Prüfung der Passwortstärke!',
    'description'  => 'JavaScript-Prüfung der Passwortstärke bei der Registrierung',
    'thumbnail'    => 'mc_module.png',
    'version'      => '1.5.1',
    'author'       => 'MediaClick! Kommunikation und Software GmbH',

    'extend'       => array(
        \OxidEsales\Eshop\Core\ViewConfig::class                                   =>  \Mediaclick\PwStrengthModule\Core\ViewConfig::class,
    ),

    'blocks' => array(
        array('template' => 'form/fieldset/user_account.tpl',   'block' => 'user_account_password', 'file' => '/views/blocks/user_account_password.tpl'),
        array('template' => 'form/fieldset/user_account.tpl',   'block' => 'user_account_confirmpwd', 'file' => '/views/blocks/user_account_confirmpwd.tpl'),

    ),
);
