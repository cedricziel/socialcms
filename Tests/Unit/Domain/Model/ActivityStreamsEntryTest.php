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
 * Test case for class \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Cedric Ziel <cedric@cedric-ziel.com>
 */
class ActivityStreamsEntryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getVerbReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getVerb()
		);
	}

	/**
	 * @test
	 */
	public function setVerbForStringSetsVerb() {
		$this->subject->setVerb('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'verb',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUserIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getUserId()
		);
	}

	/**
	 * @test
	 */
	public function setUserIdForStringSetsUserId() {
		$this->subject->setUserId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'userId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGroupIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGroupId()
		);
	}

	/**
	 * @test
	 */
	public function setGroupIdForStringSetsGroupId() {
		$this->subject->setGroupId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'groupId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAppIdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAppId()
		);
	}

	/**
	 * @test
	 */
	public function setAppIdForStringSetsAppId() {
		$this->subject->setAppId('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'appId',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBccReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBcc()
		);
	}

	/**
	 * @test
	 */
	public function setBccForStringSetsBcc() {
		$this->subject->setBcc('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bcc',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getBtoReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBto()
		);
	}

	/**
	 * @test
	 */
	public function setBtoForStringSetsBto() {
		$this->subject->setBto('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'bto',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCcReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCc()
		);
	}

	/**
	 * @test
	 */
	public function setCcForStringSetsCc() {
		$this->subject->setCc('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'cc',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getContextReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContext()
		);
	}

	/**
	 * @test
	 */
	public function setContextForStringSetsContext() {
		$this->subject->setContext('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'context',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDcReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDc()
		);
	}

	/**
	 * @test
	 */
	public function setDcForStringSetsDc() {
		$this->subject->setDc('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'dc',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEndTimeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getEndTime()
		);
	}

	/**
	 * @test
	 */
	public function setEndTimeForDateTimeSetsEndTime() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setEndTime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'endTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGeojsonReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getGeojson()
		);
	}

	/**
	 * @test
	 */
	public function setGeojsonForStringSetsGeojson() {
		$this->subject->setGeojson('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'geojson',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getInReplyToReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getInReplyTo()
		);
	}

	/**
	 * @test
	 */
	public function setInReplyToForStringSetsInReplyTo() {
		$this->subject->setInReplyTo('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'inReplyTo',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLdReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLd()
		);
	}

	/**
	 * @test
	 */
	public function setLdForStringSetsLd() {
		$this->subject->setLd('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ld',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLinksReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLinks()
		);
	}

	/**
	 * @test
	 */
	public function setLinksForStringSetsLinks() {
		$this->subject->setLinks('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'links',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLocationReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLocation()
		);
	}

	/**
	 * @test
	 */
	public function setLocationForStringSetsLocation() {
		$this->subject->setLocation('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'location',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMoodReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMood()
		);
	}

	/**
	 * @test
	 */
	public function setMoodForStringSetsMood() {
		$this->subject->setMood('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'mood',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOdataReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOdata()
		);
	}

	/**
	 * @test
	 */
	public function setOdataForStringSetsOdata() {
		$this->subject->setOdata('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'odata',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOpengraphReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOpengraph()
		);
	}

	/**
	 * @test
	 */
	public function setOpengraphForStringSetsOpengraph() {
		$this->subject->setOpengraph('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'opengraph',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPriorityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPriority()
		);
	}

	/**
	 * @test
	 */
	public function setPriorityForStringSetsPriority() {
		$this->subject->setPriority('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'priority',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getRatingReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getRating()
		);
	}

	/**
	 * @test
	 */
	public function setRatingForStringSetsRating() {
		$this->subject->setRating('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'rating',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getResultReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getResult()
		);
	}

	/**
	 * @test
	 */
	public function setResultForStringSetsResult() {
		$this->subject->setResult('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'result',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSchemaOrgReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSchemaOrg()
		);
	}

	/**
	 * @test
	 */
	public function setSchemaOrgForStringSetsSchemaOrg() {
		$this->subject->setSchemaOrg('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'schemaOrg',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSourceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSource()
		);
	}

	/**
	 * @test
	 */
	public function setSourceForStringSetsSource() {
		$this->subject->setSource('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'source',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getStartTimeReturnsInitialValueForDateTime() {
		$this->assertEquals(
			NULL,
			$this->subject->getStartTime()
		);
	}

	/**
	 * @test
	 */
	public function setStartTimeForDateTimeSetsStartTime() {
		$dateTimeFixture = new \DateTime();
		$this->subject->setStartTime($dateTimeFixture);

		$this->assertAttributeEquals(
			$dateTimeFixture,
			'startTime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTagsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTags()
		);
	}

	/**
	 * @test
	 */
	public function setTagsForStringSetsTags() {
		$this->subject->setTags('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'tags',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getToObjectReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getToObject()
		);
	}

	/**
	 * @test
	 */
	public function setToObjectForStringSetsToObject() {
		$this->subject->setToObject('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'toObject',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getActorReturnsInitialValueForActivityStreamsObject() {
		$this->assertEquals(
			NULL,
			$this->subject->getActor()
		);
	}

	/**
	 * @test
	 */
	public function setActorForActivityStreamsObjectSetsActor() {
		$actorFixture = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$this->subject->setActor($actorFixture);

		$this->assertAttributeEquals(
			$actorFixture,
			'actor',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getGeneratorReturnsInitialValueForActivityStreamsObject() {
		$this->assertEquals(
			NULL,
			$this->subject->getGenerator()
		);
	}

	/**
	 * @test
	 */
	public function setGeneratorForActivityStreamsObjectSetsGenerator() {
		$generatorFixture = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$this->subject->setGenerator($generatorFixture);

		$this->assertAttributeEquals(
			$generatorFixture,
			'generator',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getIconReturnsInitialValueForActivityStreamsMediaLink() {
		$this->assertEquals(
			NULL,
			$this->subject->getIcon()
		);
	}

	/**
	 * @test
	 */
	public function setIconForActivityStreamsMediaLinkSetsIcon() {
		$iconFixture = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink();
		$this->subject->setIcon($iconFixture);

		$this->assertAttributeEquals(
			$iconFixture,
			'icon',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getObjectReturnsInitialValueForActivityStreamsObject() {
		$this->assertEquals(
			NULL,
			$this->subject->getObject()
		);
	}

	/**
	 * @test
	 */
	public function setObjectForActivityStreamsObjectSetsObject() {
		$objectFixture = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$this->subject->setObject($objectFixture);

		$this->assertAttributeEquals(
			$objectFixture,
			'object',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProviderReturnsInitialValueForActivityStreamsObject() {
		$this->assertEquals(
			NULL,
			$this->subject->getProvider()
		);
	}

	/**
	 * @test
	 */
	public function setProviderForActivityStreamsObjectSetsProvider() {
		$providerFixture = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$this->subject->setProvider($providerFixture);

		$this->assertAttributeEquals(
			$providerFixture,
			'provider',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTargetReturnsInitialValueForActivityStreamsObject() {
		$this->assertEquals(
			NULL,
			$this->subject->getTarget()
		);
	}

	/**
	 * @test
	 */
	public function setTargetForActivityStreamsObjectSetsTarget() {
		$targetFixture = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$this->subject->setTarget($targetFixture);

		$this->assertAttributeEquals(
			$targetFixture,
			'target',
			$this->subject
		);
	}
}
