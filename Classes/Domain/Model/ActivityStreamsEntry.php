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
 * ActivityStreamsEntry
 */
class ActivityStreamsEntry extends \CedricZiel\Socialcms\Domain\Model\ActivityStreamsItem {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * verb
	 *
	 * @var string
	 */
	protected $verb = '';

	/**
	 * userId
	 *
	 * @var string
	 */
	protected $userId = '';

	/**
	 * groupId
	 *
	 * @var string
	 */
	protected $groupId = '';

	/**
	 * appId
	 *
	 * @var string
	 */
	protected $appId = '';

	/**
	 * bcc
	 *
	 * @var string
	 */
	protected $bcc = '';

	/**
	 * bto
	 *
	 * @var string
	 */
	protected $bto = '';

	/**
	 * cc
	 *
	 * @var string
	 */
	protected $cc = '';

	/**
	 * context
	 *
	 * @var string
	 */
	protected $context = '';

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
	 * geojson
	 *
	 * @var string
	 */
	protected $geojson = '';

	/**
	 * inReplyTo
	 *
	 * @var string
	 */
	protected $inReplyTo = '';

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
	 * mood
	 *
	 * @var string
	 */
	protected $mood = '';

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
	 * priority
	 *
	 * @var string
	 */
	protected $priority = '';

	/**
	 * rating
	 *
	 * @var string
	 */
	protected $rating = '';

	/**
	 * result
	 *
	 * @var string
	 */
	protected $result = '';

	/**
	 * schemaOrg
	 *
	 * @var string
	 */
	protected $schemaOrg = '';

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
	 * tags
	 *
	 * @var string
	 */
	protected $tags = '';

	/**
	 * toObject
	 *
	 * @var string
	 */
	protected $toObject = '';

	/**
	 * actor
	 *
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject
	 */
	protected $actor = NULL;

	/**
	 * generator
	 *
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject
	 */
	protected $generator = NULL;

	/**
	 * icon
	 *
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink
	 */
	protected $icon = NULL;

	/**
	 * object
	 *
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject
	 */
	protected $object = NULL;

	/**
	 * provider
	 *
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject
	 */
	protected $provider = NULL;

