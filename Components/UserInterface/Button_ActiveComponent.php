<?php

/**
 * data
 *
 * @category Tollwerk
 * @package Tollwerk\TwPrototype
 * @subpackage Tollwerk\TwPrototype\Component
 * @author Joschi Kuphal <joschi@tollwerk.de> / @jkphl
 * @copyright Copyright © 2016 Joschi Kuphal <joschi@tollwerk.de> / @jkphl
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/***********************************************************************************
 *  Copyright © 2016 Joschi Kuphal <joschi@kuphal.net> / @jkphl
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***********************************************************************************/

namespace Tollwerk\TwPrototype\Component\UserInterface;

use Tollwerk\TwComponentlibrary\Component\TypoScriptComponent;

/**
 * Button component
 *
 * @package Tollwerk\TwPrototype
 * @subpackage Tollwerk\TwPrototype\Component
 */
class Button_ActiveComponent extends TypoScriptComponent
{
    /**
     * Configure the component
     *
     * Gets called immediately after construction. Override this method in components to set their properties.
     *
     * @return void
     */
    protected function configure()
    {
        $this->setTypoScriptKey('lib.component');
        $this->addNotice("# Button component\n\nThis is a simple active button component rendered by TypoScript.");
        $this->request->setArgument('text', 'Active');
        $this->preview->addStylesheet('/path/to/main.css');
    }
}
