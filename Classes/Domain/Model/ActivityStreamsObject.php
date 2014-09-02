<?php
namespace CedricZiel\Socialcms\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Cedric Ziel <cedric@cedric-ziel.com>
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
 * ActivityStreamsObject
 */
class ActivityStreamsObject extends \CedricZiel\Socialcms\Domain\Model\ActivityStreamsItem {

	/**
	 * content
	 *
	 * @var string
	 */
	protected $content = '';

	/**
	 * displayName
	 *
	 * @var string
	 */
	protected $displayName = '';

	/**
	 * downstreamDuplicates
	 *
	 * @var string
	 */
	protected $downstreamDuplicates = '';

	/**
	 * summary
	 *
	 * @var string
	 */
	protected $summary = '';

	/**
	 * upstreamDuplicates
	 *
	 * @var string
	 */
	protected $upstreamDuplicates = '';

	/**
	 * alias
	 *
	 * @var string
	 */
	protected $alias = '';

	/**
	 * attendedBy
	 *
	 * @var string
	 */
	protected $attendedBy = '';

	/**
	 * attending
	 *
	 * @var string
	 */
	protected $attending = '';

	/**
	 * dc
	 *
	 * @var string
	 */
	protected $dc = '';

	/**
	 * endTime
	 *
	 * @var \DateTime
	 */
	protected $endTime = NULL;

	/**
	 * followers
	 *
	 * @var string
	 */
	protected $followers = '';

	/**
	 * following
	 *
	 * @var string
	 */
	protected $following = '';

	/**
	 * friendRequests
	 *
	 * @var string
	 */
	protected $friendRequests = '';

	/**
	 * friends
	 *
	 * @var string
	 */
	protected $friends = '';

	/**
	 * geojson
	 *
	 * @var string
	 */
	protected $geojson = '';

	/**
	 * invited
	 *
	 * @var string
	 */
	protected $invited = '';

	/**
	 * likes
	 *
	 * @var string
	 */
	protected $likes = '';

	/**
	 * ld
	 *
	 * @var string
	 */
	protected $ld = '';

	/**
	 * links
	 *
	 * @var string
	 */
	protected $links = '';

	/**
	 * location
	 *
	 * @var string
	 */
	protected $location = '';

	/**
	 * maybeAttending
	 *
	 * @var string
	 */
	protected $maybeAttending = '';

	/**
	 * members
	 *
	 * @var string
	 */
	protected $members = '';

	/**
	 * notAttendedBy
	 *
	 * @var string
	 */
	protected $notAttendedBy = '';

	/**
	 * mood
	 *
	 * @var string
	 */
	protected $mood = '';

	/**
	 * notAttending
	 *
	 * @var string
	 */
	protected $notAttending = '';

	/**
	 * odata
	 *
	 * @var string
	 */
	protected $odata = '';

	/**
	 * opengraph
	 *
	 * @var string
	 */
	protected $opengraph = '';

	/**
	 * rating
	 *
	 * @var string
	 */
	protected $rating = '';

	/**
	 * replies
	 *
	 * @var string
	 */
	protected $replies = '';

	/**
	 * reviews
	 *
	 * @var string
	 */
	protected $reviews = '';

	/**
	 * saves
	 *
	 * @var string
	 */
	protected $saves = '';

	/**
	 * schemaOrg
	 *
	 * @var string
	 */
	protected $schemaOrg = '';

	/**
	 * shares
	 *
	 * @var string
	 */
	protected $shares = '';

	/**
	 * source
	 *
	 * @var string
	 */
	protected $source = '';

	/**
	 * startTime
	 *
	 * @var \DateTime
	 */
	protected $startTime = NULL;

	/**
	 * attachments
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject>
	 * @cascade remove
	 */
	protected $attachments = NULL;

	/**
	 * author
	 *
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject
	 */
	protected $author = NULL;

	/**
	 * image
	 *
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink
	 */
	protected $image = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->attachments = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the content
	 *
	 * @return string $content
	 */
	public function getContent() {
		return $this->content;
	}

	/**
	 * Sets the content
	 *
	 * @param string $content
	 * @return void
	 */
	public function setContent($content) {
		$this->content = $content;
	}

