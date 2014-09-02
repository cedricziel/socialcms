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
 * Test case for class \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Cedric Ziel <cedric@cedric-ziel.com>
 */
class ActivityStreamsObjectTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getContentReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getContent()
		);
	}

	/**
	 * @test
	 */
	public function setContentForStringSetsContent() {
		$this->subject->setContent('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'content',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDisplayNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDisplayName()
		);
	}

	/**
	 * @test
	 */
	public function setDisplayNameForStringSetsDisplayName() {
		$this->subject->setDisplayName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'displayName',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDownstreamDuplicatesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDownstreamDuplicates()
		);
	}

	/**
	 * @test
	 */
	public function setDownstreamDuplicatesForStringSetsDownstreamDuplicates() {
		$this->subject->setDownstreamDuplicates('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'downstreamDuplicates',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSummaryReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSummary()
		);
	}

	/**
	 * @test
	 */
	public function setSummaryForStringSetsSummary() {
		$this->subject->setSummary('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'summary',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getUpstreamDuplicatesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getUpstreamDuplicates()
		);
	}

	/**
	 * @test
	 */
	public function setUpstreamDuplicatesForStringSetsUpstreamDuplicates() {
		$this->subject->setUpstreamDuplicates('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'upstreamDuplicates',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAliasReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAlias()
		);
	}

	/**
	 * @test
	 */
	public function setAliasForStringSetsAlias() {
		$this->subject->setAlias('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'alias',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAttendedByReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAttendedBy()
		);
	}

	/**
	 * @test
	 */
	public function setAttendedByForStringSetsAttendedBy() {
		$this->subject->setAttendedBy('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'attendedBy',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getAttendingReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getAttending()
		);
	}

	/**
	 * @test
	 */
	public function setAttendingForStringSetsAttending() {
		$this->subject->setAttending('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'attending',
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
	public function getFollowersReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFollowers()
		);
	}

	/**
	 * @test
	 */
	public function setFollowersForStringSetsFollowers() {
		$this->subject->setFollowers('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'followers',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFollowingReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFollowing()
		);
	}

	/**
	 * @test
	 */
	public function setFollowingForStringSetsFollowing() {
		$this->subject->setFollowing('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'following',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFriendRequestsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFriendRequests()
		);
	}

	/**
	 * @test
	 */
	public function setFriendRequestsForStringSetsFriendRequests() {
		$this->subject->setFriendRequests('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'friendRequests',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFriendsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFriends()
		);
	}

	/**
	 * @test
	 */
	public function setFriendsForStringSetsFriends() {
		$this->subject->setFriends('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'friends',
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
	public function getInvitedReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getInvited()
		);
	}

	/**
	 * @test
	 */
	public function setInvitedForStringSetsInvited() {
		$this->subject->setInvited('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'invited',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getLikesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getLikes()
		);
	}

	/**
	 * @test
	 */
	public function setLikesForStringSetsLikes() {
		$this->subject->setLikes('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'likes',
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
	public function getMaybeAttendingReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMaybeAttending()
		);
	}

	/**
	 * @test
	 */
	public function setMaybeAttendingForStringSetsMaybeAttending() {
		$this->subject->setMaybeAttending('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'maybeAttending',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMembersReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMembers()
		);
	}

	/**
	 * @test
	 */
	public function setMembersForStringSetsMembers() {
		$this->subject->setMembers('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'members',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getNotAttendedByReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNotAttendedBy()
		);
	}

	/**
	 * @test
	 */
	public function setNotAttendedByForStringSetsNotAttendedBy() {
		$this->subject->setNotAttendedBy('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'notAttendedBy',
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
	public function getNotAttendingReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getNotAttending()
		);
	}

	/**
	 * @test
	 */
	public function setNotAttendingForStringSetsNotAttending() {
		$this->subject->setNotAttending('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'notAttending',
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
	public function getRepliesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getReplies()
		);
	}

	/**
	 * @test
	 */
	public function setRepliesForStringSetsReplies() {
		$this->subject->setReplies('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'replies',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getReviewsReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getReviews()
		);
	}

	/**
	 * @test
	 */
	public function setReviewsForStringSetsReviews() {
		$this->subject->setReviews('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'reviews',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getSavesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getSaves()
		);
	}

	/**
	 * @test
	 */
	public function setSavesForStringSetsSaves() {
		$this->subject->setSaves('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'saves',
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
	public function getSharesReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getShares()
		);
	}

	/**
	 * @test
	 */
	public function setSharesForStringSetsShares() {
		$this->subject->setShares('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'shares',
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
	public function getAttachmentsReturnsInitialValueForActivityStreamsObject() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getAttachments()
		);
	}

	/**
	 * @test
	 */
	public function setAttachmentsForObjectStorageContainingActivityStreamsObjectSetsAttachments() {
		$attachment = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$objectStorageHoldingExactlyOneAttachments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneAttachments->attach($attachment);
		$this->subject->setAttachments($objectStorageHoldingExactlyOneAttachments);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneAttachments,
			'attachments',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addAttachmentToObjectStorageHoldingAttachments() {
		$attachment = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$attachmentsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$attachmentsObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($attachment));
		$this->inject($this->subject, 'attachments', $attachmentsObjectStorageMock);

		$this->subject->addAttachment($attachment);
	}

	/**
	 * @test
	 */
	public function removeAttachmentFromObjectStorageHoldingAttachments() {
		$attachment = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$attachmentsObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$attachmentsObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($attachment));
		$this->inject($this->subject, 'attachments', $attachmentsObjectStorageMock);

		$this->subject->removeAttachment($attachment);

	}

	/**
	 * @test
	 */
	public function getAuthorReturnsInitialValueForActivityStreamsObject() {
		$this->assertEquals(
			NULL,
			$this->subject->getAuthor()
		);
	}

	/**
	 * @test
	 */
	public function setAuthorForActivityStreamsObjectSetsAuthor() {
		$authorFixture = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject();
		$this->subject->setAuthor($authorFixture);

		$this->assertAttributeEquals(
			$authorFixture,
			'author',
			$this->subject
		);
	}
}
