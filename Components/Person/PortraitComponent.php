<?php

/**
 * data
 *
 * @category    Tollwerk
 * @package     Tollwerk\Admin
 * @subpackage  Tollwerk\TwPrototype\Component\Person
 * @author      Joschi Kuphal <joschi@tollwerk.de> / @jkphl
 * @copyright   Copyright © 2016 Joschi Kuphal <joschi@tollwerk.de> / @jkphl
 * @license     http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/***********************************************************************************
 *  The MIT License (MIT)
 *
 *  Copyright © 2016 Joschi Kuphal <joschi@kuphal.net> / @jkphl
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of
 *  this software and associated documentation files (the "Software"), to deal in
 *  the Software without restriction, including without limitation the rights to
 *  use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 *  the Software, and to permit persons to whom the Software is furnished to do so,
 *  subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 *  FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 *  IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 *  CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 ***********************************************************************************/

namespace Tollwerk\TwPrototype\Component\Person;

use Tollwerk\TwComponentlibrary\Component\FluidTemplateComponent;
use Tollwerk\TwPrototype\Domain\Repository\PersonRepository;

/**
 * Portrait component
 *
 * @package Tollwerk\TwPrototype
 * @subpackage Tollwerk\TwPrototype\Component
 */
class PortraitComponent extends FluidTemplateComponent
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
        /** @var \Tollwerk\TwPrototype\Domain\Repository\PersonRepository $personRepository */
        $personRepository = $this->objectManager->get('Tollwerk\\TwPrototype\\Domain\\Repository\\PersonRepository');

        $this->setTemplate('EXT:tw_prototype/Resources/Private/Partials/Person/Portrait.html');
        $this->setParameter('person', $personRepository->findByUid(1));
        $this->preview->addStylesheet('/path/to/main.css');
    }
}
