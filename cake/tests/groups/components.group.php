<?php
/* SVN FILE: $Id: components.group.php 8166 2009-05-04 21:17:19Z gwoo $ */
/**
 * ComponentsGroupTest file
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake
 * @subpackage    cake.tests.groups
 * @since         CakePHP(tm) v 1.2.0.4206
 * @version       $Revision: 8166 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-05-05 00:17:19 +0300 (ג', 05 מאי 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * ComponentsGroupTest class
 *
 * This test group will run all tests in the cases/libs/controller/components directory.
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class ComponentsGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'All core components'
 * @access public
 */
	var $label = 'All Components';
/**
 * CoreComponentsGroupTest method
 *
 * @access public
 * @return void
 */
	function ComponentsGroupTest() {
		TestManager::addTestCasesFromDirectory($this, CORE_TEST_CASES . DS . 'libs' . DS . 'controller' . DS . 'components');
	}
}
?>