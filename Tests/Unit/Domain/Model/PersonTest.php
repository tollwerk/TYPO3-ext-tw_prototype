<?php

namespace Tollwerk\TwPrototype\Tests\Unit\Domain\Model;

    /***************************************************************
     *  Copyright notice
     *
     *  (c) 2016 Joschi Kuphal <joschi@tollwerk.de>, tollwerk GmbH
     *
     *  All rights reserved
     *
     *  This script is part of the TYPO3 project. The TYPO3 project is
     *  free software; you can redistribute it and/or modify
     *  it under the terms of the GNU General Public License as published by
     *  the Free Software Foundation; either version 2 of the License, or
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
     ***************************************************************/

/**
 * Test case for class \Tollwerk\TwPrototype\Domain\Model\Person.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Joschi Kuphal <joschi@tollwerk.de>
 */
class PersonTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * Person
     *
     * @var \Tollwerk\TwPrototype\Domain\Model\Person
     */
    protected $subject = null;

    /**
     * Set up
     */
    public function setUp()
    {
        $this->subject = new \Tollwerk\TwPrototype\Domain\Model\Person();
    }

    /**
     * Tear down
     */
    public function tearDown()
    {
        unset($this->subject);
    }

    /**
     * Test whether the given name is empty by default
     *
     * @test
     */
    public function getGivenNameReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getGivenName()
        );
    }

    /**
     * Test whether setting the given name works
     *
     * @test
     */
    public function setGivenNameForStringSetsGivenName()
    {
        $this->subject->setGivenName('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'givenName',
            $this->subject
        );
    }

    /**
     * Test whether the family name is empty by default
     *
     * @test
     */
    public function getFamilyNameReturnsInitialValueForString()
    {
        $this->assertSame(
            '',
            $this->subject->getFamilyName()
        );
    }

    /**
     * Test whether setting the family name works
     *
     * @test
     */
    public function setFamilyNameForStringSetsFamilyName()
    {
        $this->subject->setFamilyName('Conceived at T3CON10');

        $this->assertAttributeEquals(
            'Conceived at T3CON10',
            'familyName',
            $this->subject
        );
    }

    /**
     * Test whether the birthday is empty by default
     *
     * @test
     */
    public function getBirthdayReturnsInitialValueForDateTime()
    {
        $this->assertEquals(
            null,
            $this->subject->getBirthday()
        );
    }

    /**
     * Test whether setting the birthday works
     *
     * @test
     */
    public function setBirthdayForDateTimeSetsBirthday()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setBirthday($dateTimeFixture);

        $this->assertAttributeEquals(
            $dateTimeFixture,
            'birthday',
            $this->subject
        );
    }
}
