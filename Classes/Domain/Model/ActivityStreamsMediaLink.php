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
 * ActivityStreamsMediaLink
 */
class ActivityStreamsMediaLink extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * id
	 *
	 * @var string
	 */
	protected $id = '';

	/**
	 * duration
	 *
	 * @var integer
	 */
	protected $duration = 0;

	/**
	 * height
	 *
	 * @var integer
	 */
	protected $height = 0;

	/**
	 * url
	 *
	 * @var string
	 */
	protected $url = '';

	/**
	 * width
	 *
	 * @var string
	 */
	protected $width = '';

	/**
	 * openSocial
	 *
	 * @var string
	 */
	protected $openSocial = '';

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
	 * Returns the duration
	 *
	 * @return integer $duration
	 */
	public function getDuration() {
		return $this->duration;
	}

	/**
	 * Sets the duration
	 *
	 * @param integer $duration
	 * @return void
	 */
	public function setDuration($duration) {
		$this->duration = $duration;
	}

	/**
	 * Returns the height
	 *
	 * @return integer $height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Sets the height
	 *
	 * @param integer $height
	 * @return void
	 */
	public function setHeight($height) {
		$this->height = $height;
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
	 * Returns the width
	 *
	 * @return string $width
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Sets the width
	 *
	 * @param string $width
	 * @return void
	 */
	public function setWidth($width) {
		$this->width = $width;
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

}