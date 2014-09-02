<?php
namespace CedricZiel\Socialcms\Controller;


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
 * ActivityStreamsEntryController
 */
class ActivityStreamsEntryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * activityStreamsEntryRepository
	 *
	 * @var \CedricZiel\Socialcms\Domain\Repository\ActivityStreamsEntryRepository
	 * @inject
	 */
	protected $activityStreamsEntryRepository = NULL;

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$activityStreamsEntries = $this->activityStreamsEntryRepository->findAll();
		$this->view->assign('activityStreamsEntries', $activityStreamsEntries);
	}

	/**
	 * action show
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry $activityStreamsEntry
	 * @return void
	 */
	public function showAction(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry $activityStreamsEntry) {
		$this->view->assign('activityStreamsEntry', $activityStreamsEntry);
	}

	/**
	 * action new
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry $newActivityStreamsEntry
	 * @ignorevalidation $newActivityStreamsEntry
	 * @return void
	 */
	public function newAction(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry $newActivityStreamsEntry = NULL) {
		$this->view->assign('newActivityStreamsEntry', $newActivityStreamsEntry);
	}

	/**
	 * action create
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry $newActivityStreamsEntry
	 * @return void
	 */
	public function createAction(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry $newActivityStreamsEntry) {
		$this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->activityStreamsEntryRepository->add($newActivityStreamsEntry);
		$this->redirect('list');
	}

	/**
	 * action delete
	 *
	 * @param \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry $activityStreamsEntry
	 * @return void
	 */
	public function deleteAction(\CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry $activityStreamsEntry) {
		$this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See <a href="http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain" target="_blank">Wiki</a>', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
		$this->activityStreamsEntryRepository->remove($activityStreamsEntry);
		$this->redirect('list');
	}

	/**
	 * action like
	 *
	 * @return void
	 */
	public function likeAction() {
		
	}

	/**
	 * action comment
	 *
	 * @return void
	 */
	public function commentAction() {
		
	}

	/**
	 * action hide
	 *
	 * @return void
	 */
	public function hideAction() {
		
	}

}