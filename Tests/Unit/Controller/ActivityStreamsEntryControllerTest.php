<?php
namespace CedricZiel\Socialcms\Tests\Unit\Controller;
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
 * Test case for class CedricZiel\Socialcms\Controller\ActivityStreamsEntryController.
 *
 * @author Cedric Ziel <cedric@cedric-ziel.com>
 */
class ActivityStreamsEntryControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {

	/**
	 * @var \CedricZiel\Socialcms\Controller\ActivityStreamsEntryController
	 */
	protected $subject = NULL;

	/**
	 * @test
	 */
	public function listActionFetchesAllActivityStreamsEntriesFromRepositoryAndAssignsThemToView() {

		$allActivityStreamsEntries = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array(), array(), '', FALSE);

		$activityStreamsEntryRepository = $this->getMock('CedricZiel\\Socialcms\\Domain\\Repository\\ActivityStreamsEntryRepository', array('findAll'), array(), '', FALSE);
		$activityStreamsEntryRepository->expects($this->once())->method('findAll')->will($this->returnValue($allActivityStreamsEntries));
		$this->inject($this->subject, 'activityStreamsEntryRepository', $activityStreamsEntryRepository);

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('activityStreamsEntries', $allActivityStreamsEntries);
		$this->inject($this->subject, 'view', $view);

		$this->subject->listAction();
	}

	/**
	 * @test
	 */
	public function showActionAssignsTheGivenActivityStreamsEntryToView() {

		$activityStreamsEntry = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$this->inject($this->subject, 'view', $view);
		$view->expects($this->once())->method('assign')->with('activityStreamsEntry', $activityStreamsEntry);

		$this->subject->showAction($activityStreamsEntry);
	}

	/**
	 * @test
	 */
	public function newActionAssignsTheGivenActivityStreamsEntryToView() {

		$activityStreamsEntry = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry();

		$view = $this->getMock('TYPO3\\CMS\\Extbase\\Mvc\\View\\ViewInterface');
		$view->expects($this->once())->method('assign')->with('newActivityStreamsEntry', $activityStreamsEntry);
		$this->inject($this->subject, 'view', $view);

		$this->subject->newAction($activityStreamsEntry);
	}

	/**
	 * @test
	 */
	public function createActionAddsTheGivenActivityStreamsEntryToActivityStreamsEntryRepository() {

		$activityStreamsEntry = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry();

		$activityStreamsEntryRepository = $this->getMock('CedricZiel\\Socialcms\\Domain\\Repository\\ActivityStreamsEntryRepository', array('add'), array(), '', FALSE);
		$activityStreamsEntryRepository->expects($this->once())->method('add')->with($activityStreamsEntry);
		$this->inject($this->subject, 'activityStreamsEntryRepository', $activityStreamsEntryRepository);

		$this->subject->createAction($activityStreamsEntry);
	}

	/**
	 * @test
	 */
	public function deleteActionRemovesTheGivenActivityStreamsEntryFromActivityStreamsEntryRepository() {

		$activityStreamsEntry = new \CedricZiel\Socialcms\Domain\Model\ActivityStreamsEntry();

		$activityStreamsEntryRepository = $this->getMock('CedricZiel\\Socialcms\\Domain\\Repository\\ActivityStreamsEntryRepository', array('remove'), array(), '', FALSE);
		$activityStreamsEntryRepository->expects($this->once())->method('remove')->with($activityStreamsEntry);
		$this->inject($this->subject, 'activityStreamsEntryRepository', $activityStreamsEntryRepository);

		$this->subject->deleteAction($activityStreamsEntry);
	}

	protected function setUp() {

		$this->subject = $this->getMock('CedricZiel\\Socialcms\\Controller\\ActivityStreamsEntryController', array('redirect', 'forward', 'addFlashMessage'), array(), '', FALSE);
	}

	protected function tearDown() {

		unset($this->subject);
	}
}