	/**
	 * Returns the displayName
	 *
	 * @return string $displayName
	 */
	public function getDisplayName() {
		return $this->displayName;
	}

	/**
	 * Sets the displayName
	 *
	 * @param string $displayName
	 * @return void
	 */
	public function setDisplayName($displayName) {
		$this->displayName = $displayName;
	}

	/**
	 * Returns the downstreamDuplicates
	 *
	 * @return string $downstreamDuplicates
	 */
	public function getDownstreamDuplicates() {
		return $this->downstreamDuplicates;
	}

	/**
	 * Sets the downstreamDuplicates
	 *
	 * @param string $downstreamDuplicates
	 * @return void
	 */
	public function setDownstreamDuplicates($downstreamDuplicates) {
		$this->downstreamDuplicates = $downstreamDuplicates;
	}

	/**
	 * Returns the summary
	 *
	 * @return string $summary
	 */
	public function getSummary() {
		return $this->summary;
	}

	/**
	 * Sets the summary
	 *
	 * @param string $summary
	 * @return void
	 */
	public function setSummary($summary) {
		$this->summary = $summary;
	}

	/**
	 * Returns the upstreamDuplicates
	 *
	 * @return string $upstreamDuplicates
	 */
	public function getUpstreamDuplicates() {
		return $this->upstreamDuplicates;
	}

	/**
	 * Sets the upstreamDuplicates
	 *
	 * @param string $upstreamDuplicates
	 * @return void
	 */
	public function setUpstreamDuplicates($upstreamDuplicates) {
		$this->upstreamDuplicates = $upstreamDuplicates;
	}

	/**
	 * Returns the alias
	 *
	 * @return string $alias
	 */
	public function getAlias() {
		return $this->alias;
	}

	/**
	 * Sets the alias
	 *
	 * @param string $alias
	 * @return void
	 */
	public function setAlias($alias) {
		$this->alias = $alias;
	}

	/**
	 * Returns the attendedBy
	 *
	 * @return string $attendedBy
	 */
	public function getAttendedBy() {
		return $this->attendedBy;
	}

	/**
	 * Sets the attendedBy
	 *
	 * @param string $attendedBy
	 * @return void
	 */
	public function setAttendedBy($attendedBy) {
		$this->attendedBy = $attendedBy;
	}

	/**
	 * Returns the attending
	 *
	 * @return string $attending
	 */
	public function getAttending() {
		return $this->attending;
	}

	/**
	 * Sets the attending
	 *
	 * @param string $attending
	 * @return void
	 */
	public function setAttending($attending) {
		$this->attending = $attending;
	}

	/**
	 * Returns the dc
	 *
	 * @return string $dc
	 */
	public function getDc() {
		return $this->dc;
	}

	/**
	 * Sets the dc
	 *
	 * @param string $dc
	 * @return void
	 */
	public function setDc($dc) {
		$this->dc = $dc;
	}

	/**
	 * Returns the endTime
	 *
	 * @return \DateTime $endTime
	 */
	public function getEndTime() {
		return $this->endTime;
	}

	/**
	 * Sets the endTime
	 *
	 * @param \DateTime $endTime
	 * @return void
	 */
	public function setEndTime(\DateTime $endTime) {
		$this->endTime = $endTime;
	}

	/**
	 * Returns the followers
	 *
	 * @return string $followers
	 */
	public function getFollowers() {
		return $this->followers;
	}

	/**
	 * Sets the followers
	 *
	 * @param string $followers
	 * @return void
	 */
	public function setFollowers($followers) {
		$this->followers = $followers;
	}

	/**
	 * Returns the following
	 *
	 * @return string $following
	 */
	public function getFollowing() {
		return $this->following;
	}

	/**
	 * Sets the following
	 *
	 * @param string $following
	 * @return void
	 */
	public function setFollowing($following) {
		$this->following = $following;
	}

	/**
	 * Returns the friendRequests
	 *
	 * @return string $friendRequests
	 */
	public function getFriendRequests() {
		return $this->friendRequests;
	}

	/**
	 * Sets the friendRequests
	 *
	 * @param string $friendRequests
	 * @return void
	 */
	public function setFriendRequests($friendRequests) {
		$this->friendRequests = $friendRequests;
	}

