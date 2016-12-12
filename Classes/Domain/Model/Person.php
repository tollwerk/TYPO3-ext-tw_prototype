<?php
namespace Tollwerk\TwPrototype\Domain\Model;

    /***************************************************************
     *
     *  Copyright notice
     *
     *  (c) 2016 Joschi Kuphal <joschi@tollwerk.de>, tollwerk GmbH
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
     ***************************************************************/

/**
 * Demo person
 */
class Person extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity implements \JsonSerializable
{

    /**
     * Given name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $givenName = '';

    /**
     * Family Name
     *
     * @var string
     * @validate NotEmpty
     */
    protected $familyName = '';

    /**
     * Birthday
     *
     * @var \DateTime
     * @validate NotEmpty
     */
    protected $birthday = null;

    /**
     * Portrait
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    protected $portrait = null;


    /**
     * Returns the givenName
     *
     * @return string $givenName
     */
    public function getGivenName()
    {
        return $this->givenName;
    }

    /**
     * Sets the givenName
     *
     * @param string $givenName
     * @return void
     */
    public function setGivenName($givenName)
    {
        $this->givenName = $givenName;
    }

    /**
     * Returns the familyName
     *
     * @return string $familyName
     */
    public function getFamilyName()
    {
        return $this->familyName;
    }

    /**
     * Sets the familyName
     *
     * @param string $familyName
     * @return void
     */
    public function setFamilyName($familyName)
    {
        $this->familyName = $familyName;
    }

    /**
     * Returns the birthday
     *
     * @return \DateTime $birthday
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Sets the birthday
     *
     * @param \DateTime $birthday
     * @return void
     */
    public function setBirthday(\DateTime $birthday)
    {
        $this->birthday = $birthday;
    }

    /**
     * Returns the portrait
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $portrait
     */
    public function getPortrait()
    {
        return $this->portrait;
    }

    /**
     * Sets the portrait
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $portrait
     * @return void
     */
    public function setPortrait(\TYPO3\CMS\Extbase\Domain\Model\FileReference $portrait)
    {
        $this->portrait = $portrait;
    }

    /**
     * Serialize to JSON
     *
     * @return array JSON serialization
     */
    function jsonSerialize()
    {
        return '<'.get_class($this).'['.$this->getUid().']>';
//        return [
//            'uid' => $this->getUid(),
//            'givenName' => $this->getGivenName(),
//            'familyName' => $this->getFamilyName(),
//            'birtday' => $this->getBirthday()->format('c'),
//            'portrait' => $this->getPortrait()->setOriginalResource()
//        ];
    }
}
