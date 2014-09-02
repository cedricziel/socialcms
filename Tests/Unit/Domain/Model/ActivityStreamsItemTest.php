<?php

namespace CedricZiel\Socialcms\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2014 Cedric Ziel <cedric@cedric-ziel.com>
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
 * Test case for class \CedricZiel\Socialcms\Domain\Model\ActivityStreamsItem.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Cedric Ziel <cedric@cedric-ziel.com>
 */
class ActivityStreamsItemTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsItem
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsItem();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getId()
		);
	}

	/**
	 * @test
	 */
	public function setIdForStringSetsId() {
		$this->subject->setId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'id',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPublishedReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getPublished()
		);
	}

	/**
	 * @test
	 */
	public function setPublishedForDateTimeSetsPublished() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setPublished($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'published',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUpdatedReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getUpdated()
		);
	}

	/**
	 * @test
	 */
	public function setUpdatedForDateTimeSetsUpdated() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setUpdated($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'updated',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUrlReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getUrl()
		);
	}

	/**
	 * @test
	 */
	public function setUrlForStringSetsUrl() {
		$this->subject->setUrl('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'url',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getObjectTypeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getObjectType()
		);
	}

	/**
	 * @test
	 */
	public function setObjectTypeForStringSetsObjectType() {
		$this->subject->setObjectType('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'objectType',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOpenSocialReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOpenSocial()
		);
	}

	/**
	 * @test
	 */
	public function setOpenSocialForStringSetsOpenSocial() {
		$this->subject->setOpenSocial('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'openSocial',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getExtensionsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getExtensions()
		);
	}

	/**
	 * @test
	 */
	public function setExtensionsForStringSetsExtensions() {
		$this->subject->setExtensions('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'extensions',
			$this->subject
		);
	}
}