	/**
	 * Returns the friends
	 *
	 * @return string $friends
	 */
	public function getFriends() {
		return $this->friends;
	}

	/**
	 * Sets the friends
	 *
	 * @param string $friends
	 * @return void
	 */
	public function setFriends($friends) {
		$this->friends = $friends;
	}

	/**
	 * Returns the geojson
	 *
	 * @return string $geojson
	 */
	public function getGeojson() {
		return $this->geojson;
	}

	/**
	 * Sets the geojson
	 *
	 * @param string $geojson
	 * @return void
	 */
	public function setGeojson($geojson) {
		$this->geojson = $geojson;
	}

	/**
	 * Returns the invited
	 *
	 * @return string $invited
	 */
	public function getInvited() {
		return $this->invited;
	}

	/**
	 * Sets the invited
	 *
	 * @param string $invited
	 * @return void
	 */
	public function setInvited($invited) {
		$this->invited = $invited;
	}

	/**
	 * Returns the likes
	 *
	 * @return string $likes
	 */
	public function getLikes() {
		return $this->likes;
	}

	/**
	 * Sets the likes
	 *
	 * @param string $likes
	 * @return void
	 */
	public function setLikes($likes) {
		$this->likes = $likes;
	}

	/**
	 * Returns the ld
	 *
	 * @return string $ld
	 */
	public function getLd() {
		return $this->ld;
	}

	/**
	 * Sets the ld
	 *
	 * @param string $ld
	 * @return void
	 */
	public function setLd($ld) {
		$this->ld = $ld;
	}

	/**
	 * Returns the links
	 *
	 * @return string $links
	 */
	public function getLinks() {
		return $this->links;
	}

	/**
	 * Sets the links
	 *
	 * @param string $links
	 * @return void
	 */
	public function setLinks($links) {
		$this->links = $links;
	}

	/**
	 * Returns the location
	 *
	 * @return string $location
	 */
	public function getLocation() {
		return $this->location;
	}

	/**
	 * Sets the location
	 *
	 * @param string $location
	 * @return void
	 */
	public function setLocation($location) {
		$this->location = $location;
	}

	/**
	 * Returns the maybeAttending
	 *
	 * @return string $maybeAttending
	 */
	public function getMaybeAttending() {
		return $this->maybeAttending;
	}

	/**
	 * Sets the maybeAttending
	 *
	 * @param string $maybeAttending
	 * @return void
	 */
	public function setMaybeAttending($maybeAttending) {
		$this->maybeAttending = $maybeAttending;
	}

	/**
	 * Returns the members
	 *
	 * @return string $members
	 */
	public function getMembers() {
		return $this->members;
	}

	/**
	 * Sets the members
	 *
	 * @param string $members
	 * @return void
	 */
	public function setMembers($members) {
		$this->members = $members;
	}

	/**
	 * Returns the notAttendedBy
	 *
	 * @return string $notAttendedBy
	 */
	public function getNotAttendedBy() {
		return $this->notAttendedBy;
	}

	/**
	 * Sets the notAttendedBy
	 *
	 * @param string $notAttendedBy
	 * @return void
	 */
	public function setNotAttendedBy($notAttendedBy) {
		$this->notAttendedBy = $notAttendedBy;
	}

	/**
	 * Returns the mood
	 *
	 * @return string $mood
	 */
	public function getMood() {
		return $this->mood;
	}

	/**
	 * Sets the mood
	 *
	 * @param string $mood
	 * @return void
	 */
	public function setMood($mood) {
		$this->mood = $mood;
	}

	/**
	 * Returns the notAttending
	 *
	 * @return string $notAttending
	 */
	public function getNotAttending() {
		return $this->notAttending;
	}

	/**
	 * Sets the notAttending
	 *
	 * @param string $notAttending
	 * @return void
	 */
	public function setNotAttending($notAttending) {
		$this->notAttending = $notAttending;
	}

	/**
	 * Returns the odata
	 *
	 * @return string $odata
	 */
	public function getOdata() {
		return $this->odata;
	}

	/**
	 * Sets the odata
	 *
	 * @param string $odata
	 * @return void
	 */
	public function setOdata($odata) {
		$this->odata = $odata;
	}