	/**
	 * target
	 *
	 * @var \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject
	 */
	protected $target = NULL;

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
	}

	/**
	 * Returns the verb
	 *
	 * @return string $verb
	 */
	public function getVerb() {
		return $this->verb;
	}

	/**
	 * Sets the verb
	 *
	 * @param string $verb
	 * @return void
	 */
	public function setVerb($verb) {
		$this->verb = $verb;
	}

	/**
	 * Returns the userId
	 *
	 * @return string $userId
	 */
	public function getUserId() {
		return $this->userId;
	}

	/**
	 * Sets the userId
	 *
	 * @param string $userId
	 * @return void
	 */
	public function setUserId($userId) {
		$this->userId = $userId;
	}

	/**
	 * Returns the groupId
	 *
	 * @return string $groupId
	 */
	public function getGroupId() {
		return $this->groupId;
	}

	/**
	 * Sets the groupId
	 *
	 * @param string $groupId
	 * @return void
	 */
	public function setGroupId($groupId) {
		$this->groupId = $groupId;
	}

	/**
	 * Returns the appId
	 *
	 * @return string $appId
	 */
	public function getAppId() {
		return $this->appId;
	}

	/**
	 * Sets the appId
	 *
	 * @param string $appId
	 * @return void
	 */
	public function setAppId($appId) {
		$this->appId = $appId;
	}

	/**
	 * Returns the bcc
	 *
	 * @return string $bcc
	 */
	public function getBcc() {
		return $this->bcc;
	}

	/**
	 * Sets the bcc
	 *
	 * @param string $bcc
	 * @return void
	 */
	public function setBcc($bcc) {
		$this->bcc = $bcc;
	}

	/**
	 * Returns the bto
	 *
	 * @return string $bto
	 */
	public function getBto() {
		return $this->bto;
	}

	/**
	 * Sets the bto
	 *
	 * @param string $bto
	 * @return void
	 */
	public function setBto($bto) {
		$this->bto = $bto;
	}

	/**
	 * Returns the cc
	 *
	 * @return string $cc
	 */
	public function getCc() {
		return $this->cc;
	}

	/**
	 * Sets the cc
	 *
	 * @param string $cc
	 * @return void
	 */
	public function setCc($cc) {
		$this->cc = $cc;
	}

	/**
	 * Returns the context
	 *
	 * @return string $context
	 */
	public function getContext() {
		return $this->context;
	}

	/**
	 * Sets the context
	 *
	 * @param string $context
	 * @return void
	 */
	public function setContext($context) {
		$this->context = $context;
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
	 * Returns the inReplyTo
	 *
	 * @return string $inReplyTo
	 */
	public function getInReplyTo() {
		return $this->inReplyTo;
	}

	/**
	 * Sets the inReplyTo
	 *
	 * @param string $inReplyTo
	 * @return void
	 */
	public function setInReplyTo($inReplyTo) {
		$this->inReplyTo = $inReplyTo;
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
	 * Returns the priority
	 *
	 * @return string $priority
	 */
	public function getPriority() {
		return $this->priority;
	}

	/**
	 * Sets the priority
	 *
	 * @param string $priority
	 * @return void
	 */
	public function setPriority($priority) {
		$this->priority = $priority;
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
	 * Returns the result
	 *
	 * @return string $result
	 */
	public function getResult() {
		return $this->result;
	}

	/**
	 * Sets the result
	 *
	 * @param string $result
	 * @return void
	 */
	public function setResult($result) {
		$this->result = $result;
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
	 * Returns the tags
	 *
	 * @return string $tags
	 */
	public function getTags() {
		return $this->tags;
	}

	/**
	 * Sets the tags
	 *
	 * @param string $tags
	 * @return void
	 */
	public function setTags($tags) {
		$this->tags = $tags;
	}

	/**
	 * Returns the toObject
	 *
	 * @return string $toObject
	 */
	public function getToObject() {
		return $this->toObject;
	}

	/**
	 * Sets the toObject
	 *
	 * @param string $toObject
	 * @return void
	 */
	public function setToObject($toObject) {
		$this->toObject = $toObject;
	}

	/**
	 * Returns the actor
	 *
	 * @return \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $actor
	 */
	public function getActor() {
		return $this->actor;
	}

	/**
	 * Sets the actor
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $actor
	 * @return void
	 */
	public function setActor(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $actor) {
		$this->actor = $actor;
	}

	/**
	 * Returns the generator
	 *
	 * @return \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $generator
	 */
	public function getGenerator() {
		return $this->generator;
	}

	/**
	 * Sets the generator
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $generator
	 * @return void
	 */
	public function setGenerator(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $generator) {
		$this->generator = $generator;
	}

	/**
	 * Returns the icon
	 *
	 * @return \CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink $icon
	 */
	public function getIcon() {
		return $this->icon;
	}

	/**
	 * Sets the icon
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink $icon
	 * @return void
	 */
	public function setIcon(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsMediaLink $icon) {
		$this->icon = $icon;
	}

	/**
	 * Returns the object
	 *
	 * @return \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $object
	 */
	public function getObject() {
		return $this->object;
	}

	/**
	 * Sets the object
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $object
	 * @return void
	 */
	public function setObject(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $object) {
		$this->object = $object;
	}

	/**
	 * Returns the provider
	 *
	 * @return \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $provider
	 */
	public function getProvider() {
		return $this->provider;
	}

	/**
	 * Sets the provider
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $provider
	 * @return void
	 */
	public function setProvider(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $provider) {
		$this->provider = $provider;
	}

	/**
	 * Returns the target
	 *
	 * @return \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $target
	 */
	public function getTarget() {
		return $this->target;
	}

	/**
	 * Sets the target
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $target
	 * @return void
	 */
	public function setTarget(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsObject $target) {
		$this->target = $target;
	}

}