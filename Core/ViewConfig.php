<?php

/*
 * OXID Erweiterung: ViewConfig -> shop.feyelektronik.de 
 * @link      http://www.mediaclick.de
 * @package   MediaClick Modules
 * @copyright (C) MediaClick! Kommunikation und Software GmbH
 * @version   OXID eShop CE / PE / EE
 *
 */

namespace Oxidmodule\PwConditions\Core;

class ViewConfig extends ViewConfig_parent
{
    /**
     * Returns the path to javascripts of module
     *
     * @param string $sFile
     * @return string
     */
    public function mcGetModuleJsPath($sModuleName, $sFile = "") {

        $sModuleJsUrl = $this->getModuleUrl($sModuleName) . 'out/src/js/'.$sFile;
        return $sModuleJsUrl;
    }

    /**
     * Returns the path to javascripts of module
     *
     * @param string $sFile
     * @return string
     */
    public function mcGetModuleStylePath($sModuleName, $sFile = "") {

        $sModuleStyleUrl = $this->getModuleUrl($sModuleName) . 'out/src/css/'.$sFile;
        return $sModuleStyleUrl;
    }

    /**
     * Returns the path to Templates of module
     *
     * @param string $sModuleName
     * @param string $sFile
     * @return string
     */
    public function mcGetModuleTemplatePath($sModuleName, $sFile = "") {

        $sModuleTplUrl = $this->getModuleUrl($sModuleName) . 'views/blocks/'.$sFile;
        return $sModuleTplUrl;
    }

}