	/**
	 * Returns the opengraph
	 *
	 * @return string $opengraph
	 */
	public function getOpengraph() {
		return $this->opengraph;
	}

	/**
	 * Sets the opengraph
	 *
	 * @param string $opengraph
	 * @return void
	 */
	public function setOpengraph($opengraph) {
		$this->opengraph = $opengraph;
	}

	/**
	 * Returns the rating
	 *
	 * @return string $rating
	 */
	public function getRating() {
		return $this->rating;
	}

	/**
	 * Sets the rating
	 *
	 * @param string $rating
	 * @return void
	 */
	public function setRating($rating) {
		$this->rating = $rating;
	}

	/**
	 * Returns the replies
	 *
	 * @return string $replies
	 */
	public function getReplies() {
		return $this->replies;
	}

	/**
	 * Sets the replies
	 *
	 * @param string $replies
	 * @return void
	 */
	public function setReplies($replies) {
		$this->replies = $replies;
	}

	/**
	 * Returns the reviews
	 *
	 * @return string $reviews
	 */
	public function getReviews() {
		return $this->reviews;
	}

	/**
	 * Sets the reviews
	 *
	 * @param string $reviews
	 * @return void
	 */
	public function setReviews($reviews) {
		$this->reviews = $reviews;
	}

	/**
	 * Returns the saves
	 *
	 * @return string $saves
	 */
	public function getSaves() {
		return $this->saves;
	}

	/**
	 * Sets the saves
	 *
	 * @param string $saves
	 * @return void
	 */
	public function setSaves($saves) {
		$this->saves = $saves;
	}

	/**
	 * Returns the schemaOrg
	 *
	 * @return string $schemaOrg
	 */
	public function getSchemaOrg() {
		return $this->schemaOrg;
	}

	/**
	 * Sets the schemaOrg
	 *
	 * @param string $schemaOrg
	 * @return void
	 */
	public function setSchemaOrg($schemaOrg) {
		$this->schemaOrg = $schemaOrg;
	}

	/**
	 * Returns the shares
	 *
	 * @return string $shares
	 */
	public function getShares() {
		return $this->shares;
	}

	/**
	 * Sets the shares
	 *
	 * @param string $shares
	 * @return void
	 */
	public function setShares($shares) {
		$this->shares = $shares;
	}

	/**
	 * Returns the source
	 *
	 * @return string $source
	 */
	public function getSource() {
		return $this->source;
	}

	/**
	 * Sets the source
	 *
	 * @param string $source
	 * @return void
	 */
	public function setSource($source) {
		$this->source = $source;
	}

	/**
	 * Returns the startTime
	 *
	 * @return \DateTime $startTime
	 */
	public function getStartTime() {
		return $this->startTime;
	}

	/**
	 * Sets the startTime
	 *
	 * @param \DateTime $startTime
	 * @return void
	 */
	public function setStartTime(\DateTime $startTime) {
		$this->startTime = $startTime;
	}

	/**
	 * Adds a ActivityStreamsObject
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $attachment
	 * @return void
	 */
	public function addAttachment(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $attachment) {
		$this->attachments->attach($attachment);
	}

	/**
	 * Removes a ActivityStreamsObject
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $attachmentToRemove The ActivityStreamsObject to be removed
	 * @return void
	 */
	public function removeAttachment(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $attachmentToRemove) {
		$this->attachments->detach($attachmentToRemove);
	}

	/**
	 * Returns the attachments
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject> $attachments
	 */
	public function getAttachments() {
		return $this->attachments;
	}

	/**
	 * Sets the attachments
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject> $attachments
	 * @return void
	 */
	public function setAttachments(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $attachments) {
		$this->attachments = $attachments;
	}

	/**
	 * Returns the author
	 *
	 * @return \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $author
	 */
	public function getAuthor() {
		return $this->author;
	}

	/**
	 * Sets the author
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $author
	 * @return void
	 */
	public function setAuthor(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $author) {
		$this->author = $author;
	}

	/**
	 * Returns the image
	 *
	 * @return \CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink $image
	 * @return void
	 */
	public function setImage(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink $image) {
		$this->image = $image;
	}

}