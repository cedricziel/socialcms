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
 * ActivityStreamsItem
 */
class ActivityStreamsItem extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * id
	 *
	 * @var string
	 */
	protected $id = '';

	/**
	 * published
	 *
	 * @var \DateTime
	 */
	protected $published = NULL;

	/**
	 * updated
	 *
	 * @var \DateTime
	 */
	protected $updated = NULL;

	/**
	 * url
	 *
	 * @var string
	 */
	protected $url = '';

	/**
	 * objectType
	 *
	 * @var string
	 */
	protected $objectType = '';

	/**
	 * openSocial
	 *
	 * @var string
	 */
	protected $openSocial = '';

	/**
	 * extensions
	 *
	 * @var string
	 */
	protected $extensions = '';

	/**
	 * Returns the id
	 *
	 * @return string $id
	 */
	public function getId() {
		return $this->id;
	}

	/**
	 * Sets the id
	 *
	 * @param string $id
	 * @return void
	 */
	public function setId($id) {
		$this->id = $id;
	}

	/**
	 * Returns the published
	 *
	 * @return \DateTime $published
	 */
	public function getPublished() {
		return $this->published;
	}

	/**
	 * Sets the published
	 *
	 * @param \DateTime $published
	 * @return void
	 */
	public function setPublished(\DateTime $published) {
		$this->published = $published;
	}

	/**
	 * Returns the updated
	 *
	 * @return \DateTime $updated
	 */
	public function getUpdated() {
		return $this->updated;
	}

	/**
	 * Sets the updated
	 *
	 * @param \DateTime $updated
	 * @return void
	 */
	public function setUpdated(\DateTime $updated) {
		$this->updated = $updated;
	}

	/**
	 * Returns the url
	 *
	 * @return string $url
	 */
	public function getUrl() {
		return $this->url;
	}

	/**
	 * Sets the url
	 *
	 * @param string $url
	 * @return void
	 */
	public function setUrl($url) {
		$this->url = $url;
	}

	/**
	 * Returns the objectType
	 *
	 * @return string $objectType
	 */
	public function getObjectType() {
		return $this->objectType;
	}

	/**
	 * Sets the objectType
	 *
	 * @param string $objectType
	 * @return void
	 */
	public function setObjectType($objectType) {
		$this->objectType = $objectType;
	}

	/**
	 * Returns the openSocial
	 *
	 * @return string $openSocial
	 */
	public function getOpenSocial() {
		return $this->openSocial;
	}

	/**
	 * Sets the openSocial
	 *
	 * @param string $openSocial
	 * @return void
	 */
	public function setOpenSocial($openSocial) {
		$this->openSocial = $openSocial;
	}

	/**
	 * Returns the extensions
	 *
	 * @return string $extensions
	 */
	public function getExtensions() {
		return $this->extensions;
	}

	/**
	 * Sets the extensions
	 *
	 * @param string $extensions
	 * @return void
	 */
	public function setExtensions($extensions) {
		$this->extensions = $extensions;
	}

}