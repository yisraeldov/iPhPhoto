<?php
/* SVN FILE: $Id: acl.group.php 8120 2009-03-19 20:25:10Z gwoo $ */
/**
 * AclAndAuthGroupTest file
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
 * @version       $Revision: 8120 $
 * @modifiedby    $LastChangedBy: gwoo $
 * @lastmodified  $Date: 2009-03-19 22:25:10 +0200 (ה', 19 מרץ 2009) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * AclAndAuthGroupTest class
 *
 * This test group will run the Acl and Auth tests
 *
 * @package       cake
 * @subpackage    cake.tests.groups
 */
class AclAndAuthGroupTest extends GroupTest {
/**
 * label property
 *
 * @var string 'Acl and Auth Tests'
 * @access public
 */
	var $label = 'Acl and Auth';
/**
 * AclAndAuthGroupTest method
 *
 * @access public
 * @return void
 */
	function AclAndAuthGroupTest() {
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'model' . DS . 'db_acl');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'controller' . DS . 'components' . DS . 'acl');
		TestManager::addTestFile($this, CORE_TEST_CASES . DS . 'libs' . DS . 'controller' . DS . 'components' . DS . 'auth');
	}
}
?>